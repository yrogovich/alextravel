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
                <div class="block"  data-aos="zoom-in">
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
                <div class="block"  data-aos="zoom-in" data-aos-delay="200">
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
                <div class="block"  data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
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
                                <a href="<?=INST_SLAVA?>" target="_blank" class="inst">
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
                                <a href="<?=INST_PHOTOGRAPHER?>" target="_blank" class="inst">
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
                    <a href="<?=TELEGRAM_ICELAND_СHAT?>" target="_blank" class="btn btn-telegram">Телеграм чат тура</a>
                </div>
                <!-- /.info-curators -->
                <div class="get-ticket-tour"  data-aos="fade-up">
                    <div class="head">
                        <div class="row">
                            <div class="pair">
                                <div class="date">Осталось</div>
                                <!-- /.date -->
                                <div class="h5">9 мест из 17</div>
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
                                <li></li>
                                <li class="gray"></li>
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
                            <div class="btn btn-select select-1 active">Оплата до 01.01.2020г. </div>
                            <div class="btn btn-select select-2">Оплата после 01.01.2020г. <span class="footnote">+100 €</span></div>
                        </div>
                        <!-- /.pair -->
                        <div class="row">
                            <a data-fancybox data-src="#request-modal" class="btn btn-primary">Оставить заявку</a>
                            <div class="h4 price">790 €</div>
                            <div class="column">
                                <div class="date">Бронирование 90 € (сумма засчитывается в стоимость тура)</div>
                                <div class="date">Дальнейшая оплата двумя частями по 350 € (в феврале и апреле)</div>
                            </div>
                            <!-- /.column -->
                        </div>
                        <!-- /.row -->
                        <div class="info">Работаем с юридическими лицами. Возможен безналичный расчет.</div>
                    </div>
                    <!-- /.body -->
                    <div class="foot">
                        <p class="gray">Специальный тур для предпренимателей Новый формат. Фантастический нетворкинг близких по духу людей. Исследуем Южное побережье. Самые сочные места. 1600 км на внедорожниках. Океан, ледники, вулканы. Питание, проживание, джипы - входят в стоимость.</p>
                    </div>
                    <!-- /.foot -->
                </div>
                <!-- /.get-ticket-tour -->
            </div>
            <!-- /.tour-info-row -->
        </div>
        <!-- /.container -->

        <div class="wave-wrapper">
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/curators/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#curators.section -->

    <div id="us-way" class="section">
        <div class="container">
            <div class="section-title">
                <div class="h2 decorations way">Маршрут путешествия</div>
                <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/title.svg" alt="Скоро едем">
            </div>
            <!-- /.section-title -->

            <div class="tour-row">
                <div class="tour-description" data-aos="fade-up" >
                    <div class="navigation">
                        <div class="left"></div>

                        <ul class="days">
                            <li class="active">
                                <a href="#day-1">1</a>
                            </li>
                            <li>
                                <a href="#day-2">2</a>
                            </li>
                            <li>
                                <a href="#day-3">3</a>
                            </li>
                            <li>
                                <a href="#day-4">4</a>
                            </li>
                            <li>
                                <a href="#day-5">5</a>
                            </li>
                        </ul>
                        <!-- /.days -->

                        <div class="right"></div>
                    </div>
                    <!-- /.navigation -->

                    <div id="day-1" class="card">
                        <div class="image">
                            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/day-1.jpg" alt="img">
                        </div>
                        <!-- /.image -->
                        <div class="body">
                            <div class="h4">День #1</div>
                            <p>Наконец-то мы тут, в далекой и сказочной Исландии. Прилетаем в аэропорт Кефлавик. Берём в прокат наши джипы и едем по живописной дороге в сторону наших первых апартаментов. Заселяемся, кушаем, отдыхаем и отправляемся в путешествие по Золотому кольцу. Нас будут ждать невероятный водопад Gullfoss и долина гейзеров Haukadalur, где мы увидим могущественные Geysir и Strokkur. Маршрут займет около 8 часов.</p>
                        </div>
                        <!-- /.body -->
                    </div>
                    <!-- /.card -->
                    <div id="day-2" class="card">
                        <div class="image">
                            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/day-2.jpg" alt="img">
                        </div>
                        <!-- /.image -->
                        <div class="body">
                            <div class="h4">День #2</div>
                            <p>Режим в Исландии – важная составляющая путешествия, ведь мы хотим столько всего вам показать! Каждый день мы встаем в 7:30, час на завтрак / сборы – погнали дальше. <br>
                            Первой точкой на нашем маршруте станет водопад Seljandsfoss высотой 60 м, впечатляющий своей величественностью.
                            По пути к следующей точке нашего маршрута заглянем в Dyrholaey. Это место обладает необъяснимой магией, дарящей покой и безмятежность на душе.
                            Программу дня завершаем знакомством... с морскими котиками, в их естественной среде обитания – ледниковой лагуне Jökulsárlón</p>
                        </div>
                        <!-- /.body -->
                    </div>
                    <!-- /.card -->
                    <div id="day-3" class="card">
                        <div class="image">
                            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/day-3.jpg" alt="img">
                        </div>
                        <!-- /.image -->
                        <div class="body">
                            <div class="h4">День #3</div>
                            <p>Описание дня в процессе написания.</p>
                        </div>
                        <!-- /.body -->
                    </div>
                    <!-- /.card -->
                    <div id="day-4" class="card">
                        <div class="image">
                            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/day-4.jpg" alt="img">
                        </div>
                        <!-- /.image -->
                        <div class="body">
                            <div class="h4">День #4</div>
                            <p>Описание дня в процессе написания.</p>
                        </div>
                        <!-- /.body -->
                    </div>
                    <!-- /.card -->
                    <div id="day-5" class="card">
                        <div class="image">
                            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/day-5.jpg" alt="img">
                        </div>
                        <!-- /.image -->
                        <div class="body">
                            <div class="h4">День #5</div>
                            <p>Описание дня в процессе написания.</p>
                        </div>
                        <!-- /.body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.tour-description -->
                <div class="tour-map">
                    <div class="map" data-aos="zoom-in" data-aos-delay="400">
                        <img class="lazy bubble-top" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/bubble-1.svg" alt="bubble">
                        <img class="lazy map-img" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/map.png" alt="map">
                        <img class="lazy bubble-bottom" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/way/bubble-2.svg" alt="bubble">
                    </div>
                    <!-- /.map -->
                </div>
                <!-- /.tour-map -->
            </div>
            <!-- /.tour-row -->
        </div>
        <!-- /.container -->

        <div class="wave-wrapper" >
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/way/mountains.png" alt="mountain" class="mountain">
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/way/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#us-way.section -->

    <div id="big-slider" class="section">
        <div class="container">
            <div class="section-title">
                <div class="h2 decorations">Грандиозные впечатления <br> на всю жизнь</div>
                <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/big-slider/wow.svg" alt="wow">
            </div>
            <!-- /.section-title -->

           
        </div>
        <!-- /.container -->
        <div id="slider"  data-aos="zoom-in">
            <?php for($i = 1; $i <= 41; $i++): ?>
                <div class="slide">
                    <img data-lazy="<?php bloginfo('template_url') ?>/src/img/gallery-section/iceland_october_2019/iceland_<?php printf('%02d',$i) ?>.jpg" alt="slide">
                </div>
            <?php endfor; ?>
        </div>
        <!-- /#slider -->

        <div class="wave-wrapper" >
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/big-slider/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#slider.section-alt -->

    <div id="how-price" class="section">
        <div class="container">
            <div class="section-title">
                <div class="h2 decorations price">Сколько стоит</div>
                <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/price/title.svg" alt="Цена">
            </div>
            <!-- /.section-title -->

            <div class="get-ticket-tour"  data-aos="fade-up">
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
                            <div class="btn btn-select select-1 active">Оплата до 01.01.2020г. </div>
                            <div class="btn btn-select select-2">Оплата после 01.01.2020г. <span class="footnote">+100 €</span></div>
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
                </div>
                <!-- /.get-ticket-tour -->
        </div>
        <!-- /.container -->

        <div class="wave-wrapper" >
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/price/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#how-price.section -->

    <div id="price-include" class="section">
        <div class="container">
            <div class="section-title">
                <div class="h2 decorations like">Что входит в стоимость?</div>
                <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/title.svg" alt="ON">
            </div>
            <!-- /.section-title -->

            <div class="reasons-column">
                <div class="reason">
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Проживание</div>

                        <p>4 ночи нашего путешествия группа будет жить в двухместных номерах в отелях или гестхаусах. Все места проверены нами, чистые, со всеми необходимыми удобствам, без изысков. У каждого отеля есть горячая вода, свет, кондиционер, интернет, завтрак, в общем все необходимое. Если вы едете один, мы подселим к вам кого-то из группы вашего пола.</p>
                    </div>
                    <!-- /.text -->
                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/01-image.png" alt="Проживание">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/01-icon.png" alt="Проживание иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->
                <div class="reason inverse"> 
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Питание</div>

                        <p>Питание включено в стоимость. На всем протяжении поездки у нас будет четкое расписание по тому, что мы будем готовить и кушать в течении всего пребывания в Исландии. Это не будет питание в ресторанах или кафе. Мы будем покупать все в сети гипермаркетов Bonus или местных рынках и готовить своими силами. Могу вам сказать с уверенностью, то что мы будем кушать, будет очень вкусно! Все то, что не будет входить в наш список, идет за отдельную плату, но, я надеюсь, нашего меню будет достаточно и вам не придется питаться где то в другом месте.</p>
                    </div>
                    <!-- /.text -->

                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/02-image.png" alt="Питание">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/02-icon.png" alt="Питание иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->

                <div class="reason"> 
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Транспорт</div>

                        <ul class="primary-style">
                            <li>В стоимость входят все перемещения по маршруту, от дверей аэропорта в начале до дверей аэропорта в конце пути</li>
                            <li>Едем на современных полноприводных кроссоверах</li>
                            <li>Бензин, страховки, стоянки и т.д. так же входят в стоимость</li>
                        </ul>
                        <!-- /.primary-style -->
                    </div>
                    <!-- /.text -->

                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/03-image.png" alt="Транспорт">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/03-icon.png" alt="Транспорт иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->

                <div class="reason inverse"> 
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Интернет везде</div>

                        <p>У нас будет Wi-Fi прямо в машиине на местной сим-карте, чтобы во время дороги была возможность делиться фотографиями - это уже включено в стоимость. В домах у нас будет местный Wi-Fi.</p>
                    </div>
                    <!-- /.text -->

                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/04-image.png" alt="Интернет везде">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/04-icon.png" alt="Интернет иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->

                <div class="reason"> 
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Страховка</div>

                        <p>На каждого члена экспедиции оформляем медицинскую <br> страховку на 40 000 евро.</p>
                    </div>
                    <!-- /.text -->

                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/05-image.png" alt="Страховка">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/05-icon.png" alt="Страховка иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->

                <div class="reason inverse"> 
                    <div class="text" data-aos="fade-up" data-aos-duration="1500">
                        <div class="h3">Профессиональный фотограф</div>

                        <p>С нами в туре обязательно будет профессиональный фотограф. Он будет фотографировать всех участников во всех местах путеществия. </p>
                    </div>
                    <!-- /.text -->

                    <div class="images">
                        <div class="main-image">
                            <img class="img" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/06-image.png" alt="Профессиональный фотограф">
                        </div>
                        <!-- /.main-image -->
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/06-icon.png" alt="Профессиональный фотограф иконка">
                        </div>
                    </div>
                    <!-- /.images -->
                </div>
                <!-- /.reason -->
            </div>
            <!-- /.reasons-column -->
        </div>
        <!-- /.container -->
        <div class="wave-wrapper" >
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/mountains-inversed.jpg" alt="mountains" class="mountain">
            <div class="passport-parralax" data-relative-input="true">
                <img data-depth="-0.2" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/passport.png" alt="passport" class="lazy passport">
            </div>
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/price-include/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#price-include.section -->

    <div id="not-included" class="section">
        <div class="container">
            <div class="section-title">
                <div class="h2 decorations warning">Что не входит в стоимость</div>
                <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/not-included/title.svg" alt="ON">
            </div>
            <!-- /.section-title -->

            <div class="features">
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/not-included/feature-1.svg" alt="feature">
                    </div>
                    <!-- /.image -->
                    <div class="h3">Авиабилеты</div>
                    <p>Летим WizzAir из Вильнюса или Варшавы (ориентировочная стоимость 100€). <br> Вы можете прилететь в Рейкьявик из любого города.</p>
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/not-included/feature-2.svg" alt="feature">
                    </div>
                    <!-- /.image -->
                    <div class="h3">Виза</div>
                    <p>Подходит любая многократная <br> шенгенская виза (60€).</p>
                </div>
                <!-- /.feature -->
                <div class="feature">
                    <div class="image">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/not-included/feature-3.svg" alt="feature">
                    </div>
                    <!-- /.image -->
                    <div class="h3">Доп. экскурсии</div>
                    <p>С нашим плотным графиком, боюсь, у Вас даже не появится свободного времени на дополнительные экскурсии.</p>
                </div>
                <!-- /.feature -->
            </div>
            <!-- /.features -->
        </div>
        <!-- /.container -->
        <div class="wave-wrapper" >
            <img src="<?php bloginfo('template_url') ?>/src/img/iceland/faq/wave.svg" alt="wave" class="wave">
        </div>
        <!-- /.wave-container -->
    </div>
    <!-- /#not-included.section -->

    <div id="faq" class="section">
        <img data-src="<?php bloginfo('template_url') ?>/src/img/security-section/moutains.jpg"  class="mountains lazy">
        <img data-src="<?php bloginfo('template_url') ?>/src/img/security-section/moutains-mobile.jpg" class="mountains-mobile lazy">

        <div class="bull-parallax" data-relative-input="true">
            <img data-depth="0.1" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/faq/horse.png" class="lazy bull">
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
                                <li>Исландия считается самой дорогой страной в Европе и цены там действительно кусаются. Мы нашли местную бюджетную продуктовую сеть, называется "BONUS", где большая часть продуктов стоит всего в 2-2,5 раза дороже чем в Минске. Поэтому часть еды я заранее закуплю в Минске, а часть буду докупать на месте. У нас будут организованы: легкие завтраки, ссобойки и тимбилдинг-ужины (мы готовим простые и сытные блюда все вместе). У нас будет мини-пикник с видом на ледниковую лагуну и поход в секретный рыбный ресторан для местных.</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Сколько денег с собой менять и нужно ли это делать?</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Поскольку Исландия – страна прогрессивная, то здесь можно обойтись без наличных денег: банковские карты принимают практически везде. Моя рекомендация - наличные хоть в каких-то объемах в евро должны быть. <br> Что касается суммы, то я советую иметь неприкосновенный запас около 200-300 евро. А так у каждого свои нужды. Есть ребята которые тратили за всю поездку 150 евро, а есть те кто 500 и больше.</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">На чем мы будем перемещаться по Исландии?</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>На джипах Hyundai Tucson. В каждом джипе будет по 5 человек. В машинах будут рации для оперативной связи друг с другом. В Исландии действует ограничение скорости в 90 км/час. (Штрафы безумно большие)</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Где мы будем жить?</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Вы уже знаете что Исландия - самая дорогая европейская страна. Цены на отели впечатляют, для примера самый обычный номер начинается от 70 евро/ночь. Поэтому мы оптимизируем расходы на жилье и останавливаемся в гестхаусах и хостелах. Они простые, но уютные. Так как большую часть времени мы будем проводить в пути в процессе осмотра достопримечательностей нет смысла переплачивать за комфорт которым толком и не воспользуешься.</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Сколько человек будет в группе?</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Нас будет 10 или 15 человек. Стремимся к цифре кратной 5. Именно столько человек помещается в одном автомобиле.</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Какая погода в Исландии?</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Непредсказуемая. Это как в Питере, только может быть еще более ветренно. Акутальную погоду лучше всего смотреть на этом веб-сайте: <a href="https://en.vedur.is" class="link" target="blank">en.vedur.is</a></li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Авиабилеты</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Летим WizzAir из Вильнюса или Варшавы (ориентировочная стоимость 100-200€, в зависимости от сезона). Сейчас на даты 8-12 июня цена 160€ туда обратно. Для лета это очень вкусно!</li>
                                <li>Вы можете прилететь в Рейкьявик из любого города. Москва, Рига, Минск и т.д.</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Виза</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Подходит любая многократная</li>
                                <li>шенгенская виза (30-60€). Скорее всего она у Вас уже есть</li>
                            </ul>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.accordion -->
                    <div class="accordion">
                        <div class="head">
                            <div class="h4">Дополнительные экскурсии</div>
                            <!-- /.h4 -->

                            <div class="toggler"></div>
                        </div>
                        <!-- /.head -->
                    
                        <div class="content">
                            <ul class="primary-style">
                                <li>Едвали у Вас будет время на них ) Наш маршрут максимально выстроен на удовольствии. Не будет никакой нужды )</li>
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
            <div class="h2 decorations smile">Кто повезет</div>
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
                <p >Путешественник, 31 страна в рюкзаке, организатор образовательных мероприятий и создатель проекта Alextravel.me</p>
                <ul class="primary-style">
                    <li >Начал свой путь с вожатого в детском лагере. Жил в Европе, работал в Пекине и Москве.</li>
                    <li >Проехал с друзьями на раритетном фургоне из Минска к атлантическому океану чтобы посёрфить.</li>
                    <li>Организовал десятки мероприятий, пробежал полумарафон и Bison Race</li>
                    <li>Ко всему подхожу с душой и окружаю каждого заботой и вниманием. Можете быть спокойны, со мной эта поездка будет безопасной, лёгкой, интересной и насыщенной</li>
                </ul>
                <div class="h4">Давайте встретимся или созвонимся, чтобы познакомиться и обсудить детали поездки</div>
                <a data-fancybox data-src="#call-me-modal" href="javascript:;" class="btn btn-primary">Познакомиться</a>
            </div>
            <!-- /.text -->
        </div>
        <!-- /.bio-row -->
    </div>
    <!-- /.container -->
    <div class="wave-wrapper" >
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/trust/wave.svg" alt="wave" class="wave">
    </div>
    <!-- /.wave-container -->
