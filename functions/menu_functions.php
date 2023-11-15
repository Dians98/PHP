<?php 
    /* C'est une fonction pour gérer dybamiquement les liens de headers */
    function nav_items(string $href, string $title, string $class)
    {
        /* On a eu besoin de faire ca car le server name retourné était de PHP/.... il a fallu qu'on coupe */
        $truncate_server_name = substr($_SERVER['SCRIPT_NAME'], 5);
        //print_r($truncate_server_name);
        if($truncate_server_name === $href)
        {
            //echo('tafiditra');
            $class .= ' active';
        }
        
        $html = <<<HTML
            <li class="nav-item"><a href="$href" class="$class" aria-current="page">$title</a></li>

HTML;

        return $html;
    }
?>