<?= get_header() ?>
<div class="introduce-page">
    <div class="banner container">
        <h1 class="title"><?php the_title() ?></h1>
    </div>
    <div class="box-introduce-container container">
        <div class="bg-img-introduce">
            <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-dich-vu.webp" alt="img">
            <div class="wrapper-img-introduce">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-dich-vu1.jpg" alt="img">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-dich-vu2.jpg" alt="img">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-dich-vu3.jpg" alt="img">
            </div>
        </div>
        <div class="bg-txt-introduce">
            <div class="box-txt">
                <h2>VỀ CHÚNG TÔI</h2>
                <div class="line"></div>
                <p><?= get_theme_mod('about_us') ?></p>
            </div>
            <div class="box-txt">
                <h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
                <div class="line"></div>
                <p><?= get_theme_mod('our_service_description') ?></p>
                <div class="wrapper-introduce">
                    <?php for ($i = 1; $i < 20; $i++) {
                        $name = get_theme_mod('our_service_' . $i);
                        if (!$name) {
                            continue;
                        }
                    ?>
                        <div class="child-item">✅ <?= $name ?></div>
                    <?php
                    } ?>

                </div>
            </div>
        </div>
    </div>

    <div class="section-content-teachnician-team container">
        <div class="wrapper-content-teach">
            <h2> ĐỘI NGŨ KỸ THUẬT VIÊN </h2>
            <div class="line"></div>
            <p><?= get_theme_mod('our_team') ?></p>
        </div>
        <div class="wrapper-content-teach"></div>
    </div>

    <div class="section-content-customer-support container">
        <h2>CHÍNH SÁCH HỖ TRỢ KHÁCH HÀNG</h2>
        <div class="line"></div>
        <p><?= get_theme_mod('policy') ?></p>
        <div class="bot-customer-support">
            <div class="box-customer-support">
                <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-bat-tay.jpg" alt="img">
            </div>
            <div class="box-customer-supports">
                <div class="child-item">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/ic-like.webp" alt="icon">
                    <span><?= get_theme_mod('policy_1') ?></span>
                </div>
                <div class="child-item">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/icon-card.webp" alt="icon">
                    <span><?= get_theme_mod('policy_2') ?></span>
                </div>
                <div class="child-item">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/icon-create-user.webp" alt="icon">
                    <span><?= get_theme_mod('policy_3') ?></span>
                </div>
                <div class="child-item">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/icon-oclock.webp" alt="icon">
                    <span><?= get_theme_mod('policy_4') ?></span>
                </div>
            </div>
        </div>
    </div>

</div>

<?= get_footer() ?>