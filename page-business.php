<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-business">
        <div class="p-business-head">
            <div class="l-container l-container--12">
                <div class="c-heading-page js-visible">
                    <div class="c-heading-page__title"><i class="c-heading-page__ico">
                            <svg width="22" height="20">
                                <use href="#heading-page-ico"></use>
                            </svg></i>
                        <h1 class="c-heading-page__en u-gradientIn">BUSINESS</h1>
                    </div>
                    <p class="c-heading-page__lead u-fadeInMaskLeft">We spark transformative growth in our customers’ businesses through cross-disciplinary collaboration.</p>
                </div>
            </div>
        </div>
        <div class="p-business-strategy">
            <div class="l-container l-container--12">
                <div class="p-business-strategy__wrap">
                    <div class="p-business-strategy__body">
                        <div class="p-business-strategy__head js-visible u-fadeInMask">
                            <div class="c-heading-section js-visible">
                                <p class="c-heading-section__en u-gradientIn">Our Strategy</p>
                                <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">事業戦略</h2>-->
                            </div>
                        </div>
                        <div class="p-business-strategy__txt1 js-visible u-fadeInMask">
                            <p>
                                We remain committed to creating value that contributes to the growth of our clients’ businesses across multiple areas.<br>
                                In addition to providing expertise in each field, we aim to spark transformative growth through cross-disciplinary collaboration.
                            </p>
                        </div>
                        <div class="p-business-strategy__txt2 js-visible u-fadeInMask">
                            <p class="c-paragraph">
                                Our company is divided into two divisions:<br>
                                a cash flow creation division, supported from Japan; and a permanent value creation division, which is active around the globe.
                            </p>
                        </div>
                    </div>
                    <div class="p-business-strategy__pic js-visible u-fadeInMask u-fadeInPic">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/business/strategy-sp.svg" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/business/strategy.svg"/>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-business-portfolio">
            <div class="l-container">
                <div class="p-business-portfolio__head">
                    <p class="p-business-portfolio__type js-visible u-gradientIn">Portfolio</p>
                    <!--<h2 class="p-business-portfolio__title js-visible u-fadeInMask">私たちの主な事業</h2>-->
                    <div class="p-business-portfolio__lead js-visible u-fadeInMask">
                        <p class="c-paragraph">
                            Remain In is poised on the cutting edge of the digital transformation of marketing.<br>
                            For us, understanding complex trends involving influencers, social media, and direct-to-consumer paradigms is a matter of course. We have expertise across all marketing roles and offer integrated support from the development of company-wide strategies to implementation and analysis.
                            We also have experience creating businesses from the ground up.
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-business-portfolio__item">
                <div class="l-container">
                    <div class="p-business-portfolio-item"><a class="p-business-portfolio-item__wrap" href="<?= home_url() ?>/business/marketing">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Re:Marketing</h3>
                                <p>Advertising Agency/Integrated Communications Strategy Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">Remain In is experienced at developing and implementing customer journey models and PULSE models to achieve continuous brand growth and provide visibility that leads to immediate results. We devise strategies optimized for constantly changing consumer tastes.</p>
                            </div>
                            <div class="p-business-portfolio-item__ico"><i class="c-btn-ico">
                                    <svg class="js-clone" width="16" height="8">
                                        <use href="#ico-arrow-right"></use>
                                    </svg></i></div></a></div>
                    <div class="p-business-portfolio-item"><a class="p-business-portfolio-item__wrap" href="<?= home_url() ?>/business/branding">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Re:Branding</h3>
                                <p>Brand Franchising/Brand Development Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">
                                    We collectively support all of the marketing operations needed to drive product sales and product development in Japan.<br>
                                    Our company’s top marketers provide support.
                                </p>
                            </div>
                            <div class="p-business-portfolio-item__ico"><i class="c-btn-ico">
                                    <svg class="js-clone" width="16" height="8">
                                        <use href="#ico-arrow-right"></use>
                                    </svg></i></div></a></div>
                    <!--<div class="p-business-portfolio-item"><a class="p-business-portfolio-item__wrap" href="<?= home_url() ?>/business/agency">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Re:Agency</h3>
                                <p>Real estate agency and brokerage business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">Our team of agents supports career development, knowledge acquisition, and reward acquisition through real estate.</p>
                            </div>
                            <div class="p-business-portfolio-item__ico"><i class="c-btn-ico">
                                    <svg class="js-clone" width="16" height="8">
                                        <use href="#ico-arrow-right"></use>
                                    </svg></i></div></a></div>-->

                    <div class="p-business-portfolio-item">
                        <div class="p-business-portfolio-item__wrap">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Black Infinite, Inc.</h3>
                                <p>Confectionery Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">
                                    Our confectionery business manufactures and sells lollipops.<br>
                                    This business takes advantage of mass-consumption products, characterized by contact with many users, for marketing that converts the fan base into an intellectual property business. Asia, primarily Japan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-business-portfolio-item">
                        <div class="p-business-portfolio-item__wrap">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Delicious in Japan, Inc.</h3>
                                <p>Inbound Media Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">A media business targeting foreign tourists that stokes desire to travel to Japan while handling reservations in a single streamlined service. Starting with cuisine, which is a major tourist draw, we aim to seize the largest share of tourists visiting Japan by using the advantages of specialized services combined with marketing via social media and our wide array of capabilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-business-portfolio-item">
                        <div class="p-business-portfolio-item__wrap">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Renegades' Music, Inc.</h3>
                                <p>Artist Branding/Marketing Partnerships</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">The spread of music distribution services and social media has accelerated the trend of artists managing their own careers. We address the distortions of this industry and provide the services of both record company and management company by serving as a branding and marketing partner for individual artists. Our goal is to nurture potential stars and shift the industry in the new era.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-business-portfolio-item">
                        <div class="p-business-portfolio-item__wrap">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Golden Hour, Inc.</h3>
                                <p>Cosmetic Medicine Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">Our marketing boutique provides comprehensive support for all essential clinic operations, including branding, attracting customers, strengthening sales, and meeting accounting standards. We also develop and provide original medical slimming methods that integrate medicine, kinesiology, nutrition, and psychology.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-business-portfolio-item">
                        <div class="p-business-portfolio-item__wrap">
                            <div class="p-business-portfolio-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Borderless Choice, Inc.</h3>
                                <p>Logistics Business</p>
                            </div>
                            <div class="p-business-portfolio-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessPortfolio">Our software-as-a-service business provides digital solutions for purchasing and sales in the global marketplace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template/cm-cta-business') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>