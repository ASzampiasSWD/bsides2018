<?php
session_start();
 if(isset($_SESSION['user_id']))
 {
    $user_id = $_SESSION['user_id'];
 }
 else
 {
   echo 'Must login to view this page';
   header('Refresh: 3; URL="login.php');	
   exit();
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Betsy's Bagel Shop</title>
    <style type="text/css">
     
      body { background-color: #ccaa66;
             width: 750px;
             font: 12pt Arial, sans-serif;
             margin: 0 auto; }

      img { border: 0;
            margin-top: 15px; }
 
      h1 { font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
           font-size: 16pt;
           width: 750px;
           padding: 10px; }

      h2 { font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
           font-size: 10pt;
           width: 750px;
           margin: auto; 
           text-align: center; }

      hr { width: 675px;
           height: 8px; }
            
    </style>
  </head>
  <body>
    <img src="images/bagels.png" alt="Betsy's Bagels" />
    <h1>Food</h1>
    <ul>
      <li>Bagels</li>
      <li>Sandwiches</li>
      <li>Wraps</li>
    </ul>
    <h1>Beverages</h1>
    <ul>
      <li>Coffee</li>
      <li>Teas</li>
      <li>Specialty Coffee</li>
	  <li>Flag #1: LunarLanderHowardDelman</li>
    </ul>
    <hr />
    <h2>Copyright 2018 Betsy's Bagels</h2>
  </body>
</html>