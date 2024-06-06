<?php get_header(); ?>
<section class="secao_pesquisa flex_post largura_maxima fundo-categoria flex between gap_30" id="container_search">
    <div class="post_bloco">
        <h1 class="titulo_generico">Resultados da Pesquisa:</h1>
        <?php
            if(have_posts()) : while(have_posts()) : the_post();

                    get_template_part('templates/components/content','post');

                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<span id="sem-resultado-pesquisa">Sem resultados de pequisa</span>';
                endif;
                wp_reset_query();
                (new Componentes())->pagination();
        ?>
    </div>
    <aside class="menu_home">
        <?php get_template_part("templates/components/content","menu-lateral"); ?>
    </aside>
</section>
<?php get_footer();