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

      // UPDATE - primul pas: conectare la DB, tabela educatie si luam inregistrarea/randul cu id-ul transmis prin $_GET
      $displayUpdateButton1 = false;

      if (!empty($_GET['edit_id'])) {
        // echo "A fost apasat pe editare pentru inregistrarea cu id-ul ".$_GET['edit_id'];

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
        $displayUpdateButton1 = true;
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

      // CREATE
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

      // DELETE
      if (!empty($_GET['delete_id'])) {
        // echo "S-a sters inregistrarea cu id-ul ".$_GET['delete_id'];

        $deleteId = $_GET['delete_id'];

        $sqlDelete = "DELETE FROM educatie WHERE id='$deleteId'";
        $result = mysqli_query($conn, $sqlDelete) or die(mysql_error());

      }
    ?>

    <?php
    // CRUD experinta profesionala
    // UPDATE - primul pas
    $displayUpdateButton2 = false;

    if (!empty($_GET['edit_id2'])) {

      $updateId = $_GET['edit_id2'];
      $sqlReadOnUpdate = "SELECT * FROM experienta_profesionala WHERE id='$updateId'";
      $result = mysqli_query($conn, $sqlReadOnUpdate) or die(mysql_error());

      $row = mysqli_fetch_assoc($result);
      
      $id = $row['id'];
      $firma = $row['firma'];
      $pozitia_ocupata = $row['pozitia_ocupata'];
      $oras = $row['oras'];
      $anulStart = $row['anul_start'];
      $anulIncheierii = $row['anul_incheierii'];
      $displayUpdateButton2 = true;
    }

    // UPDATE - al doilea pas
    if (@$_POST['actualizeaza_info2'] == 'Actualizeaza') {

      $id = $_POST['id'];
      $firma = $_POST['firma'];
      $pozitia_ocupata = $_POST['pozitia_ocupata'];
      $oras = $_POST['oras'];
      $anulStart = $_POST['anul_start'];
      $anulIncheierii = $_POST['anul_incheierii'];

      $sqlUpdate = "UPDATE experienta_profesionala SET
                      firma = '$firma',
                      pozitia_ocupata = '$pozitia_ocupata',
                      oras = '$oras',
                      anul_start = '$anulStart',
                      anul_incheierii = '$anulIncheierii'
                      WHERE id='$id'";
      
      $result = mysqli_query($conn, $sqlUpdate) or die(mysql_error());
    }

    // CREATE
    if (@$_POST['salveaza_info2'] == 'Trimite') {
      $firma = $_POST['firma'];
      $pozitia_ocupata = $_POST['pozitia_ocupata'];
      $oras = $_POST['oras'];
      $anulStart = $_POST['anul_start'];
      $anulIncheierii = $_POST['anul_incheierii'];

      
      $sqlInsert = "INSERT INTO experienta_profesionala (firma, pozitia_ocupata, oras, anul_start, anul_incheierii)
                    VALUES ('$firma', '$pozitia_ocupata', '$oras', '$anulStart', '$anulIncheierii');";
      if(!mysqli_query($conn, $sqlInsert)) {
      echo "<br>Nu a functionat"; echo mysqli_error ( $conn );
      }
    }

    // DELETE
    if (!empty($_GET['delete_id2'])) {

      $deleteId = $_GET['delete_id2'];

      $sqlDelete = "DELETE FROM experienta_profesionala WHERE id='$deleteId'";
      $result = mysqli_query($conn, $sqlDelete) or die(mysql_error());
    }
    ?> 

    <div class="container">
      <div class="row">
        <div class="col-md-6" style="text-align: left; padding: 2% 0 0 5%;">
          <h3 style="text-align: left;">Educație</h3>
          <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id="educatieForm">
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

            <?php if (!$displayUpdateButton1): ?>
            <input type="submit" value="Trimite" name="salveaza_info"
              style="align-items: center; background-color: #fee6e3; border: 1px solid #111; border-radius: 8px;">
            <?php endif; ?>

            <?php if ($displayUpdateButton1): ?>
            <input type="submit" value="Actualizeaza" name="actualizeaza_info" id="actualizeaza_info_educatie"
              style="align-items: center; background-color: #fee6e3; border: 1px solid #111; border-radius: 8px;">  
            <?php endif; ?>
          </form>
          <br>
          <br>
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

      <div class="row">
        <div class="col-md-6" style="text-align: left; padding-left: 5%;">
          <h3 style="text-align: left;">Experiență Profesională</h3>
          <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="hidden" name="id" value="<?=@$id?>">

            <div class="mb-3">
              <label for="firma" class="form-label">Firma:*</label>
              <input type="text" name="firma" class="form-control" value="<?php echo @$firma?>" required>
            </div>

            <div class="mb-3">
              <label for="pozitia_ocupata" class="form-label">Poziția ocupată:*</label>
              <input type="text" name="pozitia_ocupata" class="form-control" value="<?=@$pozitia_ocupata?>" required>
            </div>

            <div class="mb-3">
              <label for="oras" class="form-label">Oraș:*</label>
              <input type="text" name="oras" class="form-control" value="<?=@$oras?>" required>
            </div>

            <div class="mb-3">
              <label for="anul_start" class="form-label">Anul începerii:*</label>
              <input type="datetime" name="anul_start" class="form-control" value="<?=@$anulStart?>" required>
            </div>

            <div class="mb-3">
              <label for="anul_incheierii" class="form-label">Anul încheierii:*</label>
              <input type="datetime" name="anul_incheierii" class="form-control" value="<?=@$anulIncheierii?>">
            </div>

            <?php if (!$displayUpdateButton2): ?>
            <input type="submit" value="Trimite" name="salveaza_info2" 
              style="align-items: center; background-color: #fee6e3; border: 1px solid #111; border-radius: 8px;">
            <?php endif; ?>

            <?php if ($displayUpdateButton2): ?>
            <input type="submit" value="Actualizeaza" name="actualizeaza_info2"
              style="align-items: center; background-color: #fee6e3; border: 1px solid #111; border-radius: 8px;">
            <?php endif; ?>

          </form>
          <br>
        </div>
        <div class="col-md-6" style="text-align: center; padding: 5% 0 0 2%">

          <table style="text-align: center;">
            <tr>
              <th>Firma</th>
              <th>Poziția ocupată</th>
              <th>Oraș</th>
              <th>Anul inceperii</th>
              <th>Anul încheierii</th>
            </tr>

          <?php
            
            $sql = "SELECT * FROM experienta_profesionala";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {

              echo '<tr>';
              echo '<td>'.$row['firma'].'</td>';
              echo '<td>'.$row['pozitia_ocupata'].'</td>';
              echo '<td>'.$row['oras'].'</td>';
              echo '<td>'.$row['anul_start'].'</td>';
              echo '<td>'.$row['anul_incheierii'].'</td>';
              echo '<td><a href="cv.php?edit_id2='.$row['id'].'"><i class="fa-solid fa-pen-to-square"></i></a></td>';
              echo '<td><a href="cv.php?delete_id2='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>';
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
