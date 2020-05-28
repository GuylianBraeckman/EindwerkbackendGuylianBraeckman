<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-basket"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Eindwerkbackend <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        USERS
    </div>


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>All users</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add User</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        BrANDS
    </div>


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('brands.index')}}">
            <i class="fas fa-users"></i>
            <span>All brands</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('brands.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add Brands</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        USERS
    </div>


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
            <i class="fas fa-users"></i>
            <span>All categories</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('categories.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add categories</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        USERS
    </div>


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('posts.index')}}">
            <i class="fas fa-users"></i>
            <span>All posts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('posts.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add posts</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        USERS
    </div>


    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('products.index')}}">
            <i class="fas fa-users"></i>
            <span>All products</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('products.create')}}">
            <i class="fas fa-plus-circle"></i>
            <span>Add products</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
