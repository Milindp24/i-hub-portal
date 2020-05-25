@extends('admin.layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<h3 class="page-title">Add Events</h1>
    @endsection

    @section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-header text-white main-color">
                            <h4 class="mt-0 header-title">Event Details</h4>
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
                            <form role="form" method="POST" action="{{url('admin/insert_events')}}">
                                {{csrf_field()}}
                                <input class="form-control" type="hidden" id="admin_id" name="admin_id" value="1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Type<sup style="color: red">*</sup></label>
                                        <select class="form-control" id="evnt_type_id" name="evnt_type_id" required>
                                            <option value="" selected disabled>-- Select Event Type --</option>
                                            <option value="1">Demo 1</option>
                                            <option value="2">Demo 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Event Name<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="text" id="event_name" name="event_name" placeholder="Event Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Description</label>
                                        <textarea class="form-control" type="text" id="event_desc" name="event_desc"
                                            placeholder="Event Desciption"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Event Venue<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="text" id="evnt_venue" name="evnt_venue" placeholder="Event Venue" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Date<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="date" id="evnt_date" name="evnt_date" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event From<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="time" id="evnt_from" name="evnt_from" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event To<sup style="color: red">*</sup></label>
                                        <input class="form-control" type="time" id="evnt_to" name="evnt_to" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook Url</label>
                                        <input class="form-control" type="text" id="facebook_url" name="facebook_url">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Web Url</label>
                                        <input class="form-control" type="text" id="web_url" name="web_url">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Standard Image</label>
                                        <!-- <input class="form-control" type="file" id="std_img_url" name="std_img_url"> -->
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" id="banner_img_url" name="std_img_url">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Banner Image</label>
                                        <!-- <input class="form-control" type="file" id="banner_img_url" name="banner_img_url"> -->
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" id="banner_img_url" name="banner_img_url">
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