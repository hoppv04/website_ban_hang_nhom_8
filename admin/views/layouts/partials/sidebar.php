<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL_ADMIN ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">T8 Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>Quản lý người dùng</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=user-create">Thêm mới</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-list"></i>
            <span>Quản lý thể loại</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=categories">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=category-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-at"></i>
            <span>Quản lý tác giả</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=authors">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=author-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-upload"></i>
            <span>Quản lý nhà xuất bản</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=publishers">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=publisher-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
            <span>Quản lý sách</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=books">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=book-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-building"></i>
            <span>Công ty phát hành</span>
        </a>
        <div id="collapse7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=companies">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=company-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-ruler-vertical"></i>
            <span>Quản lý kích thước</span>
        </a>
        <div id="collapse8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=sizes">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=size-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-comment"></i>
            <span>Quản lý bình luận</span>
        </a>
        <div id="collapse9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=comments">Danh sách</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-shopping-bag"></i>
            <span>Quản lý đơn hàng</span>
        </a>
        <div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=orders">Danh sách</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>