<!-- TAGLINE START-->
<div class="tagline fixed bg-white shadow-sm">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="flex items-center justify-between">
                <ul class="list-none">
                    <li class="inline-flex items-center ms-2">
                        <i data-feather="phone" class="text-green-600 size-4"></i>
                        <a href="tel:+998712330197" class="ms-2 text-gray-700 hover:text-gray-900">+998 71 233-01-97</a>
                    </li>
                    <li class="inline-flex items-center ms-2">
                        <i data-feather="mail" class="text-green-600 size-4"></i>
                        <a href="mailto:contact@example.com" class="ms-2 text-gray-700 hover:text-gray-900">info@uzte.uz</a>
                    </li>
                </ul>

                <ul class="list-none">
                    <li class="inline-flex items-center ms-2">
                        <ul class="list-none">
                            <li class="inline-flex mb-0"><a href="#!" class="text-slate-300 hover:text-green-600"><i data-feather="facebook" class="size-4 align-middle" title="facebook"></i></a></li>
                            <li class="inline-flex ms-2 mb-0"><a href="#!" class="text-slate-300 hover:text-green-600"><i data-feather="instagram" class="size-4 align-middle" title="instagram"></i></a></li>
                            <li class="inline-flex ms-2 mb-0"><a href="#!" class="text-slate-300 hover:text-green-600"><i data-feather="twitter" class="size-4 align-middle" title="twitter"></i></a></li>
                            <li class="inline-flex ms-2 mb-0"><a href="tel:+152534-468-854" class="text-slate-300 hover:text-green-600"><i data-feather="phone" class="size-4 align-middle" title="phone"></i></a></li>
                        </ul><!--end icon-->
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end container-->
</div><!--end tagline-->
<!-- TAGLINE END-->

<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky tagline-height">

    <div class="container h-4">
        <!-- Logo container-->
        <a class="logo" href="/">
            <img src="assets/uzte-logo.png" class="inline-block dark:hidden" alt="">
            <img src="assets/uzte-logo.png" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="auth-login.html" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="size-4 stroke-[3]"></i></a>
            </li>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="auth-signup.html" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li><a href="buy.html" class="sub-menu-item">Buy</a></li>

                <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Grid View </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="grid.html" class="sub-menu-item">Grid Listing</a></li>
                                <li><a href="grid-sidebar.html" class="sub-menu-item">Grid Sidebar </a></li>
                                <li><a href="grid-map.html" class="sub-menu-item">Grid With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> List View </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="list.html" class="sub-menu-item">List Listing</a></li>
                                <li><a href="list-sidebar.html" class="sub-menu-item">List Sidebar </a></li>
                                <li><a href="list-map.html" class="sub-menu-item">List With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Property Detail</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                <li><a href="property-detail-two.html" class="sub-menu-item">Property Detail Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                        <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                        <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agents</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agents.html" class="sub-menu-item">Agents</a></li>
                                <li><a href="agent-profile.html" class="sub-menu-item">Agent Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agencies</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agencies.html" class="sub-menu-item">Agencies</a></li>
                                <li><a href="agency-profile.html" class="sub-menu-item">Agency Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item">Comingsoon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="404.html" class="sub-menu-item">404! Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->