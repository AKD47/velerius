<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Velerius
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>
<!-- open .header-->
<header class="header">

    <div class="container">

        <a href="index.html" class="header__logo" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/head-logo-icon.png" alt="">
        </a>

        <div class="header__call">

            <a href="#" class="header__call--deliver">Доставка по России</a>

            <a href="tel:0722818969" class="header__call--number">0722-818-969 <span>заказать звонок</span></a>

        </div>

        <form class="header__search">
            <input class="header__search--field" type="search" placeholder="поиск…">
            <span class="header__search--icon">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/magnifier-icon.png" alt="">
            </span>
        </form>

        <ul class="header__enter">
            <li>
                <a href="#">Помощь</a>
            </li>
            <li>
                <a href="#">О нас</a>
            </li>
            <li>
                <a href="#">
                    <span class="header__enter--icon">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/user-icon.png" alt="">
                    </span>Вход</a>
            </li>
        </ul>

        <div class="header__counter">

            <div class="header__counter--likes">

                <a href="#" class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/favorites-icon.png" alt="">
                </a>
                <a href="#">0</a>

            </div>

            <div class="header__counter--basket">
                <a href="#" class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/basket-icon.png" alt="">
                </a>
                <a href="#">0</a>
            </div>

        </div>

        <div class="header__navbar">

            <ul class="nav-top">
                <li><a href="#">УХОД ЗА ЛИЦОМ</a>

                    <span class="shevron"></span>

                    <div class="sub-menu">

                        <div class="sub-menu__left">

                            <span class="sub-menu__left--img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/woman.png" alt="">
                            </span>

                            <div class="sub-menu__left--menu">
                                <h3>Для женщин</h3>
                                <ul>
                                    <li><a href="#">Очищение</a></li>
                                    <li><a href="#">Увлажнение и питание</a></li>
                                    <li><a href="#">Антивозрастной уход</a></li>
                                    <li><a href="#">Уход за проблемной кожей</a></li>
                                    <li><a href="#">Салонная косметика</a></li>
                                    <li><a href="#">Глаза и губы</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="sub-menu__right">

                             <span class="sub-menu__left--img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/man.png" alt="">
                            </span>

                            <div class="sub-menu__left--menu">
                                <h3>Для мужчин</h3>
                                <ul>
                                    <li><a href="#">Очищение</a></li>
                                    <li><a href="#">Увлажнение и питание</a></li>
                                    <li><a href="#">Антивозрастной уход</a></li>
                                    <li><a href="#">Уход за проблемной кожей</a></li>
                                    <li><a href="#">Салонная косметика</a></li>
                                    <li><a href="#">Глаза и губы</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </li>
                <li><a href="#">УХОД ЗА ТЕЛОМ</a>
                    <span class="shevron"></span>
                    <div class="sub-menu">
                        <div class="sub-menu__left">

                            <span class="sub-menu__left--img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/woman.png" alt="">
                            </span>

                            <div class="sub-menu__left--menu">
                                <h3>Для женщин</h3>
                                <ul>
                                    <li><a href="#">Очищение</a></li>
                                    <li><a href="#">Увлажнение и питание</a></li>
                                    <li><a href="#">Антивозрастной уход</a></li>
                                    <li><a href="#">Уход за проблемной кожей</a></li>
                                    <li><a href="#">Салонная косметика</a></li>
                                    <li><a href="#">Глаза и губы</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="sub-menu__right">

                            <h3>Товар дня с лучшей ценой</h3>

                            <div class="sub-menu__right--product">

                                <span class="discount">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/discount-icon.png" alt="">
                                </span>

                                <div class="sub-menu__right--box">

                                    <div class="sub-menu__right--img">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/product-img.png" alt="">
                                    </div>
                                    <div class="sub-menu__right--descr">

                                        <h3 class="title">C The Success Cleanser</h3>
                                        <span class="subtitle">Holyland</span>
                                        <p class="descr">Деликатное очищающее средство с витамином С</p>
                                        <span class="price">6950 <i class="fa fa-rub" aria-hidden="true"></i></span>

                                    </div>


                                </div>



                            </div>

                        </div>

                    </div>
                </li>
                <li><a href="#">МАКИЯЖ</a>
                    <span class="shevron"></span>
                    <div class="sub-menu">
                        <div class="sub-menu__left">

                            <span class="sub-menu__left--img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/woman.png" alt="">
                            </span>

                            <div class="sub-menu__left--menu">
                                <h3>Для женщин</h3>
                                <ul>
                                    <li><a href="#">Очищение</a></li>
                                    <li><a href="#">Увлажнение и питание</a></li>
                                    <li><a href="#">Антивозрастной уход</a></li>
                                    <li><a href="#">Уход за проблемной кожей</a></li>
                                    <li><a href="#">Салонная косметика</a></li>
                                    <li><a href="#">Глаза и губы</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="sub-menu__right">

                            <h3>Товар дня с лучшей ценой</h3>

                            <div class="sub-menu__right--product">

                                <span class="discount">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/discount-icon.png" alt="">
                                </span>

                                <div class="sub-menu__right--box">

                                    <div class="sub-menu__right--img">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/product-img.png" alt="">
                                    </div>
                                    <div class="sub-menu__right--descr">

                                        <h3 class="title">C The Success Cleanser</h3>
                                        <span class="subtitle">Holyland</span>
                                        <p class="descr">Деликатное очищающее средство с витамином С</p>
                                        <span class="price">6950 <i class="fa fa-rub" aria-hidden="true"></i></span>

                                    </div>


                                </div>



                            </div>

                        </div>

                    </div>
                </li>
                <li><a href="#">ЛЕЧЕБНАЯ КОСМЕТИКА</a></li>
                <li><a href="#">УХОД ЗА ПОЛОСТЬЮ РТА</a></li>
                <li><a href="#">СОЛНЕЧНАЯ ЛИНИЯ</a></li>
                <li><a href="#">ПОДАРКИ</a></li>
                <li><a href="#">СКИДКИ</a></li>
            </ul>

        </div>

    </div>

</header>
<!-- close .header -->
