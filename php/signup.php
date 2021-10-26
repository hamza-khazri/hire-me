<?php
    require('connect-serv.php');
    $name=$_POST["name"];
    $date=$_POST["date"];
    $mail=$_POST["email"];
    $mdp=$_POST["password"];
    $spec=$_POST["spec"];
    $tel=$_POST["tel"];
    $img=$_FILES["img"];

    $imgname=$img['name'];
    $imgtype=$img['type'];
    $tmp=$img['tmp_name'];
    $img_ex = explode('.',$imgname);
    $fistname = explode('.',$mail);
    $img_name_new= $fistname[0].".". $img_ex[1];
    $dest = '../profile/'.$img_name_new;
    move_uploaded_file($tmp,$dest);

    $req1= "select * from inscription where  email='$mail' ";
    $env=mysqli_query($connect,$req1) or die ("requette 1 invalide");
    if (mysqli_num_rows($env)==0){
     $req2="INSERT INTO `inscription`
     VALUES ('$name','$date','$mail','$mdp','$spec','$tel','$img_name_new')";
     $env2= mysqli_query($connect,$req2) or die ("requette 2 invalide");
     function redirect($url)
   {
    header('Location: '.$url);
    exit();
   }
    redirect('../login.php');
    }else{
         echo "this email is not valide.";
     }
?>