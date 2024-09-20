<div class="layui-side layui-bg-black" id="side_menu">
    <br>
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="admin-nav" id="side_menu_nav"><span
                class="layui-nav-bar layui-hide"></span>
            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-layers"></i>
                    <span>Employés</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Nouveau</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>liste</span>
                        </a>
                    </dd>

                </dl>
            </li>

            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-chart-tree"></i>
                    <span>Organigramme</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Départements</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Manager</span>
                        </a>
                    </dd>

                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Evaluation </span>
                        </a>
                    </dd>
                  
                </dl>
            </li>

            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-time-quarter-past"></i>
                    <span>Temps de travail</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Presence</span>
                        </a>
                    </dd>
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Horaire de travail</span>
                        </a>
                    </dd>a>
                    </dd>
                  
                </dl>
            </li>

            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-calculator-money"></i>
                    <span>Paiement</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:void(0);"   class="">
                            <i class="layui-icon"></i>
                            <span>Demande</span>
                        </a>
                    </dd>

                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Paiement salaire</span>
                        </a>
                    </dd>
                    
                    <dd class="">
                        <a href="javascript:void(0);"  class="">
                            <i class="layui-icon"></i>
                            <span>Paiement Prestion</span>
                        </a>
                    </dd>
                   
                    <dd class="">
                        <a href="javascript:void(0);" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Fche de paie</span>
                        </a>
                    </dd>
                    </dd>
                  
                </dl>
            </li>
            {{-- conge --}}
            <li class="layui-nav-item side-menu-group" app="personnel" title="Organization" style="height: auto;">
                <a  href="javascript:void(0);"><i class="menu-icon fi fi-rr-add-folder"></i>
                    <span>Congés</span>
                    <i class="layui-icon layui-icon-down layui-nav-more"></i>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="javascript:void(0);" link="/personnel/position/" title="Position" class="">
                            <i class="layui-icon"></i>
                            <span>Demande</span>
                        </a>
                    </dd>
                    <dd class="layui-this">
                        <a href="javascript:void(0);" title="Department" class="">
                            <i class="layui-icon"></i>
                            <span>Liste congés</span>
                        </a>
                    </dd>
                    
                   
                  
                </dl>
            </li>

            
           
        </ul>
    </div>
</div>