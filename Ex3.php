<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <h2>Calculate Factorial</h2>
    <form method="post">
        <input type="number" name="num" required>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['num'];
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        echo "Factorial of $n is $fact";
    }
    ?>
</body>
</html>