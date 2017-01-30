<!doctype html>
<html>
    <head>
    <link href="css/bootstrap.min.css." rel="stylesheet">
		<link href="customize.css." rel="stylesheet">
		
		<script src="js/jquery.js"></script>
  		<script src="js/bootstrap.min.js"></script>
        <style type="text/css">
 
            body {font-family:Arial, Sans-Serif; background-color:#99C;}
 
            #container {width:300px; margin:0 auto;}
 
            /* Nicely lines up the labels. */
            form label {display:inline-block; width:140px;}
 
            /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:160px;}
 
            form .line {clear:both;}
            form .line.submit {text-align:right;}
 
        </style>
    </head>
    <body bgcolor="#0033FF">
        <div id="container">
       <center> <img src="logo.jpg"/></center>
           <center><b><marquee direction="right" onMouseOver="this.stop()"onmouseout="this.start()" scrollamount="5">Bundelkhand Institute of engineering and technology  </marquee></b>           <form>
                <h1><center>Create Login</center></h1>
                <div class="line"><label for="username">Username *: </label><input type="text" id="username" /></div>
                <div class="line"><label for="pwd">Password *: </label><input type="password" id="pwd" /></div>
                <!-- You may want to consider adding a "confirm" password box also -->
                <div class="line"><label for="surname">Surname *: </label><input type="text" id="surname" /></div>
                <div class="line"><label for="other_names">Other Names *: </label><input type="text" id="names" /></div>
                <div class="line"><label for="dob">Date of Birth *: </label><input type="text" id="dob" /></div>
                <div class="line"><label for="email">Email *: </label><input type="email" id="email" /></div>
                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <div class="line "><label for="tel">Telephone: </label><input type="text" id="tel" /></div>
                <div class="line"><label for="add">Address *: </label><input type="text" id="add" /></div>
                <div class="line"><label for="ptc">Post Code *: </label><input type="text" id="ptc" /></div>
                <div class="line submit"><button type="submit" value="Submit" class="btn btn-primary">Submit </button>
 <button type="reset" class="btn btn-primary">Reset</button></div>
               
            </form></center>
             <p align="right">Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
        </div>
        
    </body>
</html>
