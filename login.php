
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

</script>
<style>
@media  (max-width:700px) {
*{
    overflow-y: auto;
    overflow-x: hidden;
}
}
    input {
   border :0;
   border-radius: .2rem;
   outline: 0;
   padding:10px;
   font-size:16px;
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

tr {
	padding:10px;
}
.table2{
	background:transparent;
	padding:10px;
    
}

td{
    padding-top :50px;
    padding: 20px;
    
}
.formul{
    display: flex;
    margin: 0;
    align-items: center;
    min-height: 70%;
}
.imgform{
    width: 50%;
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
.right{
justify-content: center;
align-items: center;
}
.profile-pic{
    border-radius: 50px;
}
#in{
    text-align:center;
    margin-top: 20px;
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
             
                <li> <a href='inscription.php'>SIGN UP</a></li>
                <li class='now'> <a href='login.php'>LOGIN</a></li>
      
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showmenu()"></i>
</nav>
<div class="text">
    <h1>Login</h1>
    <p> be a part of our world </p>
</div>
 </section>
 <article class="formul">
    <img src="images/login.png" class="imgform">
    <div class="right">
    <form name="f" method="POST" action="php/login-php.php" autocomplete="off">
        <table border="0" width="100%" class="table2">
                <td><b>email:</b></td>
                <td><b> 
                <input type="email" name="email" id="mail" size="20"  placeholder="email"></b></td>
            </tr>
            <tr>
                <td><b>password:</b></td>
                <td><b> 
                <input type="password" name="password" size="20" placeholder="password"></b></td>
            </tr>
           
        </table>
        <p align="right">
        <button type="submit" value="valider" name="B1" style="boarder" >Log in</button>
        &nbsp;&nbsp;
        <input type="reset" value="Reset" class="B2" style="background-color: #B2DFFC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p id="in"> You dont have an account ?  <a href="inscription.php"> Sign up</a></p>
    </form>
    
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