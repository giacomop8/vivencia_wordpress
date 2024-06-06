<section class="container flex_post gap_30">
    <div class="content flex column gap_30">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="">
                <?php the_post_thumbnail('full', array( 'class' => 'thumb_post' )); ?>
            </div>
            <div class="">
                <?php the_title('<h1 class="titulo_post">', '</h1>'); ?>
                <?php the_date(); ?>
            </div>
            <div class="">
                <?php the_content(); ?>
                <script>videoYoutubeResponsivo();</script>
            </div>
            <div>
                <?php (new Documentos())->get_botoes_download(); ?>
            </div>
            <div class="flex column left">
                Gostou? 
                <?php 
                    set_query_var('texto', "Compartilhe nas suas redes!");
                    get_template_part('templates/components/content','share-redes'); 
                ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <aside>
        <?php
            get_template_part("templates/components/content","menu-lateral");
        ?>
    </aside>
</section>
<section class="container flex column margem_b_20">
    <h2 class="titulo_news_sidebar">Notícias relacionadas</h2>
    <div class="flex column gap_30">
        <?php
            $args = array(
                'posts_per_page' => 10,
                'post_type'      => 'documentos',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
                get_template_part('templates/components/content','post');
            ?>
            <?php endwhile; endif; wp_reset_postdata();
        ?>
    </div>
</section>