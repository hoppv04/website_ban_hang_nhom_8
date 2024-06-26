<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row  mb--60">
            <div class="col-lg-5 mb--30">
                <!-- Product Details Slider Big Image-->
                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": false,
              "draggable": false,
              "swipe": false,
              }'>
                    <div class="single-slide">
                        <img src="<?= BASE_URL . $book['hinh_nen'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product-details-info pl-lg--30 ">
                    <h3 class="product-title"><?= $book['ten_sach'] ?></h3>
                    <ul class="list-unstyled">
                        <li>Mã sách: <span class="list-value"> book-<?= $book['s_id'] ?></span></li>
                        <li>Thể loại: <a href="#!" class="list-value font-weight-bold"> <?= $book['tl_ten_the_loai'] ?></a></li>
                        <li>Tác giả: <a href="#!" class="list-value font-weight-bold">
                                <?php
                                if (empty($authors)) {
                                    echo 'Không có tác giả';
                                } else {
                                    // Đếm số lượng phần tử trong mảng
                                    $totalAuthors = count($authors);
                                    $i = 0; // Biến để theo dõi vị trí của phần tử

                                    foreach ($authors as $author) {
                                        echo $author['tg_ten_tac_gia'];

                                        if (++$i !== $totalAuthors) {
                                            echo ', ';
                                        }
                                    }
                                }

                                ?>
                            </a></li>
                        <li>Số trang: <span class="list-value"> <?= $book['s_so_trang'] ?></span></li>
                        <li>Loại bìa: <span class="list-value"> <?= $book['s_loai_bia'] ? 'Bìa cứng' : 'Bìa mềm' ?></span></li>
                        <li>Kích thước: <span class="list-value"> <?= $book['kt_ten_kich_thuoc'] ?></span></li>
                        <li>Ngày ra mắt: <span class="list-value"> <?= getDateFromDatabase($book['s_ngay_ra_mat']) ?></span></li>
                        <li>Lượt xem: <span class="list-value"> <?= $book['s_luot_xem'] ?></span></li>
                        <li>Số lượng tồn kho: <span class="list-value"> <?= $book['s_so_luong_ton_kho'] != 0 ? $book['s_so_luong_ton_kho'] : 'Hết hàng' ?></span></li>
                        <li>Nhà xuất bản: <a href="#!" class="list-value font-weight-bold"> <?= $book['nxb_ten_nha_xuat_ban'] ?></a></li>
                        <li>Công ty phát hành: <a href="#" class="list-value font-weight-bold"> <?= $book['ctph_ten_cong_ty_phat_hanh'] ?></a></li>

                    </ul>
                    <div class="price-block">
                        <span class="price-new"><?= formatCurrencyToVND($book['gia']) ?></span>
                    </div>
                    <article class="product-details-article">
                        <h4 class="sr-only">Product Summery</h4>
                    </article>
                    <div class="add-to-cart-row">
                        <div class="count-input-block">
                            <span class="widget-label">Số lượng</span>
                            <input type="number" id="quantityInput" class="form-control text-center" value="1">
                        </div>
                        <div class="add-cart-btn">
                            <a id="addToCartBtn" href="<?= BASE_URL . '?act=cart-add&bookId=' . $book['s_id'] . '&quantity=1' ?>" class="btn btn-outlined--primary <?= $book['s_so_luong_ton_kho'] == 0 ? 'disabled' : null ?>"><span class="plus-icon">+</span>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <span style="margin-top: 8px;"><?= isset($_SESSION['error-quantity']) ? $_SESSION['error-quantity'] : null ?></span>
                </div>
            </div>
        </div>
        <div class="sb-custom-tab review-tab section-padding">
            <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                        Mô tả
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">
                        Đánh giá (<?= getQuantityRowForComment($book['s_id']) ?>)
                    </a>
                </li>
            </ul>
            <div class="tab-content space-db--20" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                    <article class="review-article">
                        <h1 class="sr-only">Tab Article</h1>
                        <p><?= $book['mo_ta'] ?></p>
                    </article>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                    <div class="review-wrapper">
                        <?php foreach ($listComments as $comment) : ?>
                            <div class="review-comment mb--20">
                                <div class="avatar">
                                    <img src="<?= BASE_URL ?>/assets/client/image/icon/author-logo.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="rating-block mb--15">
                                        <?php
                                        for ($i = 0; $i < 5; ++$i) {
                                            if ($i < $comment['bl_danh_gia']) {
                                                echo "<span class='ion-android-star-outline star_on'></span>";
                                            } else {
                                                echo "<span class='ion-android-star-outline'></span>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <h6 class="author"><?= $comment['nd_ho_ten'] ?> –– <span class="font-weight-400"><?= getDateFromDatabase($comment['bl_ngay_binh_luan']) ?></span>
                                    </h6>
                                    <p><?= $comment['bl_noi_dung'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <h2 class="title-lg mb--20 pt--15">Viết bình luận</h2>
                        <div class="rating-row pt-2" id='comment-form'>
                            <form action="" method="post">
                                <input type="hidden" name="id-sach" value="<?= $book['id'] ?>">
                                <div class="rating-row pt-2">
                                    <p class="d-block">Đánh giá của bạn</p>
                                    <span class="rating-widget-block">
                                        <input type="radio" name="star" value='5' id="star1">
                                        <label for="star1"></label>
                                        <input type="radio" name="star" value='4' id="star2">
                                        <label for="star2"></label>
                                        <input type="radio" name="star" value='3' id="star3">
                                        <label for="star3"></label>
                                        <input type="radio" name="star" value='2' id="star4">
                                        <label for="star4"></label>
                                        <input type="radio" name="star" value='1' id="star5">
                                        <label for="star5"></label>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Nội dung</label>
                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                            <?= isset($_SESSION['errors']['noi_dung']) ? "<span class='error-message'>{$_SESSION['errors']['noi_dung']}</span>" : null ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <?php if (isset($_SESSION['user'])) : ?>
                                            <div class="submit-btn">
                                                <button type="submit" class="btn btn-black">Đăng</button>
                                            </div>
                                        <?php else : ?>
                                            <div class="submit-btn">
                                                <a href="<?= BASE_URL . '?act=login' ?>" class="btn btn-black">Bạn phải đăng nhập để sử dụng chức năng này</a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
    <section class="">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Sản phẩm tương tự</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'>
                <?php foreach ($listBookCungTheLoai as $bookCungTheLoai) : ?>
                    <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                                <h3><a href="<?= BASE_URL . '?act=book-detail&id=' . $bookCungTheLoai['id'] ?>"><?= $bookCungTheLoai['ten_sach'] ?></a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="<?= BASE_URL . $bookCungTheLoai['hinh_nen'] ?>" alt="">
                                    <div class="hover-contents">
                                        <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $bookCungTheLoai['id'] ?>" class="hover-image">
                                            <a href="<?= BASE_URL . '?act=book-detail&id=' . $bookCungTheLoai['id'] ?>" class="hover-image">
                                                <img src="<?= BASE_URL . $bookCungTheLoai['hinh_nen'] ?>" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price"><?= formatCurrencyToVND($bookCungTheLoai['gia']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
</div>
<?php
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}

if (isset($_SESSION['error-quantity'])) {
    unset($_SESSION['error-quantity']);
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('quantityInput');
        const addToCartBtn = document.getElementById('addToCartBtn');

        quantityInput.addEventListener('change', function() {
            let quantity = this.value;
            let bookId = <?= $book['s_id'] ?>;
            let baseUrl = '<?= BASE_URL ?>';
            addToCartBtn.href = baseUrl + '?act=cart-add&bookId=' + bookId + '&quantity=' + quantity;
        });
    });
</script>