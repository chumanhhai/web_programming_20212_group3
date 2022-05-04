<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Adminstration</title>
    <style>
      th {
        background-color: #aaa;
      }
    </style>
  </head>

  <body>
    <h1>Category Adminstration</h1>
    <table>
      <tr>
        <th>Cat ID</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <form action="ex1.php" method="POST">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "business_service";
        $connect = mysqli_connect($host, $username, $password);

        mysqli_select_db($connect, $database);
        if ($connect) {
          $table = "categories";
          $query = "SELECT * FROM categories";
          $results = mysqli_query($connect, $query);

          if (!$results) {
            $query_create = "CREATE TABLE categories (
              `Category ID` varchar(255),
              `Title` varchar(255),
              `Description` varchar(255),
              PRIMARY KEY (`Category ID`)
            )";
            if (!mysqli_query($connect, $query_create)) {
              print "Create table $table in database $database failed!<br>";
            }
          } else {
            while ($row = mysqli_fetch_row($results)) {
              print "<tr>";
              foreach ($row as $field) {
                print "<td>$field</td>";
              }
              print "</tr>";
            }
          }
        } else {
          print "Connection Failed!<br>";
        }
        ?>

        <tr>
          <td><input type="text" name="Id"></td>
          <td><input type="text" name="Title"></td>
          <td><input type="text" name="Description"></td>
        </tr>

        <tr>
          <td><input type="submit" value="Add Category"></td>
        </tr>
      </form>
    </table>

    <?php
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    if ( !empty($id) && !empty($title) && !empty($description) ) {
      $query_insert = "INSERT INTO $table VALUES ('$id', '$title', '$description')";
      if ( !mysqli_query($connect, $query_insert) ) {
        print "Insert failed<br>";
      } else {
        header("Refresh:0");
      }
    }
    ?>
  </body>

</html>