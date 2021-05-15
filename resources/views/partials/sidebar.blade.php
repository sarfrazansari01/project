<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/pages" class="brand-link">
        <img src="{{ URL::asset('admin/dist/img/white-logo.png') }}" alt="Dr Sharda Ayurveda" class="brand-image img-circle elevation-3" style="max-height: 40px;">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pages" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Summary</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pages/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form</p>
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