<?php
    if (has_nav_menu('menu_lateral')) {
        wp_nav_menu(array(
            'theme_location' => 'menu_lateral',
            'container' => 'div',
            'container_id' => 'menu_lateral',
            'menu_class' => 'menu_lat',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'before_widget' => '<div id="menu_lateral" class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget_titulo">',
            'after_title' => '</h2>',
        ));        
    } else {
        echo '<p>Menu lateral não está configurado. Configure-o no painel do WordPress.</p>';
    }
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var menuItems = document.querySelectorAll('.menu_lat > li');

        // Adiciona um listener para cada item de menu
        menuItems.forEach(function(menuItem) {
            // Encontra o submenu dentro deste item de menu
            var subMenu = menuItem.querySelector('.sub-menu');

            // Adiciona um listener para quando o mouse entra no item de menu
            menuItem.addEventListener('mouseenter', function() {
                // Adiciona a classe que torna o submenu visível
                if (subMenu) {
                    subMenu.classList.add('show-submenu');
                }
            });

            // Adiciona um listener para quando o mouse sai do item de menu
            menuItem.addEventListener('mouseleave', function() {
                // Remove a classe para ocultar o submenu
                if (subMenu) {
                    subMenu.classList.remove('show-submenu');
                }
            });

            // Adiciona um listener para o evento de clique no item de menu
            menuItem.addEventListener('click', function(event) {
                // Verifica se há um submenu
                if (subMenu) {
                    // Previne o comportamento padrão do clique para evitar a navegação
                    event.preventDefault();
                    // Alternar a classe que torna o submenu visível
                    subMenu.classList.toggle('show-submenu');
                }
                // Se não houver submenu, permite o comportamento padrão do clique (navegação)
            });

            // Adiciona um listener para evitar a propagação do clique nos itens do submenu
            if (subMenu) {
                subMenu.addEventListener('click', function(event) {
                    event.stopPropagation();
                });
            }
        });
    });
</script>
