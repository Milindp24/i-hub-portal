@extends('admin.layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<h3 class="page-title">Add Notice</h1>
    @endsection

    @section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-header text-white main-color">
                            <h4 class="mt-0 header-title">Notice Details</h4>
                        </div>
                        @if(\Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{\Session::get('success')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <form role="form" method="POST" action="{{url('admin/insert_notice')}}">
                                {{csrf_field()}}
                                <input class="form-control" type="hidden" id="admin_id" name="admin_id" value="1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Notice Type<sup style="color: red">*</sup></label>
                                        <select class="form-control" id="notice_type_id" name="notice_type_id" required>
                                            <option value="" selected disabled>-- Select Event Type --</option>
                                            <option value="1">Notice 1</option>
                                            <option value="2">Notice 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Notice Name<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="text" id="notice_name" name="notice_name" placeholder="Notice Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Notice Description</label>
                                        <textarea class="form-control" type="text" id="notice_details" name="notice_details"
                                            placeholder="Notice Desciption"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="date" id="from_date" name="from_date" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="date" id="to_date" name="to_date" required>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Web Url</label>
                                        <input class="form-control" type="text" id="web_url" name="web_url">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" id="img_url" name="img_url">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" id="file_url" name="file_url">

                                    </div>
                                </div>
                            </div>

                            <div class="actions clearfix text-right pb-2">
                                <button type="submit" class="btn btn-outline-primary waves-effect waves-light"><i class="mdi mdi-subdirectory-arrow-right"></i>&nbsp; Submit</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div> <!-- Page content Wrapper -->
    @endsection

    @section('script')
    @endsection