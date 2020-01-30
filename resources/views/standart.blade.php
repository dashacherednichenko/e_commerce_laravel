<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <base href="/">
    <meta charset="{$_modx->config.modx_charset}">
    <meta name="description" content="@yield('description')"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="MobileOptimized" content="320"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="/assets/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/main.css?ver=1">
    {{--    <link rel="canonical" href="{$_modx->makeUrl($_modx->resource.id,'','',1)}">--}}
    <script>
        function addLink() {
            var body_element = document.getElementsByTagName('body')[0];
            var selection = window.getSelection();
            var pagelink = " ©climagroup.ua: " + document.location.href;
            var copytext = selection + pagelink;
            var newdiv = document.createElement('div');
            newdiv.style.position = 'absolute';
            newdiv.style.left = '-99999px';
            body_element.appendChild(newdiv);
            newdiv.innerHTML = copytext;
            selection.selectAllChildren(newdiv);
            window.setTimeout(function () {
                body_element.removeChild(newdiv);
            }, 0);
        }

        document.oncopy = addLink;
    </script>
    <title>@yield('title') - Climagroup</title>
</head>
<body>
<div id="container" class="content">
    <header>
        <div class="left">
            <a class="headerLogo" itemscope itemtype="http://schema.org/Organization" itemprop="url"
               href="{{route('index')}}">
                <img itemprop="logo" src="/img/logo/LOGO_CLIMAGROUP.png" alt="climagroup">
            </a>
        </div>
        <div class="right">

        </div>
    </header>

    <nav class="main-navigation" role="navigation" id="sidebar">
        <ul id="sidebar_main" class="open">
            <li class="liNav">
                <a href="{{route('categories')}}">
                    <img src="/img/icons/nav/conditioner.png" class="sidebar_icon"><br>
                    Каталог товаров
                </a>
                <ul class="submenuLeft">
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(5)}" class="submenuALeft">
                            <img src="/img/icons/nav/conditioner.png" alt="conditioning" class="sidebar_img">
                            <span class="sidebar_title">Кондиционирование</span>
                        </a>
                        <ul class="submenuLeft second">
                            <li class="submenuLiLeft">
                                <a href="{$_modx->makeUrl(17)}" class="submenuALeft">
                                    <img src="/img/icons/nav/service.png" alt="service" class="sidebar_img">
                                    <span class="sidebar_title">Монтаж и обслуживание</span>
                                </a>
                            </li>
                            <li class="submenuLiLeft">
                                <a href="{$_modx->makeUrl(16)}" class="submenuALeft">
                                    <img src="/img/icons/nav/proect.png" alt="proect ventilation" class="sidebar_img">
                                    <span class="sidebar_title">Проектирование вентиляции</span>
                                </a>
                            </li>
                            <li class="submenuLiLeft">
                                <a href="{$_modx->makeUrl(18)}" class="submenuALeft">
                                    <img src="/img/icons/nav/drilling.png" alt="drilling" class="sidebar_img">
                                    <span class="sidebar_title">Алмазное сверление</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(6)}" class="submenuALeft">
                            <img src="/img/icons/nav/ventilation.png" alt="ventilation" class="sidebar_img">
                            <span class="sidebar_title">Вентиляция</span>
                        </a>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(7)}" class="submenuALeft">
                            <img src="/img/icons/nav/heating.png" alt="heating" class="sidebar_img">
                            <span class="sidebar_title">Отопление</span>
                        </a>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(8)}" class="submenuALeft">
                            <img src="/img/icons/nav/water-supply.png" alt="water supply" class="sidebar_img">
                            <span class="sidebar_title">Водоснабжение</span>
                        </a>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(10)}" class="submenuALeft">
                            <img src="/img/icons/nav/microclimate.png" alt="microclimate" class="sidebar_img">
                            <span class="sidebar_title">Микроклимат</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="liNav">
                <a href="{$_modx->makeUrl(11)}">
                    <img src="/img/icons/nav/service.png" class="sidebar_icon"><br>
                    Услуги
                </a>
                <ul class="submenuLeft">
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(17)}" class="submenuALeft">
                            <img src="/img/icons/nav/service.png" alt="service" class="sidebar_img">
                            <span class="sidebar_title">Монтаж и обслуживание</span>
                        </a>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(16)}" class="submenuALeft">
                            <img src="/img/icons/nav/proect.png" alt="proect ventilation" class="sidebar_img">
                            <span class="sidebar_title">Проектирование вентиляции</span>
                        </a>
                    </li>
                    <li class="submenuLiLeft">
                        <a href="{$_modx->makeUrl(18)}" class="submenuALeft">
                            <img src="/img/icons/nav/drilling.png" alt="drilling" class="sidebar_img">
                            <span class="sidebar_title">Алмазное сверление</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="liNav">
                <a href="{{route('about')}}">
                    <img src="/img/icons/nav/about.png" class="sidebar_icon"><br>
                    О нас
                </a>
            </li>
            <li class="liNav">
                <a href="{{route('callback')}}">
                    <img src="/img/icons/nav/contacts.png" class="sidebar_icon"><br>
                    Контакты
                </a>
            </li>
            <li class="liNav">
                <a href="{{route('shipping')}}">
                    <img src="/img/icons/nav/shipping.png" class="sidebar_icon"><br>
                    Доставка
                </a>
            </li>
            <li class="liNav">
                <a href="{{route('payment')}}">
                    <img src="/img/icons/nav/payment.png" class="sidebar_icon"><br>
                    Оплата
                </a>
            </li>
            <li class="liNav">
                <a href="{{route('news')}}">
                    <img src="/img/icons/nav/news.png" class="sidebar_icon"><br>
                    Статьи
                </a>
            </li>
        </ul>
    </nav>


    <div id="contentContainer">
        @yield('content')
    </div>
