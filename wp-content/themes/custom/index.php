<?= get_header() ?>
<div class="home-page">
    <div class="banner">
        <div class="container">
            <div class="box">
                <h1><?= bloginfo('name') ?></h1>
                <h2><?= $_SERVER['SERVER_NAME']; ?></h2>
                <ul>
                    <li> Dịch vụ Uy tín – Nhanh chóng</li>
                    <li>Miễn phí kiểm tra thiết bị tại nhà</li>
                    <li>Chính sách bảo hành dài hạn</li>
                </ul>
                <a href="tel:<?= get_theme_mod('info_basic_phone') ?>"><i class="fa-solid fa-phone"></i> <span> Gọi Thợ Ngay</span></a>
            </div>
        </div>
    </div>

    <!-- Kien -->
    <div class="section-content container">
        <div class="wrapper-box-child">
            <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-clock.webp" alt="icon clock">
            <p class="box-title">Thời gian làm việc</p>
            <span class="box-desc"><?= get_theme_mod('info_basic_work_day') ?>: <?= get_theme_mod('info_basic_work_time') ?></span>
        </div>
        <div class="wrapper-box-child">
            <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-moreAccount.webp" alt="icon more account">
            <p class="box-title">Địa chỉ</p>
            <span class="box-desc"><?= get_theme_mod('info_basic_address') ?></span>
        </div>
        <div class="wrapper-box-child">
            <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-moreAccount.webp" alt="icon more account">
            <p class="box-title">HỖ TRỢ KHÁCH HÀNG</p>
            <span class="box-desc"><?= get_theme_mod('info_basic_phone') ?></span>
        </div>
    </div>

    <div class="section-content-choose-us">
        <div class="header-choose-us container">
            <div class="line"></div>
            <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-gift-box.png" alt="icon gift">
            <h2>TẠI SAO NÊN CHỌN CHÚNG TÔI</h2>
            <div class="line"></div>
        </div>
        <div class="container-choose-us container">
            <div class="content-container right">
                <div class="wrapper-box-txt-choose-us">
                    <h4>Uy tín</h4>
                    <span>Cam kết không có tình trạng báo giá ảo, kỹ thuật viên luôn đến đúng giờ hẹn</span>
                </div>
                <div class="wrapper-box-txt-choose-us">
                    <h4>NHANH CHÓNG </h4>
                    <span>Đến tận nhà sửa chữa trong vòng 30 phút từ khi tiếp nhận thông tin khách hàng</span>
                </div>
            </div>
            <div class="circle-img">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-circle-choose-us.webp" alt="bg-circle-choose-us">
                <a href="<?= bloginfo('url') ?>/gioi-thieu" class="btn-see-more">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-reverse-arrow.png" alt="button ic">
                    XEM THÊM
                </a>
            </div>
            <div class="content-container">
                <div class="wrapper-box-txt-choose-us">
                    <h4>GIÁ RẺ</h4>
                    <span>Chi phí luôn được tối ưu đến mức thấp nhất, hỗ trợ miễn phí kiểm tra thiết bị</span>
                </div>
                <div class="wrapper-box-txt-choose-us">
                    <h4>TƯ VẤN 24/7</h4>
                    <span>Hỗ trợ tư vấn khách hàng 24/7 bất kể ngày lễ hay chủ nhật</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section-content-service">
        <div class="header-service container">
            <div class="line"></div>
            <i class="fa-solid fa-bars"></i>
            <h2>DỊCH VỤ SỬA LOA NỔI BẬT</h2>
            <div class="line"></div>
        </div>
        <div class="container-service container">
            <div class="menu-navigation">
                <?php for ($i = 1; $i < 20; $i++) {
                    $name = get_theme_mod('featured_services_name_' . $i);
                    $image = get_theme_mod('featured_services_image_' . $i);
                    $description = get_theme_mod('featured_services_description_' . $i);
                    if (!$name) {
                        continue;
                    }
                ?>
                    <div class="title-menu bottom <?= $i == 1 ? 'active' : '' ?>" data-id="<?= $i ?>">
                        <?= $name ?>
                    </div>
                <?php
                } ?>


            </div>

            <?php for ($i = 1; $i < 20; $i++) {
                $name = get_theme_mod('featured_services_name_' . $i);
                $image = get_theme_mod('featured_services_image_' . $i);
                $description = get_theme_mod('featured_services_description_' . $i);
                if (!$name) {
                    continue;
                }
            ?>
                <div class="menu-desc  <?= $i == 1 ? 'active' : '' ?>" data-id="<?= $i ?>">
                    <img src="<?= wp_get_attachment_image_url($image, 'full') ?>" alt="img bg">
                    <p><?= $name ?></p>
                    <span><?= $description ?></span>
                </div>
            <?php
            } ?>

        </div>
    </div>

    <div class="section-content-our-project">
        <div class="header-content-our-project container">
            <div class="line"></div>
            <i class="fa-solid fa-check"></i>
            <h2>DỰ ÁN CỦA CHÚNG TÔI</h2>
            <div class="line"></div>
        </div>
        <div class="bg-img-our-project container">
            <div class="grid-item item1">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/grid1.webp" alt="bg img">
            </div>
            <div class="grid-item item2">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/grid2.webp" alt="bg img">
            </div>
            <div class="grid-item item3">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/grid3.webp" alt="bg img">
            </div>
            <div class="grid-item item4">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/grid4.webp" alt="bg img">
            </div>
            <div class="grid-item item5">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/grid5.webp" alt="bg img">
            </div>
        </div>
    </div>

    <div class="section-content-achieved">
        <div class="header-content-achieved container">
            <i class="fa-solid fa-plus"></i>
            <h2>NHỮNG GÌ CHÚNG TÔI ĐẠT ĐƯỢC</h2>
        </div>
        <div class="row-item-achieved container">
            <div class="child-item-achieved">
                <div class="title-achieved">KHÁCH HÀNG</div>
                <span>6000+</span>
            </div>
            <div class="child-item-achieved top">
                <div class="title-achieved">ĐỐI TÁC</div>
                <span>100+</span>
            </div>
            <div class="child-item-achieved">
                <div class="title-achieved">NĂM KINH NGHIỆM</div>
                <span>5+</span>
            </div>
        </div>
    </div>

    <div class="section-content-blog">
        <div class="header-content-blog container">
            <div class="line"></div>
            <h2>TIN TỨC GẦN ĐÂY</h2>
            <div class="line"></div>
        </div>
        <div class="container-blog">

            <?php
            $newsCategory = get_category_by_slug('tin-tuc');
            $latestNews = (new WP_Query([
                'post_type' => 'post',
                'category__and' => $newsCategory->term_id,
                'orderby'   => array(
                    'date' => 'DESC',
                ),
                'posts_per_page' => 3
            ]));
            ?>
            <?php foreach ($latestNews->posts as $post) : ?>
                <a href="<?= get_permalink($post) ?>" class="box-blog-item">
                    <div class="image">
                        <img style="width: 100%; height:200px; object-fit:cover" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
                    </div>
                    <h5><?= $post->post_title ?></h5>
                    <p><?= get_the_date('d-m-Y', $post); ?></p>
                    <div class="line"></div>
                    <span><?= get_the_excerpt($post) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Kien -->
</div>

<?= get_footer() ?>