<?php

try{
  $db = new PDO('mysql:host=localhost;dbname=Challenge_one', 'root', 'root');
  $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db-> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
  
 echo "Unable to connect";
  exit;
  //the message above is displayed and my code exits
}

// try {
// 	$results = $db->query("SELECT title, category FROM Media");
// 	//code above is trying to run a query agaisnt the database.
// 	echo "Retrieved Results";
// } catch (Exception $e) {
// 	echo "Unable to retrieve results";
// 	exit;
// }