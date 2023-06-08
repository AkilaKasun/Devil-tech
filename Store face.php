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
    background-image: url( "Images/45-452236_graphics-asus-rog-violet-outer-space-purple-wallpaper.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
			</style>
			
<head>
<meta charset="utf-8">
<title>Store devil tech</title>
<link rel="stylesheet" type="text/css" href="Store face.css"/>
	<link rel="stylesheet" type="text/css" href="Home.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
			<li> <a href="Afterlog.php" ><i class="fa-sharp fa-solid fa-house"></i>Home</a></li>
			<li><a href="Store face.php" ><i class="fa-sharp fa-solid fa-store"></i>Store</a></li>
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
<form id="form1" name="form1" >
  <table width="821" border="0" align="center">
    <tbody>
      <tr>
	    <td><div class="pic"> <a href= "viweStore.php"><img src="Images/img1.jpg.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #000000;">MSI</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreasus.php"><img src="Images/img2.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #000000;">ASUS</p>
	    </div></td>
      </tr>
      <tr>
        <td><div class="pic"> <a href= "viweStoreacer.php"><img src="Images/img3.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #000000;">acer</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreBdell.php"><img src="Images/img4.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #000000;" >DELL</p>
	    </div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
