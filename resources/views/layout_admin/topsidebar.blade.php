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
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Echarts</span></a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item"><a href="chart-echart-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-line"></i> <span class="hide-menu">Basic
                                            Charts</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-scatterplot-hexbin"></i>
                                        <span class="hide-menu">Bar Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-pie-doughnut.html"
                                        class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span
                                            class="hide-menu">Pie &amp; Doughnut Chart</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="icon-Increase-Inedit"></i><span
                            class="hide-menu">DD</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                    1.1</span></a></li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                    1.2</span></a></li>
                        <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span class="hide-menu">Menu
                                    1.3</span></a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                            1.3.1</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                            1.3.2</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                            1.3.3</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                            1.3.4</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                    class="mdi mdi-playlist-check"></i><span class="hide-menu"> item
                                    1.4</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
