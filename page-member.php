<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="p-member">
        <div class="p-member__mv">
            <div class="p-member__mvMask">
                <picture class="js-visible u-fadeInMask u-fadeInPic">
                    <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/member/mv-sp.webp" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/member/mv.webp"/>
                </picture>
            </div>
        </div>
        <div class="l-container l-container--10">
            <div class="p-member__head">
                <div class="c-heading-section js-visible">
                    <p class="c-heading-section__en u-gradientIn">Board Members</p>
                    <!--<h1 class="c-heading-section__ja u-fadeInMaskLeft">社員紹介</h1>-->
                </div>
            </div>
            <div class="p-member__body">
                <?php
                $args = [
                    'post_type' => 'mst_member',
                    'paged' => 1,
                    'posts_per_page' => -1,
                ];
                $wp_query = new WP_Query($args);
                $members = [];
                if (have_posts()) :
                    $index = 0;
                ?>
                <div class="p-member__list">
                    <div class="p-member__listWrap">
                        <?php while (have_posts()) : the_post(); ?>
                        <?php
                            $pic = get_field('プロフィール画像');
                            if ($pic) {
                                $src = $pic['sizes']['member'];
                            } else {
                                $src = get_stylesheet_directory_uri() . '/assets/img/512x620.jpg';
                            }
                        ?>
                        <div class="p-member-list js-visible u-fadeInMask">
                            <figure class="p-member-list__pic"><img src="<?= $src ?>" alt=""/></figure>
                            <div class="p-member-list__job"><?= get_field('役職') ?></div>
                            <button class="p-member-list__btn">
                                <h3 class="p-member-list__name"><?= get_the_title() ?></h3>
                                <div class="p-member-list__ico"><i class="c-btn-plus c-btn-plus--member"></i></div>
                            </button>
                            <div class="p-member-list__profile">
                                <p>
                                    <?= nl2br(get_field('紹介')) ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        $index++;
                        if ($index % 4 == 0 && $index < $wp_query->post_count):
                        ?>
                            </div>
                            <div class="p-member__listProfile" data-current="4"></div>
                        </div>
                        <div class="p-member__list">
                            <div class="p-member__listWrap">
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="p-member__listProfile" data-current="4"></div>
                </div>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template/cm-cta') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>