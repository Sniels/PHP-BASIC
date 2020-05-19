<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var1 = 10;
        $var2 = 20;

        if ($var1 xor $var2) {
            echo "beide waar";
        } else {
            echo "beide niet waar";
        }
        if ($var1 && $var2) {
            echo "ze zijn allebei juist"
        } else {
            echo "ze zijn allebei onjuist"
        }
        if ($var1 || $var2) {
            echo "$var1 is juist"
        } else {
            echo "$var2 is juist"
        }
        if ($var1 ! $var2) {
            echo "$var1 is onjuist"
        } else {
            echo "$var1 is juist"
        }
    ?>
</body>
</html>