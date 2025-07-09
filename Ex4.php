<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Check</title>
</head>
<body>
    <h2>Check Prime Number</h2>
    <form method="post">
        <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['num'];
        $isPrime = $n > 1;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        echo $isPrime ? "Prime" : "Not Prime";
    }
    ?>
</body>
</html>