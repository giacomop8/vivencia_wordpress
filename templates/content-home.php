<?php
    $noticias = new Noticias();
?>

<section id="slides">
    <div>
        <?php get_template_part('templates/components/content','slide'); ?>
    </div>
</section>

<section id="quem_somos">
    <div class="relative flex justify_center align_center width_100">
        <img class="logo_meio pt_100" src="<?= esc_url( get_template_directory_uri() . '/img/logo-colorida.png' ) ?>" alt="Instituto Vivência Sistêmica">
        <img class="ondas_rosa_cima" src="<?= esc_url( get_template_directory_uri() . '/img/ondas_rosas_cima.svg' ) ?>">
    </div>
    <div class="apresent flex justify_center">
        <div class="sub_apresent flex align_center justify_center">
            <aside>
                <p>O <strong>Instituto Vivência Sistêmica</strong> nasce da necessidade de preparar comunidades para perceber as políticas sociais de forma sistêmica, identificada pelas sócias <strong>Elbe Brandão e Margareth Durães</strong>, depois de anos dedicados à causa, advinda da implantação e gestão de diversos projetos sociais numa das regiões mais pobres do país: <strong>o Norte de Minas e os Vales do Jequitinhonha e Mucuri</strong>, em Minas Gerais.</p>
        
                <p>A carência nessas regiões não se resume as políticas públicas apenas, mas também à dificuldade em captar recursos, implantar projetos e gerir as ações dos mesmos sem um norteamento da condução e domínio sobre “o que fazer” com os resultados das métricas apuradas.</p>
        
                <p>A visão sistêmica, em que pese ter surgido no mundo empresarial, aplica-se à todas as áreas da vida - no mundo das empresas privadas e também no poder público, além de ser um facilitador na conduta das questões pessoais - pois faz com que consigamos enxergar e compreender o TODO por meio da análise das partes que o formam.</p>
            </aside>
            <img src="<?= esc_url(get_template_directory_uri() . '/img/reuniao.jpg') ?>" alt="Preparação de comunidades e necessidades identificadas de forma sistêmica">
        </div>
    </div>
</section>

<section id="page_home" class="flex column gap_20 align_center">
    <img class="page_foto_1" src="<?= esc_url( get_template_directory_uri() . '/img/ondas_rosas.svg' ) ?>">
</section>

<section id="sistemica" class="flex column align_center">
    <div class="frase_1">
        <p>O <strong>Instituto Vivência Sistêmica</strong> possibilita o desenvolvimento de estratégias para a inclusão da visão sistêmica e empreendedora no planejamento e gestão das instituições públicas, privadas e no âmbito pessoal.</p>
    </div>
</section>

<section id="noticias_pai">
    <div class="largura_maxima">
        <div id="noticias">
            <h1 class="titulo"><b>Últimas notícias</b></h1>
            <?php
                $noticias->get_noticias_home();
            ?>
        </div>
    </div>
</section>

<section class="pt_100 pb_100 flex column align_center">
    <?php get_template_part('templates/components/content','formulario'); ?>
</section>