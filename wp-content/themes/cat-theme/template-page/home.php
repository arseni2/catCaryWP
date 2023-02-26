<?php
/*
Template Name: Главная страница
*/
get_header();

?>
<section class="hero" id="hero">
        <div class="hero_container">
            <div class="hero_text">
                <h5 class="hero_text_title">
                    О питомнике
                </h5>
                <p class="hero_text_desc">
                    Cat cary работает с 2009 года, за это время мы выросли и достигли немалых успехов.
                    Мы достигли таких масштабов не только по числу подопечных, но и по количеству животных, которых наша
                    команда продаёт в добрые руки.
                    Наш частный приют для котов, кошек и котят системно и ответственно подходит к этому вопросу.
                </p>
            </div>
            <div class="hero_images">
                <div class="hero_images_container">
                    <div class="hero_images_item hero_images_1"></div>
                    <div class="hero_images_item hero_images_2"></div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/style/assets/hero_section.jpg" alt="" width="370" height="214"
                     class="hero_images_item hero_images_3">
            </div>
        </div>
        <div class="hero_triangles">
            <img src="<?= get_template_directory_uri() ?>/style/assets/hero_section_left_triangle.svg" alt="triangle" class="hero_triangles_1">
            <img src="<?= get_template_directory_uri() ?>/style/assets/hero_section_right_triangle.svg" alt="triangle" class="hero_triangles_2">
        </div>
    </section>

<section class="products" id="products">
        <h5 class="products_title title">Наши питомцы</h5>
        <p class="products_desc">
            Сделать любого из них счастливым просто – купите кота, и преданное сердце ответит теплом за доброту!
        </p>
        <div class="products_list">

            <div class="products_product">
                <img class="products_product_img" src="<?= wp_get_attachment_image_url(carbon_get_theme_option('image_1_cat'), 'full') ?>" alt="product"/>
                <div class="products_product_text">
                    <h6 class="products_product_text_title">
                        <?= carbon_get_theme_option('name_1_cat') ?>
                    </h6>
                    <span class="products_product_text_cost"><?= carbon_get_theme_option('price_1_cat') ?>RUB</span>
                </div>
            </div>

            <div class="products_product">
                <img class="products_product_img" src="<?= wp_get_attachment_image_url(carbon_get_theme_option('image_2_cat'), 'full') ?>" alt="product"/>
                <div class="products_product_text">
                    <h6 class="products_product_text_title">
                        <?= carbon_get_theme_option('name_2_cat') ?>
                    </h6>
                    <span class="products_product_text_cost"><?= carbon_get_theme_option('price_2_cat') ?>RUB</span>
                </div>
            </div>

            <div class="products_product">
                <img class="products_product_img" src="<?= wp_get_attachment_image_url(carbon_get_theme_option('image_3_cat'), 'full') ?>" alt="product"/>
                <div class="products_product_text">
                    <h6 class="products_product_text_title">
                        <?= carbon_get_theme_option('name_3_cat') ?>
                    </h6>
                    <span class="products_product_text_cost"><?= carbon_get_theme_option('price_3_cat') ?>RUB</span>
                </div>
            </div>

            <div class="products_product">
                <img class="products_product_img" src="<?= wp_get_attachment_image_url(carbon_get_theme_option('image_4_cat'), 'full') ?>" alt="product"/>
                <div class="products_product_text">
                    <h6 class="products_product_text_title">
                        <?= carbon_get_theme_option('name_4_cat') ?>
                    </h6>
                    <span class="products_product_text_cost"><?= carbon_get_theme_option('price_4_cat') ?>RUB</span>
                </div>
            </div>

        </div>
    </section>

<section class="peculiarities" id="peculiarities">

        <h5 class="peculiarities_title title">
            Оссобености породы
        </h5>

        <div class="peculiarities_container">
            <ul class="peculiarities_container_list">
                <li class="peculiarities_container_list_item">
                    <p class="peculiarities_container_list_item_text">
                        Легко уживается в семьях с детьми или другими животными
                    </p>
                </li>
                <li class="peculiarities_container_list_item">
                    <p class="peculiarities_container_list_item_text">
                        Внешний вид этой кошки похож на дикую рысь
                    </p>
                </li>
                <li class="peculiarities_container_list_item">
                    <p class="peculiarities_container_list_item_text">
                        Выполняет команды как дрессированная собака
                    </p>
                </li>
                <li class="peculiarities_container_list_item">
                    <p class="peculiarities_container_list_item_text">
                        Вес может достигать 12 кг, а длина 1 м
                    </p>
                </li>
            </ul>
            <div class="peculiarities_container_img"></div>
        </div>

    </section>

<section class="contacts" id="contacts">
        <h5 class="contacts_title title">
            Наши услуги
        </h5>
        <p class="contacts_desc title">
            За подробной информацией обращайтесь к нам по телефону: <a href="tel:<?=carbon_get_theme_option('telephone_number')?>"
                                                                       class="contacts_desc_telephone">
                                                                       <?= carbon_get_theme_option('telephone_number') ?>
                                                                    </a>
        </p>
        <div class="contacts_btn title">
            <a href="tel:<?=carbon_get_theme_option('telephone_number')?>" class="contacts_btn_telephone">Связаться</a>
        </div>
        <div class="hero_triangles">
            <img src="<?= get_template_directory_uri() ?>/style/assets/hero_section_left_triangle.svg" alt="triangle" class="hero_triangles_1">
            <img src="<?= get_template_directory_uri() ?>/style/assets/hero_section_right_triangle.svg" alt="triangle" class="hero_triangles_2">
        </div>
    </section>
<?php
get_footer();
?>