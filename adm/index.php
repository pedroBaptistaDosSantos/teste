<?php
$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING);
echo $url;
?>
<!DOCTYPE html5>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>title</title>
    </head>
    <body>
        <?php
        $file = 'app/adms/'.$url.'.php';
        if(file_exists($file)){
            include $file;
        }else{
            include 'app/adms/visualizar/home.php';
        }
            
        ?>
    </body>
</html>