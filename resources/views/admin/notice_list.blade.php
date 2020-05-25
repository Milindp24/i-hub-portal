@extends('admin.layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('admin_assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin_assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
<link href="{{ URL::asset('admin_assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<h3 class="page-title">Notice List</h1>
    @endsection

    @section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            @if(\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <a href="{{url('admin/add_notice')}}"><button class="btn btn-outline-primary waves-effect waves-light"><i class=" mdi mdi-calendar-plus"></i>&nbsp; Add Notice</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive " cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Notice Type</th>
                                        <th>Admin Id</th>
                                        <th>Notice Name</th>
                                        <th>Notice Details</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th style="width:55px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = '1'; ?>
                                    @foreach($notices as $notice)
                                        <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$notice->notice_type_id}}</td>
                                        <td>{{$notice->admin_id}}</td>
                                        <td>{{$notice->notice_name}}</td>
                                        <td>{{$notice->notice_details}}</td>
                                        <td>{{date('m-d-Y',strtotime($notice->from_date))}}</td>
                                        <td>{{date('m-d-Y',strtotime($notice->to_date))}}</td>
                                        <td><a href="" class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                        </tr>
                                        <?php $i++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            @endsection

            @section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('admin_assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('admin_assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('admin_assets/pages/datatables.init.js') }}"></script>
@endsection