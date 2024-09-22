@extends('layouts.app')
@section('content')
    @include('layouts.Rh.navbar')
    <div id="main_body" class="layui-body">
        <div class="layui-progress" lay-filter="pace">
            <div class="layui-progress-bar layui-bg-orange" style="width: 0%; display: none;" lay-percent="0%"></div>
        </div>
        <div class="layui-tab layui-tab-card" lay-allowclose="true" lay-filter="zkTab" id="zk-layui-tab">
            <ul class="layui-tab-title" id="zk-layui-tab-ul">
                <li lay-id="2f706572736f6e6e656c2f656d706c6f7965652f" class="layui-this"><i
                        class="layui-icon"></i><span>Employee</span><i
                        class="layui-icon layui-icon-close layui-unselect layui-tab-close" style="display: none;"></i></li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show" style="height: 539px;">
                    <div id="tab2f706572736f6e6e656c2f656d706c6f7965652f">



                        <!--suppress HtmlFormInputWithoutLabel, JSUnusedAssignment, ES6ModulesDependencies -->

                        <div id="tab_employee">

                            <div id="employee_navbar" class="navbar-collapse collapse" style="">
                                <ul class="boot-nav navbar-boot-nav">

                                    <li class="dropdown bookmarks">
                                        <a id="employeedrop-bookmark" class="dropdown-toggle" role="button"
                                            data-toggle="dropdown" title="All" saved="" filters=""
                                            href="#">
                                            <i class="fa fa-book"></i> Bookmarks<span class="caret"></span></a>
                                        <ul id="employee_bookmark_menu" class="dropdown-menu" role="menu">

                                            <li><a class="mute">No Bookmarks</a></li>


                                            <li class="divider add-bookmark"></li>
                                            <li class="dropdown-submenu add-bookmark"><a href="#"><i
                                                        class="fa fa-plus"></i> New Bookmark</a>
                                                <div class="popover right dropdown-menu">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <form id="employee_bk_form" class="bookmark_form" method="post"
                                                            action="javascript:void(0);">
                                                            <input type="hidden" name="csrfmiddlewaretoken"
                                                                value="PHCWQKJ2GlEQjX1z7KRcu107iM5p4HTmhkOYX3vb9OdCc5ODFvU8rGWUaHNLZaE8">
                                                            <input type="hidden" name="filters" value="">
                                                            <input name="title" type="text" autocomplete="off"
                                                                class="form-control" placeholder="Enter the bookmark name…">
                                                            <input id="employee_bk_is_share" type="checkbox"
                                                                name="is_share">
                                                            <label for="employee_bk_is_share">Shared Status</label>
                                                            <input type="button" id="employee_bk_submit"
                                                                class="btn btn-success"
                                                                data-action="/personnel/employee/bookmark/"
                                                                value="Save Bookmark">
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>


                                    <li class="dropdown">
                                        <a id="employee_drop_filter" class="dropdown-toggle" role="button"
                                            data-toggle="dropdown" title="Customize" your="" filters=""
                                            href="#">
                                            <i class="fa fa-fw fa-filter"></i> Filter
                                            <span class="badge badge-success layui-hide">0</span>
                                            <span class="caret"></span>
                                        </a>
                                        <ul id="employee_filter_menu" class="dropdown-menu filter-menu" role="menu"
                                            aria-labelledby="employee_drop_filter">
                                            <li class="sub-menu-clear-filter layui-hide"><a href="javascript:void(0);">
                                                    <i class="fa fa-trash-o"></i> Clean Filters</a>
                                            </li>
                                            <li class="sub-menu-clear-filter layui-hide divider"></li>

                                            <li class="dropdown-submenu filter-char" data-field="emp_code">
                                                <a>
                                                    <label for="employee_emp_code_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated" title="Exclude"></span><span
                                                                class="info-slide active" title="Filter"></span>
                                                        </div><input id="employee_emp_code_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Employee ID
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Employee ID
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="emp_code">

                                                            <div class="input-group">
                                                                <select name="_f_emp_code_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_emp_code__icontains">Contain</option>

                                                                    <option value="_p_emp_code__exact">Exact</option>

                                                                    <option value="_p_emp_code__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_emp_code__endswith">End with</option>

                                                                    <option value="_p_emp_code__in">One of</option>

                                                                    <option value="_p_emp_code__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_emp_code_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="first_name">
                                                <a>
                                                    <label for="employee_first_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_first_name_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> First Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        First Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="first_name">

                                                            <div class="input-group">
                                                                <select name="_f_first_name_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_first_name__icontains">Contain
                                                                    </option>

                                                                    <option value="_p_first_name__exact">Exact</option>

                                                                    <option value="_p_first_name__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_first_name__endswith">End with
                                                                    </option>

                                                                    <option value="_p_first_name__in">One of</option>

                                                                    <option value="_p_first_name__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_first_name_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-choice " data-field="emp_type">
                                                <a>
                                                    <label for="employee_emp_type_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_emp_type_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Employment Type
                                                </a>
                                                <ul class="dropdown-menu menu-height-limited" data-field="emp_type">
                                                    <li class="clear-filter layui-hide">
                                                        <a href="javascript:void(0);" data-field="emp_type">
                                                            <i class="fa fa-trash-o"></i> Clean Filters
                                                        </a>
                                                    </li>
                                                    <li class="divider clear-filter layui-hide"></li>

                                                    <li class="filter-option-default active" data-field=""
                                                        data-val="">
                                                        <a href="javascript:void(0)" data-ref="?">All</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_emp_type__exact"
                                                        data-val="1">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_emp_type__exact=1">Official</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_emp_type__exact"
                                                        data-val="2">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_emp_type__exact=2">Temporary</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_emp_type__exact"
                                                        data-val="3">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_emp_type__exact=3">Probation</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_emp_type__isnull"
                                                        data-val="true">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_emp_type__isnull=true">Null</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu filter-char" data-field="flow_role__role_name">
                                                <a>
                                                    <label for="employee_flow_role__role_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_flow_role__role_name_switch"
                                                            type="checkbox" class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Role Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Role Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action=""
                                                            data-field="flow_role__role_name">

                                                            <div class="input-group">
                                                                <select name="_f_flow_role__role_name_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_flow_role__role_name__icontains">
                                                                        Contain</option>

                                                                    <option value="_p_flow_role__role_name__exact">Exact
                                                                    </option>

                                                                    <option value="_p_flow_role__role_name__startswith">
                                                                        Start with</option>

                                                                    <option value="_p_flow_role__role_name__endswith">End
                                                                        with</option>

                                                                    <option value="_p_flow_role__role_name__in">One of
                                                                    </option>

                                                                    <option value="_p_flow_role__role_name__regex">Regular
                                                                        expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_flow_role__role_name_str"
                                                                        type="text" data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="department__dept_code">
                                                <a>
                                                    <label for="employee_department__dept_code_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_department__dept_code_switch"
                                                            type="checkbox" class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Department Code
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Department Code
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action=""
                                                            data-field="department__dept_code">

                                                            <div class="input-group">
                                                                <select name="_f_department__dept_code_type"
                                                                    title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_department__dept_code__icontains">
                                                                        Contain</option>

                                                                    <option value="_p_department__dept_code__exact">Exact
                                                                    </option>

                                                                    <option value="_p_department__dept_code__startswith">
                                                                        Start with</option>

                                                                    <option value="_p_department__dept_code__endswith">End
                                                                        with</option>

                                                                    <option value="_p_department__dept_code__in">One of
                                                                    </option>

                                                                    <option value="_p_department__dept_code__regex">Regular
                                                                        expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_department__dept_code_str"
                                                                        type="text" data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="department__dept_name">
                                                <a>
                                                    <label for="employee_department__dept_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_department__dept_name_switch"
                                                            type="checkbox" class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Department Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Department Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action=""
                                                            data-field="department__dept_name">

                                                            <div class="input-group">
                                                                <select name="_f_department__dept_name_type"
                                                                    title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_department__dept_name__icontains">
                                                                        Contain</option>

                                                                    <option value="_p_department__dept_name__exact">Exact
                                                                    </option>

                                                                    <option value="_p_department__dept_name__startswith">
                                                                        Start with</option>

                                                                    <option value="_p_department__dept_name__endswith">End
                                                                        with</option>

                                                                    <option value="_p_department__dept_name__in">One of
                                                                    </option>

                                                                    <option value="_p_department__dept_name__regex">Regular
                                                                        expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_department__dept_name_str"
                                                                        type="text" data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="position__position_code">
                                                <a>
                                                    <label for="employee_position__position_code_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_position__position_code_switch"
                                                            type="checkbox" class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Position Code
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Position Code
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action=""
                                                            data-field="position__position_code">

                                                            <div class="input-group">
                                                                <select name="_f_position__position_code_type"
                                                                    title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_position__position_code__icontains">
                                                                        Contain</option>

                                                                    <option value="_p_position__position_code__exact">Exact
                                                                    </option>

                                                                    <option value="_p_position__position_code__startswith">
                                                                        Start with</option>

                                                                    <option value="_p_position__position_code__endswith">
                                                                        End with</option>

                                                                    <option value="_p_position__position_code__in">One of
                                                                    </option>

                                                                    <option value="_p_position__position_code__regex">
                                                                        Regular expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_position__position_code_str"
                                                                        type="text" data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="position__position_name">
                                                <a>
                                                    <label for="employee_position__position_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_position__position_name_switch"
                                                            type="checkbox" class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Position Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Position Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action=""
                                                            data-field="position__position_name">

                                                            <div class="input-group">
                                                                <select name="_f_position__position_name_type"
                                                                    title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_position__position_name__icontains">
                                                                        Contain</option>

                                                                    <option value="_p_position__position_name__exact">Exact
                                                                    </option>

                                                                    <option value="_p_position__position_name__startswith">
                                                                        Start with</option>

                                                                    <option value="_p_position__position_name__endswith">
                                                                        End with</option>

                                                                    <option value="_p_position__position_name__in">One of
                                                                    </option>

                                                                    <option value="_p_position__position_name__regex">
                                                                        Regular expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_position__position_name_str"
                                                                        type="text" data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="area__area_code">
                                                <a>
                                                    <label for="employee_area__area_code_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_area__area_code_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Area Code
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Area Code
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="area__area_code">

                                                            <div class="input-group">
                                                                <select name="_f_area__area_code_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_area__area_code__icontains">Contain
                                                                    </option>

                                                                    <option value="_p_area__area_code__exact">Exact
                                                                    </option>

                                                                    <option value="_p_area__area_code__startswith">Start
                                                                        with</option>

                                                                    <option value="_p_area__area_code__endswith">End with
                                                                    </option>

                                                                    <option value="_p_area__area_code__in">One of</option>

                                                                    <option value="_p_area__area_code__regex">Regular
                                                                        expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_area__area_code_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="area__area_name">
                                                <a>
                                                    <label for="employee_area__area_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_area__area_name_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Area Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Area Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="area__area_name">

                                                            <div class="input-group">
                                                                <select name="_f_area__area_name_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_area__area_name__icontains">Contain
                                                                    </option>

                                                                    <option value="_p_area__area_name__exact">Exact
                                                                    </option>

                                                                    <option value="_p_area__area_name__startswith">Start
                                                                        with</option>

                                                                    <option value="_p_area__area_name__endswith">End with
                                                                    </option>

                                                                    <option value="_p_area__area_name__in">One of</option>

                                                                    <option value="_p_area__area_name__regex">Regular
                                                                        expression</option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_area__area_name_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="email">
                                                <a>
                                                    <label for="employee_email_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_email_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Email
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Email
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="email">

                                                            <div class="input-group">
                                                                <select name="_f_email_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_email__icontains">Contain</option>

                                                                    <option value="_p_email__exact">Exact</option>

                                                                    <option value="_p_email__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_email__endswith">End with</option>

                                                                    <option value="_p_email__in">One of</option>

                                                                    <option value="_p_email__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_email_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="nickname">
                                                <a>
                                                    <label for="employee_nickname_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_nickname_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Local Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Local Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="nickname">

                                                            <div class="input-group">
                                                                <select name="_f_nickname_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_nickname__icontains">Contain</option>

                                                                    <option value="_p_nickname__exact">Exact</option>

                                                                    <option value="_p_nickname__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_nickname__endswith">End with</option>

                                                                    <option value="_p_nickname__in">One of</option>

                                                                    <option value="_p_nickname__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_nickname_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="last_name">
                                                <a>
                                                    <label for="employee_last_name_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_last_name_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Last Name
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Last Name
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="last_name">

                                                            <div class="input-group">
                                                                <select name="_f_last_name_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_last_name__icontains">Contain
                                                                    </option>

                                                                    <option value="_p_last_name__exact">Exact</option>

                                                                    <option value="_p_last_name__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_last_name__endswith">End with
                                                                    </option>

                                                                    <option value="_p_last_name__in">One of</option>

                                                                    <option value="_p_last_name__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_last_name_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-char" data-field="card_no">
                                                <a>
                                                    <label for="employee_card_no_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_card_no_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Card NO.
                                                </a>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">
                                                        Card NO.
                                                    </h3>
                                                    <div class="popover-content">
                                                        <form method="get" action="" data-field="card_no">

                                                            <div class="input-group">
                                                                <select name="_f_card_no_type" title="Type"
                                                                    style="height: 24px;line-height: 24px;min-width: 120px;border: 1px solid #ccc;">


                                                                    <option value="_p_card_no__icontains">Contain</option>

                                                                    <option value="_p_card_no__exact">Exact</option>

                                                                    <option value="_p_card_no__startswith">Start with
                                                                    </option>

                                                                    <option value="_p_card_no__endswith">End with</option>

                                                                    <option value="_p_card_no__in">One of</option>

                                                                    <option value="_p_card_no__regex">Regular expression
                                                                    </option>


                                                                </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="zk-type-helper">
                                                                    <input name="_f_card_no_str" type="text"
                                                                        data-role="zk-type-helper-input"
                                                                        class="zk-type-helper-input"
                                                                        placeholder="Enter Keyword..."
                                                                        style="width: 20em;" title="Enter Keyword...">
                                                                </div>
                                                                <span class="input-group-btn"><a
                                                                        class="btn btn-default remove">x</a></span>
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-success" type="submit"><i
                                                                            class="fa fa-fw fa-search"></i></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="dropdown-submenu filter-choice " data-field="dev_privilege">
                                                <a>
                                                    <label for="employee_dev_privilege_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_dev_privilege_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Device Privilege
                                                </a>
                                                <ul class="dropdown-menu menu-height-limited" data-field="dev_privilege">
                                                    <li class="clear-filter layui-hide">
                                                        <a href="javascript:void(0);" data-field="dev_privilege">
                                                            <i class="fa fa-trash-o"></i> Clean Filters
                                                        </a>
                                                    </li>
                                                    <li class="divider clear-filter layui-hide"></li>

                                                    <li class="filter-option-default active" data-field=""
                                                        data-val="">
                                                        <a href="javascript:void(0)" data-ref="?">All</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__exact"
                                                        data-val="0">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__exact=0">Employee</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__exact"
                                                        data-val="2">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__exact=2">Register</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__exact"
                                                        data-val="6">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__exact=6">System Administrator</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__exact"
                                                        data-val="10">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__exact=10">User Defined</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__exact"
                                                        data-val="14">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__exact=14">Super Administrator</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_dev_privilege__isnull"
                                                        data-val="true">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_dev_privilege__isnull=true">Null</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu filter-choice " data-field="app_status">
                                                <a>
                                                    <label for="employee_app_status_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_app_status_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> APP Status
                                                </a>
                                                <ul class="dropdown-menu menu-height-limited" data-field="app_status">
                                                    <li class="clear-filter layui-hide">
                                                        <a href="javascript:void(0);" data-field="app_status">
                                                            <i class="fa fa-trash-o"></i> Clean Filters
                                                        </a>
                                                    </li>
                                                    <li class="divider clear-filter layui-hide"></li>

                                                    <li class="filter-option-default active" data-field=""
                                                        data-val="">
                                                        <a href="javascript:void(0)" data-ref="?">All</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_app_status__exact"
                                                        data-val="1">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_app_status__exact=1">Enable</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_app_status__exact"
                                                        data-val="0">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_app_status__exact=0">Disable</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_app_status__isnull"
                                                        data-val="true">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_app_status__isnull=true">Null</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="dropdown-submenu filter-choice " data-field="gender">
                                                <a>
                                                    <label for="employee_gender_switch"></label>
                                                    <div class="multi-switch">
                                                        <div class="switch-content initial">
                                                            <div class="switch-circle"></div><span
                                                                class="info-slide deactivated"
                                                                title="Exclude"></span><span class="info-slide active"
                                                                title="Filter"></span>
                                                        </div><input id="employee_gender_switch" type="checkbox"
                                                            class="multi-switch-input" initial-value="0"
                                                            unchecked-value="2" checked-value="1" value="0">
                                                    </div>
                                                    <i class="fa fa-fw fa-filter text-muted"></i> Gender
                                                </a>
                                                <ul class="dropdown-menu menu-height-limited" data-field="gender">
                                                    <li class="clear-filter layui-hide">
                                                        <a href="javascript:void(0);" data-field="gender">
                                                            <i class="fa fa-trash-o"></i> Clean Filters
                                                        </a>
                                                    </li>
                                                    <li class="divider clear-filter layui-hide"></li>

                                                    <li class="filter-option-default active" data-field=""
                                                        data-val="">
                                                        <a href="javascript:void(0)" data-ref="?">All</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_gender__exact"
                                                        data-val="M">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_gender__exact=M">Male</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_gender__exact"
                                                        data-val="F">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_gender__exact=F">Female</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_gender__exact"
                                                        data-val="O">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_gender__exact=O">Other</a>
                                                    </li>

                                                    <li class="filter-option" data-field="_p_gender__isnull"
                                                        data-val="true">
                                                        <a href="javascript:void(0)"
                                                            data-ref="?_p_gender__isnull=true">Null</a>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <div id="employee_apply_filters"
                                        class="navbar-btn pull-left hide-xs layui-hide filters-apply"
                                        title="Search by filter">
                                        <a href="javascript:void(0)" class="btn btn-primary"><i
                                                class="fa fa-fw fa-search"></i></a>
                                    </div>
                                    <div id="employee_clear_filters"
                                        class="navbar-btn pull-right hide-xs layui-hide filters-clear"
                                        title="Clear the filter">
                                        <a href="javascript:void(0)" class="btn btn-danger"><i
                                                class="fa fa-fw fa-eraser"></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div id="employee_filters_group" class="filters-group"></div>

                            <div class="layui-fluid " id="employee_fluid">
                                <div class="layui-card">
                                    <div class="layui-card-body model-data-grid">

                                        <table id="id_grid_employee" class="layui-hide" lay-filter="employee"></table>
                                        <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-2"
                                            lay-id="id_grid_employee" style="height: 458px;">
                                            <div class="layui-table-tool">
                                                <div class="layui-table-tool-temp">
                                                    <div class="layui-btn-container grid-toolbar" style="">
                                                        <ul class="layui-nav">
                                                            <li class="layui-nav-item"><a
                                                                    id="employee_47656e6572616c416374696f6e4e6577"
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    title="Add" group="0" index="0">Add</a>
                                                            </li>
                                                            <li class="layui-nav-item"><a
                                                                    id="employee_47656e6572616c416374696f6e44656c657465"
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    title="Delete the selected record" group="1"
                                                                    index="0">Delete</a></li>
                                                            <li class="layui-nav-item"><a
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    href="javascript:void(0);">Import<span
                                                                        class="layui-nav-more"></span></a>
                                                                <d1 class="layui-nav-child layui-anim layui-anim-upbit">
                                                                    <dd><a id="employee_496d706f7274456d706c6f796565"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Import employee via excel file"
                                                                            group="2" index="0">Import
                                                                            Employee</a></dd>
                                                                    <dd><a id="employee_496d706f7274446f63756d656e74"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Import document expired alert setting via excel file"
                                                                            group="2" index="1">Import
                                                                            Document</a></dd>
                                                                    <dd><a id="employee_496d706f727450686f746f"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Import personnel photo for employee."
                                                                            group="2" index="2">Import
                                                                            Photo</a></dd>
                                                                    <dd><a id="employee_496d706f727455534244617461"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Import Employee from USB File"
                                                                            group="2" index="3">Import USB
                                                                            Employee</a></dd>
                                                                </d1>
                                                            </li>
                                                            <li class="layui-nav-item"><a
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    href="javascript:void(0);">Personnel Transfer<span
                                                                        class="layui-nav-more"></span></a>
                                                                <d1 class="layui-nav-child layui-anim layui-anim-upbit">
                                                                    <dd><a id="employee_41646a7573744465706172746d656e74"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Department Transfer" group="3"
                                                                            index="0">Department Transfer</a></dd>
                                                                    <dd><a id="employee_506f736974696f6e5472616e73666572"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Position Transfer" group="3"
                                                                            index="1">Position Transfer</a></dd>
                                                                    <dd><a id="employee_41646a75737441726561"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Area Transfer" group="3"
                                                                            index="2">Area Transfer</a></dd>
                                                                    <dd><a id="employee_5061737350726f626174696f6e"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Pass Probation" group="3"
                                                                            index="3">Pass Probation</a></dd>
                                                                    <dd><a id="employee_52657369676e6174696f6e"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Resignation" group="3"
                                                                            index="4">Resignation</a></dd>
                                                                </d1>
                                                            </li>
                                                            <li class="layui-nav-item"><a
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    href="javascript:void(0);">App<span
                                                                        class="layui-nav-more"></span></a>
                                                                <d1 class="layui-nav-child layui-anim layui-anim-upbit">
                                                                    <dd><a id="employee_456e61626c65417070"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Enable" group="4"
                                                                            index="0">Enable</a></dd>
                                                                    <dd><a id="employee_44697361626c65417070"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Disable" group="4"
                                                                            index="1">Disable</a></dd>
                                                                </d1>
                                                            </li>
                                                            <li class="layui-nav-item"><a
                                                                    class="layui-btn layui-btn layui-btn-sm"
                                                                    href="javascript:void(0);">More<span
                                                                        class="layui-nav-more"></span></a>
                                                                <d1 class="layui-nav-child layui-anim layui-anim-upbit">
                                                                    <dd><a id="employee_526573796e6368726f6e697a65446576696365"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Resynchronize to device"
                                                                            group="5" index="0">Resynchronize
                                                                            to device</a></dd>
                                                                    <dd><a id="employee_526555706c6f616446726f6d446576696365"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Re-upload from device" group="5"
                                                                            index="1">Re-upload from device</a></dd>
                                                                    <dd><a id="employee_44656c65746542696f6d657472696354656d706c61746573"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Delete the Biometric Template"
                                                                            group="5" index="2">Delete the
                                                                            Biometric Template</a></dd>
                                                                    <dd><a id="employee_4578706f727455534244617461"
                                                                            class="layui-btn layui-btn layui-btn-sm"
                                                                            title="Export Employee to USB File"
                                                                            group="5" index="3">Export USB
                                                                            Employee</a></dd>
                                                                </d1>
                                                            </li><span class="layui-nav-bar layui-hide"
                                                                style="left: 0px; top: 30px; width: 0px; opacity: 0;"></span>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="layui-table-tool-self">
                                                    <div class="layui-inline" data-name="Best Fit" data-arrowtip="Fit"
                                                        title="Fit" lay-event="employee_fit"><i
                                                            class="fa fa-fw fa-magic"></i></div>
                                                    <div class="layui-inline" data-name="Expand"
                                                        data-arrowtip="Expand" title="Expand"
                                                        lay-event="employee_expand"><i class="fa fa-fw fa-expand"></i>
                                                    </div>
                                                    <div class="layui-inline" data-name="History"
                                                        data-arrowtip="History" title="History"
                                                        lay-event="employee_history"><i class="fa fa-fw fa-history"></i>
                                                    </div>
                                                    <div class="layui-inline" data-name="Columns"
                                                        data-arrowtip="Columns" title="Columns"
                                                        lay-event="employee_columns"><i class="fa fa-fw fa-columns"></i>
                                                    </div>
                                                    <div class="layui-inline" data-name="Export"
                                                        data-arrowtip="Export" title="Export"
                                                        lay-event="employee_export"><i class="fa fa-fw fa-share"></i>
                                                    </div>
                                                    <div class="layui-inline" data-name="Preferences"
                                                        data-arrowtip="Preferences" title="Preferences"
                                                        lay-event="employee_prefer"><i class="fa fa-fw fa-sliders"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layui-table-box">
                                                <div class="layui-table-header">
                                                    <table cellspacing="0" cellpadding="0" border="0"
                                                        class="layui-table">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="id" data-key="2-0-0" colspan="1"
                                                                    rowspan="1" data-unresize="true"
                                                                    class="">
                                                                    <div
                                                                        class="layui-table-cell laytable-cell-2-0-0 laytable-cell-checkbox">
                                                                        <input type="checkbox" name="layTableCheckbox"
                                                                            lay-skin="primary"
                                                                            lay-filter="layTableAllChoose">
                                                                        <div class="layui-unselect layui-form-checkbox"
                                                                            lay-skin="primary"><i
                                                                                class="layui-icon layui-icon-ok"></i>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th data-field="hash" data-key="2-0-1"
                                                                    data-minwidth="20" colspan="1" rowspan="1"
                                                                    data-unresize="true" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-1 laytable-cell-numbers"
                                                                        align="center"><span>#</span></div>
                                                                </th>
                                                                <th data-field="first_name" data-key="2-0-2"
                                                                    colspan="1" rowspan="1"
                                                                    class=" layui-unselect">
                                                                    <div class="layui-table-cell laytable-cell-2-0-2">
                                                                        <span>First Name</span><span
                                                                            class="layui-table-sort layui-inline"><i
                                                                                class="layui-edge layui-table-sort-asc"
                                                                                title="Asc"></i><i
                                                                                class="layui-edge layui-table-sort-desc"
                                                                                title="Desc"></i></span></div>
                                                                </th>
                                                                <th data-field="emp_code" data-key="2-0-3"
                                                                    colspan="1" rowspan="1"
                                                                    class=" layui-unselect">
                                                                    <div class="layui-table-cell laytable-cell-2-0-3">
                                                                        <span>Employee ID</span><span
                                                                            class="layui-table-sort layui-inline"><i
                                                                                class="layui-edge layui-table-sort-asc"
                                                                                title="Asc"></i><i
                                                                                class="layui-edge layui-table-sort-desc"
                                                                                title="Desc"></i></span></div>
                                                                </th>
                                                                <th data-field="nickname" data-key="2-0-4"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-4">
                                                                        <span>Local Name</span></div>
                                                                </th>
                                                                <th data-field="last_name" data-key="2-0-5"
                                                                    colspan="1" rowspan="1"
                                                                    class="layui-hide layui-unselect">
                                                                    <div class="layui-table-cell laytable-cell-2-0-5">
                                                                        <span>Last Name</span><span
                                                                            class="layui-table-sort layui-inline"><i
                                                                                class="layui-edge layui-table-sort-asc"
                                                                                title="Asc"></i><i
                                                                                class="layui-edge layui-table-sort-desc"
                                                                                title="Desc"></i></span></div>
                                                                </th>
                                                                <th data-field="superior" data-key="2-0-6"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-6">
                                                                        <span>Superior</span></div>
                                                                </th>
                                                                <th data-field="card_no" data-key="2-0-7"
                                                                    colspan="1" rowspan="1"
                                                                    class="layui-hide layui-unselect">
                                                                    <div class="layui-table-cell laytable-cell-2-0-7">
                                                                        <span>Card NO.</span><span
                                                                            class="layui-table-sort layui-inline"><i
                                                                                class="layui-edge layui-table-sort-asc"
                                                                                title="Asc"></i><i
                                                                                class="layui-edge layui-table-sort-desc"
                                                                                title="Desc"></i></span></div>
                                                                </th>
                                                                <th data-field="department" data-key="2-0-8"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-8">
                                                                        <span>Department</span></div>
                                                                </th>
                                                                <th data-field="dept_code" data-key="2-0-9"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-9">
                                                                        <span>Department Code</span></div>
                                                                </th>
                                                                <th data-field="position" data-key="2-0-10"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-10">
                                                                        <span>Position</span></div>
                                                                </th>
                                                                <th data-field="emp_type" data-key="2-0-11"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-11">
                                                                        <span>Employment Type</span></div>
                                                                </th>
                                                                <th data-field="hire_date" data-key="2-0-12"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-12">
                                                                        <span>Hired Date</span></div>
                                                                </th>
                                                                <th data-field="gender" data-key="2-0-13"
                                                                    colspan="1" rowspan="1"
                                                                    class="layui-hide layui-unselect">
                                                                    <div class="layui-table-cell laytable-cell-2-0-13">
                                                                        <span>Gender</span><span
                                                                            class="layui-table-sort layui-inline"><i
                                                                                class="layui-edge layui-table-sort-asc"
                                                                                title="Asc"></i><i
                                                                                class="layui-edge layui-table-sort-desc"
                                                                                title="Desc"></i></span></div>
                                                                </th>
                                                                <th data-field="email" data-key="2-0-14"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-14">
                                                                        <span>Email</span></div>
                                                                </th>
                                                                <th data-field="app_status" data-key="2-0-15"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-15">
                                                                        <span>APP Status</span></div>
                                                                </th>
                                                                <th data-field="employee_area_code" data-key="2-0-16"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-16">
                                                                        <span>Area Code</span></div>
                                                                </th>
                                                                <th data-field="employee_area" data-key="2-0-17"
                                                                    colspan="1" rowspan="1" class="">
                                                                    <div class="layui-table-cell laytable-cell-2-0-17">
                                                                        <span>Area</span></div>
                                                                </th>
                                                                <th data-field="update_time" data-key="2-0-18"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-18">
                                                                        <span>Update Time</span></div>
                                                                </th>
                                                                <th data-field="user_defined_4" data-key="2-0-19"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-19">
                                                                        <span>Location</span></div>
                                                                </th>
                                                                <th data-field="user_defined_5" data-key="2-0-20"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-20">
                                                                        <span>Cnic</span></div>
                                                                </th>
                                                                <th data-field="user_defined_6" data-key="2-0-21"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-21">
                                                                        <span>Ads</span></div>
                                                                </th>
                                                                <th data-field="user_defined_7" data-key="2-0-22"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-22">
                                                                        <span>testing</span></div>
                                                                </th>
                                                                <th data-field="user_defined_8" data-key="2-0-23"
                                                                    colspan="1" rowspan="1" class="layui-hide">
                                                                    <div class="layui-table-cell laytable-cell-2-0-23">
                                                                        <span>checkcombo</span></div>
                                                                </th>
                                                                <th data-field="24" data-key="2-0-24" colspan="1"
                                                                    rowspan="1" class=" layui-table-col-special">
                                                                    <div class="layui-table-cell laytable-cell-2-0-24"
                                                                        align="center"><span></span></div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="layui-table-body layui-table-main" style="height: 347px;">
                                                    <table cellspacing="0" cellpadding="0" border="0"
                                                        class="layui-table">
                                                        <tbody></tbody>
                                                    </table>
                                                    <div class="layui-none">数据接口请求异常：parsererror</div>
                                                </div>
                                                <div class="layui-table-fixed layui-table-fixed-l layui-hide">
                                                    <div class="layui-table-header">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                            class="layui-table">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id" data-key="2-0-0"
                                                                        colspan="1" rowspan="1"
                                                                        data-unresize="true" class="">
                                                                        <div
                                                                            class="layui-table-cell laytable-cell-2-0-0 laytable-cell-checkbox">
                                                                            <input type="checkbox"
                                                                                name="layTableCheckbox"
                                                                                lay-skin="primary"
                                                                                lay-filter="layTableAllChoose">
                                                                            <div class="layui-unselect layui-form-checkbox"
                                                                                lay-skin="primary"><i
                                                                                    class="layui-icon layui-icon-ok"></i>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="layui-table-body" style="height: auto;">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                            class="layui-table">
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layui-table-page layui-hide" style="">
                                                <div id="layui-table-page2"></div>
                                            </div>
                                            <style>
                                                .laytable-cell-2-0-0 {
                                                    width: 28px;
                                                }

                                                .laytable-cell-2-0-1 {
                                                    width: 40px;
                                                }

                                                .laytable-cell-2-0-2 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-3 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-4 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-5 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-6 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-7 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-8 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-9 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-10 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-11 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-12 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-13 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-14 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-15 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-16 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-17 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-18 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-19 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-20 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-21 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-22 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-23 {
                                                    width: 150px;
                                                }

                                                .laytable-cell-2-0-24 {
                                                    width: 150px;
                                                }
                                            </style>
                                        </div>
                                        <script type="text/html" id="employee_toolbar">
            <div class="layui-btn-container grid-toolbar" style="">
              
                <ul class="layui-nav"></ul>
              
            </div>
          </script>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <script>
                            //# sourceURL=employee-data_grid.js
                            $(function() {




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
                                    actions: undefined // general callback for action
                                };






                                var model_name = "employee",
                                    path = "/personnel/employee/table/",
                                    history_opts = [],
                                    is_history = history_opts && history_opts.length;

                                path = is_history ?
                                    concatenate_url(path, {
                                        'history_opts': JSON.stringify(history_opts)
                                    }) :
                                    concatenate_url(path, {
                                        'except_limit': get_except_limit(model_name)
                                    });

                                $.ajax({
                                    type: 'GET',
                                    url: path,
                                    dataType: 'json',
                                    success: function(res) {
                                        var model_name = res.model_name,
                                            app_label = res.app_label
                                        if (path.indexOf("history_opts") != -1) {
                                            model_name = 'history_opts_' + model_name
                                        }
                                        var data_grid_opts = {
                                            model: model_name,
                                            app: app_label,
                                            csrf_token: "PHCWQKJ2GlEQjX1z7KRcu107iM5p4HTmhkOYX3vb9OdCc5ODFvU8rGWUaHNLZaE8",
                                            dimension: dimension,
                                            callback: callback,
                                            is_history: is_history,
                                            history_contenttype: res.history_contenttype,
                                            del_url: res.del_url,
                                            edit_url: res.edit_url,
                                            detail_url: res.detail_url,
                                            export_url: res.export_url,
                                            history_url: res.history_url,
                                            disabled_fields_url: res.disabled_fields_url,
                                            disabled_action_panel_east: res.disabled_action_panel_east || [],
                                            table_id: "id_grid_" + model_name,
                                            table_elem: "#id_grid_" + model_name,
                                            toolbar_id: "#" + model_name + "_toolbar",
                                            fluid_container: "#" + model_name + "_fluid",
                                            grid_opts: res['grid_opts'],
                                            actions: res['action_choices'],
                                            all_perms: res['all_perms'],
                                            init_disabled_fields: res['disabled_fields']
                                        };


                                        function view_members(url, title) {
                                            $.ajax({
                                                url: url,
                                                headers: {
                                                    "X-CSRFToken": 'PHCWQKJ2GlEQjX1z7KRcu107iM5p4HTmhkOYX3vb9OdCc5ODFvU8rGWUaHNLZaE8',
                                                    "Accept": "text/html"
                                                },
                                                contentType: "application/json",
                                                type: "get",
                                                dataType: "html",
                                                success: function(response) {
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
                                            list: function(data) {
                                                var url = '/personnel/api/employees/' + data.id + '/punches/';
                                                view_members(url, data.first_name);
                                            }
                                        });


                                        $('#tab_' + model_name).dataGrid(data_grid_opts);


                                    },
                                    error: function(msg) {
                                        console.error(msg);
                                    }
                                });

                            });
                        </script>


                        <script type="text/html" id="model_employee_toolbar">
      <a class="layui-btn layui-btn-xs" lay-event="list" title="Attendance Record"><i class="fa fa-fw fa-list"></i></a>
      
          <a class="layui-btn layui-btn-xs" lay-event="edit"><i class="fa fa-fw fa-pencil-square-o"></i></a>
      
      
          <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i
                  class="fa fa-fw fa-trash-o"></i></a>
      
  </script>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
