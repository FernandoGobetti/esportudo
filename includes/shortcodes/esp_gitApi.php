<?php

function esp_gitAPI_shortcode()
{
    $criadorHTML = file_get_contents('esp_gitApi-template.php', true);

    return $criadorHTML;
}