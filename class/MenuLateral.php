<?php

if(!defined('ABSPATH')){
    exit;
}

if(!class_exists('MenuLateral')){
    class MenuLateral {

        public function __construct() {
            $this->registrar_sidebar();
        }
        
        public function registrar_sidebar() {
            register_sidebar(array(
                'name' => 'Menu Lateral',
                'id' => 'menu_lateral',
                'description' => 'Menu Lateral com opção de inserir alguma página web específica ou categorias.',
                'before_widget' => '<div id="menu_lateral" class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget_titulo">',
                'after_title' => '</h2>',
            ));
        }
    }
}

new MenuLateral();