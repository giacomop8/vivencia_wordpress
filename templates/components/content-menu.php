<nav id="atras-do-menu">
    <div class="largura_maxima" id="menu">
        <nav class="toggle">
            <button id="btn-toggle" onclick="mostrarMenu();">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </button>
        </nav>
        <?php
           if (has_nav_menu('menu_principal')) {
                wp_nav_menu(array(
                    'menu_class' => 'nav-link',
                    'theme_location' => 'menu_principal',
                    'container' => false
                ));
            } else {
                echo '<p>Menu principal não está configurado. Configure-o no painel do WordPress.</p>';
            }
        ?>
    </div>
</nav>
<script>verificandoLargura()</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var menuItems = document.querySelectorAll('.nav-link > li');

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
