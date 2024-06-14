<?php
get_header();

if(is_page('quem-somos')) { get_template_part('templates/content','page-quem-somos'); }
if(is_page('servicos')) { get_template_part('templates/content','page-servicos'); }

get_footer();