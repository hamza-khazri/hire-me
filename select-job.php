<?php
    session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <title>HireMe </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script>
    
    function showmenu(){
        var navlinks = document.querySelector(".nav-links");
        navlinks.style.right ="0";
    }
    function hidemenu(){
        var navlinks = document.querySelector(".nav-links");
       navlinks.style.right ="-200px";
    }
</script>


<style>


table {
    width : 100%;
}
.record{
    margin-bottom: 20px ;
    border-radius: 1rem;
    border: #1D2951;
}
td{
    padding-right:400px;
    padding-left :50px;
    background-color: whitesmoke;
    
}
.rt{
    
    padding : 20px;
    background: black;
    color: white;
}
.num{

}
.p{
    font-size : 30px;
    text-align:center;
    background : black ;
    color: white;
}
.p2{
    text-align:center;
    background : #F2C778;
    padding: 20px;
    display : flex;
    justify-content : space-around;
    
}
.profile-pic{
    object-fit :cover;
    border-radius :50%;
    clip-path: circle();
    height: 60px;
    margin-top : -20px;
    margin-bottom : -20px;
}
.jobs{
    margin-bottom:0;
}

@media  (max-width:700px) {
*{
    overflow-y: auto;
    overflow-x: hidden;
}
.profile-pic{
    margin-top :0;
    margin-bottom : 0;
}
.p2{
    display : block;
}
}
</style>
</head>

<body>
 <section >
<nav> 
    <a href="index.php"><img class='logo' src="images/hireme.jpg"></a>
    <div class="nav-links"> 
        <i class="fa fa-times" onclick="hidemenu()" id="navlinks"></i>
        <ul>
        <li class="now"> <a href="index.php">HOME</a></li>
            <li> <a href="about.php">ABOUT US</a></li>
        <?php
            require('php/connect-serv.php');
            
      if(isset($_SESSION['username'])){
                        echo "<li> <a href='php/logout.php'>LOG OUT</a></li>";
                echo "<li><a href='setting.php'><b>".$_SESSION['username']."</b></a></li>";
                echo "<a href='setting.php'> <img class='profile-pic' src='profile/".$_SESSION['img']."'></a>
                </ul>";
            }else {
                
                echo "<li> <a href='inscription.php'>SIGN UP</a></li>";
                echo "<li> <a href='login.php'>LOGIN</a></li>";
            }
        ?>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showmenu()"></i>
</nav>

 </section>
<section class="jobs">
<?php  
$id=$_POST["sel"]; 
$req1= "select * from job where id_job='$id' ";
$env = mysqli_query($connect,$req1) or die ("requette 1 invalide");

   $res=mysqli_fetch_row($env) ?>
       
        <table class='record' border='1'> 
      <tr> <td class="rt"><b> job name :</b></td> <td class='td2'> <?php echo $res[0] ?></td> </tr>
      <tr> <td class="rt"><b> domain :</b></td> <td class='td2'>  <?php echo $res[1] ?></td> </tr>
      <tr> <td class="rt"><b> city :</b></td> <td class='td2'>  <?php echo $res[2]  ?></td> </tr>
      <tr> <td class="rt"><b> salery :</b></td> <td class='td2'> <?php echo $res[6]  ?>DT </td> </tr>
      <tr> <td class="rt"><b> discription:</b></td> <td class='td2'>  <?php echo $res[7] ?> </td> </tr>
      </table>
      <div class="num">
          
                  <?php  $req2 = "SELECT `name`, `img` FROM `inscription` WHERE `email`='$res[3]'";
        $env2 = mysqli_query($connect,$req2) or die ("requette 2 invalide");
        $res2=mysqli_fetch_row($env2);
        ?>
        
        
      <p class="p"><b> call and ask for the job </b> </p>
      
   
        <div class="p2"><div><img class='profile-pic' src='profile/<?php echo $res2[1] ?>'><b>name: </b><?php echo $res2[0] ?></div><div> Number : <?php echo $res[5] ?> <a href="tel:<?php echo $res[5] ?>">call now</a></b></div>
        </div>
</div>

</section>
<footer>
    <p>Contact us for more informations</p>
    <div class="social">
       <a href="https://www.facebook.com/hamza.khazri.319/"> <i class="fa fa-facebook" id="icon" ></i></a>
       <a href="https://www.instagram.com/hamza_khazrri/?hl=fr"> <i class="fa fa-instagram" id="icon" ></i></a>
       <a href="mailto:hamza20251026@gmail.com"> <i class="fa fa-envelope" id="icon"></i></a>
       <a href="twitter.com"> <i class="fa fa-twitter" id="icon" ></i></a>
    </div>
    <p> © 2021 HireMe All rights reserved</p>
</footer>
</body>
</html>