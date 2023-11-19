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

    <div class="container">
      <div class="row">
        <div class="col-md-6" style="text-align: left; padding-left: 5%;">
          <h3 style="text-align: left;">Educație</h3>
          <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="mb-3">
              <label for="facultatea" class="form-label">Facultatea:*</label>
              <input type="text" name="facultatea" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="institutia" class="form-label">Instituția:*</label>
              <input type="text" name="institutia" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="oras" class="form-label">Oraș:</label>
              <input type="text" name="oras" class="form-control">
            </div>
            <div class="mb-3">
              <label for="diploma_obtinuta" class="form-label">Diploma obținută:*</label>
              <input type="text" name="diploma_obtinuta" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="anul_inceperii" class="form-label">Anul inceperii:*</label>
              <input type="datetime" name="anul_inceperii" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="anul_absolvirii" class="form-label">Anul absolvirii:*</label>
              <input type="datetime" name="anul_absolvirii" class="form-control" required>
            </div>
            <button type="submit" value="Educație înregistrată" name="salveaza_info" class="btn btn-default">Înregistrează</button>
          </form>

          <?php
            if (@$_POST['salveaza_info'] == 'Educație înregistrată') {
              $facultatea = $_POST['facultatea'];
              $institutia = $_POST['institutia'];
              $oras = $_POST['oras'];
              $diplomaObtinuta = $_POST['diploma_obtinuta'];
              $anulInceperii = $_POST['anul_inceperii'];
              $anulAbsovirii = $_POST['anul_absolvirii'];

              
              $sqlInsert = "INSERT INTO educatie (facultatea, institutia, oras, diploma_obtinuta, anul_inceperii, anul_absolvirii)
                            VALUES ('$facultatea', '$institutia', '$oras', '$diplomaObtinuta', '$anulInceperii', '$anulAbsovirii');";
              // echo "Instructiune inserare: ".$sqlInsert;
              if(!mysqli_query($conn, $sqlInsert)) {
              echo "<br>Nu a functionat"; echo mysqli_error ( $conn );
              }
            }
          ?>

        </div>
        <div class="col-md-6" style="text-align: center; padding: 5% 0 0 2%">

          <table style="text-align: center;">
            <tr>
              <th>Facultatea</th>
              <th>Instituția</th>
              <th>Oraș</th>
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
              echo '<td>'.$row['oras'].'</td>';
              echo '<td>'.$row['diploma_obtinuta'].'</td>';
              echo '<td>'.$row['anul_inceperii'].'</td>';
              echo '<td>'.$row['anul_absolvirii'].'</td>';
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
