<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $test1 = 10;
        $test2 = 6;
        if ($test1 == $test2) {
            echo "gelijk"
        }
        else ($test1 != $test2) {
            echo "ongelijk"
        }
        if ($test1 === $test2) {
            echo "identiek"
        }
        if ($test1 > $test2) {
            echo "test1 is groter dan test2"
        }
        if ($test1 < $test2) {
            echo "test1 is kleiner dan test2"
        }
        if ($test1 >= $test2) {
            echo "test1 is groter of gelijk aan test2"
        }
        if ($test1 <= $test2) {
            echo "test1 is kleiner of gelijk aan test2"
        }
            ?>
</body>
</html>