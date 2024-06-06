<?php

if(!defined('ABSPATH')){
    exit;
}

if(!class_exists('Componentes')){
    class Componentes {

        public function pagination() { ?>

            <section class="pagination">
                <?php
                    echo paginate_links(array(
                        /* 'total'   => $query->max_num_pages,
                        'current' => max(1, get_query_var('paged')), */
                        /* 'total'   => $query->max_num_pages, */
                        'prev_text' => 'Página Anterior',
                        'next_text' => 'Próxima Página',
                        'type'      => 'list',
                        'before_page_number' => '<span class="page-numbers">',
                        'after_page_number' => '</span>'
                    ));
                ?>
            </section> <?php

        }
    }
}

new Componentes();