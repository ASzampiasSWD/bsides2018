<?php
session_start();
 if(isset($_SESSION['is_admin']) && $_COOKIE['admin'] == "true")
 {
	$is_admin = true;	 
 }
 else
 {
   echo 'Must have valid admin session and cookie.';
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
	<p>Congrats you got to the admin page!</p>
	<p>Flag #3: TempestDaveTheurer</p>
  </body>
</html>