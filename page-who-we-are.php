<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="p-whoweare">
    <section class="p-whoweare-lead">
        <div class="l-container l-container--12">
            <div class="p-whoweare-lead__head">
                <div class="c-heading-page js-visible">
                    <div class="c-heading-page__title"><i class="c-heading-page__ico">
                            <svg width="22" height="20"><use href="#heading-page-ico"></use></svg></i>
                        <h1 class="c-heading-page__en u-gradientIn">Who We Are</h1>
                    </div>
                    <h2 class="c-heading-page__lead u-fadeInMaskLeft">Our marketing expertise empowers us to meet the challenges of business development</h2>
                </div>
            </div>
            <div class="p-whoweare-lead__body u-fadeInMask js-visible" data-transition-delay="1.3">
                <p class="c-paragraph c-paragraph--Wwa">
                    How does this affect advertising agencies?<br>
                    The old concept of mediating information between two parties no longer has value.<br>
                    We believe that the significant task that is truly needed is to “nurture value.”<br>
                    <br>
                    The proof of our work is when we help something become a knowledge asset or related strength for a company, brand, or individual. We remain committed to using our collective knowledge to develop businesses that offer value to the world.<br>
                    That’s why Remain In exists.
                </p>
            </div>
        </div>
    </section>
    <section class="p-whoweare-identity">
        <div class="l-container l-container--10">
            <div class="p-whoweare-identity__wrap">
                <div class="p-whoweare-identity__head">
                    <div class="c-heading-section js-visible">
                        <p class="c-heading-section__en u-gradientIn">identity</p>
                    </div>
                    <p class="c-paragraph u-fadeInMask js-visible" data-transition-delay="0.5">To bring the philosophy of Remain In to fruition, here is our company’s ideal present and future.</p>
                </div>
                <figure class="p-whoweare-identity__pic"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/identity-logo.png" alt="VISION PURPOSE STANCE"/></figure>
            </div>
        </div>
    </section>
    <!--<section class="p-whoweare-vision u-fadeInMask js-visible">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head">
                    <h2>Vision</h2>
                </div>
                <div class="cm-whoweare-item__body">
                    <h3 class="cm-whoweare-item__bodyTitle">Creating lasting value</h3>
                </div>
            </div>
        </div>
    </section>-->
    <section class="p-whoweare-purpose">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head u-fadeInMask js-visible">
                    <h2>OUR VISION</h2>
                </div>
                <div class="cm-whoweare-item__body u-fadeInMask js-visible">
                    <h3 class="cm-whoweare-item__bodyTitle">Creating The Everlasting Value</h3>
                    <p class="cm-whoweare-item__bodyTxt1" data-budoux="data-budoux">
                        Our vision is to create lasting value for our clients.  Our staff are experienced and innovative collaborators who take pride in work and work with passion.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-whoweare-stance">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head u-fadeInMask js-visible">
                    <h2>Perspective</h2>
                </div>
                <div class="cm-whoweare-item__body u-fadeInMask js-visible">
                    <h3 class="cm-whoweare-item__bodyTitle">Work with passion</h3>
                    <p class="cm-whoweare-item__bodyTxt1" data-budoux="data-budoux">
                        Our staff members are unique and brilliant collaborators.<br>
                        We take pride in working with the best partners.
                    </p>
                    <div class="cm-whoweare-item__stance">
                        <dl>
                            <dt>Mind</dt>
                            <dd>
                                <ul>
                                    <li>Love for humanity</li>
                                    <li>Open to challenges</li>
                                    <li>Refined</li>
                                    <li>Potential for growth</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Action</dt>
                            <dd>
                                <ul>
                                    <li>Elite</li>
                                    <li>Brilliant</li>
                                    <li>Charismatic</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-whoweare-logo">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head u-fadeInMask js-visible">
                    <h2>Logo Design</h2>
                </div>
                <div class="cm-whoweare-item__body">
                    <div class="cm-whoweare-item-logo">
                        <div class="cm-whoweare-item-logo__slide">
                            <div class="cm-whoweare-item-logo__slideWrap js-visible u-fadeInMask u-fadeInPic">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/logo01.webp" width="1152" height="750" alt=""/></div>
                                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/logo02.webp" width="1152" height="750" alt=""/></div>
                                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/logo03.webp" width="1152" height="750" alt=""/></div>
                                        <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/logo04.webp" width="1152" height="750" alt=""/></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cm-whoweare-item-logo__ctrl js-visible u-fadeInMask">
                            <button class="c-btn-ico c-btn-ico--inverse c-btn-ico--arrowLeft" id="btnWwaSlidePrev">
                                <svg class="js-clone" width="16" height="8">
                                    <use href="#ico-arrow-left"></use>
                                </svg>
                            </button>
                            <button class="c-btn-ico c-btn-ico--inverse" id="btnWwaSlideNext">
                                <svg class="js-clone" width="16" height="8">
                                    <use href="#ico-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="cm-whoweare-item-logo__foot js-visible u-fadeInMask">
                            <p>
                                Certain qualities represent true lasting value.<br>
                                In individuals, these are important qualities, but when they become the DNA of a business their potential is unlimited.<br>
                                In color schemes, gradations are used as embellishments. Warm colors can denote decisiveness. On the other hand, purple expresses the charisma of the individual, while a logotype imparts a sense of stability with its horizontal orientation, unaffected by trends.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-whoweare-business">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head u-fadeInMask js-visible">
                    <h2>Business</h2>
                </div>
                <div class="cm-whoweare-item__body u-fadeInMask js-visible">
                    <div class="cm-whoweare-item-business">
                        <div class="cm-whoweare-item-business__Body">
                            <h3 class="_txt1" data-budoux="data-budoux">Integrated digital communications strategies are a requirement to maximize the value of our customers’ businesses.</h3>
                            <p class="_txt2">We develop and implement complex customer journey models and PULSE models to achieve continuous brand growth and provide visibility that leads to immediate results. We devise strategies optimized for constantly changing consumer habits/trends.</p>
                        </div>
                        <div class="cm-whoweare-item-business__More"><a class="c-btn-more" href="<?= home_url() ?>/business"><span class="c-btn-more__txt">Business</span><i class="c-btn-more__ico">
                                    <svg class="js-clone" width="30" height="14"><use href="#ico-arrow-right"></use></svg></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-whoweare-members">
        <div class="l-container">
            <div class="p-whoweare-members__wrap">
                <div class="p-whoweare-members__inner">
                    <picture class="p-whoweare-members__pic js-visible u-fadeInMask u-fadeInPic">
                        <source srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/member-sp.webp" media="(max-width: 1023px)"/><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/whoweare/member.webp"/>
                    </picture>
                    <div class="p-whoweare-members__type js-visible u-gradientIn u-gradientIn--gray">
                        <p>COMPANY INFO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-whoweare-outline">
        <div class="l-container">
            <div class="cm-whoweare-item">
                <div class="cm-whoweare-item__head u-fadeInMask js-visible">
                    <h2>Outline</h2>
                </div>
                <div class="cm-whoweare-item__body u-fadeInMask js-visible">
                    <div class="cm-whoweare-item__info">
                        <dl>
                            <dt>Company Name</dt>
                            <dd>Remain in, Inc.</dd>
                        </dl>
                        <dl>
                            <dt>Capital</dt>
                            <dd>7,000,000 JPY</dd>
                        </dl>
                        <dl>
                            <dt>CEO</dt>
                            <dd>Yuya Okawa</dd>
                        </dl>
                        <dl>
                            <dt>Number of employees</dt>
                            <dd>57 (including interns and part-time employees)</dd>
                        </dl>
                        <dl>
                            <dt>Head office</dt>
                            <dd>Riviera Minami Aoyama Building A402, 3-3-3 Minami Aoyama,<br>Minato-ku, Tokyo 107-0062 Japan</dd>
                        </dl>
                        <dl>
                            <dt>Scope of Business</dt>
                            <dd>Integrated communications strategies<br/>Management and business consulting<br/>Influencer services<br/>Digital marketing</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_template_part('template/cm-cta') ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>