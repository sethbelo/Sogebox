/*
 * @Author: Boyce Gao
 * @Date: 2018-11-05 14:15:17
 * @Last Modified by: Boyce Gao
 * @Last Modified time: 2019-01-11
 */
//# sourceURL=filters_standalone.js
(function ($) {
  var CURSOR_MAX_TRACKED_COUNT = 3,  // maximum count of previous mouse locations to track
    DELAY_TIME_IN_MS = 300;  // ms delay when user appears to be entering submenu

  $.fn.open = function () {
    $(this).addClass('open');
    return this;
  };

  $.fn.close = function () {
    $(this).removeClass('open');
    return this;
  };

  $.fn.active = function () {
    $(this).addClass('active');
    return this;
  };

  $.fn.inactive = function () {
    $(this).removeClass('active');
    return this;
  };

  $.fn.popupMenuArch = function (opts) {
    // Initialize popup-menu-arch for all elements in jQuery collection
    this.each(function () {
      init_arch.call(this, opts);
    });
    return this;
  };

  function init_arch(opts) {
    var $dropdown_menu = $(this),
      current_focus = null,
      mouse_locs = [],
      last_delay_loc = null,
      timeout_id = null,
      arch_options = $.extend({
        listitem_selector: "> li",
        submenu_selector: "*",
        submenu_direction: "right",
        // default 75, larger = more forgiveness(less possible to trigger switch) when entering submenu
        tolerance: 75,
        // empty function by default
        enter: $.noop,
        exit: $.noop,
        focus: $.noop,
        blur: $.noop,
        exit_menu: $.noop
      }, opts);

    function mousemove_monitor(e) {
      mouse_locs.push({x: e.pageX, y: e.pageY});
      if (mouse_locs.length > CURSOR_MAX_TRACKED_COUNT) {
        mouse_locs.shift();
      }
    }

    /**
     * @define: Decider: shall we focus a submenu?
     * @description:
     * If `mouse movement detect algorithm` indicates that ww should not focus yet
     * (because user may be trying to enter submenu's content(along a curve line)),
     * then delay and check again later(by one-time timer: setTimeout).
     */
    function decide_focus(e) {
      var that = this,
        delay = focus_delay.apply(that, [e]);

      if (delay) {
        timeout_id = setTimeout(function () {
          decide_focus.apply(that, [e]);
        }, delay);
      } else {
        focus.apply(that, [e]);
      }
    }

    function focus(e) {
      var listitem = this;
      if (listitem === current_focus && $(listitem).is('.open')) {
        return;
      }
      if (current_focus) {
        arch_options.blur.apply(current_focus, [e]);
      }

      arch_options.focus.apply(listitem, [e]);
      current_focus = listitem;
    }

    /**
     * clear possible listitem focuses when leaving the menu entirely
     */
    function mouseleave_menu(e) {
      if (timeout_id) {
        clearTimeout(timeout_id);
      }

      // If exitMenu is supplied and returns true, blur the
      // currently focus listitem on menu exit.
      if (arch_options.exit_menu(this)) {
        if (current_focus) {
          arch_options.blur(current_focus);
        }
        current_focus = null;
      }
      e.stopPropagation();
    }

    function click_listitem(e) {
      // If user manual click, then trigger focus immediately
      // console.log('# user click explicitly');
      focus.apply(this, [e]);
      e.stopPropagation();
    }

    function mouseenter_listitem(e) {
      if (timeout_id) { // Cancel any previous focus delays
        clearTimeout(timeout_id);
      }
      arch_options.enter(this);
      decide_focus.apply(this, [e]);
    }

    function mouseleave_listitem(e) {
      arch_options.exit.apply(this, [e]);
    }

    function slope_rate(a, b) {
      return Math.abs((b.y - a.y) / (b.x - a.x));
    }

    /**
     * @desc
     * Return the amount of time that should be used as a delay before the
     * currently hovered listitem is focused.
     *
     * @return {int}
     * - 0:
     * Returns 0 if the focus should happen immediately.
     * - >0:
     *  Otherwise, returns the number of milliseconds that should be delayed before
     * checking again to see if the listitem should be focused.
     */
    var focus_delay = function (e) {
      // If there is no other submenu listitem already focus, then exit and focus immediately.
      if (!current_focus || !$(current_focus).is(arch_options.submenu_selector)) {
        return 0;
      }
      var submenu, currentTarget = $(e.currentTarget), popover;
      if (currentTarget.is('.open')) {
        submenu = currentTarget;
      } else {
        submenu = currentTarget.siblings('.open');
      }
      // If this is the first mouse-click event that user click `filter` button,
      // the `opened` submenu must equal zero, then go ahead and switch submenu promptly
      if (submenu.length === 0) {
        return 0;
      }
      // try to find the 'popover' layer in direct children nodes
      popover = submenu.children('.popover');
      // if failed, seek the next alternate
      if (popover.length === 0) {
        popover = submenu.children('.dropdown-menu');
      }
      var menu_offset = submenu.offset(),
        pop_offset = popover.offset(),
        upper_left = {
          x: menu_offset.left,
          y: Math.min(menu_offset.top, pop_offset.top) - arch_options.tolerance
        },
        upper_right = {
          x: menu_offset.left + submenu.outerWidth(),
          y: upper_left.y
        },
        lower_left = {
          x: menu_offset.left,
          y: Math.max(menu_offset.top + submenu.outerHeight(), pop_offset.top + popover.outerHeight()) + arch_options.tolerance
        },
        lower_right = {
          x: menu_offset.left + submenu.outerWidth(),
          y: lower_left.y
        },
        loc = mouse_locs[mouse_locs.length - 1],
        prev_loc = mouse_locs[0];

      if (!loc) {
        return 0;
      }

      if (!prev_loc) {
        prev_loc = loc;
      }

      if (prev_loc.x < menu_offset.left || prev_loc.x > lower_right.x ||
        prev_loc.y < menu_offset.top || prev_loc.y > lower_right.y) {
        // If the previous mouse location was outside of the entire
        // menu's bounds, immediately focus.
        return 0;
      }

      if (last_delay_loc && loc.x === last_delay_loc.x && loc.y === last_delay_loc.y) {
        // If the mouse hasn't moved since the last time we checked for focus status, immediately focus.
        return 0;
      }

      // default direction is `right`
      var decreasingCorner = upper_right,
        increasingCorner = lower_right;

      if (arch_options.submenu_direction === "left") {
        decreasingCorner = lower_left;
        increasingCorner = upper_left;
      } else if (arch_options.submenu_direction === "below") {
        decreasingCorner = lower_right;
        increasingCorner = lower_left;
      } else if (arch_options.submenu_direction === "above") {
        decreasingCorner = upper_left;
        increasingCorner = upper_right;
      }

      var decreasingSlope = slope_rate(loc, decreasingCorner),
        increasingSlope = slope_rate(loc, increasingCorner),
        prevDecreasingSlope = slope_rate(prev_loc, decreasingCorner),
        prevIncreasingSlope = slope_rate(prev_loc, increasingCorner);

      if (decreasingSlope > prevDecreasingSlope && increasingSlope > prevIncreasingSlope) {
        // Mouse is moving from previous location towards the currently focused submenu.
        // Delay before focusing a new menu listitem, because user may be moving into submenu.
        last_delay_loc = loc;
        return DELAY_TIME_IN_MS;
      }

      last_delay_loc = null;
      return 0;
    };

    /**
     * Monitor bootstrap dropdown menu related events
     * - mouseenter: required
     * - mouseleave: required
     * - click: optional
     */
    $dropdown_menu
      .mouseleave(mouseleave_menu)
      .find(arch_options.listitem_selector)
      .click(click_listitem)
      .mouseenter(mouseenter_listitem)
      .mouseleave(mouseleave_listitem);

    /**
     * Collect last `CURSOR_MAX_TRACKED_COUNT` mouse locations
     */
    $(document).mousemove(mousemove_monitor);
  }

  function FilterError(message) {
    this.name = "FilterError";
    this.message = message;
  }

  function FilterUpdate(message) {
    this.name = "FilterOverride";
    this.message = message;
  }


  FilterUpdate.prototype = new Error();
  FilterError.prototype = new Error();

  /**
   * entrance
   * @param options
   */
  $.fn.adminFilters = function (options) {
    var opts = $.extend({}, $.fn.adminFilters.defaults, options);
    // let the conditions of each tab isolated respectively
    opts.filter_map = {};
    opts.filters = {};
    var $filter_group_str = '#' + opts.model + '_filters_group.filters-group',
      $navbar_str = '#' + opts.model + '_navbar',
      $filter_menu_str = '#' + opts.model + '_filter_menu',
      $bookmark_menu_str = '#' + opts.model + '_bookmark_menu',
      $btn_bk_submit = '#' + opts.model + '_bk_submit';

    function gridReload() {
      do_filter(opts, opts.filters);
      let base64filters = b64EncodeUnicode(JSON.stringify(opts.filters));
      $('ul#' + opts.model + '_bookmark_menu form.bookmark_form input[name=filters]').val(base64filters);
    }

    var $popup_menu = $($filter_menu_str);

    // jQuery-menu-arch: <meaningful part of the example>
    // Hook up events to be fired on menu list-item focus
    $popup_menu.popupMenuArch({
      focus: focusSubmenu,
      // blur: blurSubmenu,
      exit: exitSubmenu,
      listitem_selector: "li.dropdown-submenu"
    });

    function exitSubmenu(e) {
      var target = $(e.target),
        currentTarget = $(e.currentTarget);

      if (!target.is('input') && (currentTarget.is('.menu-choice-date.open') || currentTarget.is('.menu-date-range.open'))) {
        currentTarget.removeClass('open');
      }
    }

    function focusSubmenu(e) {
      var that = $(this),
        submenu = $(e.target).closest('.dropdown-submenu');

      if (!(submenu.is('.menu-choice-date') || submenu.is('.menu-date-range'))) {
        that.parent().find('li.dropdown-submenu.open').removeClass('open');
      } else {
        submenu.siblings('li.dropdown-submenu.open').removeClass('open');
      }
      that.addClass('open');
      e.stopPropagation();
    }

    // simple event handler for New Bookmark
    if ('ontouchstart' in document.documentElement) {
      $('.dropdown-submenu a', $bookmark_menu_str).on('click.xa.dropdown.data-api', function (/*e*/) {
        $(this).parent().toggleClass('open');
      });
    } else {
      var $sub_menu = $('.dropdown-submenu', $bookmark_menu_str);
      $sub_menu.on('click.dropdown mouseover.dropdown', function (e) {
        $(this).parent().find('li.dropdown-submenu.open').removeClass('open');
        $(this).addClass('open');
        e.stopPropagation();
      });
    }

    //toggle class button
    $('body').on('click.xa.togglebtn.data-api', '[data-toggle=class]', function (e) {
      var $this = $(this), href;
      var target = $this.attr('data-target')
        || e.preventDefault()
        || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, ''); //strip for ie7
      var className = $this.attr('data-class-name');
      $(target).toggleClass(className);
    });


    //.nav-content bar nav-menu
    $('.navbar-xs .navbar-nav > li')
      .on('shown.bs.dropdown', function (/*e*/) {
        $(this).find('>.dropdown-menu').css('max-height', $(window).height() - 120);
        $(this).parent().find('>li').addClass('hidden-xs');
        $(this).removeClass('hidden-xs');
      })
      .on('hidden.bs.dropdown', function (/*e*/) {
        $(this).parent().find('>li').removeClass('hidden-xs');
      });

    // filter-option
    $('li.filter-option', $navbar_str).on('click.filter', function () {
      $($filter_menu_str).parent().close();
      var parentLI = $(this);
      var parentUL = $(this).parent();
      var field = parentUL.data('field'), query_field = $(this).data('field'),
        query_val = $(this).data('val');
      var filter = {};
      filter[query_field] = query_val;
      var ioe = update_include_or_exclude($($filter_menu_str).find('li.' + field));
      opts.filters[field] = {
        'filter': filter, 'ioe': ioe
      };
      parentUL.find('li').inactive();
      parentLI.active();
      $('li.clear-filter', parentUL).removeClass('layui-hide');
      maintain_filter_status(opts);
      gridReload();
    });

    $('li.clear-filter a', $navbar_str).on('click.filter', function () {
      $($filter_menu_str).parent().close();
      var parentUL = $(this).parentsUntil('.dropdown-menu', 'li').parent();
      var field = parentUL.data('field');
      parentUL.find('li').inactive();
      $('li.clear-filter', parentUL).addClass('layui-hide');
      delete opts.filters[field];
      update_include_or_exclude($($filter_menu_str).find('li.' + field), 0);
      // parentUL.parentsUntil('.dropdown-menu', 'li.dropdown-submenu').find('input.multi-switch-input').val(0);
      maintain_filter_status(opts);
      gridReload();
    });

    function reset_filters() {
      opts.filters = {};
      $.each($('form', $navbar_str), function (index, f) {
        f.reset();
      });
      $('.active:not(span.active)', $navbar_str).inactive();
      $('li.dropdown-submenu input.multi-switch-input', $navbar_str).val(0);
      maintain_filter_status(opts);
    }

    $('li.sub-menu-clear-filter a', $navbar_str).on('click.filter', function () {
      reset_filters();
      gridReload();
    });

    //加载书签
    $('li.dropdown.bookmarks ul#' + opts.model + '_bookmark_menu', $navbar_str).on('click', 'a.filter-bk-link', function (event) {
      var target = $(event.target);
      var b64data = b64DecodeUnicode(target.data('filters'));
      var filters = JSON.parse(b64data);
      reset_filters();
      restore_filters4bookmark(filters);
      opts.filters = filters;
      maintain_filter_status(opts);
      gridReload();
    });

    /**
     * handler for form submit
     * @param e: event
     * @returns {boolean}
     */
    function form_submit_handler(e) {
      var dateParent = $(e.target).parentsUntil('ul.dropdown-menu', 'li.menu-choice-date,li.menu-date-range');
      if (dateParent.length > 0) {
        $(dateParent).parent().find('li').removeClass('active');
        $(dateParent).addClass('active');
      }
      var $form = $(e.target);
      var field = $form.data('field'), formData = null, filter = {}, i, ioe;
      var parent_submenu = $(this).parents(".dropdown-submenu").last();
      if (parent_submenu.hasClass('filter-date')) {
        formData = $form.serializeArray();
        for (i = 0; i < formData.length; i++) {
          filter[formData[i].name] = formData[i].value;
        }
        ioe = update_include_or_exclude($($filter_menu_str).find('li.' + field));
        opts.filters[field] = {
          filter: filter, ioe: ioe
        };
        // prepare_basic_filter_data($(this), {})();
        $(this).parentsUntil("ul.dropdown-menu", 'li.dropdown-submenu').parent().find('li.clear-filter').removeClass('layui-hide');
      } else if (parent_submenu.hasClass('filter-time')) {
        formData = $form.serializeArray();
        // opts.filters[field] = {};
        for (i = 0; i < formData.length; i++) {
          filter[formData[i].name] = formData[i].value;
        }
        ioe = update_include_or_exclude($($filter_menu_str).find('li.' + field));
        opts.filters[field] = {
          filter: filter, ioe: ioe
        };
        // prepare_basic_filter_data($(this), {})();
        $(this).parentsUntil("ul.dropdown-menu", 'li.dropdown-submenu').parent().find('li.clear-filter').removeClass('layui-hide');
      } else if (parent_submenu.hasClass('filter-number')) {
        var active_number_input = $form.find('input[type="number"][class~=active]');
        if (active_number_input.length === 0) {
          error_prompt(gettext('Please input number first, then click submit button.'), '400px');
          return false;
        } else if (active_number_input.length > 1) {
          error_prompt(gettext('One number filter one time.'), 'auto');
          return false;
        }
        var filterField = active_number_input.attr('name');
        var filterVal = active_number_input.val();
        opts.filters[field] = {};
        if (filterVal.length > 0) {
          filter[filterField] = filterVal;
          ioe = update_include_or_exclude($($filter_menu_str).find('li.' + field));
          opts.filters[field] = {
            filter: filter, ioe: ioe
          };
          // prepare_basic_filter_data(active_number_input, {})();
        } else {
          delete opts.filters[field];
          active_number_input.removeClass('active');
          $form.find('input[type=radio]').prop('checked', false);
          $form.find('input[type=radio]').data('checked', false);
          $form.parentsUntil('ul.dropdown-menu', 'li.dropdown-submenu').find('input.multi-switch-input').val(0);
        }
      } else {
        $form.find('input[type="text"],input[type="number"]').each(function (/*e*/) {
          var elem = $(this),
            name = elem.prop('name'),
            prefix = name.replace(/_[^_]*$/, '');
          var select_filter_type = $form.find('select[name=' + prefix + '_type] option:selected');
          if (select_filter_type) {
            opts.filters[field] = {};
            var params = select_filter_type.val();
            if (elem.val()) {
              filter[params] = elem.val();
              ioe = update_include_or_exclude($($filter_menu_str).find('li.' + field));
              opts.filters[field] = {
                filter: filter, ioe: ioe
              };
            } else {
              delete opts.filters[field];
              $form.parentsUntil('ul.dropdown-menu', 'li.dropdown-submenu').find('input.multi-switch-input').val(0);
            }
          } else {
            error_prompt('Illegal Filter Type');
          }
        });
      }
      maintain_filter_status(opts);
      e.stopPropagation();
      $($filter_menu_str).parent().close();
      gridReload();
      return false;
    }

    $('form', $filter_menu_str).submit(form_submit_handler);
    /**
     * handler for date range selector
     */
    $('.menu-date-range form', $filter_menu_str).each(function () {
      var el = $(this),
        start_date = el.find('.calendar.date-start').datepicker({format: 'yyyy-mm-dd', language: 'xadmin'}),
        end_date = el.find('.calendar.date-end').datepicker({format: 'yyyy-mm-dd', language: 'xadmin'}),
        dates = {'start': start_date, 'end': end_date};

      // ensure start_date <- end_date
      var checkAvailable = function () {
        if (start_date.data('datepicker').getDate().valueOf() <= end_date.data('datepicker').getDate().valueOf()) {
          el.find('button[type=submit]').removeAttr('disabled');
        } else {
          el.find('button[type=submit]').attr('disabled', 'disabled');
        }
      };

      var dual_direction_date = function (dates, $target_str) {
        var is_reverse = false;
        if ($target_str.indexOf('end') !== -1) {
          is_reverse = true;
        }

        var select_date = null;
        if (!is_reverse) {
          select_date = dates.start.data('date');
        } else {
          select_date = dates.end.data('date');
        }
        el.find($target_str).val(select_date);
        if (!is_reverse) {
          dates.end.data('datepicker').setStartDate(select_date);
        } else {
          dates.start.data('datepicker').setEndDate(select_date);
        }
        checkAvailable();
      };
      start_date.on('changeDate', function (/*ev*/) {
        dual_direction_date(dates, '.start_input');
      });
      end_date.on('changeDate', function (/*ev*/) {
        dual_direction_date(dates, '.end_input');
      });
    });

    /*
     * handle those multi-state switch
     */
    $(opts.$input_multi_switch, $filter_menu_str).multiSwitch({
      textChecked: 'Filter',
      textNotChecked: 'Exclude',
      functionOnChange: function ($elem) {
        var $switch = $elem.closest('div.multi-switch'),
          $target = $switch.next('i');
        switch ($elem.val()) {
          case '0':
            $target.removeClass('fa-eraser filter-active filter-deactivated').addClass('fa-filter');
            $switch.children('.switch-content').removeClass('active deactivated').addClass('initial');
            $elem.parentsUntil('ul.dropdown-menu', 'li.dropdown-submenu').find('li.clear-filter').addClass('layui-hide')
            break;
          case '1':
            $target.removeClass('fa-eraser filter-deactivated').addClass('fa-filter filter-active');
            $switch.children('.switch-content').removeClass('deactivated initial').addClass('active');
            break;
          case '2':
            $target.removeClass('fa-filter filter-active').addClass('fa-eraser filter-deactivated');
            $switch.children('.switch-content').removeClass('active initial').addClass('deactivated');
            break;
          default:
            break;
        }
      }
    });

    // handler for clock picker
    if ($.fn.clockpicker) {
      var f = $('form.time-span');
      f && f.find('.input-group.bootstrap-clockpicker').each(function (/*e*/) {
        var elem = $(this).find('input');
        // noinspection SpellCheckingInspection
        elem.clockpicker({
          'autoclose': true,
          'default': 'now',
          'placement': 'right',
          'align': 'left',
          'donetext': 'Done'
        });

        $(this).find('button').click(function (/*e*/) {
          var now = new Date()
            , value = now.getHours() + ':' + now.getMinutes();
          elem.attr('value', value);
        });
        $(this).find('button').trigger('click');
      });
    }

    // filter
    // $('.filter-multiselect input[type=checkbox]').on('click.filter', function (/*e*/) {
    //   console.log('clicked', $(this));
    // });

    // number filter
    $('.filter-number .remove', $filter_menu_str).on('click', function (/*e*/) {
      $(this).parent().parent().find('input[type=number]').val('');
    });

    $('.filter-char .remove', $filter_menu_str).on('click', function (/*e*/) {
      $(this).parent().parent().find('input.zk-type-helper-input').val('');
    });

    $('.dropdown-submenu.filter-number input[type=number]', $filter_menu_str).on('focus', function () {
      var that = $(this),
        radio_input = '.input-group-addon>input[type=radio]',
        number_input = 'input[type=number]',
        input_field = that.closest('.input-group').find(radio_input),
        all_peer_field = that.closest('form').find(number_input);
      input_field.prop('checked', true);
      all_peer_field.removeClass('active');
      that.addClass('active');
    }).on('keydown', function (e) {
      e = e || window.event;
      var that = $(this),
        key_code = e['keyCode'],
        shift_key = e['shiftKey'],
        alt_key = e['altKey'],
        ctrl_key = e['ctrlKey'],
        val = that.val(),
        new_val = val,
        unit = 0;

      if (val.length > 0) {
        var n = null;
        if (val.indexOf('.') !== -1) {
          n = parseFloat(val);
        } else {
          n = parseInt(val);
        }
        if (key_code === 38 || key_code === 40) { // up or down
          // noinspection IfStatementWithTooManyBranchesJS

          switch (true) {
            case ctrl_key:
              unit = 100;
              break;
            case alt_key:
              unit = 10;
              break;
            case shift_key:
              unit = 0.1;
              break;
            default:
              unit = 1;
              break;
          }
        }
        if (key_code === 40) { // down
          unit = -unit;
        } // down
        new_val = String(n + unit);
        if (val !== new_val) {
          that.val(new_val);
        }
      }
      return true;
    });


    $('.filter-number .toggle', $filter_menu_str).on('click', function (/*e*/) {
      var that = $(this),
        new_name = $(this).attr('data-on-name');
      if (that.hasClass('active')) {
        new_name = that.attr('data-off-name');
      }

      that.parent().parent().find('input[type="number"]').attr('name', new_name);
      that.toggleClass('active');
    });

    function restore_filters4bookmark(filters) {
      //Restore from selected bookmark
      $.each(Object.keys(filters), function (index, field) {
        var filter = filters[field];
        var opt = $('li.' + field, $filter_menu_str);
        var form, optUL, optLI, inputGroup, groupInput, v;
        include_or_exclude_trigger(opt, filter.ioe);
        if (opt.hasClass('filter-choice')) {
          optUL = opt.find(String.format('ul[data-field={0}]', field));
          $.each(Object.keys(filter.filter), function (index, q) {
            var v = filter.filter[q];
            optUL.find(String.format('li[data-field={0}][data-val={1}]', q, v)).active();
          });
        } else if (opt.hasClass('filter-char')) {
          form = opt.find(String.format('form[data-field={0}]', field));
          $.each(Object.keys(filter.filter), function (index, q) {
            v = filter.filter[q];
            form.find('select').val(q);
            form.find('input.zk-type-helper-input').val(v);
          });
        } else if (opt.hasClass('filter-number')) {
          form = opt.find(String.format('form[data-field={0}]', field));
          $.each(Object.keys(filter.filter), function (index, q) {
            v = filter.filter[q];
            if (q.endsWith('__lt') || q.endsWith('__lte')) {
              inputGroup = form.find('div.lt');
            } else if (q.endsWith('__gt') || q.endsWith('__gte')) {
              inputGroup = form.find('div.gt');
            } else {
              inputGroup = form.find('div.eq');
            }
            inputGroup.find('input[type=radio]').prop('checked', true);
            if (q.endsWith('__lte') || q.endsWith('__gte')) {
              inputGroup.find('a.toggle').active();
            }
            groupInput = inputGroup.find('input.form-control');
            groupInput.attr('name', q);
            groupInput.val(v);
            groupInput.active();
          });
        } else if (opt.hasClass('filter-date')) {
          optUL = opt.find(String.format('ul[data-field={0}]', field));
          $.each(Object.keys(filter.filter), function (index, q) {
            v = filter.filter[q];
            if (q.endsWith('__year') || q.endsWith('__month') || q.endsWith('__day')) {
              optLI = optUL.find('li.menu-choice-date');
              form = optLI.find(String.format('form[data-field={0}]', field));
              form.find(String.format('input[name={0}]', q)).val(v);
            } else if (q.endsWith('__gte') || q.endsWith('__lt')) {
              optLI = optUL.find('li.menu-date-range');
              form = optLI.find(String.format('form[data-field={0}]', field));
              form.find(String.format('input[name={0}]', q)).val(v);
            } else {
              optLI = optUL.find(String.format('li[data-field={0}][data-val={1}]', q, v))
            }
            optLI.active();
          });
        } else if (opt.hasClass('filter-time')) {
          optUL = opt.find(String.format('ul[data-field={0}]', field));
          $.each(Object.keys(filter.filter), function (index, q) {
            v = filter.filter[q];
            if (q.endsWith('__gte') || q.endsWith('__lt')) {
              optLI = optUL.find('li.menu-time-range');
              form = optLI.find(String.format('form[data-field={0}]', field));
              form.find(String.format('input[name={0}]', q)).val(v);
            } else {
              optLI = optUL.find(String.format('li[data-field={0}][data-val={1}]', q, v))
            }
            optLI.active();
          });
        }
        if (optUL && Object.keys(filter.filter).length > 0) {
          optUL.find('li.clear-filter').removeClass('layui-hide');
        }
      });
    }

    var addBookmarkSubmitEvent = function () {
      $($btn_bk_submit, $bookmark_menu_str).on('click.bookmark', function () {
        var that = $(this), form = that.closest('form'), url = that.data('action');
        var form_data = formObjectify(form);
        var filters = JSON.parse(b64DecodeUnicode(form_data.filters));
        if (form_data.title.length === 0) {
          layer.msg("Bookmark name is required.", {icon: 5});
          return
        }
        if (Object.keys(filters).length === 0) {
          layer.msg("No filter found.", {icon: 5});
          return
        }
        var request_func = function (_data) {
          $.ajax({
            url: url,
            data: _data,
            type: "POST",
            dataType: 'json',
            success: function (resp) {
              // console.log('save bookmark successful', resp);
              if (resp.code >= 0) {
                var payload = resp.msg;
                if (_data.op && _data.op === 'override') {
                  show_prompt(gettext('override_successful'), {
                    icon: 1
                  });
                  $($bookmark_menu_str).find('a[title=' + _data.title + ']').closest('li').remove();
                }
                $($bookmark_menu_str + ' li > a.mute').closest('li').remove();
                $($bookmark_menu_str).find(".divider.add-bookmark").before('<li><a href="javascript:void(0)" class="filter-bk-link" title="' + payload.title + '" data-filters=' + payload.filters + '><i class="fa fa-bookmark"></i> ' + payload.title + '</a></li>');
              } else {
                // console.log(resp.code)
                // alert('Hello')
                switch (resp.code) {
                  case -1: // missing valid parameter
                    show_prompt(resp.msg, {time: 0});
                    break;
                  case -2: // duplicated bookmark name
                    layer.confirm(
                      resp.msg,
                      {
                        title: gettext('Confirm'), icon: 3, btn: [gettext('change_name'), gettext('Override')]
                      }, function (lay_index) {
                        layer.close(lay_index);
                      }, function (lay_index) {
                        request_func(_.extend({}, _data, {
                          'op': 'override'
                        }));
                        layer.close(lay_index);
                      });
                    break;
                  default:
                    break;
                }
              }
            }, error: function () {
              // console.log('#error', arguments);
              layer.msg("Something Wrong", {icon: 2});
            }
          });
        };
        request_func(form_data);
      });
    };


    $('.input-group select[name^=_f_][name$=_type]', $filter_menu_str).on('change', function () {
      var that = $(this),
        p = 'placeholder',
        t = 'title',
        _name = that.attr('name').replace(/type/, 'str'),
        target = $('[name=' + _name + ']', $filter_menu_str),
        default_placeholder = gettext('Enter Keyword...'),
        tag_placeholder = gettext('Enter Option, use comma or semicolon to separate multiple option.');

      if (that.val().endsWith('__in')) {
        target.addClass('enable-tag');
        target.prop(p, tag_placeholder).prop(t, tag_placeholder);
      } else {
        if (target.hasClass('enable-tag')) {
          target.removeClass('enable-tag');
        }
        target.prop(p, default_placeholder).prop(t, default_placeholder);
      }
    }).trigger('change');

    setTimeout(addBookmarkSubmitEvent, opts.delay_time);
  };

  function include_or_exclude_trigger(container, ioe) {
    var opt = 'active';
    if (ioe === "2") {
      opt = 'deactivated'
    }
    if ($(container).find('div.switch-content span.' + opt).length > 0) {
      $(container).find('div.switch-content span.' + opt).click();
    } else {
      $(container).find('input.multi-switch-input').val(ioe)
    }
    return ioe;
  }

  function update_include_or_exclude(li, val) {
    if (val === undefined) {
      val = $(li).find('input.multi-switch-input').val();
      val = String(Math.max(parseInt(val), 1));
    }
    val = include_or_exclude_trigger(li, val);
    return val
  }

  function filter_button(op, model, opts) {
    var defaults = $.fn.adminFilters.defaults,
      $drop_filter = interject(defaults.$drop_filter_tmp, {model: model});
    var drop_filter = $($drop_filter),
      match = drop_filter.find('span.badge'),
      navbar = interject(defaults.$navbar_str_tmp, {model: model});
    var filter_length = Object.keys(opts.filters).length;
    match.html(filter_length);
    if (filter_length > 0) {
      match.removeClass('layui-hide');
      $('li.sub-menu-clear-filter', navbar).removeClass('layui-hide');
    } else {
      match.addClass('layui-hide');
      $('li.sub-menu-clear-filter', navbar).addClass('layui-hide');
    }
  }

  function maintain_filter_status(opts) {
    filter_button('plus', opts.model, opts);
    // $("li.dropdown-submenu", interject(opts.$navbar_str_tmp, opts.model)).filterClose();
  }

  $.fn.maintain_filter_status = maintain_filter_status;
  $.fn.filter_button = filter_button;

  $.fn.get_filter_template = function () {
    return $.fn.adminFilters.defaults["filter_template"];
  };

  function do_filter(filterGridOpts, filters) {
    if (!filterGridOpts) {
      error_prompt('illegal argument');
    }
    var where = {}, config = filterGridOpts.curTable.config, preWhere = filterGridOpts.where;
    if (filters) {
      $.each(Object.keys(filters), function (index, field) {
        let val = filters[field], prefix;
        if (val.ioe === '2') {
          prefix = '_p0_';
        }
        if (val.filter && val.filter instanceof Object) {
          $.each(Object.keys(val.filter), function (index, q) {
            let c = val.filter[q];
            if (prefix) {
              q = q.replace(/^_p_/i, prefix);
            }
            // console.log(val.ioe, q, c)
            where[q] = c;
          });
        }
      });
    }
    //It is required to update where of config otherwise the reload will query by last where.
    config.where = $.extend(where, preWhere);
    filterGridOpts.table.reload(config.id, {where: config.where});
  }

  $.fn.do_filter = function (out_opts, filters) {
    do_filter(out_opts, filters);
  };

  $.fn.adminFilters.defaults = {
    // filter_prefix_pattern: /(?<=^_p)(?=_)/,
    filter_value_pattern: /(=)(.*?)(&|$)/g,
    filter_code_name_pattern: /(?:^_p\d_)(.*?)(?:__)(?:\w+)/g,
    filter_prefix_pattern: /((?:^|&?)_p)(_)/g,  // for browser which does not support look-behinds
    filter_reverse_pattern: /((?:^|&?)_p)\d(_)/g,
    filter_reverse_pattern_single: /((?:^|&?)_p)(\d)(_)/,
    extra_trim_pattern: /^\?|^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/,
    filter_type_dict: {
      '0': 'fa-eraser',
      '1': 'fa-filter'
    },
    delay_time: 100,
    $navbar_str_tmp: '#{model}_navbar',
    $filter_menu_str_tmp: '#{model}_filter_menu',
    $bookmark_menu_str_tmp: '#{model}_bookmark_menu',
    $btn_clear_filter_str_tmp: 'div#{model}_clear_filters',
    $btn_apply_filter_str_tmp: 'div#{model}_apply_filters',
    $btn_bk_submit_tmp: '#{model}_bk_submit',
    $drop_filter_tmp: '#{model}_drop_filter',
    $filter_group_str_tmp: '#{model}_filters_group.filters-group',
    badge: '<span class="badge layui-bg-zk">{num}</span>',
    filter_template: '<a class="filters__item" href="javascript:void(0)" data-filter-params="{filter_params}" data-field-repr="{field_repr}"><i class="fa fa-fw {filter_type}"></i><span>{filter_text}</span><i class="layui-icon layui-unselect layui-close">ဆ</i></a>',
    $input_multi_switch: 'input.multi-switch-input[type=checkbox]'
  };
})(jQuery);

