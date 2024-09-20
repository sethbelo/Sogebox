@extends('layouts.app')
@section('content')
@include('layouts.reception.navbar')
<div id="main_body" class="layui-body">

    <div class="layui-progress" lay-filter="pace">
        <div class="layui-progress-bar layui-bg-orange" style="width: 0%; display: none;" lay-percent="0%"></div>
    </div>

    <div class="layui-tab layui-tab-card" lay-allowclose="true" lay-filter="zkTab" id="zk-layui-tab">

    
        <div class="layui-tab-content" id="nav-tabContent">

        
            <div class="layui-tab-item layui-show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                <div class="container-fluid">
                    {{--  --}}
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="page-title mb-3 mt-3">Controlleur des Commandes </h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Reservations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    {{-- Panel --}}
                    <div class="row mt-4">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>112</h3>
										<span>Projects</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
									<div class="dash-widget-info">
										<h3>44</h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
									<div class="dash-widget-info">
										<h3>37</h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<h3>218</h3>
										<span>Employees</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                    {{-- Liste --}}
                    <div class="row">
                        {{-- Commande --}}
						<div class="col-md-8 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Liste de commande</h3>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td><a href="invoice-view.html">#INV-0001</a></td>
													<td>
														<h6><a href="#">Global Technologies</a></h6>
													</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
													<td>
														<span class="badge bg-inverse-warning">Partially Paid</span>
													</td>
												</tr>
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="invoices.html">Voir toutes les factures</a>
								</div>
							</div>
						</div>
                        {{-- Livraison --}}
						<div class="col-md-4 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Commande disponible </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Payment Type</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice-view.html">#INV-0001</a></td>
													<td>
														<h6><a href="#">Global Technologies</a></h6>
													</td>
													<td>Paypal</td>
												
												</tr>
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="payments.html">Afficher tous les paiements</a>
								</div>
							</div>
						</div>
					</div>
                </div>

            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
        </div>
    </div>

</div>

<!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">

                        <div class="col-md-4 mb-3">
                           
                            <select class="custom-select" id="validationDefault04" required>
                              <option selected disabled value="">Choose...</option>
                              <option>Produits</option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-4">
                            <input type="number" class="form-control" placeholder="Quantite">
                        </div>

                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" placeholder="Observation">
                        </div>
                        <div class="col-md-2 mb-2">
                            {{-- <label for="validationDefault04">State</label> --}}
                            <input type="submit" class="btn btn-primary mb-2" value="Add">
                        </div>
                      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
        </div>
    </div>
  
{{--  --}}
@endsection