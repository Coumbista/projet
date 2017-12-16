<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</he ad>
<body>
<table border='1' style="color:black; bgcolor=pink;">
<form method="post" action=""  >
<tr>
<td>Login</td>
<td>	<input type="text" name="login"></td>
</tr>
<tr>
<td>Profil</td>
<td><select name="profil"  >
<option value=""></option>
<option value="user">user</option>
<option value="admin">admin</option>
</select>
</td>
</tr>
<tr align='center'> 
<td colspan='2'>
    <input type="submit" name="submit" value="creer">
</td>
</tr>
        
</form>
</table>
<a href="projet3.php">connexion</a>
    <?php    
       
    if(isset($_POST['submit'])){
        
       
        extract($_POST);
        $size='6';
        
        function genere_password($size)
        {
          $password="";
            $characters=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            for($i=0;$i<$size;$i++){
                $password.=($i%2)?strtoupper($characters[array_rand($characters)]):$characters[array_rand($characters)];
            }
            return $password;
        }
        
        $mot_de_passe=genere_password(6);  
       
    
    $manip =fopen("fich.txt","a+");
    rewind($manip);
    $e=false;
    while(($line=fgets($manip))!==false){
        $info=explode(";",$line);
        if($info[0]==$login){
             $e=true;
            break;
        }
    }

            if($e){
               echo "login existe";}
              
                        else{
                           
                            fseek($manip,2);                                               
            fputs($manip,$login . ";" . $profil.";" . $mot_de_passe."\n");
                                   
                          }
                         
      } 
      
    ?>
</body>
</html>