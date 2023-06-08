<?php session_start() ?>
<!doctype html>
<html>
		<style>
  body
  {
    background-image: url( "Images/new images/pexels-soumil-kumar-735911 (1).jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
</style>
<head>
<meta charset="utf-8">
<title>devil tech login</title>
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
	
	
	
<form id="form1" name="form1" method="post">
 <table width="710" height="150" border="0" align="center">
  <tbody>
    <tr>
      <td width="704" height="60"><table width="652" height="52" border="0">
        <tbody>
          <tr>
             <td width="338" align="center" ><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
            <!---<td width="296">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul></td>--->
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="297" height="573" border="0" align="center">
        <tbody>
          <tr>
            <td width="275" height="236" align="center"><img src="Images/member-login-form-laptop-screen_169241-1906.jpg" width="285" height="244" alt=""/></td>
          </tr>
          <tr>
            <td height="254">
			<div class="container"> 
			<p>
        <label for="uname"><span style="color: #DEDEDE"><b>Username</b></span></label>
        <input type="text" placeholder="Enter Username" name="txtuname" id="txtuname"  required>
        
        <label for="psw"><span style="color: #DEDEDE"><b>Password</b></span></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" id="txtpassword"  required>
      </p> 
				
			
			  <?php
				if(isset($_POST["btnsubmit"]))
				{
				$username = $_POST["txtuname"];
				$password = $_POST["txtpassword"]; //Read the values from textfields
				$valid = false;
					
				$con = mysqli_connect("localhost","root","","new5");
					
				if(!$con) //check db connection
				{
					die("DB Seaver Error");
				}
						$sql = "SELECT * FROM `user` WHERE `Email` = '".$username."' and `Password` = '".$password."' and `utype`= 'customer'"; 
					
						$result = mysqli_query($con,$sql); // execute quary for customer
					
							
			   if (mysqli_num_rows($result) > 0)
				{
					$_SESSION["txtuname"] = $username;
					header('Location:AfterlogCoustmer.php');
				}
				else
				{
					$sql = "SELECT * FROM `user` WHERE `Email` = '".$username."' and `Password` = '".$password."' and `utype`= 'admin'"; 
					
					$result = mysqli_query($con,$sql); //execute quary for Admin
					if (mysqli_num_rows($result) > 0)
					{
						$_SESSION["txtuname"] = $username;
						header('Location:Afterlog.php');
					}
					else{
						echo "Please enter correct username and password";
					}
					
				}
				}
					
				
				    
				?>
				
            <button  type="submit" name="btnsubmit" id="subbtn">Login</button>


      <p>
        <label>
          <input type="checkbox" checked="checked" name="cnkremember"> 
          <span style="color: #DBDBDB">Remember me</span> </label>
      </p>
			</div>
			</td>
          </tr>
          <tr>
            <td><p>
    <div class="container">
      <button type="button" onclick="" class="cancelbtn">Cancel</button>
				</div>
    </p>
              </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>

</form>
</body>
</html>