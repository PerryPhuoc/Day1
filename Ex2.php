<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celsius to Fahrenheit</title>
</head>
<body>
    <h2>Convert Celsius to Fahrenheit</h2>
    <form method="post">
        <input type="number" name="celsius" step="any" required>
        <button type="submit" name="submit">Convert</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $c = $_POST['celsius'];
        $f = ($c * 9/5) + 32;
        echo "Fahrenheit: $f";
    }
    ?>
</body>
</html>