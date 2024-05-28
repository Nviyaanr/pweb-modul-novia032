<!DOCTYPE html>
<html>

<head>
  <title>Kalkulator Luas Persegi Panjang</title>
</head>

<body>
  <h1>Kalkulator Luas Persegi Panjang</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $panjang * $lebar;
    echo "<p>Luas persegi panjang dengan panjang $panjang cm dan lebar $lebar cm adalah $luas cm².</p>";
  }
  ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Panjang (cm): <input type="number" name="panjang"><br>
    Lebar (cm): <input type="number" name="lebar"><br>
    <input type="submit" name="submit" value="Hitung Luas">
  </form>
</body>

</html>