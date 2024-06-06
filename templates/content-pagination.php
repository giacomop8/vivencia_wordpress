<section class="pagination">
    <?php
        $pagination_args = array(
            'prev_text' => 'Página Anterior',
            'next_text' => 'Próxima Página',
            'type'      => 'list',
            'before_page_number' => '<span class="page-numbers">',
            'after_page_number' => '</span>'
        );
        echo paginate_links( $pagination_args );
    ?>
</section>