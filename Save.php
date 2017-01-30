<?php
  	$uf=$_POST["fname"];
  	$upass=$_POST["pass"];
  	$uroll=$_POST["roll"];
  	$uemail=$_POST["mail"];
  	$unum=$_POST["contact"];
  	if(!empty($uf&&$pass))
  		{
 		$con=mysqli_connect("localhost","root","","studentportal");
		$cmd="insert into register values('$uf','$upass','$uroll','$uemail','$unum')";
 		echo"<center><h2>";
 		if(mysqli_query($con,$cmd))
 			{
   			echo"Congratulations..!!!!  Registeration Completed..";
    		}
    	else
   			{ 
   			echo"mysqli_error($con)";
  			} 
    	}
    else 
   		echo "<h1> Enter the fields</h1>";
?>