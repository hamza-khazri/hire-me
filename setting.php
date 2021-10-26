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

    section{
    min-height: 35%;
}


.jobs{
    display: grid;
    grid-template-columns: repeat(auto-fill,400px);
    justify-content: space-around;
    
}
.record{
    text-align:center;
    margin-bottom: 20px ;
    border: #1D2951;
    height: 300px;
    width : 100px; 
}
.nothing{
    position: absolute;
    right:45%;
    text-align: center ;
}
td{
    padding: 10px 10px;  
}
.rt{
    padding:  0px 20px;
    background: black;
    color: white;
}
.td2{
    padding-right: 20px;
    background : gray;
}
.inv{
    border :0;
}
button{
    border: 0;
    border-radius: .5px;
    padding:10px;
     font-size:16px;
    width: 100px;
    height: 40px;
    background: #1D2951;
    color:white;
    box-shadow: inset 0 0 0 0 #F2C778;
    transition : ease-out 0.5s;
      outline : none;
      }
    
   button:hover {
  box-shadow: inset 100px 0 0 0 #F2C778;
    cursor: pointer;
    color :black;
   }
   .profile-pic{
    object-fit :cover;
    border-radius :50%;
    clip-path: circle();
    height: 60px;
    margin-top : -20px;
    margin-bottom : -20px;
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
        <li > <a href="index.php">HOME</a></li>
            <li> <a href="about.php">ABOUT US</a></li>
        <?php
           require('php/connect-serv.php');
                echo "<li> <a href='php/logout.php'>LOG OUT</a></li>";
                echo "<li class='now' ><a href='setting.php'><b>".$_SESSION['username']."</b></a></li>";
                echo "<a href='setting.php'> <img class='profile-pic' src='profile/".$_SESSION['img']."'></a>
                </ul>";
          ?>    
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showmenu()"></i>
</nav>

 </section>
<section class="jobs">
<?php  
   $img=$_SESSION['img'];
   $m=substr( $img, 0, strpos($img, ".") );
   $mail=$m .".com";

$req1 = "select * from job where email='$mail'";
$env = mysqli_query($connect,$req1) or die ("requette 1 invalide");
if (mysqli_num_rows($env)==0){
    echo "<p class='nothing'> no jobs avelable </p>";
}else{
    while($res=mysqli_fetch_row($env)){ ?>
        <form method="POST" action="php/setting-job.php" >
        <table class='record' border='0' > 
        <tr> <th class="rt"><b> job name :</b></td> <td class='td2'> <?php echo $res[0] ?></td> </tr>
        <tr> <th class="rt"><b> domain :</b></td> <td class='td2'>  <?php echo $res[1] ?></td> </tr>
        <tr> <th class="rt"><b> city :</b></td> <td class='td2'>  <?php echo $res[2]  ?></td> </tr>
        <tr> <th class="rt"><b> salery :</b></td> <td class='td2'> <?php echo $res[7]  ?>DT </td> </tr>
        <tr id="box"> <th class="rt"><b> discription:</b></td> <td class='td2'>  <?php echo $res[8] ?> </td> </tr>
      <tr class="inv"> <td ><input type="hidden"  name="sel" value=" <?php echo $res[8] ?>">  </td> <td >
      <button type='submit' >delete
      </button> </td> </tr>
      </table>
    </form>
      <?php }
}
?>
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