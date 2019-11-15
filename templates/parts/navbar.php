<navbar>
    <a href="<?php echo get_home_url() ?>" class="logo">
        <img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="AlexTravel logo">
    </a>
    <div class="line"></div>
    <div class="right-block">
        <div class="messenger-wrapper">
            <a href="tel:<?=PHONE_HREF?>" class="phone"><?=PHONE?></a>
            <div class="messengers">
                <a href="<?=TELEGRAM_LINK?>" target="_blank" class="telegram"><img src="<?php bloginfo('template_url') ?>/src/img/header/telegram.svg" alt="telegram"></a>
                <a href="<?=WHATSAPP_LINK?>" target="_blank" class="whatsapp"><img src="<?php bloginfo('template_url') ?>/src/img/header/whatsapp.svg" alt="whatsapp"></a>
            </div>
            <!-- /.messengers -->
        </div>
        <!-- /.social-wrapper -->

        <svg class="burger" viewBox="0 0 100 100" width="70" onclick="this.classList.toggle('active')">
            <path class="line top"
                    d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
            <path class="line middle"
                    d="m 70,50 h -40" />
            <path class="line bottom"
                    d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
        </svg>
    </div>
    <!-- /.right-block -->
</navbar>