<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

<!-- LOGO -->
<div class="topbar-left">
    <div class="">
        <!--<a href="index" class="logo text-center">Admiria</a>-->
        <a href="{{url('admin/dashboard')}}" class="logo"><img src="{{ URL::asset('admin_assets/images/i-hub-light.png') }}" height="56" alt="logo"></a>
    </div>
</div>
<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main </li>
            <!-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span>  Dashboard <span class="badge badge-pill badge-primary pull-right">20+</span></span> </a>
                <ul class="list-unstyled">
                    <li><a href="index">Dashboard One</a></li>
                    <li><a href="dashboard-2">Dashboard Two</a></li>
                </ul>
            </li> -->

            <li>
                <a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
            </li>


            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-calendar-check"></i> <span> Event Management <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/add_events')}}" > Add Events </a></li>
                    <li><a href="{{url('admin/event_list')}}" > Event List </a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-alert-box"></i> <span> Notice Management <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/add_notice')}}" > Add Notice </a></li>
                    <li><a href="{{url('admin/notice_list')}}" > Notice List </a></li>
                </ul>
            </li>
                
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
