<?php
$category = get_queried_object();
$categoria = $category->name;
?>

<section class="largura_maxima category flex_post gap_30">
    <div class="post_bloco">
        <h2 class="titulo_generico"><?= $categoria ?></h2>
        <?php
            if(have_posts()) : while(have_posts()) : the_post();
            get_template_part('templates/components/content', 'post');
        endwhile;
        wp_reset_postdata();
    else:
        echo '<span id="sem-resultado-pesquisa">Sem postagens realizadas.</span>';
    endif;
    wp_reset_query();
    wp_reset_postdata();
    (new Componentes())->pagination();
    ?>
    </div>
    <aside class="menu_home">
        <?php get_template_part("templates/components/content","menu-lateral"); ?>
    </aside>
</section>