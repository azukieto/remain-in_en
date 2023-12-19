<?php while (have_posts()) : the_post(); ?>
    <?php
    $terms = get_the_terms( get_the_ID(), 'category' );
    ?>
    <div class="cm-list-news-item js-visible u-fadeInMask">
        <a class="cm-list-news-item__link" href="<?= get_the_permalink() ?>">
            <p class="cm-list-news-item__date"><?= get_the_time('Y/m/d') ?></p>
            <div class="cm-list-news-item__category">
                <?php if ($terms): ?>
                <span><?= $terms[0]->name ?></span>
                <?php endif; ?>
            </div>
            <p class="cm-list-news-item__title"><?= get_the_title() ?></p>
            <div class="cm-list-news-item__ico"><i class="c-btn-ico c-btn-ico--news"><svg class="js-clone" width="16" height="8"><use href="#ico-arrow-right"></use></svg></i></div>
        </a>
    </div>
<?php endwhile; ?>
