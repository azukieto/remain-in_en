<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-marketing">
        <section class="p-marketing-head">
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
                                <p class="_en">Re:Marketing</p>
                                <h1 class="_ja">CMO/Marketing Department/Advertising Agency</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cm-business-head__wrap">
                        <div class="cm-business-head__lead js-visible u-fadeInMask" data-transition-delay="1.2">
                            <p class="c-paragraph c-paragraph--18">
                                We spark transformative growth in our customers’ businesses through cross-disciplinary collaboration.<br>
                                Remain In is poised on the cutting edge of the digital transformation of marketing.
                            </p>
                        </div>
                        <!--<div class="cm-business-head__download js-visible u-fadeInMask" data-transition-delay="1.2"><a class="c-link-text" href="#"><span class="c-link-text__en">資料ダウンロード</span><i class="c-link-text__ico">
                                    <svg width="18" height="16">
                                        <use href="#ico-download"></use>
                                    </svg></i></a></div>-->
                    </div>
                </div>
            </div>
        </section>
        <section class="p-marketing-bg">
            <div class="cm-business-bg js-visible" data-position="50%">
                <figure><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/bg.webp" alt=""/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/bg2.webp" alt=""/></figure>
            </div>
        </section>
        <section class="p-marketing-feature">
            <div class="l-container l-container--10">
                <div class="cm-business-feature">
                    <div class="cm-business-feature__head js-visible u-fadeInMask">
                        <div class="c-heading-section js-visible">
                            <p class="c-heading-section__en u-gradientIn">Feature</p>
                            <!--<h2 class="c-heading-section__ja u-fadeInMaskLeft">弊社の強み</h2>-->
                        </div>
                    </div>
                    <p class="cm-business-feature__catch js-visible u-fadeInMask">Implementing Influencer Strategies</p>
                    <div class="cm-business-feature__wrap">
                        <div class="cm-business-feature__desc js-visible u-fadeInMask">
                            <p class="c-paragraph c-paragraph--18">
                                Remain In provides management agency services with a variety of web and social media advertising channels by featuring influencers. We also provide support with a focus on marketing strategies.<br>
                                We devise strategies optimized for constantly changing consumer habits/trends.<br>
                                To maintain quality and achieve timely results, this division limits the number of contracts it takes on each year.
                            </p>
                        </div>
                        <figure class="cm-business-feature__pic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/feature.webp" alt="" data-speed="0.8"/></figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-marketing-support">
            <div class="l-container l-container--10">
                <div class="p-marketing-support__title js-visible u-fadeInMask">
                    <h2>Marketing Support Grounded in Planning</h2>
                </div>
                <div class="p-marketing-support__wrap">
                    <div class="p-marketing-support__head js-visible u-fadeInMask"><span>Why choose us</span></div>
                    <div class="p-marketing-support__body js-visible u-fadeInMask">
                        <p class="c-paragraph c-paragraph--18">
                            Understanding complex trends involving influencers, social media, and direct-to-consumer paradigms is a matter of course. We have expertise across all marketing roles and offer integrated support from development of company-wide strategies to implementation and analysis.<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-marketing-flow">
            <div class="l-container l-container--10">
                <div class="p-marketing-flow__wrap">
                    <div class="p-marketing-flow__head js-visible u-fadeInMask">
                        <h2>Flow</h2>
                    </div>
                    <div class="p-marketing-flow__flow js-visible u-fadeInMask">
                        <dl class="p-marketing-flow-flow">
                            <dt>
                                <h3><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/flow1.svg" alt="戦略"/></h3>
                            </dt>
                            <dd>
                                <ul>
                                    <li>Business strategies</li>
                                    <li>Brand strategies</li>
                                    <li>Product development</li>
                                    <li>Market research</li>
                                    <li>Marketing strategies</li>
                                    <li>Workshops</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="p-marketing-flow-flow">
                            <dt>
                                <h3><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/flow2.svg" alt="戦術"/></h3>
                            </dt>
                            <dd>
                                <ul>
                                    <li>Communications<br>Concepts</li>
                                    <li>Communications<br>Planning</li>
                                    <li>Promotional plans</li>
                                    <li>PR planning</li>
                                    <li>Digital planning</li>
                                    <li>Media planning</li>
                                    <li>Activation planning</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="p-marketing-flow-flow">
                            <dt>
                                <h3><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/flow3.svg" alt="クリエイティブ"/></h3>
                            </dt>
                            <dd>
                                <ul>
                                    <li>Copywriting</li>
                                    <li>Product naming</li>
                                    <li>Graphic design</li>
                                    <li>Digital design</li>
                                    <li>Movie planning</li>
                                    <li>Casting</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="p-marketing-flow-flow">
                            <dt>
                                <h3><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/flow4.svg" alt="実行"/></h3>
                            </dt>
                            <dd>
                                <ul>
                                    <li>Graphic production</li>
                                    <li>Movie production</li>
                                    <li>Media buying</li>
                                    <li>Internet advertising</li>
                                    <li>Tie-ups</li>
                                    <li>Printing</li>
                                    <li>Campaign implementation and management</li>
                                    <li>Event construction and management</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="p-marketing-flow-flow">
                            <dt>
                                <h3><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/marketing/flow5.svg" alt="運用"/></h3>
                            </dt>
                            <dd>
                                <ul>
                                    <li>Surveys</li>
                                    <li>Reports</li>
                                    <li>Analyses</li>
                                    <li>Management of websites and social media</li>
                                    <li>Replanning</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-marketing-other">
            <div class="l-container">
                <div class="p-marketing-support__title js-visible u-fadeInMask" style="margin-bottom:10px;">
                    <h2>Our Services</h2>
                </div>
                <div class="cm-business-other js-visibleB">
                    <div class="cm-business-other__item">
                        <!--<div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Marketing Planning</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">We formulate plans after applying mathematical models to analysis of market structures and organizing the current state of brand preferences.<br>
We provide the measures outlined below based on actual sales data, consumer data, and advertising results.</p>
                            </div>
                        </div>-->
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Digital Ad Planning</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">After analyzing market trends, industries, and products, we propose optimized advertising strategies that build on our years of investment experience. To support our clients’ businesses, we provide comprehensive support ranging from account design to implementation.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Social Media Strategies</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">Expanding awareness and promoting sales through social media - indispensable for branding and sales promotion today - is an essential part of what we do.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">UGC Planning</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">By accumulating positive signals from users who are the key to growth in various social media accounts, we can propel account growth.<br>
We offer a means of linking user-generated content to sales through the power of engagement.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Media Planning</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">We employ our own analysis system for influencers specializing in each genre to identify engagement rates, gender ratios, follower attributes, and other metrics. We can then suggest the optimal influencer arrangements to our customers. We have access to influencers across a wide variety of genres, from top-ranked and widely known individuals to influencers with a minimal following who are more like members of the general public. We can provide flexible combinations to meet specific needs.</p>
                            </div>
                        </div>
                        <div class="cm-business-other-item">
                            <div class="cm-business-other-item__head js-visible u-fadeInMask">
                                <h3 class="_title">Public Relations Events</h3>
                            </div>
                            <div class="cm-business-other-item__body js-visible u-fadeInMask">
                                <p class="c-paragraph c-paragraph--businessOther">Working closely with our Real Estate Department, we can secure locations perfect for any venue.<br>
This allows us to transform content into brand assets by continuously monitoring impact and suggesting improvements.</p>
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