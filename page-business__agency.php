<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-agency">
        <section class="p-agency-head">
            <div class="l-container l-container--12">
                <div class="cm-business-head">
                    <div class="cm-business-head__title">
                        <div class="c-heading-page js-visible">
                            <div class="c-heading-page__title"><i class="c-heading-page__ico">
                                    <svg width="22" height="20">
                                        <use href="#heading-page-ico"></use>
                                    </svg></i>
                                <p class="c-heading-page__en u-gradientIn">BUSINESS</p>
                            </div>
                            <div class="c-heading-page__title2 u-fadeInMaskLeft">
                                <p class="_en">Re:Agency</p>
                                <h1 class="_ja">Real Estate Agency/ Brokerage business</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cm-business-head__wrap">
                        <div class="cm-business-head__lead js-visible u-fadeInMask" data-transition-delay="1.2">
                            <p class="c-paragraph c-paragraph--18">Our team of agents supports career development, knowledge acquisition, and reward acquisition through real estate.</p>
                        </div>
                        <!--<div class="cm-business-head__download js-visible u-fadeInMask" data-transition-delay="1.2"><a class="c-link-text" href="#"><span class="c-link-text__en">資料ダウンロード</span><i class="c-link-text__ico">
                                    <svg width="18" height="16">
                                        <use href="#ico-download"></use>
                                    </svg></i></a></div>-->
                    </div>
                </div>
            </div>
        </section>
        <section class="p-agency-model">
            <div class="l-container">
                <div class="p-agency-model__wrap">
                    <div class="p-agency-model__head">
                        <div class="p-agency-model__title js-visible u-fadeInMask">
                            <!--<h2>Business Model</h2>-->
                        </div>
                        <p class="p-agency-model__lead js-visible u-fadeInMask">The commission from the matching of buyers and sellers in the real estate brokerage field is the reward.</p>
                    </div>
                    <div class="p-agency-model__pic">
                        <picture class="js-visible u-fadeInMask u-fadeInPic">
                            <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/agency/model-sp.png" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/agency/model.png"/>
                        </picture>
                    </div>
                    <div class="p-agency-model__example">
                        <div class="p-agency-model__exampleHead js-visible u-fadeInMask">
                            <h3 class="_title">Agent model example</h3>
                        </div>
                        <div class="p-agency-model__exampleBody js-visible u-fadeInMask">
                            <p class="c-paragraph c-paragraph--18">Real estate transactions are carried out by a team system that effectively combines the specialized skills and time of each agent.<br>
A new type of agent model provides high value through an organizational structure that maximizes remuneration and operational efficiency.</p>
                        </div>
                        <div class="p-agency-model__examplePic js-visible u-fadeInMask u-fadeInPic">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/agency/example-sp.svg" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/agency/example.svg"/>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-agency-bg">
            <div class="l-container l-container--12">
                <div class="p-agency-bg__mask">
                    <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/agency/bg.webp" alt="" data-speed="0.8"/></figure>
                </div>
            </div>
        </section>
        <section class="p-agency-feature">
            <div class="l-container l-container--10">
                <div class="p-agency-feature__wrap">
                    <div class="p-agency-feature__head js-visible u-fadeInMask">
                        <div class="cm-business-feature__head">
                            <div class="c-heading-section js-visible">
                                <p class="c-heading-section__en u-gradientIn">Feature</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-agency-feature__body js-visible u-fadeInMask">
                        <dl>
                            <dt>Selection of work according to skills and time</dt>
                            <dd>Made possible by our team system.<br/>Optimization of operations</dd>
                        </dl>
                        <dl>
                            <dt>Industry-leading commissions</dt>
                            <dd>Brokerage commission sales<br/>Rewards up to 75%</dd>
                        </dl>
                        <dl>
                            <dt>Support system</dt>
                            <dd>We provide support from a third-party perspective by providing in-house real estate agents, real estate consulting, and project tracing.</dd>
                        </dl>
                        <dl>
                            <dt>Sharing of projects among affiliated agents</dt>
                            <dd>Customer projects other than self-discovery<br/>But rewards can be earned</dd>
                        </dl>
                        <dl>
                            <dt>Offices provided</dt>
                            <dd>Our offices in Aoyama, Minato-ku, are available for use.</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('template/cm-cta-business') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>