<?php
  require('connect-serv.php');
$id=$_POST["sel"];

$req = "delete from job where id_job='$id'";
$env = mysqli_query($connect,$req) or die ("requette 1 invalide");
function redirect($url){
    header('Location: '.$url);
    exit();
   }
     redirect('../setting.php');  
?>