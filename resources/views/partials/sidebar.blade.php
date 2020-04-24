

{{--    <aside class="main-sidebar sidebar-dark-primary elevation-4">--}}
    <aside class="main-sidebar elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/')}}" class="brand-link">
            <img src="{{URL::to('dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image"
                 style="opacity: .8">
{{--            <span class="brand-text font-weight-light">Bkash</span>--}}
        </a>

        <!-- Sidebar -->
        <br>
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{URL::to('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">ALL IMAM ASIF</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav style="padding-bottom: 3em" class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{url('/')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('widgets')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('navbar')}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Navbar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('charts')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Charts
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                UI Elements
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('general')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{'https://fontawesome.com/icons'}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Font Awesome Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('buttons')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('modal-alert')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item treeview">
                        <a href="{{url(asset('forms'))}}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route('tables')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="{{url(asset('calendar'))}}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-danger right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url(asset('mail-inbox'))}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url(asset('mail-compose'))}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url(asset('mail-read'))}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('profile')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employee-list')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>
                                        Employee List
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Extras
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('forgot-password')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('recover-password')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('lockscreen')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('404')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('500')}}" class="nav-link">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

