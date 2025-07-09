<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h2>Generate Fibonacci Sequence</h2>
    <form method="post">
        <input type="number" name="terms" required>
        <button type="submit" name="submit">Generate</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['terms'];
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        echo implode(", ", array_slice($fib, 0, $n));
    }
    ?>
</body>
</html>