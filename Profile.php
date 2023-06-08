
<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?><head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="login.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
	



<style>
	  body
  {
    background-image: url( "Images/store face background.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
			</style>

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
	
	<p>
	  <?php
	$con = mysqli_connect("localhost","root","","new5");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
	$sql ="SELECT * FROM `user` WHERE `Email` = '".$_SESSION["txtuname"]."'"; 
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
</p>
<p>&nbsp;</p>
<table width="258" height="212" border="0" align="center">
  <tbody>
    <tr>
      <td width="211" align="center"><img src="Images/24-248729_stockvader-predicted-adig-user-profile-image-png-transparent.png" width="216" height="211" alt=""/></td>
    </tr>
  </tbody>
</table>
<table class="tb" height="233" align="center">
	<tr>
		<td colspan="2" bgcolor=" #19B4CC"><h1 align="center" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FF0000;">MY PROFILE</h1></td>
  </tr>
	
	<tr>
	<td width="146" style="color: #FF0004; font-size: 16px;">Full Name</td>
	<td width="227"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["Fullname"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146" style="color: #F90004; font-size: 16px;">Email</td>
	<td width="227"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["Email"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146" style="color: #FF0004">Contact Number</td>
	<td width="227"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row["Cnumber"];?>" readonly></td>
	</tr>
	
</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td width="227" align="center"><a href="Home.php"><button type="submit" name="btnsubmit" id="subbtn">Back</button></a></td>
    </tr>
  </tbody>
</table>

	<?php
		}
	mysqli_close($con);
		 ?>
</body>
</html>