<div id="main-wrapper">

    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <a class="navbar-brand" href="#">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="{{ asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                    </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                            data-sidebartype="mini-sidebar">
                            <i class="sl-icon-menu font-20"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <i class="ti-search font-16"></i>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user') }}" class="rounded-circle"
                                width="31">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow">
                                <span class="bg-primary"></span>
                            </span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class="">
                                    <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user"
                                        class="img-circle" width="60">
                                </div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">Steven Tannako</h4>
                                    <p class=" m-b-0">ayongparis@gmail.com</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="https://myprofile.microsoft.com/">
                                <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="https://wallet.google/">
                                <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('mainpage.index') }}">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-l-30 p-10">
                                <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View
                                    Profile</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
