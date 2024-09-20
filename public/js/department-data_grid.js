
    //# sourceURL=department-data_grid.js
    $(function () {
      
      

      
        var dimension = {
          height: 'auto',
          width: 'auto',
          // tuple: (width, height)
          actions: {}
        };
      
      
        var callback = { // each item has two categories of call: done and fail, respectively.
          load: undefined,
          edit: undefined,
          delete: undefined,
          detail: undefined,
          actions: undefined  // general callback for action
        };
      


      
      
      
        var model_name = "department", path = "/personnel/department/table/",
          history_opts = [],
          is_history = history_opts && history_opts.length;

          path = is_history
               ? concatenate_url(path, {
            'history_opts': JSON.stringify(history_opts)
          })
               : concatenate_url(path, {
            'except_limit': get_except_limit(model_name)
          });

        $.ajax({
          type: 'GET',
          url: path,
          dataType: 'json',
          success: function (res) {
            var model_name = res.model_name, app_label = res.app_label
            if (path.indexOf("history_opts") != -1) {
              model_name = 'history_opts_' + model_name
            }
            var data_grid_opts = {
                model: model_name, app: app_label, csrf_token: "3PfWmhCEKOnLgxcvgMy51XUdvk5uSn6ncLQz5aGqIiWyHtJIqc7NigYwOhsJLUtA",
                dimension: dimension, callback: callback, is_history: is_history,
                history_contenttype: res.history_contenttype,
                del_url: res.del_url, edit_url: res.edit_url, detail_url:res.detail_url,
                  export_url: res.export_url, history_url: res.history_url,
                disabled_fields_url: res.disabled_fields_url,
                disabled_action_panel_east: res.disabled_action_panel_east || [],
                table_id: "id_grid_" + model_name, table_elem: "#id_grid_" + model_name,
                toolbar_id: "#" + model_name + "_toolbar", fluid_container: "#" + model_name + "_fluid",
                grid_opts: res['grid_opts'], actions: res['action_choices'],
                all_perms: res['all_perms'], init_disabled_fields: res['disabled_fields']
              };

            
  var cols = res['grid_opts']['cols'][0];
    var payload = {};
    cols.forEach(function(col, index){
      payload[col.field] = col;
    });
    $.extend(payload.employee_count, {event: 'view_members', templet: function(d){
      return '<a href="javascript:void(0);">'+d.employee_count+'</a>';
    }});
    $.extend(payload.resigned_count, {event: 'view_resigns', templet: function(d){
      return '<a href="javascript:void(0);">'+d.resigned_count+'</a>';
    }});

    function view_members(url, title){
      $.ajax({
        url: url
        , headers: {"X-CSRFToken": '3PfWmhCEKOnLgxcvgMy51XUdvk5uSn6ncLQz5aGqIiWyHtJIqc7NigYwOhsJLUtA', "Accept": "text/html"}
        , contentType: "application/json"
        , type: "get"
        , dataType: "html"
        , success: function(response){
          layer.open({
            title: title,
            type: 1,
            zIndex: 998,
            area: ['auto', 'auto'],
            content: response
          })
        }
      })
    }

    data_grid_opts.events = $.extend(data_grid_opts.events || {}, {
      view_members: function(data){
        var url = '/personnel/api/departments/'+data.id+'/employees/';
        view_members(url, data.dept_name);
      }
      ,view_resigns: function(data){
        var url = '/personnel/api/departments/'+data.id+'/resigns/';
        view_members(url, data.dept_name);
      }
    });

  function update_side_ztree() {
    $('#department_show_all').trigger('click');
  }

  $.extend(true, dimension, {
    actions: {
      GeneralActionDelete: ['auto', 'auto'],
      // Import: [500, 500],
      // SetDepartment: [900, 550]
    }
  });

  $.extend(true, callback, {
    load: {
      done: $.fn.resize_side_ztree_if_any
    },
    edit: {
      done: update_side_ztree
    },
    delete: {
      done: update_side_ztree
    },
    actions: {
      GeneralActionNew: {
        done: update_side_ztree
      },
      GeneralActionDelete: {
        done: update_side_ztree
      },
      Import: {
        done: update_side_ztree
      }
    }
  });

            $('#tab_' + model_name).dataGrid(data_grid_opts);
            
            
  layui.use(['table', 'tablePlug', 'layer', 'flow'], function(){
    var table = layui.table, tablePlug = layui.tablePlug, layer=layui.layer, flow=layui.flow;
    tablePlug.smartReload.enable(true);
    function department_tree() {
      var setting = {
        view: {
          dblClickExpand: false,
          showLine: false,
          showIcon: true
        },
        data: {
          simpleData: {
            enable: true
          }
        },
        check: {
          enable: false,
          chkboxType: {"Y": "ps", "N": "s"},
          radioType: "all"
        },
        callback: {
          onClick: onClick
        }
      };

      function onClick(event, treeId, treeNode) {
        if (treeNode.grade === "company")
          table.reload('id_grid_department',{where: {_p1_company: parseInt([treeNode.id])}});
        else
          table.reload('id_grid_department', {where: {_p1_parent_dept__in: JSON.stringify([treeNode.id])}});
      }

      $.ajax({
        url: "/personnel/department_tree/",
        type: "GET",
        dataType: "json",
        success: function (nodes) {
          var zTree = $.fn.zTree.init($("#department_tree"), setting, nodes);
        }
      });
    }

    department_tree();

    $("#department_show_all").click(function () {
      department_tree();
    });

    $("#department_reset").click(function () {
      table.reload('id_grid_department', {
        where: {
          _p1_parent_dept__in: ''
        }
      });
    });
  })

          }, error: function (msg) {
            console.error(msg);
          }
        });
      
    });
    
    
  