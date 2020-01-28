<?php
/* Author: Amanda Szampias
/* Date: June 2, 2018
/* For: BSides CTF Competition 2018
*/

/* db_connect()
 * Create a Database Connection String
 * Return ConnectionString
 */
function db_connect() 
{
  // Define connection as a static variable, to avoid connecting more than once 
  static $connection;

  // Try and connect to the database, if a connection has not been established yet
  if(!isset($connection)) 
  {
    // Load configuration as an array. Use the actual location of your configuration file
	$config = parse_ini_file('config.ini');
    $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
  }

  // If connection was not successful, handle the error
  if($connection === false) 
  {
    // Handle error - notify administrator, log to a file, show an error screen, etc.
    return mysqli_connect_error(); 
  }
   return $connection;
}

function GetUser($username, $password)
{
  $conn = db_connect();
  # This line will allow for SQL Injection. Login = admin'#
  $sql = "SELECT user_id FROM User WHERE username = '" . $username . "' AND password = '" . $password . "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row["user_id"] != NULL)
  {
	  return $row["user_id"]; 
  }
  else
  {
	  return "DNE";
  }
}

function GetOrder($order_id, $field_item)
{
  $conn = db_connect();
  $sql = "SELECT " .  $field_item . " FROM Invoice WHERE order_id = " . $order_id;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result);
  return $row[0];
}

function GetAdmin($user_id)
{
  $conn = db_connect();
  # This line will allow for SQL Injection. Login = admin'#
  $sql = "SELECT is_admin FROM User WHERE user_id = " . $user_id;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row["is_admin"] != NULL)
  {
	  return $row["is_admin"]; 
  }
  else
  {
	  // Something went wrong, so will assume user_id is not an Admin.
	  return 0;
  }
}
?>