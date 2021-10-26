<?php
    session_start();
?>
<?php  
$name=$_POST["T1"];
$dom=$_POST["T2"];
$city=$_POST["D1"];
$emp=$_POST["T4"];
$tel=$_POST["T5"];
$sal=$_POST["T6"];
$det=$_POST["S1"];
require('connect-serv.php');



if(isset($_SESSION['username'])){
    $img=$_SESSION['img'];
    $m=substr( $img, 0, strpos($img, ".") );
    $mail=$m .".com";

    
    $req1 = "select * from job where email='$mail' ";
    $env = mysqli_query($connect,$req1) or die ("requette 1 invalide");
    if (mysqli_num_rows($env)==0){
        $req2="INSERT INTO `job`
        (`job_name`, `domain`, `city`, `email`, `emp_num`, `tel`, `salery`, `details` )
        VALUES ('$name','$dom','$city','$mail','$emp','$tel','$sal','$det')";
        $env2 = mysqli_query($connect,$req2) or die ("requette 2 invalide");
     
        function redirect($url){
            header('Location: '.$url);
            exit();
            }

        redirect('../search.php');
    }else{
    echo "allready posted a work";
    }
    }
else{
    function redirect($url){
        header('Location: '.$url);
        exit();
        }

    redirect('../login.php');
}
?>

