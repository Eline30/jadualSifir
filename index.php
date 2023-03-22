<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual Sifir</title>
</head>

<body>
    <form method="POST">
        <label for="number">Masukkan Nombor :</label>
        <input type="number" name="number"><br>
        <input type="submit" name="jana" value="Enter">
    </form>
    <br>
    <?php
    if (isset($_POST['jana'])) {
        $number = $_POST['number'];
        ?>
        <table border="1">
            <?php
            for ($a = 1; $a <= 12; $a++) {
                $sifir = $number * $a;
                echo "<tr><td>$a x $number</td><td>=</td><td>$sifir</td></tr>";
            }
            echo "</table>";
    }
    ?>
</body>

</html>