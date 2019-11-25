<?php

/* Template name: Iceland */

get_header();
?>
<div class="tour-page">

    <header class="tour-name iceland">
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/overlap.svg" alt="overlap" class="overlap">
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/overlap-mobile.svg" alt="overlap" class="overlap-mobile">
        
        <div class="container-full">
            <?php get_template_part('templates/parts/navbar') ?>
        </div>
        <!-- /.container-full -->

        <div class="container">
            <div class="relative">
                <div data-aos-duration="1500" data-aos-delay="500" data-aos="fade-left" class="dates">01-05 мая 2020г.</div>
                <h1 data-aos="zoom-in">
                    <div class="bold">Лучшие места Исландии за 5 дней</div>
                    Тур для предпринимателей
                </h1>

                <div id="flag-parallax" data-relative-input="true">
                    <img data-depth="-0.2" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/flag.png" class="lazy flag" >
                </div>
            </div>
        </div>
        <!-- /.container -->

        <svg class="wave" viewBox="0 0 1920 462" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1920 63.1783L1813 43.1783C1707 24.1783 1493 -13.8217 1280 5.17831C1067 24.1783 853 101.178 640 111.178C427 120.178 213 63.1783 107 34.1783L0 5.17831V461.5H107C213 461.5 427 461.5 640 461.5C853 461.5 1067 461.5 1280 461.5C1493 461.5 1707 461.5 1813 461.5H1920V63.1783Z" fill="white"/></svg>
    </header> 
    <!-- /.tour-name -->

</img>
<!-- /.tour-page -->

<script src="<?php bloginfo('template_url') ?>/src/js/tour.js"></script>
<?php
get_footer();
