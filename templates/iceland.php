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

    <div id="curators" class="section">
        <div class="container">
            <div class="raiting-row">
                <div class="block">
                    <div class="pair">
                        <p class="h5">Сложность</p>
                        <div class="date">Рейтинг 3 из 5</div>
                    </div>
                    <!-- /.pair -->
                    <ul class="stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="gray"></li>
                        <li class="gray"></li>
                    </ul>
                </div>
                <!-- /.block -->
                <div class="block">
                    <div class="pair">
                        <p class="h5">Комфорт</p>
                        <div class="date">Рейтинг 3 из 5</div>
                    </div>
                    <!-- /.pair -->
                    <ul class="stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="gray"></li>
                        <li class="gray"></li>
                    </ul>
                </div>
                <!-- /.block -->
                <div class="block">
                    <div class="pair">
                        <p class="h5">Адреналин</p>
                        <div class="date">Рейтинг 3 из 5</div>
                    </div>
                    <!-- /.pair -->
                    <ul class="stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="gray"></li>
                        <li class="gray"></li>
                    </ul>
                </div>
                <!-- /.block -->
            </div>
            <!-- /.raiting-row -->
            <div class="tour-info-row">
                <div class="info-curators">
                    <div class="date">С вами поедут</div>
                    <div class="h5">Наши кураторы</div>
                    <div class="curators">
                        <div class="curator">
                            <div class="image">
                                <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/curators/alex.png" alt="Алексей Анушкин">
                                <a href="<?=INST?>" target="_blank" class="inst">
                                    <img src="<?php bloginfo('template_url') ?>/src/img/footer/inst.svg" alt="inst">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="date">Алексей Анушкин</div>
                        </div>
                        <!-- /.curator -->
                        <div class="curator">
                            <div class="image">
                                <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/curators/slava.png" alt="Вячеслав Пракопенко">
                                <a href="<?=INST?>" target="_blank" class="inst">
                                    <img src="<?php bloginfo('template_url') ?>/src/img/footer/inst.svg" alt="inst">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="date">Вячеслав Пракопенко</div>
                        </div>
                        <!-- /.curator -->
                        <div class="curator">
                            <div class="image">
                                <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/curators/photographer.png" alt="Мистер Фотограф">
                                <a href="<?=INST?>" target="_blank" class="inst">
                                    <img src="<?php bloginfo('template_url') ?>/src/img/footer/inst.svg" alt="inst">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="date">Мистер Фотограф</div>
                        </div>
                        <!-- /.curator -->
                    </div>
                    <!-- /.curators -->
                    <div class="h5">Присоеденяйтесь в чат поездки</div>
                    <a href="#" target="_blank" class="btn btn-telegram">Телеграм чат тура</a>
                </div>
                <!-- /.info-curators -->
                <div class="get-ticket-tour">
                    <div class="head">
                        <div class="row">
                            <div class="pair">
                                <div class="date">Осталось</div>
                                <!-- /.date -->
                                <div class="h5">10 мест из 15</div>
                            </div>
                            <!-- /.pair -->
                            <ul class="tickets">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="gray"></li>
                                <li class="gray"></li>
                                <li class="gray"></li>
                                <li class="gray"></li>
                                <li class="gray"></li>
                            </ul>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.head -->
                    <div class="body">
                        <div class="pair">
                            <div class="btn btn-select active">Оплата до 01.01.2020г. </div>
                            <div class="btn btn-select">Оплата после 01.01.2020г. <span class="footnote">+100 €</span></div>
                        </div>
                        <!-- /.pair -->
                        <div class="row">
                            <a href="#" class="btn btn-primary">Оставить заявку</a>
                            <div class="h4 price">990 €</div>
                            <div class="column">
                                <div class="date">Бронирование 100 €</div>
                                <div class="date">Дальнейшая оплата двумя частями по 350 €</div>
                            </div>
                            <!-- /.column -->
                        </div>
                        <!-- /.row -->
                        <div class="info">Работаем с юридическими лицами. Возможен безналичный расчет.</div>
                    </div>
                    <!-- /.body -->
                    <div class="foot">
                        <p class="gray">Зимой на Байкале особенная атмосфера, а от открывающихся красот поистине захватывает дыхание. Вертолеты, снегоходы, суда на воздушной подушке и внедорожники. Каждый день мы будем менять вид транспорта, чтобы получить максимум эмоций и увидеть Байкал с разных ракурсов. Начать год именно так - отличная идея. Место встречи - аэропорт Иркутска. Погнали с нами!</p>
                    </div>
                    <!-- /.foot -->
                </div>
                <!-- /.get-ticket-tour -->
            </div>
            <!-- /.tour-info-row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#curators.section -->

    <div class="test"></div>

</div>
<!-- /.tour-page -->

<script src="<?php bloginfo('template_url') ?>/src/js/tour.js"></script>
<?php
get_footer();
