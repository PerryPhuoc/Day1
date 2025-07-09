<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangle Perimeter</title>
</head>
<body>
    <h2>Calculate Triangle Perimeter</h2>
    <form method="post">
        <input type="number" name="a" required placeholder="Side a">
        <input type="number" name="b" required placeholder="Side b">
        <input type="number" name="c" required placeholder="Side c">
        <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo "Perimeter: " . ($a + $b + $c);
    }
    ?>
</body>
</html>