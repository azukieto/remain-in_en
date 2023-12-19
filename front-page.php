<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-top">
        <section class="p-top-mv" id="mv">
            <!--<p class="p-top-mv__type2">Creating lasting value</p>-->
            <p class="p-top-mv__type3">A strategic marketing agency based in Tokyo,<br/>working worldwide.</p>
        </section>
        <section class="p-top-whoweare">
            <div class="l-container l-container--12">
                <div class="p-top-whoweare__head">
                    <div class="c-heading-page js-visible">
                        <div class="c-heading-page__title"><i class="c-heading-page__ico">
                                <svg width="22" height="20">
                                    <use href="#heading-page-ico"></use>
                                </svg></i>
                            <p class="c-heading-page__en u-gradientIn">Who We are</p>
                        </div>
                        <h2 class="c-heading-page__lead u-fadeInMaskLeft">As an innovative marketing group,<br/>our mission is to create lasting value.</h2>
                    </div>
                </div>
                <div class="p-top-whoweare__wrap">
                    <div class="p-top-whoweare__en">
                        <dl class="u-fadeInMask js-visible">
                            <dt>Since2021</dt>
                            <dd>
                                <p>CtoC Live Commerce Business / ASP Business / Media Trend Analysis Business / Consumer Research Business / Real Estate Agent / Brokerage Business / Temporary Staffing Business</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="p-top-whoweare__body">
                        <div class="p-top-whoweare__desc u-fadeInMask js-visible">
                            <p class="c-paragraph c-paragraph--topLead" data-budoux="data-budoux">
                                About a decade ago, media companies began offering a self-serve system for advertisers. Most companies now release their own advertisements, so agencies that only create advertisements have lost much of their purpose.<br>
                                In response to this situation, we have developed three innovative solutions as part of our new approach to building value.<br>
                                <br>
                                The first is <span class="u-inlineblock"><strong>Re:Marketing</strong></span>, in which we provide all of the services traditionally performed by a marketing department.<br>
                                With our second solution, <span class="u-inlineblock"><strong>Re:Branding</strong></span>, our planners develop marketing strategies that reflect their deep understanding of media and trends.<br>
                                And through our <span class="u-inlineblock"><strong>Re:Affiliate</strong></span> services, we take the lead in developing strategies for the C-to-C era in which individuals have retailing power.<br>
                                <br>
                                By building on these three powerful solutions, we drive corporate growth and develop effective businesses, all with a focus on value creation.
                            </p>
                        </div>
                        <div class="p-top-whoweare__more u-fadeInMask js-visible"><a class="c-btn-more" href="<?= home_url() ?>/who-we-are"><span class="c-btn-more__txt">Who We Are</span><i class="c-btn-more__ico">
                                    <svg class="js-clone" width="30" height="14">
                                        <use href="#ico-arrow-right"></use>
                                    </svg></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-top-business">
            <div class="p-top-business__type u-fadeInMask js-visible">
                <div class="p-top-business__typeCircle"></div>
                <!--p Integrated Marketing Communication-->
                <!--p Integrated Marketing Communication-->
            </div>
            <div class="l-container">
                <div class="p-top-business__wrap js-visibleB">
                    <div class="p-top-business__head">
                        <div class="c-heading-section js-visible">
                            <p class="c-heading-section__en u-gradientIn">BUSINESS</p>
                            <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft u-fadeInMaskLeft--topbusiness">BUSINESS</h2>-->
                        </div>
                    </div>
                    <div class="p-top-business__lead js-visible u-fadeInMask u-fadeInMask--topbusiness">
                        <p class="c-paragraph">Our marketing managers, based around a core that honed their skills at Procter & Gamble, craft high-quality plans that are put into action through a flexible and efficient organization. And by implementing the Plan-Do-Check-Act (PDCA) cycle to ensure continuous improvement, we achieve a level of agility that is unprecedented in the industry.
