<?php 
    $IMAGEM =  get_query_var('imagem');
    $TEXTO = get_query_var('texto');
?>

<section class="flex" id="banner_home">
    <figure>
        <img src=<?= esc_url($IMAGEM); ?> alt="Imagem da cidade vista de cima">
    </figure>
    <div id="banner_home_text">
        <h2><?php echo "BANNER MODESTINENSE" ?></h2>
        <p>
            <?= $TEXTO; ?>
        </p>
        <button>CONHEÇA NOSSA CIDADE</button>
    </div>
</section>