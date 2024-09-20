@extends('layouts.app')

@section('content')


<div id="id_app_content" class="layui-fluid">

    <div class="layui-row layui-col-space22" style="padding-top: 20px;">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header"><i class="fi fi-rr-apps"></i>&nbsp;Systeme</div>
                <div class="layui-card-body">
                    <div class="layui-row pading-20" >

                        {{-- gouge --}}
                        <div class="layui-col-md6">
                           <div class="card-chart">
                                <div id="salesChart" style="height: 400px; width: 100%; float: center;"></div>
                           </div>
                        </div>

                        <div class="layui-col-md6 ">
                            <div class="card-chart">
                                <div id="productionChart" style="height: 400px; width: 100%; float: center;"></div>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="layui-row layui-col-space22">

        <div class="layui-col-md7">
            <div class="layui-card">
                <div class="layui-card-header"><i class="fi fi-rr-stats"></i>&nbsp;Activité commande récente</div>
                <div class="layui-card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Commande</th>
                            <th scope="col">Date d'affichage</th>
                            <th scope="col">Type de paiement</th>
                          </tr>
                        </thead>Type de paiement
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="layui-col-md5">
            <div class="layui-card">
                <div class="layui-card-header"><i class="fi fi-rr-bars-staggered"></i>&nbsp;Entrée de la revue
                    <div class="layui-form r dashboard-toolbar" lay-filter="toolbar">
                        <input type="checkbox" id="id_view_leave" name="viewLeave" lay-filter="view_leave"
                            lay-skin="switch">
                        <div class="layui-unselect layui-form-switch" lay-skin="_switch"><em></em><i></i></div>
                        <span style="margin-right: 50px">Voir</span>
                        
                    </div>
                </div>
                <div class="layui-card-body">
                    <div id="dashboard-table" style="overflow: auto; height: 184px;">
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Compte*</th>
                                <th scope="col">Montant</th>
                                <th scope="col">Partie</th>
                                <th scope="col">Statut</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection