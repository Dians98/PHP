<?php 

/* C'est une fonction pour gérer dybamiquement les liens de headers */
function nav_items(string $href, string $title)
{
    $class = "nav-link";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
        <?php if(isset($title)) : ?>
            <?= $title ?>
        <?php else : ?>
            Mon site
        <?php endif ?>
    </title>
</head>
<body>
<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a class="navbar-brand p-0 me-0 me-lg-2" href="index.php" aria-label="Bootstrap">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
    </a>

      <ul class="nav nav-pills">
        <!--
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
        <?= nav_items("index.php", "Home") ?>
        <?= nav_items("contact.php", "Contact") ?>
      </ul>
    </header>
</div>

<pre>
    <?php print_r($_SERVER['SCRIPT_NAME']) ?>
</pre>