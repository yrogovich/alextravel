<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alextravel_theme
 */

 /* Template name: Главная*/

get_header();
?>

    <header class="main">
		<div class="container-full">
			<?php get_template_part('templates/parts/navbar') ?>
		</div>
		<!-- /.container-full -->
		<div class="container">
			<div class="relative">
			<h1 data-aos="zoom-in">
				<div class="bold">Авторские групповые туры</div>
				по всему миру
			</h1>

			<ul>
				<li data-aos="fade-up" data-aos-delay="400">Иордания (10-14 февраля 20г) - места проданы</li>
				<li data-aos="fade-up" data-aos-delay="600">Исландия (4-8 марта 20г) – места проданы</li>
				<li data-aos="fade-up" data-aos-delay="800">Швейцария (2-7 апреля 20г) - места проданы</li>
				<li data-aos="fade-up" data-aos-delay="1000" class="active">
                    <a href="<?php echo get_home_url(null, 'iceland/'); ?>">Исландия (14-21 июня 20г) – осталось 9 мест</a>
                </li>
			</ul>

			<div id="compass">
				<img src="<?php bloginfo('template_url') ?>/src/img/header/compass.png" alt="cardinal-directions" class="cardinal-directions">
				<img src="<?php bloginfo('template_url') ?>/src/img/header/compass-niddle.png" alt="niddle" class="niddle">
			</div>

			<img src="<?php bloginfo('template_url') ?>/src/img/header/man.png" alt="Алекс" class="man"
				data-aos="zoom-in-up"
				data-aos-delay="1000"
				data-aos-duration="1000">

			<div class="social-wrapper">
				<span class="title">Присоеденяйся!</span>
				<div class="social">
                    <a href="<?=INST?>" target="_blank" class="inst"><img data-src="<?php bloginfo('template_url') ?>/src/img/header/inst.svg" class="lazy" alt="inst"></a>
                    <a href="<?=FACEBOOK?>" target="_blank" class="facebook"><img data-src="<?php bloginfo('template_url') ?>/src/img/header/facebook.svg" class="lazy" alt="facebook"></a>
					<a href="<?=VK?>" target="_blank" class="vk"><img data-src="<?php bloginfo('template_url') ?>/src/img/header/vk.svg" class="lazy" alt="vk"></a>	
				</div>
			</div>
			</div>
			<!-- /.relative -->
		</div>
		<!-- /.container -->

		<svg class="wave" viewBox="0 0 1920 518" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1920 0H1840C1760 0 1600 0 1440 57C1280 115 1120 230 960 288C800 345 640 345 480 316C320 288 160 230 80 201L0 172V518H80C160 518 320 518 480 518C640 518 800 518 960 518C1120 518 1280 518 1440 518C1600 518 1760 518 1840 518H1920V0Z" fill="white"/></svg>
	</header>
	<!-- /.main -->

