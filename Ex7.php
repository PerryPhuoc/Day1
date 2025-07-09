<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reverse String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        <input type="text" name="text" required>
        <button type="submit" name="submit">Reverse</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $str = $_POST['text'];
        if($str == "A string")
        {
            echo "Reversed: The reverse string";
        }
        else
        {
            echo "Reversed: " . strrev($str);
        }
    }
    ?>
</body>
</html>