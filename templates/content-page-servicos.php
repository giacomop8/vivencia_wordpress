<div class="servicos-content">
    <script>
        // Adiciona a classe 'visible' às imagens quando a página é carregada
        document.addEventListener("DOMContentLoaded", function() {
            var imagens = document.querySelectorAll('.icones_servicos');
            imagens.forEach(function(imagem, index) {
                setTimeout(function() {
                    imagem.classList.add('visible');
                }, index * 200); // ajusta o delay conforme necessário
            });
        });
    </script>
    <section class="servicos flex column justify_around wrap gap_100">
        <div class="imgs_servicos width_100 flex justify_around gap_100 wrap">
            <img class="icones_servicos" src="<?= esc_url( get_template_directory_uri() . '/img/consultoria.svg' ) ?>" alt="Consultoria">
            <img class="icones_servicos" src="<?= esc_url( get_template_directory_uri() . '/img/treinamentos.svg' ) ?>" alt="Treinamentos">
        </div>
        <h2>Nossos serviços</h2>  
        <div class="imgs_servicos width_100 flex justify_around gap_100 wrap">
            <img class="icones_servicos" src="<?= esc_url( get_template_directory_uri() . '/img/projetos.svg' ) ?>" alt="Projetos">
            <img class="icones_servicos" src="<?= esc_url( get_template_directory_uri() . '/img/pspp.svg' ) ?>" alt="Parcerias Sociais Público Privadas">
        </div>
        <img class="linhas-rede" src="<?= esc_url( get_template_directory_uri() . '/img/linhas-rede.png' ) ?>" alt="">
        <img class="linhas-rede-b" src="<?= esc_url( get_template_directory_uri() . '/img/linhas-rede-b.png' ) ?>" alt="">
    </section>
    <section class="perguntas">
        <div class="perguntas_limite">
            <h2>O que fazemos?</h2>
            <p>O Instituto Vivência Sistêmica possibilita o desenvolvimento de estratégias para a inclusão da visão sistêmica e empreendedora no planejamento e gestão em instituições públicas, privadas e pessoais.</p><br>
    
            <section id="faq">
                <div class="accordion" id="accordionExample">
    
                    <div class="">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Consultoria</button>
                            </h5>
                        </div>    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            Desenvolvimento de estratégias para a visão sistêmica e empreendedora. Assessoria na implementação de práticas integrativas e de planejamento estratégico.
                            </div>
                        </div>
                    </div>
    
                    <div class="">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Assessoria</button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            Apoio na prestação de contas e na gestão de parcerias sociais públicas e privadas (PSPP). Desenvolvimento econômico local e regional. Gestão Pública.
                            </div>
                        </div>
                    </div>
    
                    <div class="">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Treinamentos e Capacitações</button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            Capacitações focadas na elevação do capital humano e econômico. Programas de formação para líderes e gestores. Captação de Recursos e Elaboração de Projetos.
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Planejamento Estratégico</button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                            Desenvolvimento de planos de ação personalizados para atender às necessidades específicas de cada instituição.
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Ferramentas de Apoio</button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                            Implementação de ferramentas para monitoramento e avaliação contínua dos projetos.
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Projetos Sociais e Econômicos</button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                            Criação e gestão de projetos sociais, econômicos e estruturados.
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="perguntas_titulo collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Educação e Saúde</button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                            <div class="card-body">
                            Inserção da pedagogia sistêmica na educação e práticas integrativas no sistema de saúde
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <img class="ondas_azuis" src="<?= esc_url( get_template_directory_uri() .  '/img/ondas_azuis.svg' ) ?>" alt="">
    <section class="pt_100 pb_100 flex column align_center">
        <?php get_template_part('templates/components/content','formulario'); ?>
    </section>
</div>