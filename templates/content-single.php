<section class="single flex_post gap_30">
    
    <div class="content flex column gap_30">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="">
                <?php the_title('<h1 class="titulo_post">', '</h1>'); ?>
                <?php the_date(); ?>
            </div>
            <div class="">
                <?php the_post_thumbnail('full', array( 'class' => 'thumb_post' )); ?>
            </div>
            <div class="conteudo_noticia">
                <?php the_content(); ?>
                <script>videoYoutubeResponsivo();</script>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="sidebar_noticias">
        <div class="flex column gap_30">
            <aside>
                <h2 class="titulo_news_sidebar">Notícias relacionadas</h2>
                <?php
                    $categories = get_the_category();
                    $category_name = $categories[0]->name;
                    $args = array('posts_per_page'=>10,'category_name'=>$category_name);
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="relacionada">
                            <div class="flex gap_10">
                                <a class="espacamento_lateral_10" href="<?=the_permalink()?>">
                                    <?php
                                        // Obtém o título
                                        $title = get_the_title();
                                        
                                        // Define o número máximo de caracteres que você deseja mostrar
                                        $max_characters = 70; // Altere para o valor desejado
                                        
                                        // Verifica se o comprimento do título é maior que o máximo permitido
                                        if (mb_strlen($title) > $max_characters) {
                                            // Se for, exibe apenas os primeiros caracteres até o limite
                                            $shortened_title = mb_substr($title, 0, $max_characters) . '...';
                                        } else {
                                            // Se não, exibe o título normalmente
                                            $shortened_title = $title;
                                        }
        
                                        // Exibe o título limitado
                                        echo '<h3 class="titulo_news_relacionada">'.$shortened_title.'</h3>';
                                        ?>
                                    <p class="descricao_relacionada"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 8)); ?></p>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_postdata();
                ?>
            </aside>
        </div>
    </div>
</section>