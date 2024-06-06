<?php
    $noticias = new Noticias();
?>
<!-- FOTO DA CIDADE -->
<section id="slides" style="background-image: url('<?= SLIDE_1 ?>')">

</section>
<section id="page_home" class="flex column gap_20 align_center">

    <img class="page_foto_1" src="<?= URL . '/img/foto_1.png' ?>" alt="">
    <img class="page_foto_2" src="<?= URL . '/img/foto_2.png' ?>" alt="">

    <div class="frase_1">
        <img class="" src="<?= URL . '/img/aspas.png' ?>" alt="">
        <p>O <strong>Instituto Vivência Sistêmica</strong> possibilita o desenvolvimento de estratégias para a inclusão da visão sistêmica e empreendedora no planejamento e gestão das instituições públicas, privadas e no âmbito pessoal.</p>
    </div>

    <div class="largura_maxima">
        
        <div id="noticias">
            <h1 class="titulo">Últimas notícias</h1>
            <?php
                $noticias->get_noticias_home();
            ?>
    
        </div>
    </div>
</section>
