<!doctype html>
<html>
	<head>
		<link href="css/bootstrap.min.css." rel="stylesheet">
		<link href="customize.css." rel="stylesheet">
		<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="customize.js"></script>
  </head>
	<body onLoad="make()">
    <div class="container-fluid">
      <img class="zind fix" src="pic.jpg" width="100%">
    </div>
    <div>
      <?php 
        include"form.php";
        include"form1.php";
        include"header.php";
        include"form2.php";
      ?>
    </div>    
    <div id="head">
      <center>
        <h1 style="font-size:84px;font-weight:700;color:#0a8f74;font-family:times new roman;">BUNDELKHAND INSTITUTE </h1>
        <h2>OF</h2><h2>ENGINEERING AND TECHNOLOGY</h2>
        </br></br>
        <button type="button" data-target="#myModal3" data-toggle="modal" class="btn btn-primary">Tour View</button>
      </center>
    </div>
      <div class="container-fluid bod">
        <div class="row" style="margin:50px 50px;">
          <div class="col-lg-1"></div>
            <div class="col-lg-10" style="border:2px solid #ccc;padding-left:20px;">
              <div class="col-lg-7" style="margin-bottom:20px;">
                <h2>News</h2>
                <hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link1</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link2</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link3</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link4</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link5</a><hr />
                <br />
                <h2>Events</h2>
                <hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link1</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link2</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link3</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link4</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link5</a><hr />
              </div>
              <div class="col-lg-5" style="margin-bottom:20px;">
                <h2>Notices</h2>
                <hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link1</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link2</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link3</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link4</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link5</a><hr />
                <br />
                <h2>Careers</h2>
                <hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link1</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link2</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link3</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link4</a><hr />
                <a href="#" class="Dummy-Link" id="ind_link1">Dummy Link5</a><hr />
              
              </div>
              </div>
        <div class="col-lg-12">
        </div>
      </div></div>
    <?php 
      include"footer.php";
    ?>
	</body>
</html>