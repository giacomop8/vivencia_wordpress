<?php

if(!defined('ABSPATH')){
    exit;
}

if(!class_exists('Noticias')){
    class Noticias {
        
        public function get_noticias_home() {
            $args = array(
                'post_type' => 'post',      // Tipo de post (postagens)
                'posts_per_page' => 9,      // Número de postagens a serem recuperadas
                'orderby' => 'date',        // Ordenar por data
                'order' => 'DESC'           // Ordem decrescente (da mais recente para a mais antiga)
            );
            $query = new WP_Query($args);
        
            /* Se existirem posts */
            if ($query->have_posts()) {
                $post_count = 0;
                ?>
                <div class="posts-container">
                    <?php
                    while ($query->have_posts()) : $query->the_post();
                        $post_count++;
                    ?>
                        <div class="post_box">
                            <div class="post_transparente"></div>
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('medium', array('class' => 'post_thumb'));
                                else:
                                    echo '<img class="img_padrao" src="' . esc_url(get_template_directory_uri() . '/img/padrao.jpg') . '" alt="Ilustração do link">';
                                endif; ?>
                            </a>
                            <div class="post_title">
                                <a href="<?php the_permalink(); ?>">
                                    <span>
                                        <?php
                                        $title = get_the_title();
                                        $max_characters = 50;
                                        if (mb_strlen($title) > $max_characters) {
                                            $shortened_title = mb_substr($title, 0, $max_characters) . '...';
                                        } else {
                                            $shortened_title = $title;
                                        }
                                        echo $shortened_title;
                                        ?>
                                    </span>
                                </a>
                                <br>
                                <p><?php the_time('d - F, Y'); ?></p>
                            </div>
                            <!-- <div class="post_excerpt">
                                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                            </div> -->
                            <!-- <div class="post_saiba_mais">
                                <a href="<?php the_permalink(); ?>"><button class="btn_padrao">SAIBA MAIS</button></a>
                            </div> -->
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="pt_100 pb_100">
                    <a style="text-decoration: none" class="center link" href="<?php echo esc_url(get_category_link(get_option('default_category'))); ?>">
                        <button class="btn_padrao p_50">Ver mais...</button>
                    </a>
                </div>
                <script>
                    /* document.addEventListener('DOMContentLoaded', function() {
                        const posts = document.querySelectorAll('.post_box');
                        if (posts.length > 0) {
                            // Primeiro post ocupa 100% da largura
                            posts[0].classList.add('full-width');
                            
                            // Próximos 6 posts divididos em 2 linhas com 3 posts cada
                            for (let i = 1; i <= 6 && i < posts.length; i++) {
                                posts[i].classList.add('one-third');
                            }
                        }
                    }); */
                </script>
            <?php
            /* Caso não existam posts */
            } else {
            ?>
                <p>Não existem notícias.</p>
            <?php
            }
        
            wp_reset_postdata();
        }
    }
}

new Noticias();