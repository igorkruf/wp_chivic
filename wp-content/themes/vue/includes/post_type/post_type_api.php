<?php
//добавляем свой тип поста 
add_action('init', 'true_register_post_type_service'); // Использовать функцию только внутри хука

function true_register_post_type_service()
{
    $labels = array(
        'name' => 'Список услуг chivic.ru',
        'singular_name' => 'Услуга chivic.ru', // админ панель Добавить->Функцию
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу', // заголовок тега <title>
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'all_items' => '',
        'view_item' => 'Просмотр услуги на сайте',
        'search_items' => 'Искать услугу',
        'not_found' =>  'услуга  не найдена.',
        'not_found_in_trash' => 'В корзине нет услуг.',
        'menu_name' => 'Список услуг chivic.ru',
        'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/radiohead.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail')

    );
    register_post_type('service_chivic', $args);
}
///////////////////////////////////////////////////////////////////////////////////
//добавляем свой тип поста  Tehnologe
add_action('init', 'true_register_post_tehnologe'); // Использовать функцию только внутри хука

function true_register_post_tehnologe()
{
    $labels = array(
        'name' => 'Список технологий chivic.ru',
        'singular_name' => 'Технология chivic.ru', // админ панель Добавить->Функцию
        'add_new' => 'Добавить технологию',
        'add_new_item' => 'Добавить новую технологию', // заголовок тега <title>
        'edit_item' => 'Редактировать технологию',
        'new_item' => 'Новая технология',
        'all_items' => '',
        'view_item' => 'Просмотр технологии на сайте',
        'search_items' => 'Искать технологию',
        'not_found' =>  'технология   не найдена.',
        'not_found_in_trash' => 'В корзине нет технологий.',
        'menu_name' => 'Список технологий chivic.ru',
        //'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/radiohead.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail')

    );
    register_post_type('tehnologe', $args);
}
///////////////////////////////////////////////////////////////////////////////////
//добавляем свой тип поста  Portfolio
add_action('init', 'true_register_post_portfolio'); // Использовать функцию только внутри хука

function true_register_post_portfolio()
{
    $labels = array(
        'name' => 'Список проектов chivic.ru',
        'singular_name' => 'проект chivic.ru', // админ панель Добавить->Функцию
        'add_new' => 'Добавить проект',
        'add_new_item' => 'Добавить новый проект', // заголовок тега <title>
        'edit_item' => 'Редактировать проект',
        'new_item' => 'Новый проект',
        'all_items' => '',
        'view_item' => 'Просмотр проекта на сайте',
        'search_items' => 'Искать проект',
        'not_found' =>  'проект   не найден.',
        'not_found_in_trash' => 'В корзине нет проектов.',
        'menu_name' => 'Список проектов chivic.ru',
        'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/radiohead.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail')

    );
    register_post_type('portfolio', $args);
}
///////////////////////////////////////////////////////////////////////////////////