<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-news-detail">
        <div class="l-container l-container--12">
            <div class="p-news-detail-head">
                <div class="c-heading-section js-visible">
                    <p class="c-heading-section__en u-gradientIn">News</p>
                    <p class="c-heading-section__ja u-fadeInMaskLeft">お知らせ</p>
                </div>
            </div>
            <div class="p-news-detail-entry">
                <div class="cm-entry js-visible u-fadeInMask">
                    <div class="cm-entry__title">
                        <h1 data-budoux="data-budoux"><?= get_the_title() ?></h1>
                    </div>
                    <div class="cm-entry__body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
            $pages = [
                'prev' => get_previous_post(),
                'next' => get_next_post()
            ];
            get_the_permalink($pages['next']->ID);
            ?>
            <div class="p-news-detail-foot js-visible u-fadeInMask">
                <div>
                    <?php if ($pages['next']): ?>
                    <a href="<?= get_the_permalink($pages['next']->ID) ?>"><span class="_direction">Prev</span><span class="_date"><?= get_the_time('Y/m/d', $pages['next']->ID) ?></span><span class="_title"><?= get_the_title($pages['next']->ID) ?></span></a>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if ($pages['prev']): ?>
                    <a href="<?= get_the_permalink($pages['prev']->ID) ?>"><span class="_direction">Next</span><span class="_date"><?= get_the_time('Y/m/d', $pages['prev']->ID) ?></span><span class="_title"><?= get_the_title($pages['prev']->ID) ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="p-news-detail-index js-visible u-fadeInMask"><a href="<?= home_url() ?>/news">NEWS_INDEX</a></div>
        </div>
    </div>
    <?php get_template_part('template/cm-cta') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>