By keeping pace with emerging trends, we can provide your business with relevant and broad-based support.</p>
                    </div>
                    <div class="p-top-business__role">
                        <div class="p-top-business__roleText">
                            <div class="p-top-business__roleHead js-visible u-fadeInMask u-fadeInMask--topbusiness">
                                <h3 class="p-top-business-subtitle">OUR ROLE</h3>
                            </div>
                            <div class="p-top-business__roleBody js-visible u-fadeInMask u-fadeInMask--topbusiness">
                                <p class="_txt1">We use our marketing expertise to take on the challenge of nurturing new businesses.</p>
                                <p class="_txt2">To ensure we offer our clients our undivided attention, we cap the number of partners we work with every year.<br>
                                In short, we exist to build value.</p>
                            </div>
                        </div>
                        <picture class="p-top-business__rolePic js-visible u-fadeInMask u-fadeInMask--topbusiness">
                            <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/top/business-sp.svg" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/business.svg" alt=""/>
                        </picture>
                    </div>
                    <div class="p-top-business__division">
                        <div class="p-top-business__divisionHead js-visible u-fadeInMask u-fadeInMask--topbusiness">
                            <h3 class="p-top-business-subtitle">SCOPE</h3>
                        </div>
                        <div class="p-top-business__divisionItem">
                            <div class="p-top-business-division-item js-visible u-fadeInMask u-fadeInMask--topbusiness"><a class="p-top-business-division-item__link" href="<?= home_url() ?>/business/marketing">
                                    <p class="p-top-business-division-item__no">BIZ #01</p>
                                    <h4 class="p-top-business-division-item__title">Re:Marketing</h4>
                                    <p class="p-top-business-division-item__job">CMO agency services<br/>Marketing department agency services<br/>Advertising agency services</p>
                                    <div class="p-top-business-division-item__more">
                                        <div class="c-btn-moreB"><span class="c-btn-moreB__txt">See details</span><i class="c-btn-moreB__ico">
                                                <svg class="js-clone" width="16" height="8">
                                                    <use href="#ico-arrow-rightB"></use>
                                                </svg></i></div>
                                    </div></a></div>
                            <div class="p-top-business-division-item js-visible u-fadeInMask u-fadeInMask--topbusiness"><a class="p-top-business-division-item__link" href="<?= home_url() ?>/business/branding">
                                    <p class="p-top-business-division-item__no">BIZ #02</p>
                                    <h4 class="p-top-business-division-item__title">Re:Branding</h4>
                                    <p class="p-top-business-division-item__job">Brand franchising services<br/>Brand development services</p>
                                    <div class="p-top-business-division-item__more">
                                        <div class="c-btn-moreB"><span class="c-btn-moreB__txt">See details</span><i class="c-btn-moreB__ico">
                                                <svg class="js-clone" width="16" height="8">
                                                    <use href="#ico-arrow-rightB"></use>
                                                </svg></i></div>
                                    </div></a></div>

                            <!--<div class="p-top-business-division-item js-visible u-fadeInMask u-fadeInMask--topbusiness"><a class="p-top-business-division-item__link" href="<?= home_url() ?>/business/agency">
                                    <p class="p-top-business-division-item__no">BIZ #03</p>
                                    <h4 class="p-top-business-division-item__title">Re:Agency</h4>
                                    <p class="p-top-business-division-item__job">Real estate agency and brokerage</p>
                                    <div class="p-top-business-division-item__more">
                                        <div class="c-btn-moreB"><span class="c-btn-moreB__txt">See details</span><i class="c-btn-moreB__ico">
                                                <svg class="js-clone" width="16" height="8">
                                                    <use href="#ico-arrow-rightB"></use>
                                                </svg></i></div>
                                    </div></a></div>-->
                        </div>
                    </div>
                    <div class="p-top-business__more js-visible u-fadeInMask u-fadeInMask--topbusiness"><a class="c-btn-more" href="<?= home_url() ?>/business"><span class="c-btn-more__txt">All Business</span><i class="c-btn-more__ico">
                                <svg class="js-clone" width="30" height="14">
                                    <use href="#ico-arrow-right"></use>
                                </svg></i></a></div>
                </div>
            </div>
        </section>
        <section class="p-top-member">
            <div class="p-top-member__pictures js-visible u-fadeInMask u-fadeInPic">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/professional-pic1.webp" alt=""/></div>
                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/professional-pic2.webp" alt=""/></div>
                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/professional-pic3.webp" alt=""/></div>
                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/professional-pic4.webp" alt=""/></div>
                    </div>
                </div>
            </div>
            <div class="l-container l-container--12">
                <p class="p-top-member__type js-visible u-gradientIn">professional</p>
                <div class="p-top-member__wrap">
                    <div class="p-top-member__text js-visible u-fadeInMask">
                        <p class="c-paragraph">We provide the growth drivers that corporations require by building on the collective knowledge and expertise of our staff, many of whom have experience at respected listed businesses and global corporations.</p>
                    </div>
                    <div class="p-top-member__more js-visible u-fadeInMask"><a class="c-btn-more" href="<?= home_url() ?>/member"><span class="c-btn-more__txt">All Member</span><i class="c-btn-more__ico">
                                <svg class="js-clone" width="30" height="14">
                                    <use href="#ico-arrow-right"></use>
                                </svg></i></a></div>
                </div>
            </div>
        </section>
        <section class="p-top-news">
            <div class="l-container l-container--12">
                <div class="p-top-news__head">
                    <div class="c-heading-section js-visible">
                        <p class="c-heading-section__en u-gradientIn">News</p>
                        <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">News</h2>-->
                    </div>
                </div>
                <div class="p-top-news__list">
                    <div class="cm-list-news">
                        <?php
                        $args = [
                            'post_type' => 'post',
                            'paged' => 1,
                            'posts_per_page' => 3,
                        ];
                        $wp_query = new WP_Query($args);
                        ?>
                        <?php if (have_posts()) : ?>
                            <?php get_template_part('template/loop-post') ?>
                        <?php endif; wp_reset_query(); ?>

                    </div>
                </div>
                <div class="p-top-news__foot js-visible u-fadeInMask"><a class="c-link-text" href="<?= home_url() ?>/news"><span class="c-link-text__en">VIEW ALL</span></a></div>
            </div>
        </section>
        <section class="p-top-recruit">
            <div class="l-container l-container--12">
                <div class="p-top-recruit__wrap">
                    <figure class="p-top-recruit__pic js-visible u-fadeInMask u-fadeInPic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/top/recruit.webp" alt=""/></figure>
                    <div class="p-top-recruit__txt">
                        <div class="p-top-recruit__head">
                            <div class="c-heading-section js-visible">
                                <p class="c-heading-section__en u-gradientIn">Recruit</p>
                                <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">Recruit</h2>-->
                            </div>
                        </div>
                        <div class="p-top-recruit__body js-visible u-fadeInMask">
                            <p class="c-paragraph">
                                We believe that products and services that demonstrate excellence offer the promise of lasting prosperity. In order to forge these assets into viable businesses, we listen to our clients’ needs and assist them in making critical decisions.<br>
                                We take this approach because we believe that wise decision-making establishes the foundation for growth.<br>
                                We invite you to partner with us in creating a marketing strategy to turn your vision into a world-changing enterprise.
                            </p>
                        </div>
                        <div class="p-top-recruit__more js-visible u-fadeInMask"><a class="c-btn-more" href="<?= home_url() ?>/recruit"><span class="c-btn-more__txt">Recruit</span><i class="c-btn-more__ico">
                                    <svg class="js-clone" width="30" height="14">
                                        <use href="#ico-arrow-right"></use>
                                    </svg></i></a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('template/cm-cta') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>