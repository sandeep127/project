<!doctype html>
<html>
	<head>
    <style>
      #head2{
        position:absolute;
        background-image: url(blue.jpg);
        width:100%;
        height:100px;
        top:120px;
        padding-top: 5px;
        padding-left: 150px;
      }
      #body2{
        padding-left: 250px;
        padding-top: 20px;
        position:absolute;
        height:400px;
        top:220px;
        width:1350px; 
      }
    </style>
		<link href="css/bootstrap.min.css." rel="stylesheet">
		<link href="customize.css." rel="stylesheet">
		<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="customize.js"></script>
  </head>
	
  <body>
    <div class="container-fluid">
      <img class="zind fix" src=".jpg" width="100%">
    </div>
    <div>
      <?php 
        include"form.php";
        include"form1.php";
        include"header.php";
        include"form2.php";
      ?>
    </div> 
    <div id="head2" class="container fluid">
      <h1 style="font-size:50px;">Contact Us</h2>
    </div>
    <div id="body2" class="container">
      <h2>Postal Address</h2>
        <div style="border-top:1px solid grey;padding:10px 0px 0px 0px;" class="container col-lg-8">
          Bundelkhand Institute of Engg & Technology<br />
          Kanpur Road NH-25, Jhansi-284128<br />
          Uttar Pradesh, INDIA<br />
          Phone: +91- 0510-2980211<br/>
          Fax: +91-0510-2980212</br>
          <h2> Email</h2></div>
          <div style="border-top:1px solid grey;padding:10px 0px 0px 20px;" class="container col-lg-8">
            <p>Admission Details : <a>admissions@bietjhs.ac.in</a></p>
            <p>Other Queries : <a>query@bietjhs.ac.in</a></p> 
            <br />
            Please indicate your query clearly in the subject line for faster processing of your queries. 
          </div>
        </div>
        <div class="container-fluid" style="padding-top:650px;">
        <?php 
          include"footer.php";
        ?>
      </div>


</body>
</html>  