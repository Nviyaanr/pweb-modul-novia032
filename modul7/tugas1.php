<!DOCTYPE html>
<html>

<head>
  <title>Tanggalan</title>
</head>

<body>
  <?php
  // Format tanggal dan waktu standar
  echo "Tanggal dan Waktu (standar): " . date("m-F-Y, g:i:s a") . "<br>";
  // Format tanggal dan waktu panjang
  echo "Tanggal dan Waktu (panjang): " . date("l, j F Y, H:i:s") . "<br>";
  // Format tanggal dan waktu dalam format ISO 8601
  echo "Tanggal dan Waktu (ISO 8601): " . date("c") . "<br>";
  ?>
</body>

</html>