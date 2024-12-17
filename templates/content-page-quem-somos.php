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
                <p>Especialista em Prestação de Contas de Convênios, Elaboração e Acompanhamento de Projetos Especiais, Gestão de Processos Operacionais e Logísticos, Controle de Receitas e Despesas, e Gerenciamento de Tarefas Administrativas Essenciais.</p>
            </div>
        </div>
    </section>
    <section id="empresa">
        <div class="visao align_center">
            <div>
                <img src="<?= esc_url( get_template_directory_uri() . '/img/visao.jpg' ) ?>" alt="">
            </div>
            <aside>
                <h1>Nossa Visão</h1><br>
                <p>Ser referência no desenvolvimento de estratégias com visão sistêmica e empreendedora, no planejamento, gestão e apoio a programas e projetos públicos e privados.</p>
            </aside>
        </div>
        <div class="missao align_center">
            <aside>
                <h1>Nossa Missão</h1><br>
                <p>Contribuir para a promoção do desenvolvimento integrado, com uma visão sistêmica e empreendedora, em instituições públicas, empresas e para pessoas.</p>
            </aside>
            <div>
                <img src="<?= esc_url( get_template_directory_uri() . '/img/missao.jpg' ) ?>" alt="">
            </div>
        </div>
        <div class="valores align_center">
            <div>
                <img src="<?= esc_url( get_template_directory_uri() . '/img/valores.jpg' ) ?>" alt="">
            </div>
            <aside>
                <h1>Nossos Valores</h1><br>
                <ul>
                    <li>
                        <strong>Integração:</strong> Trabalhamos de forma integrada com todos os setores para promover um desenvolvimento holístico.
                    </li>
                    <li>
                        <strong>Empreendedorismo:</strong> Incentivamos a inovação e o espírito empreendedor em todas as nossas atividades.
                    </li>
                    <li>
                        <strong>Inovação:</strong> Buscamos constantemente novas soluções e práticas para melhor atender nossos clientes.
                    </li>
                    <li>
                        <strong>Colaboração:</strong> Valorizamos a cooperação entre equipes e parceiros para alcançar resultados mais efetivos.
                    </li>
                    <li>
                        <strong>Cooperação:</strong> Acreditamos no poder do trabalho conjunto para construir um futuro melhor.
                    </li>
                    <li>
                        <strong>Transparência:</strong> Atuamos com clareza e ética em todas as nossas ações.
                    </li>
                </ul>
            </aside>
        </div>
    </section>
    <section class="pt_100 pb_100 flex column align_center">
        <?php get_template_part('templates/components/content','formulario'); ?>
    </section>
</div>