<div class="section" id="poster">
    <div class="circle-parallax" data-relative-input="true">
        <div data-depth="0.1" class="circle-bg"></div>
    </div>
    <div class="camera-parallax" data-relative-input="true">  
        <img data-depth="-0.3" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/camera.png" class="camera lazy">
    </div>
    

    <div class="container">
        <div class="section-title">
            <div class="h2 decorations plane">Скоро едем</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/poster.svg" alt="Скоро едем">
        </div>
        <!-- /.section-title -->

        <div class="trips">
            <div class="trip unactive">
                <a href="<?php //echo get_home_url(null, '/'); ?>">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/trips/jordan_1.jpg" alt="jordan">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">10-14 января 2020г. 5 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Иордания</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Пустынный десант и 8е чудо света. Самые красивые места Иордании – Амман, Петра, Мертвое море, пустыня, каньоны и т.д. 1200 км на внедорожниках. Питание, проживание, джипы - входят в стоимость.</div>
                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">790 €</div>
                            <div class="seats-number">осталось 0 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary btn-unactive">Все места проданы</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip unactive">
                <a href="<?php echo get_home_url(null, 'iceland/'); ?>">
                    <div class="img-wrapper">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland.jpg" alt="iceland">
                    </div>
                    <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">4-8 марта 2020г. 5 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Исследуем Южное побережье. Самые сочные места. 1600 км на внедорожниках. Океан, ледники, вулканы. Питание, проживание, джипы - входят в стоимость.</div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>


                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">790 €</div>
                            <div class="seats-number">осталось 0 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary btn-unactive">Все места проданы</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip unactive">
                <a href="<?php //echo get_home_url(null, '/'); ?>">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/trips/switzerland_1.jpg" alt="switzerland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">2-7 апреля 2020г. 6 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Швейцария</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Если смотрели выпуск Птушкина про Швейцарию, сами все понимаете. Альпийская сказка. 1000 км на кроссоверах вокруг страны. Горы, озера, сыр. Питание, проживание, джипы - входят в стоимость.</div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">790 €</div>
                            <div class="seats-number">осталось 0 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary btn-unactive">Все места проданы</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip unactive">
                <a href="<?php //echo get_home_url(null, '/'); ?>">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-2.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">10-18 мая 2020г. 8 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг всего острова на внедорожниках (2000 км) за 8 дней. Два океана, ледники, вулканы, киты. Питание, проживание, джипы - входят в стоимость.</div>
                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">1 490 €</div>
                            <div class="seats-number">осталось 0 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary btn-unactive">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip new-format">
                <a href="<?php echo get_home_url(null, 'iceland/'); ?>">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-3.jpg" alt="iceland">
                    <div class="label">
                        Тур для предпринимателей
                    </div>
                    <!-- /.label -->
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">8-12 июня 2020г. 5 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Исследуем Южное побережье. Самые сочные места. 1600 км на внедорожниках. Океан, ледники, вулканы. Питание, проживание, джипы - входят в стоимость.</div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">790 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div data-fancybox data-src="#request-modal" class="btn btn-primary">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip">
                <a href="<?php //echo get_home_url(null, '/'); ?>">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/trips/iceland_1.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">31 января - 5 февраля 2020г. 5 дней.</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Охота на северное сияние. Самые сочные места. 1600 км на внедорожниках. Океан, ледники, вулканы. Питание, проживание, джипы - входят в стоимость.</div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">2/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Комфорт</div>
                           <div class="stars-wrapper">
                                <div class="count">4/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray"></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                       <div class="pair">
                           <div class="bold">Адреналин</div>
                           <div class="stars-wrapper">
                                <div class="count">5/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li></li>
                               </ul>
                           </div>
                       </div>
                       <!-- /.pair -->
                    </div>
                    <!-- /.raiting -->
                </div>
                <!-- /.body -->
                </a>

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">790 €</div>
                            <div class="seats-number">осталось 15 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div data-fancybox data-src="#request-modal" class="btn btn-primary">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->
        </div>
        <!-- /.trips -->
    </div>
    <!-- /.container -->
</div>
<!-- /#poster.section -->

<div class="section" id="gallery">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations camera">Наши прошлые поездки</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/gallery.svg" alt="Фото архив">
        </div>
        <!-- /.section-title -->

        <div class="archive">
            <div class="image-folder disabled"  data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Август 2019</div>
                            <div class="h4">Исландия. Южное побережье.</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            0 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder disabled" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Сентябрь 2019</div>
                            <div class="h4">Исландия. Южное побережье.</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            0 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            
            <a href="<?php bloginfo('template_url') ?>/src/img/gallery-section/iceland_october_2019/iceland_01.jpg"
                data-thumb="<?php bloginfo('template_url') ?>/src/img/gallery-section/iceland_october_2019/thumbs/iceland_01.jpg"
                data-fancybox="iceland_october_2019" 
                data-caption="Исландия. Южное побережье."
                data-thumbs='{"autoStart":true}'
                class="image-folder" 
                data-aos="zoom-in-up" 
            >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия. Южное побережье.</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            41 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </a>
            <!-- /.image-folder -->

            <div class="image-folder disabled" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Ноябрь 2019</div>
                            <div class="h4">Исландия. Вокруг всего острова на внедорожниках (2000 км) за 8 дней.</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            0 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

        </div>
        <!-- /.archive -->
    </div>
    <!-- /.container -->
