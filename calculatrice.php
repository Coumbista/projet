<?php
session_start();
if($_SESSION['VISITEUR']='user')
if(isset($_POST['submit'])){
    extract($_POST);        
          if($choix=="+"){
            echo "$nombre1 $choix $nombre2=".($nombre1+$nombre2);
    }
    
    else if($choix=="-"){
    echo"$nombre1 $choix $nombre2=".($nombre1-$nombre2);
    }
    
    else if($choix=="*"){
        echo"$nombre1 $choix $nombre2=".($nombre1*$nombre2);
    }
    
     else if($choix=="/"){
        if($nombre2!=0)
        {
            echo"$nombre1 $choix $nombre2=".($nombre1/$nombre2);
        }
        else
        {
            echo"impossible de faire l'opération";   
        }
    
    }
}
echo "<a href='decn.php'> deconnexion</a>"

   
    


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/p1.css">
	 
	<title>formulaire</title>
</head>
<body>
<div id="bloc_page">
    
        <div id="titre_principal">
            <h1>calculatrice</h1>
        </div>
<form action="" method="post">
    nombre1 <input type="number" name="nombre1" value="" placeholder=""/> <br><br><br>
    nombre2<input type="number" name="nombre2" value=""/> <br><br><br>
       Operation <select name="choix">
       <option value="">selectionner un operateur</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="submit" name="submit" value="calculer">

    
    
</form>
    </div>
</body>





</html>
