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
      if (( b.length !=8 ) || ( isNaN (b) )) {
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
   
     var box = document.getElementById('box');
var charlimit = 20; // char limit per line
box.onkeyup = function() {
	var lines = box.value.split('\n');
	for (var i = 0; i < lines.length; i++) {
		if (lines[i].length <= charlimit) continue;
		var j = 0; space = charlimit;
		while (j++ <= charlimit) {
			if (lines[i].charAt(j) === ' ') space = j;
		}
		lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
		lines[i] = lines[i].substring(0, space);
	}
	box.value = lines.slice(0, 10).join('\n');
};
   </script>

<style>
@media  (max-width:700px) {
*{
    overflow-y: auto;
    overflow-x: hidden;
}
}
section{
        margin-bottom: 30px ;
    }
.all{
        display: flex;
}
.postimg{
        width: 40%;
        height: 50%;
        align-self: center;
}
select{
        outline: 0;
        border: 0;
        padding:5px;
        font-size:16px;
        border-radius: .5rem;
    }
option{
        border: 0;
        background:ghostwhite;
}
input {
        outline: 0;
        border: 0;
        padding:10px;
        font-size:16px;
        border-radius: .2rem;
}
#mail{
        border: 1px;
}
td {
	    padding:10px;
        margin: 30px;
}
.table2{
	    background:transparent;
	    padding:10px;
        left: 30%;
        right: 50%;
        position: relative;
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
.n{
         width: 50px;
}
.longtext{
        font-size: 17px;
         border: 0;
         outline: none;
}
.pp{
         align-items: right;

}

.input-group {
    top:40px;
    width:auto;
    display: flex;
}
.unity-input .form-control {
    border-right:0!important;
}
.unity-input .input-group-addon {
    background:white!important;
    border-left:none!important;
    font-weight:bold;
    color:#333;
}
.sp{
    border: 1px;
    border-bottom-right-radius: .5rem;
    background: black;
    color: white;
    padding: 7px;
    width: 40px;
    position: absolute;
}
.profile-pic{
    object-fit :cover;
    border-radius :50%;
    clip-path: circle();
    height: 60px;
    margin-top : -20px;
    margin-bottom : -20px;
}
@media  (max-width:700px){
    .postimg{
        width: 0;
    }
    .table2{
        padding:10px;
        left: 10%;
        right:50%;
        position: relative;

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
<section class="all" >
    <img src="images/in postjob.png" class="postimg"> 
    <form name="f" method="POST" action="php/host-php.php"  align="center" autocomplete="off">
        <table border="0" width="50%" class="table2" align="center">
            <tr>
                <td align="center"><b>job name: </b></td>
                <td><b><input type="text" name="T1" id="name" size="20"  placeholder="job name"></b></td>
            </tr>
            <tr>
                <td align="center"><b>domain:</b></td>
                <td><b> <input type="text" name="T2" size="20"  placeholder="domain"></b></td>
            </tr>
            <tr>
                <td align="center"><b>city:</b></td>
                <td><select size="5" name="D1">
                    <option value="0">--choisir votre ville--</option>
                    <option value="Ariena">Ariena</option>
                    <option value="Bizerte">Bizerte</option>
                    <option value="Ben Arous">Ben Arous</option>
                    <option value="Beja">Beja</option>
                    <option value="Gabes">Gabes</option>
                    <option value="Gafsa">Gafsa</option>
                    <option value="Jendouba">Jendouba</option>
                    <option value="Kairouan">Kairouan</option>
                    <option value="Kasserine">Kasserine</option>
                    <option value="Kebili">Kebili</option>
                    <option value="La Manouba">La Manouba</option>
                    <option value="Le Kef">Le Kef</option>
                    <option value="Mahdia">Mahdia</option>
                    <option value="Mounastir">Mounastir</option>
                    <option value="Medenine">Medenine</option>
                    <option value="Nabeul">Nabeul</option>
                    <option value="Siliana">Siliana</option>
                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                    <option value="Sousse">Sousse</option>
                    <option value="Sfax">Sfax</option>
                    <option value="Tunis">Tunis</option>
                    <option value="Tozeur">Tozeur</option>
                    <option value="Tataouine">Tataouine</option>
                    <option value="Zaghouan">Zaghouan</option>
                    </select</td>
            </tr>
            <tr>
                <td align="center"><b>&nbsp;employees number:</b></td>
                <td><b> <input type="number" name="T4" size="20" maxlength="2" placeholder="N°" class="n"></b></td>
            </tr>
            <tr>
                <td align="center"><b>&nbsp;phone number :</b></td>
                <td><b> <input type="text" name="T5" id="tel" maxlength="8" size="8" placeholder="your number"></b></td>
            </tr>
            <tr>
                <td align="center"><b>&nbsp;salary :</b></td>
                <td>
                    <div class="input-group">
                        <input type="number" name="T6" placeholder="00.000" class="form-control">
                        <div class="input-group-append">
                            <span class="sp"> DT</span>
                        </div>
                     </div>
                </td>
            </tr>
            <tr>
                <td align="center"><b>&nbsp;details :</b></td>
                <td><textarea rows="6" name="S1" id="box" class="longtext"></textarea></td>
            </tr>
        </table>
        <p class="pp">
            <button type="submit" value="valider" name="B1" style="boarder" >Post</button>
            &nbsp;&nbsp;
            <input type="reset" value="Reset" class="B2" style="background-color: #B2DFFC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </form>
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