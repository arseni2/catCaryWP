<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cat-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=8f3dc359-5533-4732-8e28-76b82e7bc83e&lang=ru_RU"
            type="text/javascript"></script>
    <script>
        let template_directory_uri = `<?= get_template_directory_uri() ?>`
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="loader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="hideForLoader">
<header class="header">
        <nav class="header_nav">
            <a href="#hero" class="header_nav_item">О нас</a>
            <a href="#products" class="header_nav_item">Питомцы</a>
            <img src="<?= get_template_directory_uri() ?>/style/assets/logo.png" alt="logo" class="header_nav_logo">
            <a href="#peculiarities" class="header_nav_item">Особенности породы</a>
            <a href="#contacts" class="header_nav_item">Услуги</a>
        </nav>
        <h1 class="header_title">
            ПЕРВЫЙ ПИТОМНИК С РАСШИРЕННЫМ СПЕКТРОМ УСЛУГ
        </h1>
        <div class="slider_btn_container">
            <div class="slider_btn header_slider_btn_left">
                <img src="<?= get_template_directory_uri() ?>/style/assets/left_slider_icon_btn.svg" alt="left">
            </div>
            <div class="slider_btn header_slider_btn_right">
                <img src="<?= get_template_directory_uri() ?>/style/assets/right_slider_icon_btn.svg" alt="right">
            </div>
        </div>
        <div class="header_container_dots_slider">
            <div class="header_slider_dots">
                <div class="header_slider_dots_item"></div>
            </div>
            <div class="header_slider_dots">
                <div class="header_slider_dots_item"></div>
            </div>
            <div class="header_slider_dots">
                <div class="header_slider_dots_item"></div>
            </div>
        </div>
    </header>
