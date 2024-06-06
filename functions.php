<?php

if(!defined('ABSPATH')){
    exit;
}
if(!class_exists('MeuTema')){
    class MeuTema {
        public $documentos;
        public $noticias;

        function __construct() {

            $this->definir_constantes();

            require_once(PATH . '/class/Documentos.php');
            require_once(PATH . '/class/Noticias.php');
            require_once(PATH . '/class/MenuLateral.php');
            require_once(PATH . '/class/Componentes.php');

            $this->documentos = new Documentos();
            $this->noticias = new Noticias();

            // GANCHOS DE AÇÃO

            /* add_action('init', array($this,'editar_post_type_post')); */
            add_action('after_setup_theme',array($this,'configurandoTema'));
            add_action('after_setup_theme',array($this,'themename_custom_logo_setup'));
            add_action('after_setup_theme',array($this,'wpdocs_theme_setup'));            
            add_action('wp_enqueue_scripts',array($this,'meusScripts'));
            add_action('init',array($this,'register_form_shortcode'));
            add_action('wp_ajax_my_ajax_action',array($this,'set_form'));
            add_action('admin_menu', array($this,'ocultar_paginas_admin_menu'));
            add_filter('template_include',array($this,'verificandoSeEPaginaInicial'));
            add_filter('template_include',array($this,'search_results_template'));
            add_filter('pre_get_posts',array($this,'search_filter'));
            
            // Classe Documentos
            /* add_action('save_post', array($this->documentos, 'save_post_documento'), 10, 2); */
            /* add_action('init', array($this->documentos, 'registrar_taxonomy_para_documentos')); */
    
        }
        public function definir_constantes() {

            // GLOBAIS
            define('PATH', get_template_directory());
            define('URL', get_template_directory_uri());

            // LINKS
            define('PAGINA_INICIAL', get_template_directory_uri() . '/home.php');

            // REDES SOCIAIS
            define('FACEBOOK_SVG', get_template_directory_uri() . '/img/facebook.svg');
            define('INSTAGRAM_SVG', get_template_directory_uri() . '/img/instagram.svg');
            define('WHATSAPP_SVG', get_template_directory_uri() . '/img/whatsapp.svg');

            define('SLIDE_1', get_template_directory_uri() . '/img/slide_1.jpg');
            define('FOTO_1', get_template_directory_uri() . '/img/foto_1.jpg');
            define('FOTO_2', get_template_directory_uri() . '/img/foto_2.jpg');
            
        }
        public function ocultar_pesquisa_posts() {
            echo '<style>
                .tablenav.top .alignleft.actions {
                    display: none;
                }
                p.search-box{
                    display: none;
                }
            </style>';
        }
        
        public function configurandoTema() {    
            add_theme_support('post-thumbnails');    
            add_theme_support('title-tag');
            register_nav_menus(
                array(
                    'menu_principal' => 'Menu Principal',
                    'menu_rodape' => 'Menu Rodapé',
                    'menu_lateral' => 'Menu Lateral'
                )
            );
        }
        public function meusScripts() {
            wp_enqueue_script('meu-script-js', get_template_directory_uri().'/javascript/script.js','1', true);
            wp_enqueue_style('meu-estilo', get_template_directory_uri().'/style.css');
            wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), '1', true);
            wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('popper'), '1', true);
            wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
            wp_enqueue_script('jquery-email', get_template_directory_uri().'/javascript/jquery-email.js', '1', true);
            wp_localize_script('jquery-email','script_ajax',array(
                'ajax_url'=> get_template_directory_uri() . '/shortcodes/formulario/email.php'
            ));
        }
        public function themename_custom_logo_setup() {
            $defaults = array(
                'height'               => 110,
                'width'                => 530,
                'flex-height'          => true,
                'flex-width'           => true,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => true, 
            );
            add_theme_support( 'custom-logo', $defaults );
        }
        public function register_form_shortcode() {
            add_shortcode('formulario_contato', array($this,'mostrarHTMLShortcode'));
        }
        public function mostrarHTMLShortcode() {
            ob_start();
            include(get_template_directory().'/shortcodes/formulario/form-shortcode.php');
            return ob_get_clean();
        }
        public function set_form(){
            include(get_template_directory().'/shortcodes/formulario/email.php');
        }
        public function wpdocs_theme_setup() {
            add_image_size( 'custom_logo', 400, 100 );
        }
        public function verificandoSeEPaginaInicial( $home ) {
            if ( is_home() ) {
                $new_template = locate_template( array( 'home.php' ) );
                if ( !empty( $new_template ) ) {
                    return $new_template;
                }
            }
            return $home;
        }
        public function search_results_template( $search ) {
            if ( is_search() ) {
                $search = locate_template( 'search.php' );
            }
            return $search;
        }
        public function search_filter($query) {
            if ($query->is_search) {
                // Adiciona tipos de postagem ao array
                $tipos_de_postagem = array('post','page');
        
                // Define os tipos de postagem na consulta
                $query->set('post_type', $tipos_de_postagem);
            }
            return $query;
        }
        public function ocultar_paginas_admin_menu() {
            $paginas_a_ocultar = array(
                'edit-comments.php'  // Página "Comentários"
            );
        
            foreach ($paginas_a_ocultar as $pagina) {
                remove_menu_page($pagina);
            }
        }
    }
}

if(class_exists('MeuTema')){
    $meuTema = new MeuTema();
}