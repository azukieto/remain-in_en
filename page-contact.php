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
                <?php echo do_shortcode('[mwform_formkey key="79"]') ?>
            </div>
        </div>
    </div>
    <script>
        const chexBoxs = document.querySelectorAll('.p-contact input[type="checkbox"]')
        chexBoxs.forEach(element => {
            element.parentNode.insertBefore(document.createElement('i'), element.nextElementSibling);
        });
        const select = document.querySelector('.p-contact select')
        const item1 =  document.querySelector('dl[data-field="企業名"] ._required')
        const item2 =  document.querySelector('dl[data-field="部署"] ._required')
        const item3 =  document.querySelector('dl[data-field="役職"] ._required')
        if (select !== null) {
            updateRequired()
            select.addEventListener('change', updateRequired, false)
        }
        function updateRequired() {
            if (select.options[select.selectedIndex].value == 'お問い合わせ') {
                item1.classList.remove('_hide')
                item2.classList.add('_hide')
                item3.classList.add('_hide')
            } else if (select.options[select.selectedIndex].value == 'Remain in で働く') {
                item1.classList.add('_hide')
                item2.classList.add('_hide')
                item3.classList.add('_hide')
            } else if (select.options[select.selectedIndex].value == '資料ダウンロード') {
                item1.classList.remove('_hide')
                item2.classList.remove('_hide')
                item3.classList.remove('_hide')
            }
        }
    </script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>