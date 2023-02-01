<?php
//variables that receive the values to fill the script
$name = $_POST['plugin-name'];
$plugin_type = $_POST['plugin_type'];
$plugin_cat = $_POST['plugin_category'];
$appName = $_POST['app-name'];
$plugin_desc = $_POST['plugin_desc'];
$plugin_icon = $_POST['plugin_icon'];
$path_1 = $_POST['plugin-path-1'];
$path_2 = $_POST['plugin-path-2'];
$path_3 = $_POST['plugin-path-3'];

//function for creating and writing the script
$fp = fopen('PLG_'."$name".'.lua',"wb");

fwrite($fp,"PluginData = {};");
fwrite($fp,"\n");
fwrite($fp,'PluginData.Type = "'.$plugin_type.'";');
fwrite($fp,"\n");
fwrite($fp,'PluginData.Category = '.$plugin_cat.';');
fwrite($fp,"\n");
fwrite($fp,'PluginData.Name = "'.$appName.'";');
fwrite($fp,"\n");
fwrite($fp,'PluginData.Description = ' .$plugin_desc.';');
fwrite($fp,"\n");
fwrite($fp,'PluginData.Icon = '.$plugin_icon.';');
fwrite($fp,"\n");
fwrite($fp,"PluginData.Safe = true;");
fwrite($fp,"\n");
fwrite($fp,'PluginData.ValueA = "'.$path_1.'";');
fwrite($fp,"\n");
fwrite($fp,'PluginData.ValueB = "'.$path_2.'";');
fwrite($fp,"\n");
fwrite($fp,'PluginData.ValueC = "'.$path_3.'";');
fwrite($fp,"\n");

fclose($fp);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="create your own lua plugins for xtremeeliteboot+">
    <title>Download Lua Script</title>
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="container justify-content-center d-flex" id="lua-img">
        <?php

        // open file for mode r (for read)
        $arquivo = fopen ('PLG_'.$name.'.lua', 'r');

        // read the file
        while(!feof($arquivo))
        {
        //show the lines
        $linha = fgets($arquivo, 1024);
        echo $linha.'<br />';
        }

        // Close the file open
        fclose($arquivo);

        ?>
        
    </div>

    <div class="container justify-content-center d-flex">

        <p>your lua script has been generated, to download it click <?php 
        $filename = 'PLG_'.$name.'.lua';

        if (file_exists($filename)) {
            //echo "O arquivo $filename existe";
            echo "<a href='$filename' download>here</a>";
        } else {
            echo "O arquivo $filename não existe";
        }
        ?>, 
            after finishing the download, add this file to the XtremeEliteBoot+ PLG directory, 
            and remember to place the app in the path indicated in the script creation, so that 
            XtremeEliteBoot+ can run it!</p>
    </div>

    <div class="container justify-content-center d-flex" style="margin-top:370px;">
        <footer class="py-3 my-4" >
            <p class="text-center">&copy; Script Lua Generator for XtremeBootElite+ developed by 
            <a href="http://ulissesribeiro.vercel.app" target="_blank" rel="noopener noreferrer" style="text-decoration: none;color: black;">
            Ulisses Ribeiro
            </a>
            </p>
        </footer>
    </div>
</body>
</html>





