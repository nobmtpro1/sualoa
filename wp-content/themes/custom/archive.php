<?= get_header() ?>

<div class="category-page container">
    <h1 class="category-title"> <?= single_cat_title() ?> <?= is_search() ? 'Tìm kiếm: ' . @$_GET['s'] : '' ?></h1>
    <?= category_description() ?>
    <div class="main-content">
        <div class="left">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <?php $category = @get_the_category()[0]; ?>
                    <div class="post">
                        <a href="<?= get_category_link($category) ?>" class="post-category">
                            <?= @$category->name ?>
                        </a>
                        <h2 class="post-title">
                            <a href="<?= get_permalink(get_the_ID()) ?>"><?php the_title() ?></a>
                        </h2>
                        <div class="post-date">
                            POSTED ON <span><?php the_date() ?></span>
                        </div>
                        <a class="img" href="<?= get_permalink(get_the_ID()) ?>"><img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt=""></a>

                        <?php the_excerpt(); ?>
                        <div class="post-button">
                            <a href="<?= get_permalink(get_the_ID()) ?>">Continue reading &rarr;</a>
                        </div>

                        <div class="post-bottom">
                            Posted in <a href="<?= get_category_link($category) ?>">
                                Tuyển dụng
                            </a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

            <div class="paginate">
                <?= paginate_links(); ?>
            </div>

        </div>
        <div class="right">
            <div class="list">
                <h2>TIN TỨC GẦN ĐÂY</h2>
                <ul>
                    <?php
                    $newsCategory = get_category_by_slug('tin-tuc');
                    $latestNews = (new WP_Query([
                        'post_type' => 'post',
                        'category__and' => $newsCategory->term_id,
                        'orderby'   => array(
                            'date' => 'DESC',
                        ),
                        'posts_per_page' => 5
                    ]));
                    ?>
                    <?php foreach ($latestNews->posts as $post) : ?>
                        <li>
                            <div class="date">
                                <span><?= date("d", strtotime($post->post_date)); ?></span>
                                <span>Th<?= date("m", strtotime($post->post_date)); ?></span>
                            </div>
                            <h3> <a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title ?></a> </h3>
                        </li>
                    <?php endforeach;
                    wp_reset_query(); ?>
                </ul>
            </div>
            <div class="list">
                <h2>CHUYÊN MỤC</h2>
                <ul>
                    <?php
                    $categories = get_categories();
                    ?>
                    <?php foreach ($categories as $category) : ?>
                        <li>
                            <h3> <a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a> (<?= $category->category_count ?>)</h3>
                        </li>
                    <?php endforeach;
                    wp_reset_query(); ?>

                </ul>
            </div>
        </div>
    </div>


</div>

<?= get_footer() ?>