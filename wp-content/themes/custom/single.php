<?= get_header() ?>
<?php $category = @get_the_category()[0];  ?>
<div class="post-page">
    <div class="banner container">
        <a href="<?= get_category_link($category) ?>" class="category"><?= $category->name ?></a>
        <h1 class="title"><?php the_title() ?></h1>
        <div class="date">POSTED ON <?= get_the_date() ?></div>
    </div>
    <div class="content container">
        <?php the_content() ?>
    </div>
    <div class="owner container">
        <div class="logo">
            <?= get_custom_logo() ?>
        </div>
        <div class="text">
            <div class="name">VÕ VĂN HẢI</div>
            <div class="description">
                Tôi là Võ Văn Hải hiện là Giám đốc kỹ thuật tại trung tâm sửa điện lạnh - điện tử Suadienlanh.vn - Là một chuyên gia thuộc lĩnh vực điện lạnh hơn 10 năm qua. Tôi mong muốn chia sẻ những kiến thức chuyên môn cần thiết thông trên website về điện lạnh - điện tử đến cho tất cả mọi người.
            </div>
        </div>
    </div>
    <div class="links container">
        <?php $prev = get_previous_post(true);
        $next = get_next_post(true);  ?>
        <?php if ($prev) : ?>
            <a href="<?= get_permalink($prev) ?>"><i class="fa-solid fa-angle-left"></i> <?= $prev->post_title ?></a>
        <?php endif ?>
        <?php if ($next) : ?>
            <a href="<?= get_permalink($next) ?>"><?= $next->post_title ?> <i class="fa-solid fa-angle-right"></i> </a>
        <?php endif ?>
    </div>
</div>

<?= get_footer() ?>