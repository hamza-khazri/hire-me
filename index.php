<?php
 session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <title>HireMe </title>
  <meta property="og:url" content="http://hireme.great-site.net">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Work in Tunisia with HireMe">
  <meta property="og:description" content="search for a job or post a job in this platform in tunisia 2021 fast and easy!">
  <meta property="og:image" content="images/for-fc.png">
  <meta property="og:site_name" content="HireMe">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="black">
  <link rel="shortcut icon" href="/images/logo.png" type="image/png" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link href="https://plus.google.com/http://hireme.great-site.net/" rel="publisher" />
  <meta itemprop="name" content="Work in Tunisia with HireMe">
  <meta itemprop="description" content="search for a job or post a job in this platform in tunisia 2021 fast and easy!">
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

    button{
    width : 300px;
    height :50px;
    border: none;
    color:  #1A1F71;
    border-radius:4px;
    font-size:16px;
    transition : ease-out 0.5s;
    outline:none;
    border : 3px solid  #2F2E41;
    margin-top: 20px;
    margin-left: 30px ;
      }  
 button:hover {
 background-color: #F2C778;
   color : #1A1F71;
   cursor : pointer;
   border: #F2C778;
 }
 button :before{
 transition : 0.3s all ease;
 position :absolute;
 top :0;
 left : 50% ;
 right : 50% ;
 bottom : 0;
 opacity : 0;
 content : "" ;
 background-color:  #1D2951;
 }
 button:hover:before {
 transition : 0.5s all ease;
 left : 0 ;
 right : 0 
 opacity :1;
 z-index:-1 ;
 }
    .now::after{
    content: '';
    width: 100%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}   
.now:hover::after{
    width: 0;
}
.host{
   cursor: pointer;
}
.profile-pic{
    object-fit :cover;
    border-radius :50%;
    clip-path: circle();
    height: 60px;
    margin-top : -20px;
    margin-bottom : -20px;
}
h2{
    margin-bottom: 30px ;
    font-size: 30px;
}
article p{
    font-size: 18px;
}
.article-3{
    padding-top:80px ;
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
button{
align-self:center;
 margin-left: 0 ;

}
}
</style>
</head>

<body>
 <section class="header">
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
                echo " <a href='setting.php'> <img class='profile-pic' 
                 src='profile/".$_SESSION['img']."'></a>
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
<div class="text">
    <h1>Hire Me</h1>
    <p> better work , better opportunities , better tunisia </p>
</div>
 </section>
 <article>
     <div class="host"> 
         <img src="images/postjob.png" id="im1" class="image"> <br>
         <a href="host.php"><button align="center" >Host a job</button></a>
        </div>
     <div class="work">
        <img src="images/search.png" id="im2" class="image"> <br>
         <a href="search.php"><button>Search for job</button></a>
        </div>
 </article>

 <article class="article-3">
 <h2>When you use HireMe for your hiring needs, you can expect:</h2>
<P align="center" >Access to a suite of products that help you connect with quality talent faster.
No long-term contracts or commitments — you can close your job at any time.
Low cost per hire and measurable results available within your account.</P>
 
<img src="images/hire.png">
 
 
 </article>
 <article>
   <div > 
    <img src="font-awesome-4.7.0/clipboard.png" class="p1" >
    <p class="underlogo">Better jobs</p>
    
   </div>
   <div>
    <img src="font-awesome-4.7.0/busy.png"  class="p1">
    <p class="underlogo">Save time</p>
   </div>
   <div>
    <img src="font-awesome-4.7.0/handshake.png"  class="p1">
    <p class="underlogo">Secure</p>
   </div>
 </article>
 
<footer>
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