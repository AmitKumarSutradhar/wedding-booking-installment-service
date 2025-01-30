<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">MAIN</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('seller.dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Booking management -->
        <li class="nav-item nav-category">Booking management</li>
            <!-- Bookings -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#bookings" aria-expanded="false"
                   aria-controls="bookings">
                    <i class="menu-icon mdi mdi-calendar"></i>
                    <span class="menu-title">Bookings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="bookings">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','customized') }}">Customized Requests</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','verify-request') }}">Verify Requests</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','booking-requests') }}">Booking Requests</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','offline-payment') }}">Offline Payment List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','accepted') }}">Accepted</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','ongoing') }}">Ongoing</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','completed') }}">Completed</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.booking.index','canceled') }}">Canceled</a></li>
                    </ul>
                </div>
            </li>
            <!-- Bookings -->
        <!-- Booking management -->

        <!-- Promotion management -->
        <li class="nav-item nav-category">Promotion management</li>
            <!-- Advertisements -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title">Advertisements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.advertisements.index') }}">Ads List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seller.advertisements.create') }}">New Ads Request</a></li>
                    </ul>
                </div>
            </li>
            <!-- Advertisements -->
        <!-- Promotion management -->

        <!-- User management -->
        <li class="nav-item nav-category">User Management</li>
            <!-- Customer -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#customers" aria-expanded="false" aria-controls="customers">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title">Customers</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="customers">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.advertisements.index') }}">Customer List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.advertisements.create') }}">Add new customer</a></li>
                    </ul>
                </div>
            </li>
            <!-- Customer -->
        <!-- User management -->

        <!-- Account management -->
        <li class="nav-item nav-category">User Management</li>
            <!-- Account Information -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Account Information</span>
                </a>
            </li>
            <!-- Account Information -->
            <!-- Bank Information -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Bank Information</span>
                </a>
            </li>
            <!-- Bank Information -->
        <!-- Account management -->


        <!-- Service management -->
        <li class="nav-item nav-category">Service management</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-room-service-outline"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Category setup</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Sub category setup</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-tools"></i>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Service List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add new service</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item nav-category">Seller management</li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Onboarding Request</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#vendors" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Seller</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="vendors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Seller List </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Add new Seller </a></li>
                </ul>
            </div>
        </li>

        <!-- Customer management -->
        <li class="nav-item nav-category">Customer Management</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#customers" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-badge"></i>
                <span class="menu-title">Customers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="customers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Customer list </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Add new customer </a></li>
                </ul>
            </div>
        </li>
        <!-- Customer management -->

        <!-- Reports & Analytics management -->
        <li class="nav-item nav-category">Reports & Analytics</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#report-analytics" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-calculator-variant"></i>
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="report-analytics">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Transaction Reports </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Business Reports </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Booking Reports </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Vendor Reports </a></li>
                </ul>
            </div>
        </li>
        <!-- Reports & Analytics management -->

        <!-- System management -->
        <li class="nav-item nav-category">System management</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-tools"></i>
                <span class="menu-title">Setting management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li>
        <!-- System management -->
    </ul>
</nav>
