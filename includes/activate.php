<?php

function esp_activate_plugin(){

    if (version_compare(get_bloginfo('version'), '5.0','<')){
        wp_die(__('Você precisa atualizar o Wordpress', 'receitas'));
    }
}