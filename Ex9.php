<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Check</title>
</head>
<body>
    <h2>Check if Number is Palindrome</h2>
    <form method="post">
        <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        echo ($num == strrev($num)) ? "Palindrome" : "Not Palindrome";
    }
    ?>
</body>
</html>