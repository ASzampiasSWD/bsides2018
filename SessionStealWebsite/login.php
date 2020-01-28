<?php
session_start();
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
    <p><img src="images/bagels.png" alt="Betsy's Bagels" /></p>
	Admin-only login.
	<form action="upload_script.php" method="post">
	<table>
	<tr>
	  <td><label for="user">Username:</label></td>
	  <td><input type="text" id="user" name="user" size="20" /></td>
	</tr>
	<tr>
      <td><label for="pass">Password:</label></td>
      <td><input type="text" id="pass" name="pass" size="20" /></td>
	</tr>
	<tr>
	  <td></td>
      <td><input type="submit" name="op" value="Log in" /></td>
	</tr>
    </table>	
	</form>
	<hr />
	<h2>Copyright 2018 Betsy's Bagels</h2>
	<script type="text/javascript">
	  document.cookie = 'admin=false;';
	</script>
	<!-- Dear john, please fix this old logo! - your boss -->
  </body>
</html>