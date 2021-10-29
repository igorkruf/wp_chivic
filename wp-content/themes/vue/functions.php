<?php
include "includes/metafields_api/metafields_api.php";
include "includes/post_type/post_type_api.php";
include "includes/routes_api/routes_api.php";
include "includes/taxonomy/taxonomy_api.php";

//увираем админ панель с сайта
show_admin_bar(false);

add_theme_support('post-thumbnails');