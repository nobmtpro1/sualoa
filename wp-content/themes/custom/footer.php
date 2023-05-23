<footer class="footer">
    <div class="footer-contact container">
        <div class="bg-layout-contact">
            <div class="header-contact">
                <div class="line"></div>
                <h2>LIÊN HỆ NGAY CHO CHÚNG TÔI</h2>
                <div class="line"></div>
            </div>
            <div class="form-contact">
                <p><?= get_theme_mod('info_basic_work_day') ?>: <?= get_theme_mod('info_basic_work_time') ?></p>
                <p>☎️ HOTLINE: &nbsp; <a href="tel:<?= get_theme_mod('info_basic_phone') ?>"><?= get_theme_mod('info_basic_phone') ?></a></p>
                <p>ĐỊA CHỈ: <?= get_theme_mod('info_basic_address') ?></p>
            </div>
            <a href="tel:<?= get_theme_mod('info_basic_phone') ?>" class="btn-call">
                <i class="fa-solid fa-phone"></i>
                GỌI THỢ NGAY
            </a>
        </div>
    </div>

    <div class="layout-footer container">
        <div class="box-footer">
            <div class="wrapper-box">
                <h2>GIỚI THIỆU</h2>
                <div class="line"></div>
                <p><?= get_theme_mod('footer_intro') ?></p>
                <strong>Địa Chỉ: <?= get_theme_mod('info_basic_address') ?></strong>
                <a href="tel:<?= get_theme_mod('info_basic_phone') ?>" class="btn-hotline">Hotline <?= get_theme_mod('info_basic_phone') ?></a>
            </div>
            <div class="wrapper-box">
                <h2>HỆ THỐNG CTV</h2>
                <div class="line"></div>
                <p><?= get_theme_mod('footer_system_description') ?></p>
                <!-- <div class="btn-ctv">HỆ THỐNG CTV TẠI TPHCM ⬇️</div>
                <div class="bg-access-social">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-goole.webp" alt="social">
                    <img src="<?= bloginfo('template_directory') ?>/assets/img/bg-mca.webp" alt="social">
                </div> -->
                <div class="box-bg-social">
                    <?php if (get_theme_mod('info_basic_facebook')) : ?>
                        <a target="__blank" href="<?= get_theme_mod('info_basic_facebook') ?>"><i class="fa-brands fa-facebook-f"></i></a>
                    <?php endif ?>
                    <?php if (get_theme_mod('info_basic_instagram')) : ?>
                        <a target="__blank" href="<?= get_theme_mod('info_basic_instagram') ?>"><i class="fa-brands fa-instagram"></i></a>
                    <?php endif ?>
                    <?php if (get_theme_mod('info_basic_tiktok')) : ?>
                        <a target="__blank" href="<?= get_theme_mod('info_basic_tiktok') ?>"> <i class="fa-brands fa-tiktok"></i></a>
                    <?php endif ?>
                    <?php if (get_theme_mod('info_basic_youtube')) : ?>
                        <a target="__blank" href="<?= get_theme_mod('info_basic_youtube') ?>"><i class="fa-brands fa-youtube"></i></a>
                    <?php endif ?>
                </div>
            </div>
            <div class="wrapper-box">
                <h2>DỊCH VỤ NỔI BẬT</h2>
                <div class="line"></div>
                <?php for ($i = 1; $i < 20; $i++) {
                    $name = get_theme_mod('footer_link_name_' . $i);
                    $link = get_theme_mod('footer_link_' . $i);
                    if (!$name) {
                        continue;
                    }
                ?>
                    <a href="<?= $link ?>"><?= $name ?></a>
                    <div class="bg-line"></div>
                <?php
                } ?>
            </div>
        </div>
    </div>

    <div class="box-Copyright container">
        <p>C<?= get_theme_mod('footer_copyright') ?></p>
    </div>


</footer>

<?php wp_footer() ?>
<script src="<?= bloginfo('template_directory') ?>/assets/js/main.js"></script>
</body>

</html>