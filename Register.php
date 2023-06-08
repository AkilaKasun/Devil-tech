<!doctype html>
<?php
ob_start();
?>

<html>
			<style>
  body
  {
    background-image: url( "Images/new images/pexels-filippo-bergamaschi-986772.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
</style>
<head>
<meta charset="utf-8">
<title>DEVIL TECH</title>
<link rel="stylesheet" type="text/css" href="login.css" />
	
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
			<li> <a href="Home.php" ><i class="fa-sharp fa-solid fa-house"></i>Home</a></li>
			<li><a href="login.php" ><i class="fa-sharp fa-solid fa-store"></i>Store</a></li>
			<li><a href="Profile.php" ><i class="fa-sharp fa-solid fa-user"></i>Profie</a> </li>
			<li><a href="login.php" ><i class="fa-sharp fa-solid fa-cart-plus"></i>Cart</a></li> 
			<li><a href="login.php" ><i class="fa-sharp fa-solid fa-right-to-bracket"></i>Login</a> </li>
			<li><a href="Register.php" ><i class="fa-sharp fa-solid fa-user-plus"></i>Register</a></li> 
		</ul>	
	</div>
	
	
	<div class="mbtns">
		<label for="s-menue" class="showbtn"><i class="fa-sharp fa-solid fa-bars"></i></label>
		<label for="c-menue" class="hidebtn"><i class="fa-sharp fa-solid fa-xmark"></i>
</label>
	
	</div>
	
<form method="post" action="Register.php">
<table width="677" height="537" border="0" align="center">
  <tbody>
    <tr>
      <td width="671" height="78"><table width="598" height="74" border="0" align="center">
  <tbody>
    <tr>
      <td width="292" align="center" ><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
      <!--<td width="296">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul></td>-->
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="126"><p align="center"><img src="Images/REGISTER.png" width="202" height="200" alt=""/></p>
        <table width="439" height="392" border="0" align="center">
          <tbody>
          <tr>
            <td align="center" height="38" colspan="2" bgcolor=" #000000"><h1 style="font-size: 25px"><span style="color: #FFFFFF">Create</span> <span style="color: #F50004">Profile</span></h1></td>
          </tr>
          <tr>
            <td width="228" height="66" align="center" style="color: rgba(254,254,254,1)">Full Name</td>
            <td width="207"><input type="text" name="txtFullName" id="txtFullName" /></td>
          </tr>
          <tr>
            <td height="66" align="center" style="color: rgba(255,255,255,1)">Email Address</td>
            <td><input type="text" name="txtEmail" id="txtEmail" /></td>
          </tr>
          <tr>
            <td height="44" align="center" style="color: rgba(255,255,255,1)"><span style="color: rgba(255,255,255,1)">Contact numbe</span>r</td>
           <td><input type="text" name="txtnum" id="txtnum" /></td>
          </tr>
          <tr>
            <td height="66" align="center" style="color: rgba(255,255,255,1)">Password</td>
            <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
          </tr>
          <tr>
            <td height="42" align="center" style="color: rgba(255,255,255,1)">Confirm Password</td>
            <td><input type="password" name="txtCPassword" id="txtCPassword" class="datalist" /></td>
          </tr>
        </tbody>
</table></td>
    </tr>
  </tbody>
</table>
	
	<form class="btnsetting">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Register </button>
	<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Cancle </button>
		</form>	
	
</form>	

</body>
<?php
	if(isset($_POST["btnSubmit"]))  //check whether button is clicked or not
	{
		
		$fullname = $_POST["txtFullName"];  //get values
		$email = $_POST["txtEmail"];
		$contact = $_POST["txtnum"];
		$password = $_POST["txtPassword"];
		$utype="customer";
		$con = mysqli_connect("localhost","root","","new5");
					
				if(!$con) // check db connection
				{
					die("Cannot connect our DB Seaver");
				}
		  $sql = "INSERT INTO `user` (`Fullname`, `Email`, `Cnumber`,`Password`,`utype`) VALUES ('$fullname', '$email', '$contact','$password','$utype');";

	
		if( mysqli_query($con,$sql))
		{
			
			header('Location:login.php');
			ob_end_flush();
			

		}
	
	}
?>	
</html>