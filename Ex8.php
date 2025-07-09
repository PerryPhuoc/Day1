<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area of Circle</title>
</head>
<body>
    <h2>Calculate Area of a Circle</h2>
    <form method="post">
        <input type="number" name="radius" step="any" required>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $r = $_POST['radius'];
        $area = pi() * $r * $r;
        echo "Area: $area";
    }
    ?>
</body>
</html>