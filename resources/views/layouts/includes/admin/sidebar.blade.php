<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#categories_menu" aria-expanded="false" aria-controls="categories_menu">
                <i class="mdi mdi-package menu-icon"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories_menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/new/category') }}">Add Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Categories</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products_menu" aria-expanded="false" aria-controls="products_menu">
                <i class="mdi mdi-movie menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products_menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/new/book') }}">Add Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/book') }}">View Products</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products_menu" aria-expanded="false" aria-controls="products_menu">
                <i class="mdi mdi-movie menu-icon"></i>
                <span class="menu-title">Quản lý đơn hàng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products_menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/order') }}"><i class="fa fa-building"></i>Toàn bộ đơn hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/order_pending') }}"><i class="fa fa-hospital-o"></i>Đơn hàng đang chờ</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/order_shipped') }}"><i class="glyphicon glyphicon-gift"></i>Đơn hàng đang giao</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/order_delivered') }}"><i class="glyphicon glyphicon-ok-circle"></i>Đơn hàng đã giao</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/order_cancel') }}"><i class="glyphicon glyphicon-remove-circle"></i>Đơn hàng đã hủy</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Sales</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Brands</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#users_menu" aria-expanded="false" aria-controls="users_menu">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users_menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Add User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">View Users</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-view-carousel menu-icon"></i>
                <span class="menu-title">Home Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Site Setting</span>
            </a>
        </li>
    </ul>
</nav>