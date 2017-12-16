
<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
<title>formulaire</title>
<link rel="stylesheet" href="form8.css">
</head>
<body>
		<form method="post" action=""  >
    login	<input type="text" name="login"><br><br><br>
    Mot de passe<input type="password" name="password"><br><br>
    profil<select name="profil" id="select" >
    <option value=""></option>
    <option value="user">user</option>
    <option value="admin">admin</option>
    </select><br><br>
            <input type="submit" name="submit" value="connexion">
            
</form>
<a href="form10.php">S'INSCRIRE</a>

		


<?php


if(isset($_POST['submit'])){
extract($_POST);  
    $manip =fopen("fich.txt","r+");    
    while(($line=fgets($manip))!==false){
            $info=explode(";",$line);
         if(($info[0]==$login) && ($info[1]==$password) && ($info[2]==$profil))
         break;
    }
      
    if(!empty($profil) && !empty($password)){
                        if($_SESSION['$profil']='$profil' ){
                           
                            fseek($manip,2);                                               
        
            header("location:redirig.php");
    
                          }
                                                    
                          elseif($_SESSION['$profil']='$profil'){
                            
                            fseek($manip,2);                                               
            
              header("location:rediriger.php");
        
                            
                          }
                          
                                               
                    }
                
    }
   
?>
</body>
</html>
<?php
session_destroy();
?>