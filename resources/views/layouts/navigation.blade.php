<div class="layui-header header" style="background: rgb(31, 97, 141);">
    <ul class="layui-nav layui-layout-left layui-nav-menu" lay-filter="nav-menu" id="top_module_menu_nav">
        {{-- logo --}}
        <li class="layui-nav-item">
            <div class="layui-nav-logo top_logo_focus" style="width: 200px;height: 65px;">
                <a href="{{url('dashboard')}}">
                    <img src="/img/logo/logo.png" alt="Sogboox">
                </a>
            </div>
        </li>

        <li class="layui-nav-item">
            <div class="menu_module"><a href="{{url('reception')}}" app="personnel">Réception</a></div>
        </li>
        <li class="layui-nav-item">
            <div class="menu_module"><a href="{{url('atelier')}}" app="iclock">Atelier</a></div>
        </li>
        <li class="layui-nav-item">
            <div class="menu_module"><a href="{{url('Rh')}}" app="att">GRH</a></div>
        </li>
        <li class="layui-nav-item">
            <div class="menu_module"><a href="{{url('depot')}};" app="att">Entrepôt</a></div>
        </li>
        <li class="layui-nav-item" >
            <div class="menu_module" disabled><a href="javascript:void(0);" app="att" >Comptabilité</a></div>
        </li>
       
        <li class="layui-nav-item">
            <div class="menu_module"><a href="javascript:void(0);" app="base">Courriel</a></div>
        </li>
        <li class="layui-nav-item">
            <div class="menu_module"><a href="javascript:void(0);" app="att">Rapports</a></div>
        </li>
        <li class="layui-nav-item">
            <div class="menu_module"><a href="javascript:void(0);" app="att">Admin</a></div>
        </li>
    </ul>
    <ul class="layui-nav layui-layout-right" lay-filter="system-menu">
        <li class="layui-nav-item" style="padding-right: 5px;padding-bottom: 0px">
            <a href="javascript:void(0);" ref="/feedback/" event="feedback" title="Feedback">
                <i class="fa fa-pencil-square-o fa-2x" style="font-size: 18px"></i>
            </a>
        </li>

        <li class="layui-nav-item msg-center layui-this" style="padding-left: 5px;">
            <a href="javascript:void(0);" ref="/user_notification/" event="notice" title="Notification">
                <i class="fa fa-bell-o fa-2x" style="font-size: 16px;"></i>
                <span id="noticeNum" style="display: inline-block;">3</span>
                <div class="notification-ring"></div>
            </a>
        </li>


        <li class="layui-nav-item">
            <a href="javascript:void(0);">

                <img style="border: 0; align: top;width: 45px;height: 45px;border-radius: 50%;" alt="user/default.gif"
                    src="/img/user/default.gif?v=1.0">

                <i class="layui-icon layui-icon-down layui-nav-more"></i></a>
            <dl class="layui-nav-child system-user-menu layui-anim layui-anim-upbit">
                <dt class="user-popup-layer level-2">
                    <i class="desc-inner-arrow"></i>
                    <i class="desc-outer-arrow"></i>
                    <i class="desc-layer"></i> <span class="desc-header">
                    </span>
                </dt>

                <dd><a href="javascript:void(0);"><i class="fa fa-user-circle"></i>admin</a></dd>
                <dd><a href="javascript:void(0);" ref="/license/" event="license">
                        <i class="fa fa-fw fa-info-circle"></i>
                        About</a>
                </dd>
                <dd><a href="/docs/" target="_blank">
                        <i class="fa fa-question-circle"></i>
                        API</a>
                </dd>






                <dd>
                    <a href="javascript:void(0);" ref="/controllersetting/" event="controllerSetting"><i
                            class="fa fa-fw fa-pencil-square-o"></i> Controller</a>
                </dd>

                <dd><a href="javascript:void(0);" ref="/languageChange/" event="changeLanguage"><i
                            class="fa fa-fw fa-globe"></i> Language</a></dd>

                <dd>
                    <hr>
                    <a href="javascript:void(0);" ref="/base/password_protection_question/"
                        event="protectionquestion"><i class="fa fa-fw fa-pencil-square-o"></i> Password Question</a>
                </dd>


                <hr>
                <dd><a href="javascript:void(0);" event="skin">
                        <img border="0" align="top" alt="me" style="height: 17px; width: 17px;"
                            src="/media/img/att/palette.svg">
                        Theme</a></dd>
                <dd><a href="javascript:void(0);" ref="/logout/" event="logout"><i class="fa fa-fw fa-sign-out"></i>
                        Logout</a></dd>
            </dl>
        </li>








        <span class="layui-nav-bar layui-hide" style="left: 8px; width: 0px; opacity: 0; top: 49.5px;"></span>
    </ul>
    <div class="header-popup-layer level-2 layui-hide">
        <i class="desc-inner-arrow" style="left: 241.042px;"></i>
        <i class="desc-outer-arrow" style="left: 239.042px;"></i>
    </div>
</div>