<?php

if(!defined('ABSPATH')){
    exit;
}

if(!class_exists('Documentos')){
    class Documentos {
        
        /* public function registrar_documento() {
            register_post_type(
                'documentos',
                array(
                    'label' => 'Documentos',
                    'description' => 'Documentos',
                    'labels' => array(
                        'name' => 'Documentos',
                        'singular_name' => 'Documento'
                    ),
                    'public' => true,
                    'supports' => array('title','editor','thumbnail'),
                    'hierarchical' => false,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'menu_position' => 5,
                    'show_in_admin_bar' => true,
                    'show_in_nav_menus' => true,
                    'can_export' => true,
                    'has_archive' => true,
                    'exclude_from_search' => false,
                    'publicly_queryable' => true,
                    'show_in_rest' => false,        // criar posts moderno
                    'menu_icon' => 'dashicons-format-aside',
                    'taxonomies' => array('category'),
                )
            );
        } */
        public function get_botoes_download() {
            // Loop para percorrer os 6 campos
            $has_metaboxes = false; // Flag para verificar se há metaboxes
        
            for ($i = 1; $i <= 6; $i++) {
                // Recupere o valor do campo do banco de dados
                $documento_link = get_post_meta(get_the_ID(), 'documento_link_' . $i, true);
                $documento_texto = get_post_meta(get_the_ID(), 'documento_texto_' . $i, true);
        
                // Verifique se o campo não está vazio antes de adicionar o botão
                if (!empty($documento_link)) {
                    $has_metaboxes = true; // Defina a flag como verdadeira se pelo menos um metabox existir
                    break; // Saia do loop assim que encontrar o primeiro metabox não vazio
                }
            }
        
            // Se houver metaboxes, exibir a mensagem e os links ou documentos
            if ($has_metaboxes) {
                echo '<span><strong><i>Links ou documentos abaixo:</i></strong></span><br><br>';
                echo '<div class="flex gap_10 wrap">';
                
                for ($i = 1; $i <= 6; $i++) {
                    $documento_link = get_post_meta(get_the_ID(), 'documento_link_' . $i, true);
                    $documento_texto = get_post_meta(get_the_ID(), 'documento_texto_' . $i, true);
        
                    if (!empty($documento_link)) {
                        echo '<a href="' . esc_url($documento_link) . '" download target="_blank"><button class="btn_padrao" type="button">' . $documento_texto . '</button></a>';
                    }
                }
        
                echo '</div>';
            }
        }
        
        public function save_post_documento($post_id) {
            
            if ('post' !== get_post_type($post_id)) {
                return;
            }

            if(isset($_POST['documento_nonce'])) {
                if(!wp_verify_nonce($_POST['documento_nonce'], 'documento_nonce')) {
                    return;
                }
            }

            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if(isset($_POST['post_type']) && ($_POST['post_type'] === 'post')) {
                if (! current_user_can('edit_page', $post_id)) {
                    return;
                } elseif (! current_user_can('edit_post', $post_id)) {
                    return;
                }
            }

            if (isset($_POST['action']) && ($_POST['action'] == 'editpost')) {
                $documento_nonce = isset($_POST['documento_nonce']) ? $_POST['documento_nonce'] : '';
            
                if (!wp_verify_nonce($documento_nonce, 'documento_nonce')) {
                    return;
                }
            
                // Número máximo de documentos
                $num_max_documentos = 6;
            
                for ($i = 1; $i <= $num_max_documentos; $i++) {
                    $texto_key = "documento_texto_$i";
                    $link_key = "documento_link_$i";
            
                    $antigo_texto = get_post_meta($post_id, $texto_key, true);
                    $novo_texto = isset($_POST[$texto_key]) ? sanitize_text_field($_POST[$texto_key]) : '';
            
                    $antigo_link = get_post_meta($post_id, $link_key, true);
                    $novo_link = isset($_POST[$link_key]) ? sanitize_text_field($_POST[$link_key]) : '';
            
                    if (empty($novo_texto)) {
                        update_post_meta($post_id, $texto_key, '');
                    } else {
                        update_post_meta($post_id, $texto_key, $novo_texto, $antigo_texto);
                    }
            
                    if (empty($novo_link)) {
                        update_post_meta($post_id, $link_key, '');
                    } else {
                        update_post_meta($post_id, $link_key, $novo_link, $antigo_link);
                    }
                }
            }
            
        }
        /* public function registrar_taxonomy_para_documentos() {
            register_taxonomy_for_object_type('category', 'documentos');
        } */
    }
}

new Documentos();