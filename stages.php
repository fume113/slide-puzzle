<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stages Set</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container-fluid">
    <a href="index.html"><i class="bi bi-arrow-left-square-fill icon"></i></a>
  </div>
  <div class="container bg-image">
    <h1>Pilih Gambar Pahlawan</h1>
    <div class="button-container" id="buttonContainer">
      <?php
      // Array untuk nama gambar pahlawan dan label tombol
      $names = array(
        "gambar1" => "Bung Tomo",
        "gambar2" => "Dr. Tjipto Mangoenkoesoemo",
        "gambar3" => "Tjoet Nyak Meutia",
        "gambar4" => "Dewi Sartika",
        "gambar5" => "Pangeran Diponegoro",
        "gambar6" => "KH Fakhruddin",
        "gambar7" => "Dr. (H.C.) Drs. H. Mohammad Hatta",
        "gambar8" => "Raden Soedirman",
        "gambar9" => "Ahmad Yani",
        "gambar10" => "R.A Kartini",
        "gambar11" => "Ki Hadjar Dewantara",
        "gambar12" => "Martha Christina Tiahahu",
        "gambar13" => "Nyai Ageng Serang",
        "gambar14" => "Kapitan Pattimura",
        "gambar15" => "Ir. H. Soekarno",
        "gambar16" => "Soepomo",
        "gambar17" => "Soetan Sjahrir",
        "gambar18" => "Tan Malaka",
        "gambar19" => "Tjoet Nyak Dhin",
        "gambar20" => "Tuanku Imam Bonjol"
      );

      // Membuat tombol untuk setiap gambar
      foreach ($names as $index => $name) {
        $indexNumber = substr($index, 6); // Extract the number from the index
        $indexText = ucfirst(str_replace('_', ' ', $indexNumber)); // Replace underscores with spaces and capitalize the first letter
        // Mengecek apakah cookie pahlawan sudah ada
        if (isset($_COOKIE['pahlawan' . $indexNumber])) {
          $selectedHero = $_COOKIE['pahlawan' . $indexNumber];
        } else {
          $selectedHero = ""; // Set default jika cookie belum ada
        }
        echo '<a class="button-stages" href="puzzle.html?name=' . $index . '" data-name="' . $name . '"';
        // Menandai tombol yang dipilih dengan memberikan kelas aktif
        if ($name == $selectedHero) {
          echo '>' . $name . '</a>';
        } else {
          echo '>Gambar ' . $indexNumber . '</a>';
        }

        // Create cookie when button is clicked
        echo '<script>
          var button' . $index . ' = document.querySelector(\'[data-name="' . $name . '"]\');
          button' . $index . '.addEventListener(\'click\', function() {
            document.cookie = "pahlawan' . $indexNumber . '=' . $name . '";
          });
        </script>';
      }
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    var buttons = document.querySelectorAll('.button-container button');
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        var name = this.getAttribute('data-name');
      });
    });
  </script>
</body>

</html>