</div>
<!-- /#about.section -->

<div id="trust" class="section">
    <div class="container">
        <div class="section-title">
            <div class="h2 decorations smile-2">Почему мне можно доверять?</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/trust/title.svg" alt="доверие   ">
        </div>
        <!-- /.section-title -->


        <div class="row">
            <div class="about">
                <div class="h4">Уже 2 года мы с единомышленниками ездим в лучшие уголки нашей земли</div>

                <div class="primary-box" data-aos="fade-up" data-aos-offset="-200">
                    <div class="title">7 поездок</div>
                    <p>С групповыми турами в Исландию мы уже сделали.</p>
                </div>
                <!-- /.primary-box -->
                <div class="primary-box" data-aos="fade-up" data-aos-offset="-200">
                    <div class="title">90+ человек</div>
                    <p>Хотя скорее больше, были участниками наших экспедиций.</p>
                </div>
                <!-- /.primary-box -->
                <div class="primary-box" data-aos="fade-up"data-aos-offset="-200">
                    <div class="title">Официальные туры</div>
                    <p>Мы работаем в т.ч. с юридическими лицами. Возможна оплата по безналичному расчету.</p>
                </div>
                <!-- /.primary-box -->
            </div>
            <!-- /.about -->
            <div class="images">
                <div class="main-image valley" data-relative-input="true">
                    <img data-depth="-0.2" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/trust/valley.png" alt="долина" class="lazy">
                </div>
                <div class="puffin-wrapper" data-relative-input="true">
                    <img data-depth="-0.5" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/trust/puffin.png" alt="puffin" class="puffin lazy">
                </div>
                <!-- /.puffin-wrapper -->
            </div>
            <!-- /.images -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="wave-wrapper" >
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/opportunities/wave.svg" alt="wave" class="wave">
    </div>
    <!-- /.wave-container -->
