<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= bloginfo('name'); ?></title>

    <meta name="language" content="Vietnamese,vn" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Chuyên sửa các dòng loa bluetooth cao cấp như : JBL , Harman Kardon , NAIM MUSO , XIAOMI , BEATS , Sony , BOSE , MARSHAL.sửa loa bluetooth, địa chỉ sửa loa bluetooth tphcm, chuyên sửa loa bluetooth, cách sửa loa bluetooth mini, cách sửa loa bluetooth bị rè, cửa hàng sửa loa bluetooth, cách sửa loa bluetooth, sửa loa bluetooth anker, sửa loa bluetooth bị rè, sửa loa bose bluetooth, sửa loa bluetooth jbl bị rè, sửa chữa loa bluetooth, cách sửa loa bluetooth không sạc được" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/assets/img/logo.png" />
    <meta name="theme-color" content="#ffffff" />
    <meta property="og:site_name" content="<?= bloginfo('name'); ?>" />
    <meta property="fb:app_id" content="100064936560700" />
    <meta property="og:url" content="<?= bloginfo('url'); ?>" />
    <meta property="og:title" content="<?= bloginfo('name'); ?>" />
    <meta property="og:description" content="Chuyên sửa các dòng loa bluetooth cao cấp như : JBL , Harman Kardon , NAIM MUSO , XIAOMI , BEATS , Sony , BOSE , MARSHAL.sửa loa bluetooth, địa chỉ sửa loa bluetooth tphcm, chuyên sửa loa bluetooth, cách sửa loa bluetooth mini, cách sửa loa bluetooth bị rè, cửa hàng sửa loa bluetooth, cách sửa loa bluetooth, sửa loa bluetooth anker, sửa loa bluetooth bị rè, sửa loa bose bluetooth, sửa loa bluetooth jbl bị rè, sửa chữa loa bluetooth, cách sửa loa bluetooth không sạc được" />
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/img/logo.png" />
    <meta property="trumbua:full_image" content="<?= get_template_directory_uri() ?>/assets/img/logo.png" />
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/assets/img/logo.png" />
    <link rel="icon" sizes="16x16 32x32" href="<?= get_template_directory_uri() ?>/assets/img/logo.png" />

    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/assets/css/main.css" />
</head>

<body class="<?= body_class() ?>">
    <header class="header container">
        <div class="top">
            <div class="logo">
                <?= get_custom_logo() ?>
            </div>
            <div class="right">
                <div class="search" id="show-search-form">
                    <i class="fas fa-search"></i>
                    <div class="form-search" id="search-form">
                        <form action="<?= bloginfo('url') ?>" class="form">
                            <input type="text" name="s" placeholder="Tìm kiếm...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="info">
                    <div>
                        <i class="fa-solid fa-clock"></i>
                        <?= get_theme_mod('info_basic_work_time') ?>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone"></i>
                        <?= get_theme_mod('info_basic_phone') ?>
                    </div>
                </div>
            </div>
            <div class="bar">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <?php wp_nav_menu() ?>

    </header>