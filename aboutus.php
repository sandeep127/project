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
    </style>
		<link href="css/bootstrap.min.css." rel="stylesheet">
		<link href="customize.css." rel="stylesheet">
		<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="customize.js"></script>
  </head>
	
  <body>
   
    <div>
      <?php 
        include"form.php";
        include"form1.php";
        include"header.php";
        include"form2.php";
      ?>
    </div>
    <div class="container-fluid"> 
    <div id="head2" class="container fluid">
      <h1 style="font-size:50px;">At a Glance</h1>
    </div>
    <div class="container-fluid" style="border-top:1px solid blue;padding:40px;margin-top:220px;">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="container-fluid">
            <div class="col-lg-12"><h2>Foundation</h2><hr /></div>
            <div class="col-lg-8">
            Bundelkhand Institute of Engineering & Technology, Jhansi has proved to be the most preferred destination for aspiring technologists across the country. The institute consistently attracts the finest faculty and the best of students for its Bachelor's and Master's programmes. B.I.E.T has a rich tradition of pursuing excellence and has continually re-invented itself in terms of academic programmes and research infrastructure. Students are exposed to challenging research based academics and a host of sport, cultural and organizational activities on its vibrant campus. The presence of world class facilities, vigorous institute-industry collaboration programmes, interdisciplinary research collaborations and industrial training opportunities help students of B.I.E.T to excel and be ahead in the competitive professional environment. In the last twenty years, B.I.E.T has produced many illustrious professionals, whose contributions at national and international levels have been significant
          </div>
          <div class="col-lg-4"><img width=100% height=80% src="23.jpg"></div></div>
          <br />
          <div class="col-lg-12">
          <h2>Programmes and Oppurtunities</h2><hr />
          </div>
          <div class="col-lg-12">
            <p>The Institute combines pioneering research with top class education. An innovative curriculum allows the student flexibility in selecting courses and projects. Students, even at the undergraduate level, get to participate in ongoing research and technology development - an opportunity unprecedented in India. As a result, a vibrant undergraduate programme co-exists with a strong postgraduate programme.</p>
            <p>Recognizing that the goal of education is to develop a broad and humanistic outlook among students (and beyond), the Institute runs a unique human values programme at the undergraduate level. Regular faculty conducts the programme. Also, elements of the programme are made available to BIET postgraduate students, faculty and students at other universities and colleges, and any interested individual or organization.</p>
            <p>In sum, the Institute offers students a unique environment that promotes culture, sports, societal contributions, art, self-governance and human values.</p>
            It is also at the forefront of research that has the potential to make a major social impact.
          </div>
    </div>
      </div>
    </div>
  </div>
        <?php 
          include"footer.php";
        ?>


</body>
</html>  