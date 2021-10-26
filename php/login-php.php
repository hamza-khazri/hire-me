<?php
    session_start();
    require('connect-serv.php'); 

    $mail=$_POST["email"];
    $mdp=$_POST["password"];

    $req1= "select * from inscription where  email='$mail' and password='$mdp' ";
    $env= mysqli_query($connect,$req1) or die ("requette 1 invalide");
    $res= mysqli_fetch_row($env);
    if (mysqli_num_rows($env)==0){
        $req2= "select * from inscription where  email='$mail'  ";
        $env2= mysqli_query($connect,$req2) or die ("requette 2 invalide");
        if (mysqli_num_rows($env2)==0){ 
            echo "invalide account , sign in";
        }else{
            echo "incorrect password";
        }
    }else{
 
        $username= $res[0];
        $img= $res[6];
        $_SESSION['username']=$username;
        $_SESSION['img']=$img;
        function redirect($url)
{
    header('Location: '.$url);
    exit();
}

redirect('../index.php');
    }
    
?>



            

            
