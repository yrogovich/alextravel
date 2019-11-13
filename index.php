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

get_header();
?>

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
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 0 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary btn-unactive">Все места проданы</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip unactive -->

            <div class="trip">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-2.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>
                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-3.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary">Все места проданы</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-2.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>
                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary">Оставить заявку</div>
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.foot -->
            </div>
            <!-- /.trip -->

            <div class="trip">
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/poster-section/iceland-3.jpg" alt="iceland">
                </div>
                <!-- /.img-wrapper -->

                <div class="head">
                    <span class="date">20 ноября — 29 ноября</span>
                    <!-- /.date -->
                    <div class="h4">Исландия</div>
                </div>
                <!-- /.head -->

                <div class="body">
                    <div class="description">Вокруг острова за 9 дней. Два океана, ледники, вулканы, киты и кай дороги. Все включено. </div>

                    <div class="raiting">
                       <div class="pair">
                           <div class="bold">Сложность</div>
                           <div class="stars-wrapper">
                               <div class="count">3/5</div>
                               <ul class="stars">
                                   <li></li>
                                   <li></li>
                                   <li></li>
                                   <li class="gray-star"></li>
                                   <li class="gray-star"></li>
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
                                   <li class="gray-star"></li>
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

                <div class="foot">
                    <div class="pair">
                        <div class="left-side">
                            <div class="price">990 €</div>
                            <div class="seats-number">осталось 9 мест</div>
                        </div>
                        <!-- /.left-side -->
                        <div class="btn btn-primary">Оставить заявку</div>
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
            <div class="image-folder"  data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
                        </div>
                        <!-- /.phots-count -->
                    </div>
                    <!-- /.pair -->
                </div>
                <!-- /.body -->
            </div>
            <!-- /.image-folder -->

            <div class="image-folder" data-aos="zoom-in-up" >
                <div class="img-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/gallery-section/image.jpg" alt="image">
                </div>
                <!-- /.img-wrapper -->
                <div class="body">
                    <div class="pair">
                        <div class="title">
                            <div class="date">Октябрь 2019</div>
                            <div class="h4">Исландия - 1600 км. на джипах</div>
                        </div>
                        <!-- /.title -->
                        <div class="phots-count">
                            100 фото
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

<div class="section" id="reviews">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations enjoy">Кайф от тех, кто уже был с нами</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/reviews.svg" alt="Отзывы">
        </div>
        <!-- /.section-title -->
        
        <div class="super-slider">
        </div>
        <!-- /.super-slider -->
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
            <div class="text" >
                <div class="h3" data-aos="fade-up" data-aos-delay="100">Привет! Меня зовут Алексей Анушкин.</div>
                <p data-aos="fade-up" data-aos-delay="500">Путешественник, 31 страна в рюкзаке, организатор образовательных мероприятий и создатель проекта Iceland trips.</p>
                <ul class="primary-style">
                    <li data-aos="fade-up" data-aos-delay="1000">Начал свой путь с вожатого в детском лагере. Жил в Европе, работал в Пекине и Москве.</li>
                    <li data-aos="fade-up" data-aos-delay="1200">Проехал с друзьями на раритетном фургоне из Минска к атлантическому океану чтобы посёрфить.</li>
                    <li data-aos="fade-up" data-aos-delay="1400">Организовал десятки мероприятий, пробежал полумарафон и Bison Race</li>
                    <li data-aos="fade-up" data-aos-delay="1600">Ко всему подхожу с душой и окружаю каждого заботой и вниманием. Можете быть спокойны, со мной эта поездка будет безопасной, лёгкой, интересной и насыщенной</li>
                </ul>
            </div>
            <!-- /.text -->
        </div>
        <!-- /.bio-row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#about.section -->

