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
    background-image: url( "Images/2888165.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
			</style>
<head>
<meta charset="utf-8">
<title>viewStorel</title>
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
	
<table width="641" height="256" border="0" align="center">
  <tr>
    <td width="342" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
   <!-- <td width="289"><div>
<ul>
  <li><a href="Afterlog.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
</div></td>-->

  </tr>
	
  <tr>
	  
    <td height="198" colspan="2" align="center">
      <p>&nbsp;</p>
      <table width="259" height="223" border="0">
      <tbody>
        <tr>
          <td width="367" height="219" align="center"><img src="Images/Acer-Nitro-5-gaming-laptop.jpg" width="216" height="211" alt=""/></td>
        </tr>
      </tbody>
    </table>
      <table width="262" height="42" border="0">
        <tbody>
          <tr>
            <td><h1 align="center" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"> acer
</h1></td>
          </tr>
        </tbody>
      </table>
	  <table width="518" height="56" align="center">
      <tr>
        <td width="521">
            <table width="512">
				<?php
				
				$con = mysqli_connect("localhost","root","","new5");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
				 
				$sql= "SELECT * FROM `productm`" ;
				
				$result = (mysqli_query($con,$sql));
				
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result))
					{	
						
				echo "
					
              <tr>
				<td width='195' style='background-color:rgba(225,225,225,0.55)'><div class='imgcontainer'><img src='".$row["Path"]."' width='195' height='150'></div></td>
				<td width='159' align='center' style='color:white;font-size:25px'> ".$row["Name"]."</td>
				<td width='159' align='center' style='color:white;font-size:25px;background-color:rgba(0,0,0,0.55)'> ".$row["Price"]."</td>
                <td width='46'><a href='Updatestoreacer.php?id=".$row["id"]."'><img src='Images/edit2.png' alt='' width='32' height='34' />Edit</a></td>
                <td width='45'><a href='DeleteStoreacer.php?id=".$row["id"]."'><img src='Images/delete.jpg' alt='' width='32' height='34' />Delete </a></td>
             
              </tr> " ;
					}
				}
				?>
			
            </table>
          </div>
          <div class="container" style="background-color:#f1f1f1"></div></td>
      </tr>
    </table>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<a href="Addstoreacer.php">
		<button type="submit" name="btnsubmit" id="subbtn" >Addstore</button>
	    </a>
	</td>
  </tr>
</table>
</body>
</html>