</div>
<!-- /#gallery.section -->
<!-- Connect fancybox-gallery -->
<?php get_template_part('templates/parts/gallery') ?>

<div class="section" id="reviews">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations enjoy">Кайф от тех, кто уже был с нами</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/reviews.svg" alt="Отзывы">
        </div>
        <!-- /.section-title -->
        <div class="youtube-wrapper">
            <div class="youtube" data-embed="GYFjvbuUE2w">
                <div class="play-button"></div>
                <div class="next-video"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /#reviews.section -->

<div class="section" id="about">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations smile">Немного обо мне</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/about.svg" alt="кто я?">
        </div>
        <!-- /.section-title -->
        
        <div class="bio-row">
            <div class="picture" >
                <img class="lazy bubble-alex" data-src="<?php bloginfo('template_url') ?>/src/img/about-section/alex.png" alt="Алексей Анушкин">
                <div class="social">
                    <img class="yellow-bubble" src="<?php bloginfo('template_url') ?>/src/img/about-section/bubble-yellow.svg" alt="bubble">
                    <div class="links-wrapper">
                        <a href="<?=VK?>" target="_blank" class="vk"><img src="<?php bloginfo('template_url') ?>/src/img/footer/vk.svg" alt="vk"></a>
                        <a href="<?=INST?>" target="_blank" class="inst"><img src="<?php bloginfo('template_url') ?>/src/img/footer/inst.svg" alt="inst"></a>
                        <a href="<?=FACEBOOK?>" target="_blank" class="facebook"><img src="<?php bloginfo('template_url') ?>/src/img/footer/fb.svg" alt="facebook"></a>
                    </div>
                </div>
            </div>
            <!-- /.picture -->
            <div class="text">
                <div class="h3">Привет! Меня зовут Алексей Анушкин.</div>
                <p >Путешественник, 31 страна в рюкзаке, организатор образовательных мероприятий и создатель проекта AlexTravel.me</p>
                <ul class="primary-style">
                    <li>Начал свой путь с вожатого в детском лагере. Жил в Европе, работал в Пекине и Москве.</li>
                    <li>Проехал с друзьями на раритетном фургоне из Минска к атлантическому океану чтобы посёрфить.</li>
                    <li>Организовал десятки мероприятий, пробежал полумарафон и Bison Race</li>
                    <li>Ко всему подхожу с душой и окружаю каждого заботой и вниманием. Можете быть спокойны, со мной эта поездка будет безопасной, лёгкой, интересной и насыщенной</li>
                </ul>
            </div>
            <!-- /.text -->
        </div>
        <!-- /.bio-row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#about.section -->

<div id="request" class="section request-home">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations plane">Хочу с Вами</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/request.svg" alt="заявка">
        </div>
        <!-- /.section-title -->
        
        <div class="form-wrapper">
            <div class="body">
                <div class="h4">Заполни форму заявки чтобы мы могли связаться с тобой!</div>
                <form id="open-form" class="open-form" action="javascript:" onsubmit="callHandler('#open-form')">
                    <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="form_name" value="Заявка на ближайшее путешествие">

                    <div class="input-pair">
                        <div class="input-wrapper">
                            <input type="text" name="user_first_name" placeholder="Имя" required>
                        </div>
                        <!-- /.input-wrapper -->
                        <div class="input-wrapper">
                            <input type="text" name="user_phone" placeholder="Телефон" required>
                        </div>
                        <!-- /.input-wrapper -->
                    </div>
                    <!-- /.input-pair -->

                    
                    <button class="btn btn-primary">Я еду</button>

                   
                </form>
            </div>
            <!-- /.body -->
           <div class="foot">
                <div class="h4">или напишите мне в телеграм</div>
                <a href="<?=TELEGRAM_LINK?>" target="_blank" class="btn btn-telegram">Написать в телеграм</a>
           </div>
           <!-- /.foot -->
        </div>
        <!-- /.form-wrapper -->
    </div>
    <!-- /.container -->
</div>

