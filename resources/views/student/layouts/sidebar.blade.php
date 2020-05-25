<!-- Top Bar Start -->
<div class="topbar">

<nav class="navbar-custom">
    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
        <div class="search-bar">
            <input class="search-input" type="search" placeholder="Search" />
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
            </a>
        </div>
    </div>

    <ul class="list-inline float-right mb-0">
        <!-- Fullscreen -->
        <li class="list-inline-item dropdown notification-list hidden-xs-down">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
        </li>

        <!-- User-->
        <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <img src="{{ URL::asset('admin_assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
            </div>
        </li>
    </ul>
    <!-- Page title -->
    <ul class="list-inline menu-left mb-0">
        <li class="list-inline-item">
            <button type="button" class="button-menu-mobile open-left waves-effect">
                <i class="ion-navicon"></i>
            </button>
        </li>
        <li class="hide-phone list-inline-item app-search">
            @yield('breadcrumb') 
        </li>
    </ul>
    <div class="clearfix"></div>
</nav>
</div>
<!-- Top Bar End -->