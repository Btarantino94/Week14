
<?php
require "./dbconnect.php";

?>

<!DOCTYPE html>
<html>
    <head>

        <!-- Challenge 1: Create a MySQL table that holds a record for each state. Create an html form that has a select field with all of the US states. Generate the states using PHP/MySQL.
         -->
         
    </head>
    <h1>Challenge One (50 states plus PR)</h1>
    <body>
      <form>
    <label>States</label>
    <select>
        <?php
try
  {
  $sql = $db->Prepare("SELECT state_name FROM ch_one");
  $sql->execute();
  $result = $sql->fetchAll();
  }

catch(PDOException $e)
  {
  echo $e->getMessage();
  }

foreach($result as $name)
  {
?> 
          <option value ="<?php
  echo $name['state_name']; ?>" > <?php
  echo $name['state_name']; ?> </option>
          <?php
  }

?>
    </select>
    </form>
    </body>
</html>