</div>
<!-- /.trust section -->

<div id="opportunities" class="section">
    <div class="container">
        <div class="section-title">
            <div class="h2">Я хочу с Вами, но не могу в эти даты. <br> Как быть?</div>
            <img class="wall-text lazy" data-src="<?php bloginfo('template_url') ?>/src/img/iceland/opportunities/title.svg" alt="wow">
        </div>
        <!-- /.section-title -->

        <div class="card">
            <div class="body">
                <div class="h5">Оставляй заявку, я расскажу тебе о будующих поездках, забронировать можно будет сейчас, а оплачивать по частям позже - это удобно, как показывает практика.</div>

                <form id="get-opportunities-form" class="subscribe-form" action="javascript:" onsubmit="callHandler('#get-opportunities-form')">
                    <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="form_name" value="Узнать возможности">
                    <div class="input-wrapper">
                        <input type="text" name="user_phone" placeholder="Телефон" required>
                    </div>
                    <button class="btn btn-primary">Хочу с вами</button>
                </form>
            </div>
            <!-- /.body -->
            <div class="foot">
                <div class="date">Новости. Вопросы. Общение. Свободные места    </div>
                <div class="h5">Присоединяйтесь к нам:</div>
                <a href="<?=TELEGRAM_PROJECT_СHAT?>" target="_blank" class="btn btn-telegram">Общий чат проекта</a>
            </div>
            <!-- /.foot -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.container -->
    <div class="wave-wrapper" >
        <img data-src="<?php bloginfo('template_url') ?>/src/img/prefooter/clouds.png" alt="cloud" class="lazy cloud">
        <img data-src="<?php bloginfo('template_url') ?>/src/img/iceland/opportunities/waterfall.png" alt="waterfall" class="lazy waterfall">
        <img src="<?php bloginfo('template_url') ?>/src/img/iceland/opportunities/wave-down.svg" alt="wave" class="wave">
    </div>
    <!-- /.wave-container -->
</div>
<!-- /#opportunities.section -->

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
                <div class="h4">Если у вас остались вопросы -  звоните или пишите. <span class="block">Я всегда на связи.</span></div>
                <p>Если вы из Москвы, можем устроить личную встречу <span class="md-block">и я вам расскажу о нашем путешествии.</span> <span class="block">Если вы из регионов, давайте созвонимся по скайпу!</span></p>
                <a data-fancybox data-src="#call-me-modal" href="javascript:;" class="btn btn-primary">Связаться со мной</a>
            </div>
            <!-- /.column-2 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.prefooter -->

</div>
<!-- /.tour-page -->

<script src="<?php bloginfo('template_url') ?>/src/js/tour.js"></script>
<?php
get_footer();