<div id="faq" class="section">
    <img data-src="<?php bloginfo('template_url') ?>/src/img/security-section/moutains.jpg" class="mountains lazy">

    <div class="bull-parallax" data-relative-input="true">
        <img data-depth="0.1" data-src="<?php bloginfo('template_url') ?>/src/img/security-section/bull.png" class="lazy bull">
    </div>


    <div class="container">
        <div class="section-title">
            <div class="h2 decorations faq">Вопросы и ответы</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/faq.svg" alt="faq">
        </div>
        <!-- /.section-title -->

        <div class="faq-row">
            <div class="accordions">
                <div class="accordion active">
                    <div class="head">
                        <div class="h4">Какую одежду брать с собой в Исландию и как готовиться к поездке?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li data-aos="fade-up">Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li data-aos="fade-up" >Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li data-aos="fade-up" >Плотные штаны или джинсы</li>
                            <li data-aos="fade-up" >Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li data-aos="fade-up" >Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li data-aos="fade-up" >Футболки, толстовку или свитер</li>
                            <li data-aos="fade-up" >Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li data-aos="fade-up" >Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li data-aos="fade-up" >Полотенце</li>
                            <li data-aos="fade-up" >Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li data-aos="fade-up" >Индивидуальная аптечка.</li>
                            <li data-aos="fade-up" >Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
                <div class="accordion">
                    <div class="head">
                        <div class="h4">Как мы будем питаться?</div>
                        <!-- /.h4 -->

                        <div class="toggler"></div>
                    </div>
                    <!-- /.head -->
                  
                    <div class="content">
                        <ul class="primary-style">
                            <li>Всё зависит от сезона, но вот общие рекомендации.</li>
                            <li>Трекинговые, разношенные ботинки (желательно с защитой от влаги)</li>
                            <li>Плотные штаны или джинсы</li>
                            <li>Непромокаемую и непродуваемую куртку с капюшоном</li>
                            <li>Головной убор, легкий шарф и перчатки (по желанию)</li>
                            <li>Футболки, толстовку или свитер</li>
                            <li>Купальник + шлепанцы (будем купаться в горячих источниках)</li>
                            <li>Дождевик. Берите крепкий и яркий, не пожалеете ;)</li>
                            <li>Полотенце</li>
                            <li>Личная гигиена. Зубная паста, щетка, шампунь и т.д</li>
                            <li>Индивидуальная аптечка.</li>
                            <li>Портативный аккумулятор для зарядки гаджетов</li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.accordion -->
            </div>
            <!-- /.accordions -->
            <div class="sidebar">
                <div class="parallax" data-relative-input="true" id="scene">
                    <img data-depth="0.1" data-src="<?php bloginfo('template_url') ?>/src/img/faq-section/question.png" alt="question" class="question lazy">
                    <img data-depth="0.3" data-src="<?php bloginfo('template_url') ?>/src/img/faq-section/bird.png" alt="bird" class="bird lazy">
                </div>
                <!-- /.parallax -->
            </div>
            <!-- /.sidebar -->
        </div>
        <!-- /.faq-row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#faq.section -->

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
                        <p>Все наши туры проходят летом, так как именно в это время средний минимум температуры наиболее высокий и уровень осадков минимален. А это значит что на воде будет штиль и благоприятные условия для поиска китов. В случае непредвиденной ситуации лодка быстро вернется к берегу и пока море не успокоится мы никуда не поплывем. </p>
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
</div>
<!-- /#security.section -->

<div id="request" class="section">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations plane">Хочу с Вами</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/titles/request.svg" alt="заявка">
        </div>
        <!-- /.section-title -->
        <div class="h4">Заполни форму заявки и отправляйся с нами в путешествие в ближайшее время</div>
        <div class="form-wrapper">
            <form id="open-form" class="open-form" action="javascript:" onsubmit="callHandler('#open-form')">
                <input type="hidden" name="form_name" value="Заявка на ближайшее путешествие">

                <div class="input-pair">
                    <div class="input-wrapper">
                        <input type="text" name="user_first_name" placeholder="Имя" required>
                    </div>
                    <!-- /.input-wrapper -->
                    <div class="input-wrapper">
                        <input type="text" name="user_last_name" placeholder="Фамилия" required>
                    </div>
                    <!-- /.input-wrapper -->
                </div>
                <!-- /.input-pair -->

                <div class="input-pair">
                    <div class="input-wrapper">
                        <input type="email" name="user_email" placeholder="E-mail" required>
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
        <!-- /.form-wrapper -->
    </div>
    <!-- /.container -->
</div>

<div id="prefooter">

    <img data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/background.jpg" class="mountains-bg lazy">
    <div class="big-parallax" data-relative-input="true">
        <img data-depth="0.2" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/back-grass.png" class="lazy back-grass">
        <img data-depth="0.1" data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/girl.png" class="lazy girl">
        <img data-depth="0.2" src="<?php bloginfo('template_url') ?>/src/img/prefooter/front-grass.png" class="lazy front-grass">
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
                <div class="h4">Если у вас остались вопросы -  звоните или пишите. <span class="block">Я всегда на связи.</span></div>
                <p>Если вы из Москвы, можем устроить личную встречу <span class="md-block">и я вам расскажу о нашем путешествии.</span> <span class="block">Если вы из регионов, давайте созвонимся по скайпу!</span></p>
                <a href="#" class="btn btn-primary">Связаться со мной</a>
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
