<div class="layui-side layui-bg-black" id="side_menu">
    <br>
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="admin-nav" id="side_menu_nav"><span
                class="layui-nav-bar layui-hide"></span>
            <li class="layui-nav-item side-menu-group layui-nav-itemed" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-layers"></i>
                    <span>Opportunité</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="reception" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Commande</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="rendez-vous" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Rendez-vous</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="reservations" link="/personnel/area/" title="Area" class="">
                            <i class="layui-icon"></i><span>Réservations</span>
                        </a>
                    </dd>
                </dl>
            </li>

            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-user-add"></i>
                    <span>Client(e)</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="clients" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Créer un nouvel</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="listclient" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Voir la liste</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Contactez</span>
                        </a>
                    </dd>
                  
                </dl>
            </li>

            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-add-folder"></i>
                    <span>Documents</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Devis</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Rapports</span>
                        </a>
                    </dd>
                  
                </dl>
            </li>
           
        </ul>
    </div>
</div>