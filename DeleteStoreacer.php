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
    background-image: url( "Images/501baaf6e39a52c3728af8f0c39dda2b.jpg");
    background-repeat: round;
    background-attachment: fixed;
    width:auto;
    height: auto;
      
  }
</style>
<head>

<meta charset="utf-8">
<title>Delete Product</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
	<?php
	$con = mysqli_connect("localhost","root","","new5");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
	
						$sql= "SELECT * FROM `productm` WHERE `id`= ".$_GET["id"].";";
				    
							$result = mysqli_query($con,$sql);
							
							if(mysqli_num_rows($result)>0)
							{
								
								$row = mysqli_fetch_assoc($result);
								
							
								
	?>
	
	<form action="" method="post" enctype="multipart/form-data">
    <br class="container">
    <h1 style="color: #FFFFFF">Edit Product</h1>

    <hr>
    <p>
    <label for="pName"><span style="color: #FFFFFF"><b>Product Name</b></span></label>
    <span style="color: #FFFFFF">
    <input type="text" placeholder="Enter Product Name" name="txtProductName" id="txtProductName" value="<?php echo $row["Name"];?>" >

    <label for="Image"><b>File</b></br></br>
    </label>
    <input type="file" name="imagefol" id="imagefol" value="<?php echo $row["Path"];?>" >


    <label for="price" ></br>
      </br> 
      <b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="txtPrice" id="txtPrice" value="<?php echo $row["Price"];?>" >


    <label for="chkPublish"><b>Publish</b></label>
    <input type="checkbox" name="chkPublish" id="chkPublish" <?php if ($row["Post"]==1){echo "checked";}?>  />Publish this</span></p>
    <p><br />
	 
		<?php
								
							}
	 			mysqli_close($con); 
		?>
		
    </p>
    <div class="clearfix">
	<a href ="viweStoreM.php">
		<button type="submit" class="button" name="btnSubmit" id="btnSubmit">Delete </button>
        <button type="button" class="button" style="background-color: firebrick">Cancel</button>
		</a>

    </div>
    
</form>
<?php 
 	 if(isset($_POST["btnSubmit"])){
		 			$con = mysqli_connect("localhost","root","","new5");
		 
		 
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	

					$sql= "DELETE FROM `productm` WHERE `id` = '".$_GET["id"]."'";
				    
				  if(mysqli_query($con,$sql))
					{
						echo "file Deleted";
					  	header('Location:viweStoreM.php.');

					  
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
	 			}
			?>		
					

</html>