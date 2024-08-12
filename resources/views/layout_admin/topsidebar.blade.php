<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"
                        href="{{ route('dashboard_admin') }}" aria-expanded="false"><i class="icon-Car-Wheel"></i><span
                            class="hide-menu">Dashboard
                        </span></a>
                </li>
                <li class="sidebar-item mega-dropdown"> <a class="sidebar-link waves-effect waves-dark"
                        href="{{ route('product.index') }}" aria-expanded="false"><i
                            class="icon-Duplicate-Window"></i><span class="hide-menu">Product</span></a>
                </li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Charts</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link"
                        href="javascript:void(0)" aria-expanded="false"><i class="icon-Neutron"></i><span
                            class="hide-menu">Order</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('orders.create') }}" aria-expanded="false"><i
                                    class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu">
                                    Pesanan Unit</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"
                                href="{{ route('orders.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-chemical-weapon"></i><span class="hide-menu">Daftar Pesanan
                                    Unit</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
