<?php 
session_start();
// $_SESSION='deconnected'

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
        <h1>BIENVENUE  USER</h1>
    <p>

        <a href="calculatrice.php">Lien vers calculatrice.php</a><br />

        <a href="coumba.php">Lien vers coumba.php</a><br />


    </p>
     
</body>
</html>
<?php
session_destroy();
?>