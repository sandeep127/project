<?php
  session_start();
    if(isset($_POST["uroll"]))
      {
      $uname=$_POST["uname"];
      $uroll=$_POST["uroll"];
      $upass=$_POST["upass"];
      $con=mysqli_connect("localhost","root","","studentportal");
      $cmd="select * from register where uf='$uname' and uroll='$uroll' and upass='$upass'";
      $rst=mysqli_query($con,$cmd);
      $row=mysqli_fetch_array($rst);
      if($row==0)
        {
        echo"<h1><center><font color=red>Invalid user";
        }
      else
        {
        $_SESSION["userid"]=$uroll;
        // header("Location:User.php?id=$uid");
        echo"<h1><center>welcome ".$uname;
        }
      }
    else
      {
      header("Location:form.php");
      }
?>