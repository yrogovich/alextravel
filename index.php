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
                    <div class="title">Исландия</div>
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
                    <div class="title">Исландия</div>
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
                    <div class="title">Исландия</div>
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
                    <div class="title">Исландия</div>
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
                    <div class="title">Исландия</div>
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
                    <div class="title">Исландия</div>
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
<div class="test"></div>
	
<?php
get_footer();
