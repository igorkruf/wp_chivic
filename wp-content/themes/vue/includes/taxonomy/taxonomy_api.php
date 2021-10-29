<?php
//////////////////////////////////////////////////////////////////
// регистрирующая новые таксономии (create_book_taxonomies)
add_action('init', 'create_api_taxonomies');
// функция, создающая 2 новые таксономии "genr"  для постов типа "book"
function create_api_taxonomies()
{

    // Добавляем древовидную таксономию 'genre' (как категории)
    register_taxonomy('type_service_chivic', array('service_chivic', 'portfolio', 'post'), array(
        'hierarchical'  => true,
        'labels'        => array(
            'name'              => 'Виды услуг(chivic.ru)',
            'singular_name'     => 'Вид услуги(chivic.ru)',
            'search_items'      =>  'Поиск вида услуги',
            'all_items'         => 'Виды услуг',
            'parent_item'       => 'Родительские виды услуг',
            'parent_item_colon' => 'Родительские  виды услуг:',
            'edit_item'         => 'Редактировать вид услуги',
            'update_item'       => 'Обновить вид услуги',
            'add_new_item'      => 'Добавить вид услуги',
            'new_item_name'     => 'Название нового вида услуги',
            'menu_name'         => 'Вид услуги'
        ),
        'show_ui'       => true,
        'show_in_menu'  => true, //В админ меню не будет а при show_ui= true будет виден блок этой таксономии при добавлении type_popost (смотри строку register_taxonomy в нашем случае 'service_chivic')


        'query_var'     => true,
        'show_in_rest'  => true,
        //'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
    ));
}
////////////////////////////////////////////////////////////////////////////////////////////////////