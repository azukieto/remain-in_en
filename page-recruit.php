<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-recruit">
        <section class="p-recruit-mv">
            <div class="p-recruit-pic">
                <picture class="p-recruit-pic__pic1 js-visible u-fadeInMask u-fadeInPic u-fadeInMask--recruitMV">
                    <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/mv-sp.webp" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/mv.webp"/>
                </picture>
                <picture class="p-recruit-pic__pic2 js-visible u-fadeInMask u-fadeInPic u-fadeInMask--recruitMV"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/mv2.webp"/></picture>
            </div>
            <div class="p-recruit-mv__title">
                <div class="c-heading-section c-heading-section--recruit js-visible">
                    <p class="c-heading-section__en u-gradientIn">RECRUIT</p>
                    <!--<h1 class="c-heading-section__ja u-fadeInMaskLeft u-fadeInMaskLeft--recruitMV">採用情報</h1>-->
                </div>
            </div>
            <div class="p-recruit-mv__type js-visible">
                <p><span class="_txt1">WORK</span><span class="_txt2">HARD</span></p>
                <p><span class="_txt3">WITH</span><span class="_txt4">PASSION</span></p>
            </div>
        </section>
        <section class="p-recruit-lead">
            <div class="l-container">
                <div class="p-recruit-lead__wrap">
                    <h2 class="p-recruit-lead__title">Work with passion</h2>
                    <div class="p-recruit-lead__block _box">
                        <p>
                            Will AI run the world? Do we have no choice but to await this technological singularity which is supposed to surpass human capabilities?<br>
                            We think not. We believe that humanity will continue to change the world for the better, We will continue to strive to make the world a better place.<br>
                            <br>
                            The question is, how? We will achieve this goal by using AI and technology as accelerators to encourage others to join us. At the same time, we remain committed to maximizing business value and creating true lasting value.<br>
                        </p>
                    </div>
                    <div class="p-recruit-lead__block _box2">
                        <p>
                            How to achieve this is complex. The use of technology in marketing will be a minimum skill requirement in the future.<br>
                            Whether it’s creating a service that doesn’t yet exist, or convincing a prospective customer to purchase a product or service, this skill will be an absolute must.<br>
                            <br>
                            Going forward, we intend to create the best organization and the most competent corporate group that our industry has ever seen.<br>
                            We will forge an organization with ambitions that exceed our current reach. At the same time, we will continue to prosper, exceeding the performance of every organization that has preceded us.<br>
                            <br>
                            The story of Remain In, Inc. is one of like-minded people who care deeply about the world and are working to realize their ambitions. Since our company was founded, we’ve been waiting to welcome talented individuals like you.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-recruit-bg">
            <div class="p-recruit-bg__wrap">
                <picture>
                    <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/bg-sp.webp" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/bg.webp" data-speed="0.1"/>
                </picture>
            </div>
        </section>
        <section class="p-recruit-join">
            <div class="l-container l-container--10">
                <div class="p-recruit-join__wrap">
                    <div class="p-recruit-join__head js-visible u-fadeInMask">
                        <div class="c-heading-section js-visible">
                            <p class="c-heading-section__en u-gradientIn">JOIN US!</p>
                            <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">私たちの思い</h2>-->
                        </div>
                    </div>
                    <div class="p-recruit-join__body js-visible u-fadeInMask">
                        <p class="c-paragraph">
                            We believe that products and services of exceptional quality create permanent prosperity.<br>
                            In order to establish a successful business, we must listen to our clients and continue to be decisive. Difficult decisions need to be made, but many opportunities for growth are available.<br>
                            We hope you will join us in using marketing as a tool to change the world for the better.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-recruit-vision">
            <div class="l-container l-container--10">
                <div class="p-recruit-vision__type js-visible">
                    <p><span class="_txt5">OUR FUTURE VISION</span></p>
                    <!--<p><span class="_txt1">具体的になしえたい未来像</span><span class="_txt2">VISION</span><span class="_txt3">OF</span></p>
                    <p><span class="_txt4">THE</span><span class="_txt5">FUTURE</span></p>-->
                </div>
                <div class="p-recruit-vision__wrap">
                    <div class="p-recruit-vision__body js-visible u-fadeInMask" data-transition-delay="1.2">
                        <h3 class="_title">Unearthing value to create business assets</h3>
                        <p class="c-paragraph">
                            Remain In provides management agency services for a variety of web and social media advertising channels by featuring influencers. We also provide support with a focus on marketing strategies.<br>
                            We even have experience creating businesses from the ground up.<br>
                            Marketing is just one tool we use as we seek out businesses that provide value by serving emerging needs.<br>
                            To ensure that we are an organization that produces lasting value, we develop the talented individuals who can leave their mark on businesses and nurture internal companies.
                        </p>
                    </div>
                    <figure class="p-recruit-vision__pic js-visible u-fadeInMask u-fadeInPic" data-transition-delay="1.2"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/vision.png" alt=""/></figure>
                </div>
            </div>
        </section>
        <section class="p-recruit-career">
            <div class="l-container l-container--10">
                <div class="p-recruit-career__wrap">
                    <div class="p-recruit-career__head js-visible u-fadeInMask">
                        <div class="c-heading-section js-visible">
                            <p class="c-heading-section__en u-gradientIn">EXPERIENCE</p>
                            <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">社員情報</h2>-->
                        </div>
                    </div>
                    <div class="p-recruit-career__body js-visible u-fadeInMask">
                        <dl>
                            <dt>Work Experience</dt>
                            <dd>Procter & Gamble Japan KK; KEYENCE Corporation; m3; Red Bull GmbH; Philip Morris International; Jigen Holdings Co. Ltd.; LiB Consulting Co., Ltd.; Anker Innovations Co., Ltd.; Reckitt Benckiser Group plc; Dentsu Group Inc.</dd>
                        </dl>
                        <dl>
                            <dt>Number of individuals with CEO experience</dt>
                            <dd>４</dd>
                        </dl>
                        <dl>
                            <dt>Salaries</dt>
                            <dd>
                                Starting at 10 million yen<br>
                                Average bonus of 3 million yen
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-recruit-data">
            <div class="l-container l-container--10">
                <div class="p-recruit-data__head js-visible u-fadeInMask">
                    <h2>Corporate Data</h2>
                    <p>/ Compared with 2021 resultsn</p>
                </div>
                <div class="p-recruit-data__data">
                    <dl>
                        <dt><span>Number of employees</span></dt>
                        <dd><sup class="_plus">+</sup><span class="_num js-countup" data-num="1500">0</span><sup class="_unit">%</sup></dd>
                    </dl>
                    <dl>
                        <dt><span>Average age</span><!--<small>27</small>--></dt>
                        <dd><span class="_num js-countup" data-num="27" data-decimal="1">0</span><sup class="_unit">Old</sup></dd>
                    </dl>
                    <dl>
                        <dt><span>Customer satisfaction rate</span></dt>
                        <dd><span class="_num js-countup" data-num="100">0</span><sup class="_unit">%</sup></dd>
                    </dl>
                    <dl>
                        <dt><span>Number of transactions</span></dt>
                        <dd><sup class="_plus">+</sup><span class="_num js-countup" data-num="800">0</span><sup class="_unit">%</sup></dd>
                    </dl>
                    <dl>
                        <dt><span>Client retention rate</span></dt>
                        <dd><span class="_num js-countup" data-num="100">0</span><sup class="_unit">%</sup></dd>
                    </dl>
                    <dl>
                        <dt><span>Sales growth</span></dt>
                        <dd><sup class="_plus">+</sup><span class="_num js-countup" data-num="1270">0</span><sup class="_unit">%</sup></dd>
                    </dl>
                </div>
            </div>
        </section>
        <section class="p-recruit-slide js-visible u-fadeInMask u-fadeInPic">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/slide01.webp" alt=""/></div>
                    <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/slide02.webp" alt=""/></div>
                    <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/recruit/slide03.webp" alt=""/></div>
                </div>
            </div>
        </section>
        <!--section.p-recruit-foot-->
        <!--    .l-container-->
        <!--        .p-recruit-foot__txt-->
        <!--            p.c-paragraph さらに詳細を知りたい方は、<br class="sp-tab">以下より資料をダウンロードください。-->
        <!--        .p-recruit-foot__action-->
        <!--            a(href="#").c-btn-action-->
        <!--                span.c-btn-action__txt エントリーはこちら-->
    </div>
    <?php get_template_part('template/cm-cta') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>