<?php 
    $TEXTO = get_query_var("texto");
    
    $link_atual = get_permalink();
    $encoded_page_link = urlencode($link_atual);

    // Constrói o link do Facebook com o link da página atual
    $facebook_share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . esc_url($encoded_page_link);
?>
<section class="flex column gap_10">
    <span><?=$TEXTO ?></span>
    <div class="flex center gap_30" id="redes">
        <a href="<?= esc_url($facebook_share_link) ?>" target="_blank">
            <img src="<?= esc_url(FACEBOOK_SVG); ?>">
        </a>
        <a href="#">
            <img src="<?= esc_url(INSTAGRAM_SVG); ?>">
        </a>
        <a href="#">
            <img src="<?= esc_url(WHATSAPP_SVG); ?>">
        </a> 
    </div>
</section>