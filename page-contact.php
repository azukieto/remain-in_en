<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-contact">
        <div class="l-container l-container--12">
            <div class="p-contact-head">
                <div class="c-heading-section js-visible">
                    <p class="c-heading-section__en u-gradientIn">Contact</p>
                    <!--<h1 class="c-heading-section__ja u-fadeInMaskLeft">お問い合わせ</h1>-->
                </div>
            </div>
            <div class="p-contact-lead">
                <p class="c-paragraph">
                    Thank you for your interest in our company.<br>
                    A representative of Remain In will be contacting you within 24 hours.
                </p>
            </div>
            
            <div class="p-contact-body">
                <?php echo do_shortcode('[mwform_formkey key="128"]'); ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>