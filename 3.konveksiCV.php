<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <h2>Konversi Suhu Celcius ke Fahrenheit</h2>
    <form method="post">
        Masukkan suhu dalam Celcius: <input type="text" name="celcius"><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    if(isset($_POST['submit'])) {
        $celcius = $_POST['celcius'];
        
        if(is_numeric($celcius)) {
            $fahrenheit = celsiusToFahrenheit($celcius);
            echo "<br>";
            echo "Suhu dalam Celcius: " . $celcius . " °C <br>";
            echo "Suhu dalam Fahrenheit: " . $fahrenheit . " °F";
        } else {
            echo "<br>";
            echo "Masukkan angka yang valid.";
        }
    }
    ?>
</body>
</html>
