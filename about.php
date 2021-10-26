<?php
    session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <title>about us </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="style.css" type="text/css">
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
@media  (max-width:700px) {
*{
    overflow-y: auto;
    overflow-x: hidden;
}
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
.title-text{
    text-align: center;
    margin: 30px;
    padding: 100px;
}
.text-img{
    display: flex;
    justify-content: space-around;
    font-size: 20px;   
}
.image-side{
   width: 50%;
   background-color: gainsboro;
}
h2,h3{
    margin-top: 20px;
    margin-bottom: 20px;
}
.first{
    margin: auto;
}
#area{
 
    margin: 0;
}
a{
    text-decoration: none;
    color: auto;
}
#jobpic{
  
    margin: 0;
    padding:100px ;
}
.b22{

    margin: 0;
    padding:60px;
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
       #jobpic{
  
  margin: 0;
  padding:0;
}

    .text-img{
    display: block;
    justify-content: space-around;
   text-align: center;
   padding-bottom:100px ;
   font-size: 15px;
}
.image-side{
    width: 100%;
}
.title-text{
    padding: 0;
    padding-bottom:20px;
}
.profile-pic{
    margin-top :0;
    margin-bottom : 0;
}
}
/*-------------------------------contact us -- stylesheet----------------*/
.comment-section{
    background-color: #444442;
    padding-top: 85px;
    margin: 0;
}

h1 {
    font-family: 'Poppins', sans-serif, 'arial';
    font-weight: 600;
    font-size: 72px;
    color: white;
    text-align: center;
}

h4 {
    font-family: 'Roboto', sans-serif, 'arial';
    font-weight: 400;
    font-size: 20px;
    color: #9b9b9b;
    line-height: 1.5;
}

/* ///// inputs /////*/

input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    padding: 1.3rem 30px 1rem 30px;
    position: absolute;
    top: 10px;
    left: 0;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea {
    padding: 30px;
    border: 0;
    width: 100%;
    font-size: 1rem;
    background-color: #2d2d2d;
    color: white;
    border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;
}

textarea {
    width: 100%;
    min-height: 15em;
}
.row-input-container{
margin-left: 20px;
}
.input-container {
    width: 650px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
    float: right;
    display: inline-block;
    border: 0;
    border-radius: .5px;
    padding:20px 40px;
     font-size:16px;
    background: #1D2951;
    color:white;
    box-shadow: inset 0 0 0 0 #F2C778;
    transition : ease-out 0.5s;
      outline : none;
}

.submit-btn:hover {
    box-shadow: inset 300px 0 0 0 #F2C778;
    cursor: pointer;
    color :black;
}

@media (max-width: 768px) {
    .submit-btn {
     
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}
input,textarea {
    width: 70%;
}
</style>

<script>
            function verif_comment(){
        a = f.head.value;
        b= f.comment.value ;
        if (a.length < 180) {
            if (b.length < 180 ){
                f.hidden.value = "auto";
            }else{
                f.hidden.value ="vertical" ;
            }
        }else {
            f.hidden.value= "horizontal";
        }
        alert(f.hidden.value);
        }
</script>
</head>

<body>
 <section class="header">
<nav> 
    <a href="index.php"><img class='logo' src="images/hireme.jpg"></a>
    <div class="nav-links"> 
        <i class="fa fa-times" onclick="hidemenu()" id="navlinks"></i>
        <ul>
        <li> <a href="index.php">HOME</a></li>
            <li  class="now"> <a href="about.php">ABOUT US</a></li>
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

        
    </div>
    <i class="fa fa-bars" onclick="showmenu()"></i>
</nav>
<div class="text">
    <h1>About Us</h1>
    <p> Hiring Online — Products for Employers </p>
</div>

 </section>
 <div class="title-text">
    <h2> Products and services designed to help you hire</h2>
    <p>HireMe helps you connect with quality talent so you can make hires faster.<br> Support from start to finish—no matter your business needs.</p>
 </div>

<section class="text-img" >
<div class="first">
<h2>HireMe Platform</h2>
<h3> Fast track your recruiting</h3>
<p>HireMe Platform helps you automate screening,<br> scheduling, and communications so <br>you can start interviewing faster.</p>
</div>
<img src="images/platform.png" class="image-side" >
</section>

<section class="text-img" id="area">
    <img src="images/post.png" class="image-side" >
    <div class="first">
   <h2>Job posting</h2>
   <h3>Get started for free</h3>
   <p>Anyone can <a href="host.html">post jobs for free* </a>on HireMe.<br>
     Plus you can screen for the skills you value<br>  most by 
     adding a ready-to-use skills<br>  test to your job post with HireMe Assessments.</p>
</div>
</section>

<section class="text-img" id="jobpic">
    <div class="first">
    <h2>Location cover</h2>
    <h3> 0 effort of searching</h3>
    <p>HireMe Platform helps you to find jobs closest<br> to your location, it sorts them automatically for<br> you so you can find your job with no effort.</p>
    </div>
    <img src="images/location.png" class="image-side" >
    </section>

    <section class="comment-section">
<form name="f" action="#" onsubmit="return verif_comment();">
    <div class="container">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<div class="row-input-container">
		

            <div class="col-xs-12">
				<div class="styled-input wide">
					<input name="head" type="text" required />
					<label>Subejct</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="comment" style="resize : none" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<button type="submit" class="btn-lrg submit-btn">Send</button>
			</div>
	</div>
    <input type="hidden" name="hidden">
</div>
</form>
</section>


 <article  class="b22">
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