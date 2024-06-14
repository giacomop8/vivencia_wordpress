<?php
    $ano_atual = date('Y');
?>
<footer>
    <section class="footer_1">
        <h3>NOSSOS PARCEIROS</h3>
        <div>
            <?php get_template_part('templates/components/content','parceiros'); ?>
        </div>
    </section>
    <section class="footer_2">
        <img width="80" src="<?= esc_url( get_template_directory_uri() . '/img/logo-branca.png' ) ?>" alt="">
        <div>
            <ul>
                <li><a href="<?= home_url(); ?>">Home</a></li>
                <li><a href="<?= get_permalink(get_page_by_path('servicos')->ID); ?>">Serviços</a></li>
                <li><a href="<?= get_permalink(get_page_by_path('quem-somos')->ID); ?>">Quem somos</a></li>
            </ul>
            <p>institutovivenciasistemica@gmail.com</p>
        </div>
    </section>
    <section class="footer_3 flex justify_around">
        <p>Todos os direitos reservados. Instituto Vivência Sistêmica @ <?php echo $ano_atual; ?></p>
        <p>Criado por EndecodeTI</p>
    </section>
</footer>