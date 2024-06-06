<?php

$meta = get_post_meta($post->ID);

// Configurações
$num_max_documentos = 6;
$documento_nonce = wp_create_nonce('documento_nonce');

// Inicializa os arrays de texto e link
$textos = array();
$links = array();

// Obtém dados existentes, se disponíveis
if (!empty($meta)) {
    for ($i = 1; $i <= $num_max_documentos; $i++) {
        $texto_key = "documento_texto_$i";
        $link_key = "documento_link_$i";

        $textos[$i] = get_post_meta($post->ID, $texto_key, true);
        $links[$i] = get_post_meta($post->ID, $link_key, true);
    }
}
?>
<table class="tabela_metabox">
    <input type="hidden" name="documento_nonce" value="<?= esc_attr($documento_nonce) ?>">

    <?php for ($i = 1; $i <= $num_max_documentos; $i++) : ?>
        <tr>
            <th>
                <label for="documento_texto_<?php echo $i; ?>"><i>Nome:</i></label>
            </th>
            <td>
                <input
                    type="text"
                    name="documento_texto_<?php echo $i; ?>"
                    id="documento_texto_<?php echo $i; ?>"
                    value="<?= (isset($textos[$i])) ? esc_html($textos[$i]) : '' ?>">
            </td>
            <th>
                <label for="documento_link_<?php echo $i; ?>"><i>Link: </i> <?php echo isset($textos[$i]) ? $textos[$i] : ''; ?></label>
            </th>
            <td>
                <input
                    type="url"
                    name="documento_link_<?php echo $i; ?>"
                    id="documento_link_<?php echo $i; ?>"
                    value="<?= (isset($links[$i])) ? esc_url($links[$i]) : '' ?>">
            </td>
        </tr>
        <tr>
        </tr>
    <?php endfor; ?>
</table>
