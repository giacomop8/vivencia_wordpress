<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="flex_center gap_20 acessibilidade">
            
        </header>
        <div class="fundo_header">
            <header class="flex around wrap gap_30 align_center pt_20 pb_20">
    
                <!-- Logomarca da Prefeitura -->
                <section id="logo_nome">
                    <a class="flex_center wrap" href="<?= home_url(); ?>">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            } else {
                                // Caso não exista uma logomarca definida, você pode mostrar um texto alternativo ou outra imagem.
                                echo '<img src="' . esc_url( get_template_directory_uri() . '/images/default-logo.png' ) . '" alt="Logo Padrão">';
                            }
                        ?>
                    </a>
                </section>

                <a class="flex_center wrap" href="<?= home_url(); ?>">
                    <img class="frase_logo" src="<?= esc_url( get_template_directory_uri() . '/img/logo-frase.svg' ) ?>" alt="Instituto Vivência Sistêmica">
                </a>
    
                <!-- Barra de Pesquisa -->
                <div id="barra_de_pesquisa" class="flex column gap_20 align_center align_center">
                    <div class="flex gap_20 align_center justify_center">
                        <img src="<?= esc_url( get_template_directory_uri() .'/img/instagram.svg')?>" alt="Ir ao Instagram">
                        <img src="<?= esc_url( get_template_directory_uri() .'/img/facebook.svg')?>" alt="Ir ao Facebook">
                        <img src="<?= esc_url( get_template_directory_uri() .'/img/whatsapp.svg')?>" alt="Ir ao WhatsApp">
                    </div>
                    <div class="flex column gap_20 align_center align_center">
                        <form role="search" method="get" class="flex" action="<?php echo esc_url(home_url('/')); ?>">
                            <span class="screen-reader-text"><?php _e('Search for:', 'textdomain'); ?></span>
                            <input type="search" class="input_padrao pesquisa_input cor_branca" placeholder="<?php echo esc_attr_x('Pesquise aqui...', 'placeholder', 'textdomain'); ?>" aria-label="Search" aria-describedby="button-addon2" name="s" required value="<?php echo get_search_query(); ?>">
                            <button type="submit" id="pesquisar" class="search-submit">
                                <img src="<?= esc_url( get_template_directory_uri() .'/img/pesquisa.svg')?>" alt="Pesquisar no site">
                            </button>
                        </form>
                    </div>
                </div>
            </header>
        </div>