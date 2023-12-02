<!DOCTYPE html>
<html>
  <head>
    <title>CV - Daniel Dandu</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/469dab0359.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <?php
      include 'config.php';
      include 'header.php';
    ?>
    <?php
      // UPDATE - primul pas: conectare la DB, tabela educatie si luam inregistrarea/randul cu id-ul transmis prin $_GET
      
      if (!empty($_GET['edit_id'])) {
        echo "A fost apasat pe editare pentru inregistrarea cu id-ul ".$_GET['edit_id'];

        $updateId = $_GET['edit_id'];
        $sqlReadOnUpdate = "SELECT * FROM educatie WHERE id='$updateId'";
        $result = mysqli_query($conn, $sqlReadOnUpdate) or die(mysql_error());

        $row = mysqli_fetch_assoc($result);
        
        $id = $row['id'];
        $facultatea = $row['facultatea'];
        $institutia = $row['institutia'];
        $diplomaObtinuta = $row['diploma_obtinuta'];
        $anulInceperii = $row['anul_inceperii'];
        $anulAbsovirii = $row['anul_absolvirii'];
      }

      // UPDATE - al doilea pas: daca s-a apasat butonul de actualizare => actualizam informatiile in DB pentru inregistrarea resp.
      if (@$_POST['actualizeaza_info'] == 'Actualizeaza') {
          
        // echo 'S-a apasat pe butonul de actualizare';

        $id = $_POST['id'];
        $facultatea = $_POST['facultatea'];
        $institutia = $_POST['institutia'];
        $diplomaObtinuta = $_POST['diploma_obtinuta'];
        $anulInceperii = $_POST['anul_inceperii'];
        $anulAbsovirii = $_POST['anul_absolvirii'];

        $sqlUpdate = "UPDATE educatie SET
                        facultatea = '$facultatea',
                        institutia = '$institutia',
                        diploma_obtinuta = '$diplomaObtinuta',
                        anul_inceperii = '$anulInceperii',
                        anul_absolvirii = '$anulAbsovirii'
                      WHERE id='$id'";
        
        $result = mysqli_query($conn, $sqlUpdate) or die(mysql_error());
      }
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6" style="text-align: left; padding-left: 5%;">
          <h3 style="text-align: left;">Educație</h3>
          <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="hidden" name="id" value="<?=@$id?>">

            <div class="mb-3">
              <label for="facultatea" class="form-label">Facultatea:*</label>
              <input type="text" name="facultatea" class="form-control" value="<?php echo @$facultatea?>" required>
            </div>

            <div class="mb-3">
              <label for="institutia" class="form-label">Instituția:*</label>
              <input type="text" name="institutia" class="form-control" value="<?=@$institutia?>" required>
            </div>

            <div class="mb-3">
              <label for="diploma_obtinuta" class="form-label">Diploma obținută:*</label>
              <input type="text" name="diploma_obtinuta" class="form-control" value="<?=@$diplomaObtinuta?>" required>
            </div>

            <div class="mb-3">
              <label for="anul_inceperii" class="form-label">Anul inceperii:*</label>
              <input type="datetime" name="anul_inceperii" class="form-control" value="<?=@$anulInceperii?>" required>
            </div>

            <div class="mb-3">
              <label for="anul_absolvirii" class="form-label">Anul absolvirii:*</label>
              <input type="datetime" name="anul_absolvirii" class="form-control" value="<?=@$anulAbsovirii?>" required>
            </div>

            <input type="submit" value="Trimite" name="salveaza_info">
            <input type="submit" value="Actualizeaza" name="actualizeaza_info">
          </form>

          <?php
            if (@$_POST['salveaza_info'] == 'Trimite') {
              $facultatea = $_POST['facultatea'];
              $institutia = $_POST['institutia'];
              $diplomaObtinuta = $_POST['diploma_obtinuta'];
              $anulInceperii = $_POST['anul_inceperii'];
              $anulAbsovirii = $_POST['anul_absolvirii'];

              
              $sqlInsert = "INSERT INTO educatie (facultatea, institutia, diploma_obtinuta, anul_inceperii, anul_absolvirii)
                            VALUES ('$facultatea', '$institutia', '$diplomaObtinuta', '$anulInceperii', '$anulAbsovirii');";
              // echo "Instructiune inserare: ".$sqlInsert;
              if(!mysqli_query($conn, $sqlInsert)) {
              echo "<br>Nu a functionat"; echo mysqli_error ( $conn );
              }
            }

            if (!empty($_GET['delete_id'])) {
              echo "S-a sters inregistrarea cu id-ul ".$_GET['delete_id'];

              $deleteId = $_GET['delete_id'];

              $sqlDelete = "DELETE FROM educatie WHERE id='$deleteId'";
              $result = mysqli_query($conn, $sqlDelete) or die(mysql_error());

            }
          ?>

        </div>
        <div class="col-md-6" style="text-align: center; padding: 5% 0 0 2%">

          <table style="text-align: center;">
            <tr>
              <th>Facultatea</th>
              <th>Instituția</th>
              <th>Diploma obținută</th>
              <th>Anul inceperii</th>
              <th>Anul absolvirii</th>
            </tr>

          <?php
            
            $sql = "SELECT * FROM educatie";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
              // print_r($row);
              // echo "id: " . $row["id"]. " - Denumire: " .$row['diploma_obtinuta']. "<br>";

              echo '<tr>';
              echo '<td>'.$row['facultatea'].'</td>';
              echo '<td>'.$row['institutia'].'</td>';
              echo '<td>'.$row['diploma_obtinuta'].'</td>';
              echo '<td>'.$row['anul_inceperii'].'</td>';
              echo '<td>'.$row['anul_absolvirii'].'</td>';
              echo '<td><a href="cv.php?edit_id='.$row['id'].'"><i class="fa-solid fa-pen-to-square"></i></a></td>';
              echo '<td><a href="cv.php?delete_id='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>';
              echo '</tr>';
            }

            echo '</table>';

          ?>
        </div>
      </div>
    </div>

    <?php include 'footer.php'?>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
