<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maquette-2</title>
        <link rel="stylesheet" type="text/css" href="formulaire.css">
        
    </head>

<?php
$form=$_POST['form'];
$Message=$_POST['Message'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];

$str ="Nom : ". $Name."<br> Email : ".$Email."<br> Message : ".$Message;
$str = strtolower($str);

 if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i' , $Email))
  {
    strip_tags($str);
    echo $str;
 } else {
   echo  '<p class= "messerror"/> Cet email a un format non adapté </p>';
 }

 if
 (strlen ( $Name)> 20 ) {
   echo '<p class= "messerror"/>nombre de caractère trop grand pour le nom</p>';
 }  else{
   echo $str;
 }

 if
 (strlen ( $Message)> 400 ) {
   echo "nombre de caractère trop grand pour le texte.";
 }  else{
   echo $str;
 }

?>
</html>
