<?php
// echo "bonjour ".$_SESSION['$login']=$profil;
 
session_start();
if($_SESSION['VISITEUR']='USER')
 $date = date("d-m-y");
 $heure = date("h:i");

 echo " nous sommes la $date et il est  $heure";

 echo " <a href='decn.php'> deconnexion</a>"

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
    
 </body>
 </html>
