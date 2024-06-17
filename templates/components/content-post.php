<hr>
<a href="<?=the_permalink()?>">
    <section class="flex_left gap_30" id="container_post">                    
        <figure id="img_post">
            <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array( 'class' => 'thumb_post_pequena' ));
                } else {
                    echo '<img src="'  . esc_url(get_template_directory_uri() . '/img/padrao.jpg') . '" alt="Ilustração do link">';
                }
            ?>
        </figure>
        <div class="flex column gap_10">
            <?= the_title('<h3 class="titulo_news_relacionada">','</h3>'); ?>
            <p id="data_post"><?php the_date(); ?></p>
            <p class="descricao_relacionada">
                <?= esc_html(wp_trim_words(get_the_excerpt() > 0 ? get_the_excerpt() : "Sem descrição.", 30)); ?>
            </p>
            <a href="<?php the_permalink(); ?>">
                <button class="btn_vermais">Ver mais...</button>
            </a>
        </div>
    </section>
</a>