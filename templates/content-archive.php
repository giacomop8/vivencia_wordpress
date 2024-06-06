<section class="secao-pesquisa container fundo-categoria flex between gap_30" id="container_search">
    <div>
        <h1 class="titulo_generico">Documentos ou notícias:</h1>
        <?php
            if(have_posts()) : while(have_posts()) : the_post();
                get_template_part('templates/components/content', 'post');
                endwhile;
                wp_reset_postdata();
            else:
                echo '<span id="sem-resultado-pesquisa">Sem notícias publicadas.</span>';
            endif;
            wp_reset_query();
            (new Componentes())->pagination();
        ?>
    </div>
    <aside>
        <?php
            get_template_part("templates/components/content","menu-lateral");
        ?>
    </aside>
</section>