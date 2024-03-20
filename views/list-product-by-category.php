<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $listAllSachCungTheLoai[0]['tl_ten_the_loai'] ?? null ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--=================================
        Home Slider Tab
        ===================================== -->
<section class="section-padding">
    <h2 class="sr-only">Home Tab Slider Section</h2>
    <div class="container">
        <div class="sb-custom-tab">
            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="shop-tab" data-bs-toggle="tab" href="#shop" role="tab" aria-controls="shop" aria-selected="true">
                        Featured Products
                    </a>
                    <span class="arrow-icon"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="men-tab" data-bs-toggle="tab" href="#men" role="tab" aria-controls="men" aria-selected="true">
                        New Arrivals
                    </a>
                    <span class="arrow-icon"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="woman-tab" data-bs-toggle="tab" href="#woman" role="tab" aria-controls="woman" aria-selected="false">
                        Most view products
                    </a>
                    <span class="arrow-icon"></span>
                </li>
            </ul> -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                    <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                        <!-- Begin Featured Products -->
                        <?php foreach ($listAllSachCungTheLoai as $sanPhamDacSac) : ?>
                            <div class="single-slide">
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author"> <?= $sanPhamDacSac['tg_ten_tac_gia'] ?> </a>
                                            <h3>
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPhamDacSac['s_id'] ?>"><?= $sanPhamDacSac['s_ten_sach'] ?></a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="<?= BASE_URL . $sanPhamDacSac['s_hinh_nen'] ?>" alt="" />
                                                <div class="hover-contents">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPhamDacSac['s_id'] ?>" class="hover-image">
                                                        <img src="<?= BASE_URL . $sanPhamDacSac['s_hinh_nen'] ?>" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£<?= $sanPhamDacSac['s_gia'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- End Featured Products -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
        Footer
        ===================================== -->
<!-- Modal -->
<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="product-details-modal">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Product Details Slider Big Image-->
                        <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".product-slider-nav"
                                    }'>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-1.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-2.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-3.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-4.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-5.jpg" alt="">
                            </div>
                        </div>
                        <!-- Product Details Slider Nav -->
                        <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-1.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-2.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-3.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-4.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="<?= BASE_URL ?>/assets/client/image/products/product-details-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt--30 mt-lg--30">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                            <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                            <ul class="list-unstyled">
                                <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                <li>Product Code: <span class="list-value"> model1</span></li>
                                <li>Reward Points: <span class="list-value"> 200</span></li>
                                <li>Availability: <span class="list-value"> In Stock</span></li>
                            </ul>
                            <div class="price-block">
                                <span class="price-new">£73.79</span>
                                <del class="price-old">£91.86</del>
                            </div>
                            <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="#">(1 Reviews)</a> <span>|</span>
                                    <a href="#">Write a review</a>
                                </div>
                            </div>
                            <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                    the Dust with ruffles
                                    at the bottom
                                    of the
                                    dress.</p>
                            </article>
                            <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Qty</span>
                                    <input type="number" class="form-control text-center" value="1">
                                </div>
                                <div class="add-cart-btn">
                                    <a href="#" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                </div>
                            </div>
                            <div class="compare-wishlist-row">
                                <a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                <a href="#" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="widget-social-share">
                    <span class="widget-label">Share:</span>
                    <div class="modal-social-share">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--=================================
    Brands Slider
    ===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Brand Slider</h2>
    <div class="container">
        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-1.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-2.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-3.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-4.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-5.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-6.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-1.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="<?= BASE_URL ?>/assets/client/image/others/brand-2.jpg" alt="">
            </div>
        </div>
    </div>
</section>