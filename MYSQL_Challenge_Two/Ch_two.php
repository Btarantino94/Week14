
<?php
require "./dbconnect_2.php";

?>

<!DOCTYPE html>
<html>
    <head>
          <!-- 
    Challenge 2: Create a MySQL table that holds a list of products (name, description, price, color). Create a form that allows users to select a color. When they submit the color choice, display all products that are that color. Bonus if you can dynamically generate the color choices in the form from all of the unique color options in the database. -->

         <link rel="stylesheet" type="text/css" href="./ch_two.css">

    </head>
    <h1>Challenge Two</h1>
    <body>

    <?php
      try {
        $sql = $db->Prepare("SELECT color FROM ch_two");
        $sql->execute();
        $result = $sql->fetchAll();
      }
      catch(PDOException $e) {
        echo $e->getMessage();
      }
      ?>
      <form action="Ch_two.php" method="post">
      <select name="color" >
        <?php
          foreach($result as $product) {
        ?> 
        <option value= <?= $product["color"] ?> ><?= $product["color"] ?> <!-- <img src="https://i1.wp.com/www.ifitshipitshere.com/wp-content/uploads/2014/04/2e47b48dffef396a0457935a7101aa32.jpg?w=800"> --></option>

        <?php
          }
        ?>
      </select>
      <button type="submit">Submit</button>
    </form>

    <?php
      try {
        $sql = $db->Prepare("SELECT name, description, price, color FROM ch_two WHERE color = :color GROUP BY color");
        $sql->execute(["color" => $_POST['color']]);
        $result = $sql->fetchAll();
      }
      catch(PDOException $e) {
        echo $e->getMessage();
      }
      // var_dump($result);
      echo "<pre>";
        var_dump($result);
      echo "</pre>";
      ?>


    </body>
</html>