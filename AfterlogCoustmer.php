<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?>
<!doctype html>
<html>
		<style>
  body
  {
    background-image: url("Images/Scar-Hero.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
</style>
<head>
<meta charset="utf-8">
<title>devil tech Online</title>
<link rel="stylesheet" type="text/css" href="Home.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<input type="radio" name="menue" id="s-menue">
	<input type="radio" name="menue" id="c-menue">
	
	<div class="side">
	<header><img scr="C:\Users\AKILA KASUN\OneDrive - Sri Lanka Institute of Information Technology\Desktop\BuyFresh.lk--master\Images\Untitled-1.png" alt=""></header>
		
		<!---<input type="checkbox" id="services">
		<input type="checkbox" id="graphics">
		<input type="checkbox" id="logos">
		<input type="checkbox" id="photos">--->
		
		<ul class="nav-links" >
			<li> <a href="Home.php" ><i class="fa-sharp fa-solid fa-house"></i>Home</a></li>
			<li><a href="Store face Coustmer.php" ><i class="fa-sharp fa-solid fa-store"></i>Store</a></li>
			<li><a href="Profile.php" ><i class="fa-sharp fa-solid fa-user"></i>Profie</a> </li>
			<li><a href="cart.php" ><i class="fa-sharp fa-solid fa-cart-plus"></i>Cart</a></li> 
			<li><a href="login.php" ><i class="fa-sharp fa-solid fa-right-to-bracket"></i>Login</a> </li>
			<li><a href="Register.php" ><i class="fa-sharp fa-solid fa-user-plus"></i>Register</a></li> 
		</ul>	
	</div>
	
	
	<div class="mbtns">
		<label for="s-menue" class="showbtn"><i class="fa-sharp fa-solid fa-bars"></i></label>
		<label for="c-menue" class="hidebtn"><i class="fa-sharp fa-solid fa-xmark"></i>
</label>
	
	</div>
	
<table width="649" height="471" border="0" align="center">
  <tbody>
    <tr>
      <td width="643" height="71"><table width="638" height="60" border="0">
        <tbody>
          <tr>
             <td width="338" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
            <!---<td width="290">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face Coustmer.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
			  </td>--->
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="391">
		<img class="mySlides"  src="Images/wp1923018.jpg" width="950" height="550" alt=""/>
		  <img class="mySlides" src="Images/new images/pexels-filippo-bergamaschi-986772.jpg" width="950" height="550" alt="">
		  <img class="mySlides" src="Images/ceb1e5cb705d1ac6cd7bce1a7e7eeef9.jpg" width="950" height="550" alt="">
		  <img class="mySlides" src="Images/new images/pexels-soumil-kumar-735911 (1).jpg" width="950" height="550" alt="">
		  
		
		</td>
		<script>
		var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}</script>
	</td>
    </tr>
    
  </tbody>
</table>

<table style="background-color: rgba(0,0,0,0.66)" class="table" width="950" height="250" border="0" align="center">
	
  <tbody>
    <tr>
      <td height="191" align="center"><footer>
    <section id="contact" class="foot" style="color: #FF0004;">
      <h1 style="text-align: center; color: #FF0004;">Contact Us</h1>
        <p style="text-align: center; color: #FF0004;" >DEVIL TECH PC SHOP</p>
        <table width="390" class="info" a>
            <tr>
                <td width="178" height="23" align="center">Contact No:</td>
                <td width="200" align="center">+94711304475</td>
            </tr>
            <tr>
                <td align="center">Address :</td>
                <td align="center">Matale</td>
            </tr>
            <tr>
                <td align="center">email Address:</td>
                <td align="center">akilakasun@gmail.com</td>
            </tr>
            <tr>
                <td align="center">Powerd By:</td>
                <td align="center">SLIIT Academy</td>
				
            </tr>
        </table>
		<div class="social">
			  <ul>
		  <a href="https://www.facebook.com/akila.kasun.14" ><span class="fa fa-facebook-official"></span></a>
		  <a href="https://www.instagram.com/_akila_kasun_/" ><span class="fa fa-instagram"></span></a>
		  <a href="https://twitter.com/Akilakasun8" ><span class="fa fa-twitter"></span></a>
		  <a href="https://wa.me/+94756222982" ><span class="fa fa-whatsapp"></span></a>
		  <a href="https://www.linkedin.com/in/akila-kasun-066b2322b/" ><span class="fa fa-linkedin"></span></a>
				  </ul>
		
		  </div>
    </section>
</footer></td>
    </tr>
  </tbody>
</table>


</body>
</html>
