<?php

require_once __DIR__ . '/vendor/autoload.php';
use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;
 



    if(isset($_POST['btnCalcular'])){
        $decimal_ip=$_POST['conversor'];
    
        $ip = \Foolz\Inet\Inet::dtop($decimal_ip );
        
        $client = new IPinfo(); 
    
        $details = $client->getDetails($ip);
    
    
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>ipvgeocgr</title>
        <style>
            body{
                font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            }
            .div1{
                width: 500px;
                height: 40px;
                background-color: rgb(127, 220, 236);
                border-style: outset;
            }
            .div2{
                width: 500px;
                height: 250px;
                background-color: rgb(65, 169, 187);
                border-style: outset;
            }
            .div3{
                width: 400px;
                height: 180px;
                background-color: rgb(235, 249, 252);
                border-style: inset;
                padding-left:30px;
            }
            li{
                list-style: none;
              
            }
        </style>
    </head>
    <body>
        <div class=div1>La ip buscada es: <input type="text" name="ipbuscada" value="'.$ip.'" size=15 readonly>
        </div>
        <div class=div2>La informacion buscada de la ip es la siguiente: <br>
            <ul>
                <div class=div3>
                    
                    <li><i class="material-icons">arrow_forward</i> Ciudad: '. $details->city .'</li>
                    <li><i class="material-icons">arrow_forward</i> Región: '. $details->region .'</li>
                    <li><i class="material-icons">arrow_forward</i> País: '. $details->country .'</li>
                    <li><i class="material-icons">arrow_forward</i> Localización: '. $details->loc .'</li>
                    <li><i class="material-icons">arrow_forward</i> Cod.Postal: '. $details->postal .'</li>
                    <li><i class="material-icons">arrow_forward</i> Zona horaria: '. $details->timezone .'</li>
                    
                </div>
            </ul>
    </body>
    </html>
    ';
    }else{
        echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ipvgeoloc2</title>
  
</head>
<body>

    <form name="mi_formulario" action="" method="post">
    <fieldset style="background:rgb(202, 202, 248)"> 
    <legend style="background: rgb(148, 155, 248)">Conversor de decimal a ip</legend>
    Introduce número entero a convertir en ip: <input type="text" name="conversor" value="" size=15><br>
    <input type="submit" name="btnCalcular" value="Calcular">';

    }


    ?>