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
    
    <?php include 'header.php'?>

    <div class="container">
      <div class="row">
        <div class="table col-md-6" style="text-align: left; padding-left: 5%;">
          <h3>Educație</h3>
          <table>
            <tr>
              <th>Facultatea</th>
              <th>Instituția</th>
              <th>Oraș</th>
              <th>Diploma obținută</th>
              <th>Anul inceperii</th>
              <th>Anul absolvirii</th>
            </tr>

          <?php 
            $listaEducatie = [
              [
                'facultatea' => 'ETcTi',
                'institutia' => 'UPT',
                'oras' => 'Timișoara',
                'diploma_obtinuta' => 'Inginer',
                'anul_inceperii' => 2019,
                'anul_absolvirii' => 2023
              ],
              [
                'facultatea' => 'ETcTi',
                'institutia' => 'UPT',
                'oras' => 'Timișoara',
                'diploma_obtinuta' => 'Master',
                'anul_inceperii' => 2023,
                'anul_absolvirii' => 'prezent'
              ]
            ];
            
            foreach ($listaEducatie as $inregistrareEducatie) {
              echo '<tr>';
              foreach ($inregistrareEducatie as $element) {
                echo '<td>'.$element.'</td>';
              }
              echo '<tr>';
            }

            echo '</table>';

          ?>


          <p style="font-size: 20px; font-family:Verdana; margin: 13% 0 2% 0;"><b>Educație</b></p>
          <p style="font-size: 18px; font-family:Verdana; margin-bottom: 0.5%;">
            - <a id="link" href="https://www.etc.upt.ro/" target="_blank">Facultatea de Electronică, Telecomunicații și Tehnologii Informaționale</a>
          </p>
          <p style="font-size: 16px; font-family:Verdana;">
            &nbsp&nbsp <a id="link" href="https://www.upt.ro/" target="_blank">Universitatea Politehnica Timișoara</a>- Timișoara, România<br>
            &nbsp&nbsp 09/2019 - Prezent
          </p>
          <p style="font-size: 18px; font-family:Verdana; margin-bottom: 0.5%;">
            - Biologie-Chimie
          </p>
          <p style="font-size: 16px; font-family:Verdana;">
            &nbsp&nbsp <a id="link" href="https://cniuliahasdeu.ro/" target="_blank">Liceul Iulia Hasdeu</a>- Lugoj, România<br>
            &nbsp&nbsp 09/2015 - 05/2019
          </p>
          <p style="font-size: 20px; font-family:Verdana; margin-bottom: 2%;"><b>Experiență Profesională</b></p>
          <p style="font-size: 18px; font-family:Verdana; margin-bottom: 0.5%;"> - Ospătar</p>
          <p style="font-size: 16px; font-family:Verdana;">
            &nbsp&nbsp Restaurant Leto, Novum by the Sea - Olimp, România<br>
            &nbsp&nbsp 06/2021 - 09/2021
          </p>
        </div>
        <div class="text col-md-6" style="text-align: left; padding-left: 10%;">
          <!-- <p style="font-size: 20px; font-family:Verdana; margin: 13% 0 2% 0%;"><b>Aptitudini</b></p>
          <p style="font-size: 16px; font-family:Verdana; margin-bottom: 3%;">
             - Muncă în echipă <br>
             - Comunicare <br>
             - Atenție la detalii <br>
          </p>
          <p style="font-size: 20px; font-family:Verdana; margin-bottom: 2%;"><b>Aptitudini Tehnice</b></p>
          <p style="font-size: 16px; font-family:Verdana;">
              - Python <br>
              - C <br>
              - HTML <br>
              - CSS <br>
          </p>
          <p style="font-size: 20px; font-family:Verdana; margin-bottom: 2%;"><b>Limbi Cunoscute</b></p>
          <p style="font-size: 16px; font-family:Verdana;">
              - Română <br>
              - Engleză <br>
          </p> -->
        </div>
      </div>
    </div>

    <?php include 'footer.php'?>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
