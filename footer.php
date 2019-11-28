<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alextravel_theme
 */

?>

    <footer>
        <div class="container">
            <div class="footer-row">
                <div class="column-1">
                    <div class="title">Контакты</div>

                    <div class="messenger-wrapper">
						<a href="tel:<?=PHONE_HREF?>" class="phone"><?=PHONE?></a>
						<div class="messengers">
							<a href="<?=TELEGRAM_LINK?>" target="_blank" class="telegram"><img src="<?php bloginfo('template_url') ?>/src/img/header/telegram.svg" alt="telegram"></a>
							<a href="<?=WHATSAPP_LINK?>" target="_blank" class="whatsapp"><img src="<?php bloginfo('template_url') ?>/src/img/header/whatsapp.svg" alt="whatsapp"></a>
						</div>
						<!-- /.messengers -->
					</div>
					<!-- /.messenger-wrapper -->
                    <a href="mailto:<?=EMAIL?>" class="mail"><?=EMAIL?></a>

                    <div class="social">
                        <a href="<?=VK?>" target="_blank" class="vk"><img src="<?php bloginfo('template_url') ?>/src/img/footer/vk.svg" alt="vk"></a>
                        <a href="<?=INST?>" target="_blank" class="inst"><img src="<?php bloginfo('template_url') ?>/src/img/footer/inst.svg" alt="inst"></a>
                        <a href="<?=FACEBOOK?>" target="_blank" class="facebook"><img src="<?php bloginfo('template_url') ?>/src/img/footer/fb.svg" alt="facebook"></a>
                    </div>

                    <p class="small">ИП Анушкин Алексей Юрьевич. УНП ‎692140946. <a href="<?php echo get_privacy_policy_url() ?>" class="link">Политика конфиденциальности</a></p>
                </div>
                <!-- /.column-1 -->
                <div class="column-2">
                    <div class="title">Подпишитесь на наши новости</div>

                    <form id="subscribe-form" class="subscribe-form" action="javascript:" onsubmit="callHandler('#subscribe-form')">
                        <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                        <input type="hidden" name="form_name" value="Подписка на рассылку">
                        <div class="input-wrapper">
                            <input type="email" name="user_email" placeholder="E-mail" required>
                        </div>
                        <button class="btn btn-primary">Подписаться</button>
                    </form>

                    <p>Авторские туры от Kolesnikov Travel — это эксклюзивные путешествия с глубоким погружением в такие места как Бали и Филиппины. Я выбираю только самые красивые "природные" страны и формирую двухнедельное живое приключение, чтобы у вас было достаточно времени прочувствовать страну "от" и "до". Мой девиз "Лучше один раз, но качественно и эмоционально"</p>
                </div>
                <!-- /.column-2 -->
            </div>
            <!-- /.footer-row -->
        </div>
    </footer>
</div><!-- #page -->

<script>
	function callHandler(form) {
		console.log('form func is running');
		var  msg = jQuery(form).serialize();
		jQuery.ajax({
			type: 'POST',
			url: '<?php bloginfo("template_url"); ?>/src/send.php',
			data: msg,
			success: function(data) {
                console.log('form ok');
                jQuery.fancybox.open({ // FancyBox 3
                    src: '#thanks-modal', 
                    modal: true
                });
                setTimeout(() => {
                    jQuery.fancybox.close();
                    jQuery.fancybox.close();
                }, 2000);
			},
			error: function () {
				console.log('form error');
			}
		});
    }
    jQuery(document).ready(function(){
        getMethod();
        function getMethod() {
            if(jQuery('.select-1').hasClass('active')) {         
                value = jQuery('#curators .select-1').text();
                jQuery('.form_payment_method').val(value);
            }
            else {
                value = jQuery('#curators .select-2').text();
                jQuery('.form_payment_method').val(value);
            }
        }
    });
</script>

<?php wp_footer(); ?>

<!-- Modal HTML embedded directly into document -->
<div id="call-me-modal" class="modal"> 
    <div class="content">
        <div class="section-title">
                <div class="h2 decorations faq">Как с вами связаться?</div>
        </div>
        <form id="call-me-form" class="open-form" action="javascript:" onsubmit="callHandler('#call-me-form')">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form_name" value="Свяжитесь со мной">


            <div class="input-wrapper">
                <input type="text" name="user_first_name" placeholder="Имя" required>
            </div>
            <!-- /.input-wrapper -->
            <div class="input-wrapper">
                <input type="email" name="user_email" placeholder="E-mail" required>
            </div>
            <!-- /.input-wrapper -->
            <div class="input-wrapper">
                <input type="text" name="user_phone" placeholder="Телефон" >
            </div>
            <!-- /.input-wrapper -->


            <button class="btn btn-primary">Свяжитесь со мной</button>
        </form>
    </div>
    <!-- /.content --> 
</div>

<!-- Modal HTML embedded directly into document -->
<div id="request-modal" class="modal"> 
    <div class="content">
        <div class="section-title">
                <div class="h2 decorations faq">Как с вами связаться?</div>
        </div>
        <form id="request-form" class="open-form" action="javascript:" onsubmit="getMethod();callHandler('#request-form')">
            <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="form_name" value="Оставить заявку на поездку">
            <input type="hidden" name="form_payment_method" class="form_payment_method">

            <div class="input-wrapper">
                <input type="text" name="user_first_name" placeholder="Имя" required>
            </div>
            <!-- /.input-wrapper -->
            <div class="input-wrapper">
                <input type="email" name="user_email" placeholder="E-mail" required>
            </div>
            <!-- /.input-wrapper -->
            <div class="input-wrapper">
                <input type="text" name="user_phone" placeholder="Телефон" >
            </div>
            <!-- /.input-wrapper -->


            <button class="btn btn-primary">Свяжитесь со мной</button>
        </form>
    </div>
    <!-- /.content --> 
</div>

<!-- Modal HTML embedded directly into document -->
<div id="thanks-modal" class="modal"> 
    <div class="content">
        <div class="section-title">
            <div class="h2 decorations smile">Форма отправлена успешно!</div>
        </div>
    </div>
    <!-- /.content --> 
</div>

<div class="mobile-menu">
    <div class="container">
        <div class="menu-wrapper">
            <?php 
            wp_nav_menu( [
                'menu'            => 'menu-primary', 
                'menu_class'      => 'menu', 
                'menu_id'         => 'menu-primary',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ] ); 
            ?>
        </div>
        <!-- /.menu-wrapper -->
    </div>
</div>
<!-- /.mobile-menu -->

</body>
</html>
