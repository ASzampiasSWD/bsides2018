<?php
   session_start();
   unset($_SESSION['user_id']);
   unset($_SESSION['is_admin']);
   echo 'You have cleaned session';
   header('Refresh: 1; URL = login.php');
?>
