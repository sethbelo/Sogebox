@extends('layouts.app')
@section('content')
@include('layouts.reception.navbar')
<div id="main_body" class="layui-body">

    <div class="layui-progress" lay-filter="pace">
        <div class="layui-progress-bar layui-bg-orange" style="width: 0%; display: none;" lay-percent="0%"></div>
    </div>

    <div class="layui-tab layui-tab-card" lay-allowclose="true" lay-filter="zkTab" id="zk-layui-tab">

        <div class="layui-tab-content" id="nav-tabContent">

            {{-- --}}
            <div class="container-fluid">
                {{--  --}}
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="page-title mb-3 mt-3">Reservations (sous commande)</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Reservations</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-striped table-nowrap custom-table mb-0 datatable dataTable no-footer"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 16.4333px;" aria-sort="ascending"
                                                        aria-label="#: activate to sort column descending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 152.317px;"
                                                        aria-label="Lead Name: activate to sort column ascending">Lead
                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 200.967px;"
                                                        aria-label="Email: activate to sort column ascending">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 79.3333px;"
                                                        aria-label="Phone: activate to sort column ascending">Phone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 164.083px;"
                                                        aria-label="Project: activate to sort column ascending">Project
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 122.05px;"
                                                        aria-label="Assigned Staff: activate to sort column ascending">
                                                        Assigned Staff</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 55.2px;"
                                                        aria-label="Status: activate to sort column ascending">Status
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1" style="width: 84.15px;"
                                                        aria-label="Created: activate to sort column ascending">Created
                                                    </th>
                                                    <th class="text-right sorting" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 65.4667px;"
                                                        aria-label="Actions: activate to sort column ascending">Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>
                                                        <h4 class="table-avatar">
                                                            <a href="#" class="avatar">
                                                                <img alt=""src="assets/img/profiles/avatar-11.jpg">
                                                            </a>
                                                            <a href="#">Wilmer Deluna</a>
                                                        </h4>
                                                    </td>
                                                    <td>wilmerdeluna@example.com</td>
                                                    <td>9876543210</td>
                                                    <td><a href="project-view.html">Hospital Administration</a></td>
                                                    <td>
                                                        <ul class="team-members">
                                                            <li>
                                                                <a href="#" title="" data-toggle="tooltip"
                                                                    data-original-title="John Doe"><img alt=""
                                                                        src="assets/img/profiles/avatar-02.jpg"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="" data-toggle="tooltip"
                                                                    data-original-title="Richard Miles"><img alt=""
                                                                        src="assets/img/profiles/avatar-09.jpg"></a>
                                                            </li>
                                                            <li class="dropdown avatar-dropdown">
                                                                <a href="#" class="all-users dropdown-toggle"
                                                                    data-toggle="dropdown" aria-expanded="false">+15</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <div class="avatar-group">
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-02.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-09.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-10.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-05.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-11.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-12.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-13.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-01.jpg">
                                                                        </a>
                                                                        <a class="avatar avatar-xs" href="#">
                                                                            <img alt=""
                                                                                src="assets/img/profiles/avatar-16.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-pagination">
                                                                        <ul class="pagination">
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="#"
                                                                                    aria-label="Previous">
                                                                                    <span aria-hidden="true">«</span>
                                                                                    <span
                                                                                        class="sr-only">Previous</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">2</a></li>
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="#"
                                                                                    aria-label="Next">
                                                                                    <span aria-hidden="true">»</span>
                                                                                    <span class="sr-only">Next</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><span class="badge bg-inverse-success">Working</span></td>
                                                    <td>10 hours ago</td>
                                                    <td class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false"><i
                                                                    class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection