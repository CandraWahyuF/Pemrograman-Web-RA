<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Informasi</title>
  </head>
  <body>
    <h1>Halaman Informasi Pendaftaran</h1>

    <?php 
    if( $_GET["nama"] || $_GET["nim"])
    {
        echo "Halo: ". $_GET['nama']. "<br />";
        echo "NIM Anda: ". $_GET["nim"]. "<br />";
    }
    ?>
  </body>
</html>
