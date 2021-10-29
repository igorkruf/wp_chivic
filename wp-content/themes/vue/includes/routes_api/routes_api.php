 <?php
    //Вывод работ определённой категории из портфолио
    add_action('rest_api_init', function () {

        register_rest_route('myplugin/v15', '/portfolio-type/(?P<id>\d+)', array(
            'methods'  => 'GET',
            'callback' => 'my_rest_api_func',
        ));
    });

    function my_rest_api_func(WP_REST_Request $request)
    {
        $posts = get_posts(array(
            'post_type' => 'portfolio',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type_service_chivic',
                    'field'    => 'id',
                    'terms'    => $request['id'],

                )
            ),
        ));

        if (empty($posts))
            return new WP_Error('no_posts_type_portfolio', 'Записей не найдено', ['status' => 404]);

        $posts = array_map(function ($post) {
            $post_data['title']    = esc_html($post->post_title);
            $post_data['url']      = get_post_meta($post->ID, 'url_portfolio');
            $post_data['miniature'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');


            return $post_data;
        }, $posts);

        return $posts;
    };
    ///////////////////////////////////////////////////////////
    //Вывод всех (названий )категории из портфолио
    add_action('rest_api_init', function () {

        register_rest_route('myplugin/v15', '/portfolio', array(
            'methods'  => 'GET',
            'callback' => 'rest_api_portfolio',
        ));
    });

    function rest_api_portfolio()
    {
        $posts = get_posts(array(
            'post_type' => 'portfolio',


        ));

        // if (empty($posts))
        //     return new WP_Error('no_posts_type_portfolio', 'Записей не найдено', ['status' => 404]);

        // $posts = array_map(function ($post) {
        //     $post_data['title']    = esc_html($post->post_title);
        //     $post_data['api-portfolio-type-service'] = get_the_terms($post->ID, 'type_service_chivic');



        //     return $post_data;
        // }, $posts);

        return $posts;
    };
    ///////////////////////////////////////////////////////////
    ?>