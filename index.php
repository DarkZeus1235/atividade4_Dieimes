<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php

    $menu = -1;

    switch($menu){
        case 1:
        case 2:
            echo "Administração";
            echo("</br>");
         break;
        case 3:
            echo "Biomedicina";
            echo("</br");
         break;   
        case 4:       
            echo "Design Gráfico";
            echo("</br>");
         break;
         case 5:
             echo "Física";
             echo("</br>");
         break;
         case 6:
            echo "Jornalismo";          
            echo("</br>");
          break;
          case 7:
          case 8:
          case 9:  
            echo "Medicina";
            echo("</br>");
          break;
          case 10:
            echo "Relações Públicas";
            echo("</br>");   
          break;
          default;
            echo "Código Inválido";
           break;   
         }
    ?>
</body>
</html>