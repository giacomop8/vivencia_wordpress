<div class="quem-somos-content">
    <section class="quem-somos">
        <img class="logo-transparente" src="<?= esc_url( get_template_directory_uri() . '/img/fundo-transparente-logo.svg' ) ?>" alt="">
        <div class="textual">
            <h1 class="titulo-quem-somos">
                <?php the_title(); ?>
            </h1>
            <div class="conteudo-quem-somos">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <section id="pessoas">
        <div class="bloco flex align_left justify_between gap_30 p_40">
            <div class="perfil">
                <img src="<?= esc_url( get_template_directory_uri() . '/img/elbe.jpg' ) ?>" alt="">
                <h5>Elbe Brandão</h5>
                <p>Mestre em Gestão, especialista em Políticas Públicas, Sociais e Constelação Sistêmica.</p>
            </div>
            <div class="perfil">
                <img src="<?= esc_url( get_template_directory_uri() . '/img/margaret.jpg' ) ?>" alt="">
                <h5>Margareth Durães</h5>
                <p>Especialista em Políticas Públicas, Sociais e Gestão de Conflitos.</p>
            </div>
            <div class="perfil">
                <img src="<?= esc_url( get_template_directory_uri() . '/img/edson.jpg' ) ?>" alt="">
                <h5>Edson</h5>
                <p>Especialista em Políticas Públicas, Sociais e Gestão de Conflitos.</p>
            </div>
        </div>
    </section>
    <section id="empresa">
        <div class="visao">
            <img src="<?= esc_url( get_template_directory_uri() . '/img/visao.jpg' ) ?>" alt="">
            <aside>
                <h1>Visão</h1>
                <p>Ser referência no desenvolvimento de estratégias com visão sistêmica e empreendedora no planejamento, gestão, apoio a programas e projetos públicos e privados.</p>
            </aside>
        </div>
        <div class="missao">
            <aside>
                <h1>Missão</h1>
                <p>Contribuir na promoção do desenvolvimento integrado, como visão sistêmica e empreendedora em instituições públicas, empresas e pessoas</p>
            </aside>
            <img src="<?= esc_url( get_template_directory_uri() . '/img/missao.jpg' ) ?>" alt="">
        </div>
        <div class="valores">
            <img src="<?= esc_url( get_template_directory_uri() . '/img/valores.jpg' ) ?>" alt="">
            <aside>
                <h1>Valores</h1>
                <p>Integração, Empreendedorismo, Inovação, Colaboração, Cooperação, Transparência</p>
            </aside>
        </div>
    </section>
    <section class="pt_100 pb_100 flex column align_center">
        <?php get_template_part('templates/components/content','formulario'); ?>
    </section>
</div>