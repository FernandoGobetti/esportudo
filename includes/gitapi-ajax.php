<?php
function esp_gitapi()
{
    $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );

    $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );

    $org = str_replace($what, $by, $_POST['repo']);

    $response = wp_remote_get('https://api.github.com/orgs/'.$org.'/repos');

    $body = json_decode($response['body']);

    if ( is_array( $body ) && ! is_wp_error( $response['body'] ) ) {

        $html = "<table id='resposta'><tr><th>Título</th><th>Stars</th><th>Forks</th><th>Language</th><th>Description</th></tr>";
        foreach ($body as $resp) {
            $html .= "<tr><td>" . $resp->name . "</td><td>" . $resp->stargazers_count . "</td><td>" . $resp->forks . "</td><td>" . $resp->language . "</td><td>" . $resp->description . "</td></tr>";

        }
        $html .= "</table>";

        echo $html;
        die();
    }else{
        echo "Não encontramos esta organização, verifique e tente novamente";
        die();
    }
}