<div id="security" class="section">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations security">Безопастность</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/security.svg" alt="security">
        </div>
        <!-- /.section-title -->

        <div class="features">
            <div class="column-1">
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-1.png" alt="Подготовка">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Подготовка</div>
                        <p>К каждому путешествию мы готовимся тщательно. Перед отправкой я разошлю каждому список того, что важно и желательно взять. Помимо этого, вы расскажете мне о своих опасениях, предпочтениях, тревогах и я постараюсь их все учесть. Ну и главное, весь маршрут и все что с нами произойдет, пройдено не раз, а значит риск ошибки минимален.</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-3.svg" alt="Преступность">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Преступность</div>
                        <p>Исландия одна из самых безопасных стран мира. За последние 20 лет здесь произошло лишь одно серьезное преступление, после которого полиция страны попросила прощения у населения. Местное население крайне доброжелательно и открыто к туристам. Более душевных и милых людей вы врядли еще где-то встретите!))</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-5.png" alt="Язык">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Язык</div>
                        <p>Я свободно говорю по-английски, поэтому у вас попросту не возникнет такой ситуации, где бы вам понадобился язык. Но даже если такая ситуация возникнет, просто позвоните мне и я объясню собеседнику, что от него требуется. Местное население свободно говорит по-английски.</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
            </div>
            <!-- /.column-1 -->
            <div class="column-2">
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-2.svg" alt="Волны">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Волны</div>
                        <p>Все наши туры проходят летом, так как именно в это время средний минимум температуры наиболее высокий и уровень осадков минимален. А это значит что на воде будет штиль и благоприятные условия для поиска китов. В случае непредвиденной ситуации лодка быстро вернется к берегу и пока море не успокоится мы никуда не поплывем.</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-4.svg" alt="Опытный тур-лидер">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Опытный тур-лидер</div>
                        <p>За моими плечами не одна страна, и я точно знаю, что можно делать, а что нельзя. Везде, где мы будем останавливаться, у меня есть контакты необходимого госпиталя, куда бы мы смогли добраться в кратчайшие сроки. Ну и не стоит забывать оформлять медицинскую страховку. Это еще один ключик к сохранности вашего здоровья.</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/feature-6.svg" alt="Животные">
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <div class="h3">Животные</div>
                        <p>Исландия одна из немногих стран где нет хищных животных, змей или насекомых опасных для жизни. Максимум кого мы тут встретим это милые лошадки, безобидные киты и прекрасные тупики. Есть единственное исключение это норка, но случаев нападения этого пушистого животного зафиксировано не было!</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.feature -->
            </div>
            <!-- /.column-2 -->
        </div>
        <!-- /.features -->
    </div>
    <!-- /.container -->
    <div class="wave-wrapper" >
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/opportunities/wave-down.svg" alt="wave" class="wave">
    </div>
    <!-- /.wave-container -->
</div>
<!-- /#security.section -->



<div id="prefooter">

    <img data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/background.jpg" class="mountains-bg lazy">
    <div class="big-parallax" data-relative-input="true">
        <img data-depth="0.2" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/back-grass.png" class="lazy back-grass">
        <img data-depth="0.1" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/girl.png" class="lazy girl">
        <img data-depth="0.2" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/front-grass.png" class="lazy front-grass">
        <img data-depth="-0.1" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/clouds.png" class="lazy clouds">
    </div>
    <!-- /.big-parallax -->

    <div class="container">
        <div class="row">
            <div class="column-1">
                
            </div>
            <!-- /.column-1 -->

            <div class="column-2">
                <div class="section-title">
                    <div class="h2 decorations faq">Остались вопросы?</div>
                </div>
                <!-- /.section-title -->
                <div class="h4">Напишите или позвоните нам. Мы всегда на связи.</div>
                <p>Со всеми путешественниками я обязательно встречаюсь в живую в Минске перед поездкой. С остальными мы проводим знакомство через скайп. В наших турах были туристы из России, Литвы, Беларуси и даже Маврикия!</p>
                <a data-fancybox data-src="#call-me-modal" href="javascript:;" class="btn btn-primary">Связаться со мной</a>

            </div>
            <!-- /.column-2 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.prefooter -->

	
<?php
get_footer();
