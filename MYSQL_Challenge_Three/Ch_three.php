
<?php
require "./dbconnect_3.php";

?>

<!DOCTYPE html>
<html>
    <head>
          

         <link rel="stylesheet" type="text/css" href="./ch_three.css">

    </head>
    <h1>Challenge Three</h1>
    <body>

    <?php
      if(isset ($_POST["name"])) {
        try {
          $sql = $db->Prepare("INSERT INTO `ch_three` (`name`, `description`, `price`, `color`) VALUES (:name, :description, :price, :color)");
          $sql->execute([
            "name" => $_POST['name'],
            "description" => $_POST['description'],
            "price" => $_POST['price'],
            "color" => $_POST['color']
          ]);
        }
        catch(PDOException $e) {
          echo $e->getMessage();
        }
      }

      ?>
      <form action="Ch_three.php" method="post">
      
         <label for="name">name</label>
        <input type="text" name="name">
         <label for="description">description</label>
        <input type="text" name="description">
         <label for="price">price</label> 
        <input type="text" name="price">
         <label for="color">color</label>
        <input type="text" name="color">
        
        <button type="submit"> Submit </button>
      
      </form>

    </body>
</html>