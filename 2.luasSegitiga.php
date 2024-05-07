<!DOCTYPE html>
<html>
<head>
    <title>Luas Segitiga</title>
</head>
<body>

<h2>Hitung Luas Segitiga</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Alas: <input type="number" name="alas" step="any" required><br><br>
    Tinggi: <input type="number" name="tinggi" step="any" required><br><br>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php
// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai alas dan tinggi dari form
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];

    // Hitung luas segitiga
    $luas = 0.5 * $alas * $tinggi;

    // Tampilkan hasil
    echo "<h3>Hasil:</h3>";
    echo "Alas: $alas <br>";
    echo "Tinggi: $tinggi <br>";
    echo "Luas Segitiga: $luas";
}
?>

</body>
</html>
