<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Biru</title>
  <!-- Link ke Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    /* Gaya untuk membuat navbar biru */
    .navbar-invers {
      background-color: black; /* Warna latar belakang biru */
      border-color: black; /* Ubah border navbar menjadi biru */
    }

    .navbar-invers .navbar-brand,
    .navbar-invers .nav > li > a {
      color: grey; /* Warna teks menjadi putih */
    }

    .navbar-invers .nav > li > a:hover,
    .navbar-invers .navbar-brand:hover {
      background-color: darkgrey; /* Latar belakang lebih gelap saat hover */
      color: black; /* Pastikan warna teks tetap putih */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-invers">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">Absensi</a>
      </div>
      <ul class="nav navbar-nav">
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="datasiswa.php">Data Siswa</a> </li>
        <li> <a href="absensi.php">Rekapitulasi Absensi</a> </li>
        <li> <a href="scan.php">Scan Kartu</a> </li>
      </ul>
    </div>
  </nav>
</body>
</html>

