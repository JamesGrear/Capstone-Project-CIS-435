<?php

        $dataSourceName ='mysql:host=localhost;dbname=media_manager';
	   $username = 'libuser';
	   $password = 'book';
	   
	  try{
	   $db = new PDO($dataSourceName,$username,$password);
	  }
	  catch (PDOException $e)
	  {
	  	$error_msg = $e->getMessage();
		echo 'Database connect has encountered an error' . $error_msg;
		exit();
	  }
?>