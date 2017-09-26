 <?php

try{
  $db = new PDO('mysql:host=localhost;dbname=Challenge_two', 'root', 'root');
  $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db-> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
  
 echo "Can't Connect";
  exit;

}
