<?php
/*
Plugin Name: Custom type+taxonomy
Plugin URI: https://test/
Description: Plugin created for the test task
Version: 1
Author: yelyseibocharov
Author URI: https://t.me/deleted62
*/


class news {

    static function setup() {
        add_action( 'init', array( __CLASS__, 'type' ) );
        add_action( 'init', array( __CLASS__, 'taxonomy' ) );
    }

    static function type() {
        register_post_type( 'news', array(
            'labels'                 => array(
                'name'               => 'Новость',
                'singular_name'      => 'Новость',
                'add_new'            => 'Добавить новость',
                'add_new_item'       => 'Добавление новой новости',
                'edit_item'          => 'Редактирование новости',
                'new_item'           => 'Новая новость',
                'view_item'          => 'Посмотреть новость',
                'search_items'       => 'Найти новость',
                'not_found'          => 'Новостей не найдено',
                'not_found_in_trash' => 'В корзине новостей не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Новость'

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'taxonomies'         => array( 'category' ),
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
        ) );
    }

    static function taxonomy() {
        register_taxonomy( 'category', array( 'news' ), array(
            'label'                 => '',
            'labels'                => array(
                'name'              => 'Категории',
                'singular_name'     => 'Категория',
                'search_items'      => 'Найти категорию',
                'all_items'         => 'Все категории',
                'view_item '        => 'Смотреть категорию',
                'parent_item'       => 'Родительская категория',
                'parent_item_colon' => 'Родительская категория:',
                'edit_item'         => 'Изменить категорию',
                'update_item'       => 'Обновить категорию',
                'add_new_item'      => 'Добавить новую категорию',
                'new_item_name'     => 'Имя новой категории',
                'menu_name'         => 'Категории',
            ),
            'description'        => 'Категории',
            'public'             => true,
            'publicly_queryable' => null,
            'hierarchical'       => false,
            'rewrite'            => true,
        ) );
    }

}

add_action( 'plugins_loaded', array('news', 'setup') );