<?php
session_start();
include 'functions.php';
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
	<p>Please type in an OrderID to see ItemID, UserID, and Card Carrier information.</p>
	<p>Order Page under contruction!</p>
	
	<form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
	  <select name="field_item">
		<option value="item_id">Item ID</option>
		<option value="user_id">User ID</option>
	    <option value="card_carrier">Card Carrier</option>
	  </select>
	  Enter Order ID: <input type="text" name="order_id" />
	  <input type="submit" id="submit" name="submit" value="Submit" />
	</form>
	<?php
	   if (isset($_POST['order_id']))
	   {
	     echo $_POST['field_item'] . " for OrderID " . $_POST['order_id'] . " is " . GetOrder($_POST['order_id'], $_POST['field_item'])[0];
	   }
	?>
  </body>
</html>