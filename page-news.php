<?php get_header(); ?>

    <div class="p-news">
        <div class="l-container l-container--12">
            <div class="p-news-head">
                <div class="c-heading-section js-visible">
                    <p class="c-heading-section__en u-gradientIn">News</p>
                    <!--<h1 class="c-heading-section__ja u-fadeInMaskLeft">お知らせ</h1>-->
                </div>
            </div>
            <div class="p-news-nav js-visible u-fadeInMask">
                <ul>
                    <?php
                    $query_object = get_queried_object();
                    $current_term = $query_object->slug;

                    $categories = get_categories(['taxonomy' => 'category']);
                    foreach ($categories as $term) {
                        $class = $term->slug;
                        $class .= $term->slug == $current_term? ' current': '';
                        echo sprintf('<li class="%s"><a class="c-link-text" href="%s"><span class="c-link-text__en">%s</span></a></li>',
                            $class,
                            get_term_link($term),
                            $term->cat_name
                        );
                    }
                    ?>
                </ul>
            </div>
            <div class="p-news-list">
                <div class="cm-list-news">

                    <?php if (have_posts()) : ?>
                        <?php get_template_part('template/loop-post') ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="p-news-foot js-visible u-fadeInMask">
                <?php theme_posts_pagination() ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template/cm-cta') ?>
<?php get_footer(); ?>