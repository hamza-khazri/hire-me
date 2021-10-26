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
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
<script type="text/javascript">
 function ValidateEmail() {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(f.email.value))
    {
    return (true);
    }
    return (false);
    }
    $(document).ready(function(){
    $('#mail').keyup(function(){
        if (ValidateEmail()){
       $('#mail').css('border','1px solid green')
        }else{
       $('#mail').css('border','1px solid red')   
     }
  });
  });

  function verifname() {
   a = document.f.name;
   if ((!/^[a-zA-Z-' ']*$/g.test(a.value))||(a.value.length==0)) {
        return false;
    }
  return true;
}

$(document).ready(function(){
    $('#name').keyup(function(){
        if (verifname()){
       $('#name').css('border','0')
        }else{
       $('#name').css('border','1px solid red')   
     }
  });
  });
  function veriftel() {
   b = document.f.tel.value;
   if (b.length !=8) {
        return false;
    }
  return true;
}

$(document).ready(function(){
    $('#tel').keyup(function(){
        if (veriftel()){
       $('#tel').css('border','0')
        }else{
       $('#tel').css('border','1px solid red')   
     }
  });
  });

$(input).click(function(e) { 
    e.preventDefault();
});​
</script>
<style>
@media  (max-width:700px) {
*{
    overflow-y: auto;
    overflow-x: hidden;
}
}
 input {
   border: 0;
   padding:10px;
   font-size:16px;
   outline: 0;
    border-radius: .2rem;
   
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
select {
border: 0;
   padding:10px;
   font-size:18px;
}
tr {
	padding:10px;
}
.table2{
	background:transparent;
	padding:10px;
    
}
option{
color : #444444;
}
td{
    padding-top :50px;
    padding: 20px;
    
}
.formul{
    display: flex;
    margin: 0;
}
form{
    width: 400px;
}
.imgform{
    width: 50%;
    height: auto;
    margin-left:0;
}
article{
    justify-content: left;
    margin: 0;
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
.img{
    height: 40px;
    width: 300px;
    display: none;
}
.profile-pic{
    object-fit :cover;
    border-radius :50%;
    clip-path: circle();
    height: 60px;
    margin-top : -20px;
    margin-bottom : -20px;
}
#sub{
    text-align : right;
}
@media  (max-width:700px) {
    #sub{
    text-align : center;
}
.imgform{
    width: 0;
    height: 0;
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
        <li > <a href="index.php">HOME</a></li>
            <li> <a href="about.php">ABOUT US</a></li>
            <li class='now'> <a href='inscription.php'>SIGN UP</a></li>
            <li> <a href='login.php'>LOGIN</a></li>
      
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showmenu()"></i>
</nav>
<div class="text">
    <h1>Sign Up</h1>
    <p> be a part of our world </p>
</div>
 </section>
 <article class="formul">
    <img src="images/sign in.png" class="imgform">
    <form name="f" method="POST"  action="php/signup.php" enctype="multipart/form-data" autocomplete="off" >
        <table border="0" width="100%" class="table2">
            <tr>
                <td><b>full name: </b></td>
                <td><b><input type="text" name="name" size="20" maxlength="20" id="name" placeholder="your name"></b></td>
            </tr>
            <tr>
                <td><b>date of birth:</b></td>
                <td><b><input type="date" id="start" name="date"
                    value="2018-07-22"
                    min="1961-01-01" max="2004-12-31"></b></td>
            </tr>
            <tr>
                <td><b>email:</b></td>
                <td><b> 
                <input type="email" name="email" size="20" id="mail" placeholder="exemple@exem.ex"></b></td>
            </tr>
            <tr>
                <td><b>password:</b></td>
                <td><b> 
                <input type="password" name="password" size="20" placeholder="abc-ABC-123"></b></td>
            </tr>
            <tr>
                <td><b>&nbsp;specialty:</b></td>
                <td><b> <input type="text" name="spec" size="20"  placeholder="specialty"></b></td>
            </tr>
            <tr>
                <td><b>&nbsp;phone number:</b></td>
                <td><b> <input type="tel" name="tel" id="tel" maxlength="8" size="20" placeholder="xxxxxxxx" ></b></td>
            </tr>
            <tr>
            <td><b>&nbsp;profile picture:</b></td>
            <td><b> <input type="file" name="img" id="img"  size="20" placeholder="image"  accept="image/png, image/jpeg , image/jpg"></b></td>
        </tr>
        </table>
        <p id="sub">
        <button type="submit" value="valider" name="B1" style="boarder" >Sign up</button>
        &nbsp;&nbsp;
        <input type="reset" value="Reset" class="B2" style="background-color: #B2DFFC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    
    </form>
    
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