<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{ asset('assets/images/users/2.jpg') }}" alt="users"
                                class="rounded-circle img-fluid" />
                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">Stiven Tannako</h5>
                            <p>Paris Wrought Iron</p>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark"
                        href="{{ route('dashboard_pembeli') }}"aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Dashboards </span>
                    </a>
                </li>
                {{-- @elseif ()
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)"aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Dashboards </span>
                    </a>
                </li>
                @endif --}}

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="#"
                        aria-expanded="false">
                        <i class="icon-Receipt"></i>
                        <span class="hide-menu">Pesan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('order.create') }}" class="sidebar-link">
                                <i class="mdi mdi-email-alert"></i>
                                <span class="hide-menu"> Pesanan Unit </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('order.index') }}" class="sidebar-link">
                                <i class="mdi mdi-email-secure"></i>
                                <span class="hide-menu"> Daftar Pesanan Unit </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="#"
                        aria-expanded="false">
                        <i class="mdi mdi-creation"></i>
                        <span class="hide-menu">Pembayaran</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href={{ route('payment.create') }} class="sidebar-link">
                                <i class="mdi mdi-book-multiple"></i>
                                <span class="hide-menu"> Form Pembayaran </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href={{ route('payment.index') }} class="sidebar-link">
                                <i class="mdi mdi-book-multiple"></i>
                                <span class="hide-menu"> Histori Pesanan </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                        aria-expanded="false"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-directions"></i>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
