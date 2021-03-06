<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Health+</title>

  <!-- CSS k files hai na bhau -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>




  <nav class="red " role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Health+</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
				<li><a href="#">Contact</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Register</a></li>
<li><a  href="#!" onclick = "dropdown()">Login<i class="material-icons right">arrow_drop_down</i></a>
<ul>

	

</ul>
</li>
		
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">About</a></li>
		
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class = "container">  
<h3 class="header brown-text">Registered Patient Details</h3>



<?php
   
        // Connecting to server
        $m = new MongoClient("127.0.0.1");
   
    $data  = "<table style='border:1px solid red;";
    $data .= "border-collapse:collapse' border='1px'>";
    $data .= "<thead>";
    $data .= "<tr>";
    $data .= "<th>Patient_id</th>";
    $data .= "<th>First_Name</th>";
    $data .= "<th>Last_Name</th>";
    $data .= "<th>Age</th>";
    $data .= "<th>Mobile_no</th>";
    $data .= "<th>Email</th>";

    $data .= "<th>Address</th>";
    $data .= "</tr>";
    $data .= "</thead>";
    $data .= "<tbody>";
 
    try{
        $db = $m->Hospital;
        $collection = $db->Patient;
        $cursor = $collection->find();
        foreach($cursor as $document){
            $data .= "<tr>";
            $data .= "<td>" . $document["P_id"] . "</td>";
	    $data .= "<td>" . $document["Pfirst_name"] . "</td>";
	    $data .= "<td>" . $document["Plast_name"] . "</td>";
            $data .= "<td>" . $document["Page"]."</td>";
            $data .= "<td>" . $document["Pmobile_no"]."</td>";
	    $data .= "<td>" . $document["Pemail"]."</td>";
            $data .= "<td>" . $document["Paddress"]."</td>";
            $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
        echo $data;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }

?>

</div>

          <footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project for 50 marks. Any kind of encouragement like providing extra marks or treats from teacher-guides would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="white-text" href="#!">Home</a></li>
            <li><a class="white-text" href="#!">About Us</a></li>
            <li><a class="white-text" href="#!">Register</a></li>
            <li><a class="white-text" href="#!">Contact</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">praffulpawar4u@gmail.com</a></li>
            <li><a class="white-text" href="#!">rathi.madhura001@gmail.com</a></li>
            <li><a class="white-text" href="#!">pharatekomal@gmail.com</a></li>
            <li><a class="white-text" href="#!">mail@rashmeet9@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="black-text text-lighten-3" >The Invincibles</a>
      </div>
    </div>
  </footer>
		
		

  <!--  Scripts k files hai na bhau-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
