<div class="site-header d-none d-lg-block">
    <div class="header-middle pt--10 pb--10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ">
                    <a href="<?= BASE_URL ?>" class="site-brand">
                        <img src="<?= BASE_URL ?>/assets/client/image/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="header-phone ">
                        <div class="icon">
                            <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="text">
                            <p>Hỗ trợ miễn phí 24/7</p>
                            <p class="font-weight-bold number">+01-202-555-0181</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            <li class="menu-item">
                                <a href="<?= BASE_URL ?>">Trang chủ</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">Giới thiệu</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">Liên hệ</a>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">Tin tức</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom pb--10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <nav class="category-nav">
                        <div>
                            <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Thể loại</a>
                            <ul class="category-menu">
                                <?php foreach ($categories as $category) : ?>
                                    <li class="cat-item">
                                        <a href="<?= BASE_URL . '?act=book-list-by-category&id=' . $category['id'] ?>"><?= $category['ten_the_loai'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="header-search-block">
                        <form action='?act=book-search' method="post" onsubmit="return validateForm()">
                            <input type="text" id="keyword" value="<?= isset($_SESSION['search-keyword']) ? $_SESSION['search-keyword'] : null ?>" name="keyword" placeholder="Tìm kiếm sách tại đây">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-navigation flex-lg-right">
                        <div class="cart-widget">
                            <div class="login-block">
                                <?php if (isset($_SESSION['user'])) : ?>
                                    <div class='btn-group'>
                                        <button class='btn btn-warning btn-sm dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                            <?= $_SESSION['user']['tai_khoan'] ?>
                                        </button>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='<?= BASE_URL . '?act=user-detail&id=' . $_SESSION['user']['id'] ?>'>Hồ sơ</a></li>
                                            <?= ($_SESSION['user']['vai_tro'] == 1) ? "<li><a class='dropdown-item' href=" . BASE_URL_ADMIN . ">Quản trị Admin</a></li>" : null ?>
                                            <li>
                                                <hr class='dropdown-divider'>
                                            </li>
                                            <li><a class='dropdown-item' href='<?= BASE_URL . '?act=logout' ?>'>Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                <?php else : ?>
                                    <a href='<?= BASE_URL . '?act=login' ?>' class='font-weight-bold'>Đăng nhập</a> <br>
                                    <span>hoặc</span><a href='<?= BASE_URL . '?act=login' ?>'>Đăng ký</a>
                                <?php endif ?>

                            </div>
                            <div class="cart-block">
                                <div class="cart-total">
                                    <span class="text-number">
                                        1
                                    </span>
                                    <span class="text-item">
                                        Giỏ hàng
                                    </span>
                                    <span class="price">
                                        £0.00
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="cart-dropdown-block">
                                    <div class=" single-cart-block ">
                                        <div class="cart-product">
                                            <a href="product-details.html" class="image">
                                                <img src="<?= BASE_URL ?>/assets/client/image/products/cart-product-1.jpg" alt="">
                                            </a>
                                            <div class="content">
                                                <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                        Astro Zoom AZ421 16 MP</a>
                                                </h3>
                                                <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                                <button class="cross-btn"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" single-cart-block ">
                                        <div class="btn-block">
                                            <a href="<?= BASE_URL . '?act=cart-list' ?>" class="btn">Xem giỏ hàng <i class="fas fa-chevron-right"></i></a>
                                            <a href="checkout.html" class="btn btn--primary">Thanh toán <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        var searchKeyword = document.getElementById("keyword").value;
        if (searchKeyword == "") {
            return false;
        }
        return true;
    }
</script>