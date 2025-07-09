<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Even or Odd</title>
</head>
<body>
    <h2>Check Even or Odd</h2>
    <form method="post">
        <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        echo ($num % 2 == 0) ? "Even" : "Odd";
    }
    ?>
</body>
</html>