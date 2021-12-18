<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('') }}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Thái Nguyên</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Trang Tổng Quan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hokhau.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Hộ Khẩu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="list-nhan-khau.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Nhân Khẩu
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="list-tam-tru.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Tạm Trú
                        </p>
                    </a>

                </li>

                </li>
                <li class="nav-item">
                    <a href="list-tam-vang.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Tạm Vắng
                        </p>
                    </a>
                </li>

                </li>
                <li class="nav-item">
                    <a href="list-chuyen-khau.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Chuyển Khẩu
                        </p>
                    </a>
                </li>

                </li>
                <li class="nav-item">
                    <a href="list-tach-khau.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Tách Khẩu
                        </p>
                    </a>
                </li>

                </li>
                <li class="nav-item">
                    <a href="list-vi-pham.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Vi Phạm
                        </p>
                    </a>
                </li>

                </li>
                <li class="nav-item">
                    <a href="list-nhan-vien.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Nhân Viên
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class='nav-link'
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-grid-fill"></i>
                        <span>Đăng xuất</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
