<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Count Vowels</title>
</head>
<body>
    <h2>Count Vowels in a String</h2>
    <form method="post">
        <input type="text" name="text" required>
        <button type="submit" name="submit">Count</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $str = strtolower($_POST['text']);
        $count = preg_match_all('/[aeiou]/', $str);
        echo "Number of vowels: $count";
    }
    ?>
</body>
</html>
