<?php

try{
  $db = new PDO("sqlite:".__DIR__."/database.db");
  //the code above tries to create an object from the pto class, connected to out database.
 $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  //if there is an issue an exception is thrown in the code inside a catch book is executed.
  //inside catch block the variable e will contain the details about the exception.
  
 echo "Unable to connect";
  exit;
  //the message above is displayed and our code exits
}

try {
	$results = $db->query("SELECT title, category FROM Media");
	//code above is trying to run a query agaisnt the database.
	echo "Retrieved Results";
} catch (Exception $e) {
	echo "Unable to retrieve results";
	exit;
}