<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

<!-- LOGO -->
<div class="topbar-left">
    <div class="">
        <!--<a href="index" class="logo text-center">Admiria</a>-->
        <a href="index" class="logo"><img src="{{ URL::asset('admin_assets/images/logo-sm.png') }}" height="36" alt="logo"></a>
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
                <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
            </li>

            <?php
                $token = session()->get('token');
            ?>

            @if($token == '')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple-plus"></i> <span> Team Management <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="#" > Add Team </a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-file-document-box"></i><span> Apply For Grant </span></a>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-clipboard-text"></i><span> View Your Application </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box-outline"></i> <span> User Profile <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="#" > Add Social Tags </a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