</div>
<footer class="footer" role="contentinfo">
    <div class="footer_menus row">
        <div class="col-lg-3 col-sm-6 col-xs-12 menus__item">
            <div class="block-title"><img src="/img/logo/LOGO_CLIMAGROUP_White_min.png" class="footer_logo"
                                          alt="climagroup"></div>
            <ul itemscope itemtype="http://schema.org/Organization">
                <li class="phones">
                    <a href="tel:+380683030860">
                        <span itemprop="telephone">+38 (068) 303 08 60</span>
                    </a>
                </li>
                <li class="phones">
                    <a href="tel:+380959308033">
                        <span itemprop="telephone">+38 (095) 930 80 33</span>
                    </a>
                </li>
                <li class="phones">
                    <a href="tel:+380442233365">
                        <span itemprop="telephone">+38 (044) 223 33 65</span>
                    </a>
                </li>
                <li>
                    <strong>e-mail:</strong>&nbsp;
                    <a href="mailto:info@climagroup.com.ua"><span itemprop="email">info@climagroup.com.ua</span></a>
                </li>
                <li>
                    <div class="social">
                        <a href="https://www.facebook.com/climagroupua/" rel="nofollow" target='_blank'
                           class="social_link">
                            <img src="/img/icons/social/facebook.png" alt="facebook">
                        </a>
                        <a href="https://www.instagram.com/climagroup/" rel="nofollow" target='_blank'
                           class="social_link">
                            <img src="/img/icons/social/instagram.png" alt="instagram">
                        </a>
                        <a href="viber://chat?number=+380683030860" rel="nofollow" id="viber-footer"
                           class="social_link">
                            <img src="/img/icons/social/viber.png" alt="viber">
                        </a>
                        <a title="Telegram" href="tg://resolve?domain=Climagroup" rel="nofollow" class="social_link">
                            <img src="/img/icons/social/telegram.png" alt="Telegram">
                        </a>
                        <a title="YouTube" href="https://www.youtube.com/channel/UCTwbgSK9YEzPQpgY1ogOqDw"
                           rel="nofollow" target='_blank' class="social_link">
                            <img src="/img/icons/social/youtube.png" alt="YouTube">
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 menus__item">
            <div class="block-title">Интернет магазин</div>
            <ul>
                <li>
                    <a href="{{route('payment')}}">Оплата</a>
                </li>
                <li>
                    <a href="{{route('shipping')}}">Доставка</a>
                </li>
                <li>
                    <a href="}">Акции</a>
                </li>
                <li>
                    <a href="}">Все бренды</a>
                </li>
                <li>
                    <a href="}">Монтаж</a>
                </li>
                <li>
                    <a href="}">Наши работы</a>
                </li>
                <li>
                    <a href="}">Сертификаты</a>
                </li>
                <li>
                    <a href="}">Сотрудничество</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 menus__item">
            <div class="block-title">График работы</div>
            <ul>
                <li>Пн - Пт.: С 9:30 до 20:00</li>
                <li>Сб.: 10:00 - 16:00</li>
                <li>Вс.: выходной.</li>
            </ul>

            <div class="block-title">Адрес магазина</div>
            <ul itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <li itemprop="addressLocality" style="display:inline">г.Ирпень,</li>
                <li itemprop="addressRegion" style="display:inline">Киевская обл,</li>
                <li itemprop="streetAddress">ул. Гагарина, № 40, оф.ХХ</li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 menus__item">
            <div class="block-title">Категории</div>
            <ul>
                <li>
                    <a href="}">Кондиционеры</a>
                </li>
                <li>
                    <a href="}">Осушители</a>
                </li>
                <li>
                    <a href="}">Увлажнители</a>
                </li>
                <li>
                    <a href="}">Воздушние завесы</a>
                </li>
                <li>
                    <a href="}">Вентиляция</a>
                </li>
                <li>
                    <a href="}">Водонагреватели</a>
                </li>
                <li>
                    <a href="}">Конвекторы</a>
                </li>
                <li>
                    <a href="}">Обогреватели</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="separate">
            <div class="copyright">
                &copy; Интернет-магазин климатической техники CLIMAGROUP 2018-2020<br>
                ООО «ПРОМТЕХИННОВАЦИИ», ИНН 399056910316, ЕГРПОУ 39905699,
                P/c UA713052990000026006050010661 , "ПРИВАТБАНК", МФО 305299
            </div>
            <div class="visa">
                <img src="/img/icons/payment_servis/visa-master-card.png" alt="logo_viza_mastercard" class="icons_visa">
                <img src="/img/icons/payment_servis/logoOC_MR.png" alt="logo_privatbank_oplatachast"
                     class="icons_credit_footer">
            </div>
        </div>
    </div>
    {{--        <div id="carouselOne" class="owl-carousel slide-footer owl-theme">--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/toshiba" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/1280px-Toshiba_logo.svg.png" alt="Toshiba">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/daikin" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy"--}}
    {{--                         data-src="https://climagroup.com.ua/my/templates/images/brands/_daikin_logo_male_cien.png"--}}
    {{--                         alt="daikin">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/aux" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/AUX_air.png"--}}
    {{--                         alt="AUX">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/carrier" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/Carier.png"--}}
    {{--                         alt="Carier">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/ch" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/CH_logo.png"--}}
    {{--                         alt="CH">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/haier" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/Haier_log.png"--}}
    {{--                         alt="Haier">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/leberg" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/leberg_1.png"--}}
    {{--                         alt="leberg">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/lessar" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/LESSAR.png"--}}
    {{--                         alt="LESSAR">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/lg" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/lg-logo-1.png"--}}
    {{--                         alt="LG">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/midea" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/midea.png"--}}
    {{--                         alt="midea">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/mitsubishi-heavy" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/mitsubishi.png"--}}
    {{--                         alt="mitsubishi">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/neoclima" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/neoclima.png"--}}
    {{--                         alt="neoclima">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/olmo" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/Olmo.png"--}}
    {{--                         alt="Olmo">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="/brands/osaka" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/osaka.png"--}}
    {{--                         alt="osaka">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/panasonic" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/panasonic-logo.png"--}}
    {{--                         alt="panasonic">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/tosot" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/tosot.png"--}}
    {{--                         alt="tosot">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/idea" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/idea.png"--}}
    {{--                         alt="idea">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/roda" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/roda.png"--}}
    {{--                         alt="roda">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/galanz" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/galanz.png"--}}
    {{--                         alt="galanz">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/hitachi" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/hitachi.png"--}}
    {{--                         alt="hitachi">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/lanzkraft" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/lanzkraft.png"--}}
    {{--                         alt="lanzkraf">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/sakata" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/sakata.png"--}}
    {{--                         alt="sakata">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/samurai" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/samurai.png"--}}
    {{--                         alt="samurai">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/gree" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/gree.png"--}}
    {{--                         alt="gree">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/mitsubishi-electric" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy"--}}
    {{--                         data-src="https://climagroup.com.ua/my/templates/images/brands/mitsubishi-electric_logo.png"--}}
    {{--                         alt="Mitsubishi Electric">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/electrolux" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/Electrolux.png"--}}
    {{--                         alt="Electrolux">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/zanussi" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/zanussi.png"--}}
    {{--                         alt="Zanussi">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/chigo" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/chigo.png"--}}
    {{--                         alt="chigo">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/samsung" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/samsung_logo.png"--}}
    {{--                         alt="samsung">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/fujitsu" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy"--}}
    {{--                         data-src="https://climagroup.com.ua/my/templates/images/brands/Fujitsu-Logo.svg.png" alt="fujitsu">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/noirot" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/noirot_logo.png"--}}
    {{--                         alt="noirot">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/ballu" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/ballu.png"--}}
    {{--                         alt="ballu">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/hisense" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/Hisense-white.png"--}}
    {{--                         alt="hisense">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/olefini" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/olefini.png"--}}
    {{--                         alt="olefini">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="https://climagroup.com.ua/brands/trotec" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/trotec.png"--}}
    {{--                         alt="trotec">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="brands/mitsushito" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/mitsushito.png"--}}
    {{--                         alt="mitsushito">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="brands/galactic" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="https://climagroup.com.ua/my/templates/images/brands/galactic.png"--}}
    {{--                         alt="galactic">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="brands/hoapp" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/logo-hoapp-gray.png" alt="hoapp">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="brands/kentatsu" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/kentatsu.png" alt="kentatsu">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href="brands/siccom" class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/siccom.png" alt="siccom">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3380]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/soler-palau.png" alt="soler-palau">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3428]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/shuft.png" alt="shuft">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3457]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/tcl.png" alt="tcl">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3466]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/aspenpumps.png" alt="aspenpumps">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3508]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/bosch.png" alt="bosch">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3586]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="/my/templates/images/brands/corona.png" alt="corona">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3632]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="my/templates/images/brands/aeralogo.png" alt="Aerauliqa">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3644]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="my/templates/images/brands/logomarley.png" alt="marley">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3653]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="my/templates/images/brands/prana.svg" alt="Prana">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~3744]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="my/templates/images/brands/mycond_logo.png" alt="mycond">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="item">--}}
    {{--                <a href=[[~4091]] class="carousel-block-a">--}}
    {{--                    <img class="owl-lazy" data-src="my/templates/images/brands/logo_ACElectric_vector.png" alt="ACElectric">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <button id="top">&#8593;</button>
</footer>

{{--    <script src="assets/templates/js/sidebar.js"></script>--}}
</body>
</html>
