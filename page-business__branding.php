<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-branding">
        <section class="p-branding-head">
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
                                <p class="_en">Re:Branding</p>
                                <h1 class="_ja">C-to-C/Live Commerce、ASP Business</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cm-business-head__wrap">
                        <div class="cm-business-head__lead js-visible u-fadeInMask" data-transition-delay="1.2">
                            <p class="c-paragraph c-paragraph--18">Our Re:Branding business allows the marketing departments of manufacturers inside and outside Japan to outsource all of their functions to us.</p>
                        </div>
                        <!--<div class="cm-business-head__download js-visible u-fadeInMask" data-transition-delay="1.2"><a class="c-link-text" href="#"><span class="c-link-text__en">資料ダウンロード</span><i class="c-link-text__ico">
                                    <svg width="18" height="16">
                                        <use href="#ico-download"></use>
                                    </svg></i></a></div>-->
                    </div>
                </div>
            </div>
        </section>
        <section class="p-branding-bg">
            <div class="cm-business-bg js-visible" data-position="50%">
                <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/branding/bg.webp" alt=""/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/branding/bg2.webp" alt=""/></figure>
            </div>
        </section>
        <section class="p-branding-feature">
            <div class="l-container l-container--10">
                <div class="cm-business-feature">
                    <div class="cm-business-feature__head js-visible u-fadeInMask">
                        <div class="c-heading-section js-visible">
                            <p class="c-heading-section__en u-gradientIn">Feature</p>
                        </div>
                    </div>
                    <p class="cm-business-feature__catch js-visible u-fadeInMask">Brand management from proposal to implementation</p>
                    <div class="cm-business-feature__wrap">
                        <div class="cm-business-feature__desc js-visible u-fadeInMask">
                            <p class="c-paragraph c-paragraph--18">
                                Our marketing professionals in Japan propose and implement brand and sales strategies as brand managers for their clients, typically manufacturers.<br>
                                This can reduce labor costs.<br>
                                We can offer this contracted service because we employ professional stategists from manufacturers, as well as marketing technicians with an exceptionally deep understanding of media.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-branding-affiliate">
            <div class="l-container l-container--10">
                <div class="p-branding-affiliate__wrap">
                    <div class="p-branding-affiliate__body">
                        <p class="p-branding-affiliate__en js-visible u-fadeInMask">Re:Affiliates</p>
                        <h2 class="p-branding-affiliate__catch js-visible u-fadeInMask">We register only carefully selected affiliates.<br>We provide products at a higher unit price than other companies.</h2>
                        <div class="p-branding-affiliate__txt js-visible u-fadeInMask">
                            <p class="c-paragraph c-paragraph--18">
                                We also provide comprehensive support, from securing live distribution slots with influencers to developing the script and expediting proceedings on the day of live streaming.<br>
                                Working in collaboration with our ASP Division, our customers can build an Affiliate Marketing reward system commensurate with sales volume as well as the cost structure in the form of futures.<br>
                                And if a customer lacks their own e-commerce site, we can build it.<br>
                                This service can even be implemented for a single product.
                            </p>
                        </div>
                    </div>
                    <figure class="p-branding-affiliate__pic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/branding/affiliate.webp" alt="" data-speed="0.8"/></figure>
                </div>
            </div>
        </section>
        <section class="p-branding-reason">
            <div class="l-container l-container--10">
                <div class="p-branding-reason__head">
                    <div class="p-branding-reason__title js-visible u-fadeInMask">
                        <h2 class="_title">Why choose us</h2>
                    </div>
                    <div class="p-branding-reason__txt js-visible u-fadeInMask">
                        <p class="c-paragraph">
                            Only affiliates identified as top-ranked corporate advertisers can be registered.<br>
                            We limit this service to three registrations per month, with exceptions for those introduced by our company’s scouts and registered affiliates.<br>
                            Thanks to our one-on-one support, customers can obtain reliable and high-priced projects from advertisers that other ASPs do not have access to.
                        </p>
                    </div>
                </div>
                <div class="p-branding-reason__table js-visible u-fadeInMask">
                    <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/branding/reason.svg" alt=""/></figure>
                </div>
            </div>
        </section>
        <section class="p-branding-other">
            <div class="l-container">
                <div class="cm-business-other js-visibleB">
                    <div class="cm-business-other__item">
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Full membership ASP</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">
                                    Only affiliates identified as top-ranked corporate advertisers can register.<br>
                                    This service is limited to three registrations per month, with exceptions for those introduced by our company’s scouts and registered affiliates. Our customers can obtain reliable and high-priced projects from advertisers that other ASPs do not have access to.
                                </p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Former marketers from Proctor & Gamble</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">Marketers from Procter & Gamble, one of the world’s leading marketing groups, follow up on sales systems, catch phrases, and content production.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Large corporate exclusivity deals</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">As a comprehensive advertising agency, we propose selected products targeting not only sales but also trust; thus, they do not appear elsewhere on the market.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Highest bid proposal</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">We do not handle products that our top affiliates do not wish to handle, including unnamed products, suspicious products, and products with low unit prices. We collect products by focusing on conversion rate and on recognizable, reliable, and sellable projects and provide them at higher unit prices than anywhere else.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Disclosure of data</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">We are a comprehensive advertising agency; we do more than sales.<br>We can suggest limited-edition products that do not appear on trusted markets.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title" data-budoux="data-budoux">Affiliate Support</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">
                                    We will match top affiliates to promote your product.  All affiliates are carefully selected through  1:1 meetings held by our ASP team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('template/cm-cta-business') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>