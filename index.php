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
                    <img data-src="<?php bloginfo('template_url') ?>/src/img/faq-section/question.png" alt="question" class="question lazy">
                    <img data-depth="0.2" data-src="<?php bloginfo('template_url') ?>/src/img/faq-section/bird.png" alt="bird" class="bird lazy">
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

<div class="test"></div>
	
<?php
get_footer();
