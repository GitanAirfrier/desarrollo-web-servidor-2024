<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(1,3);
        switch ($n) {
            case 1:
                echo "<p>El número aleatorio es 1</p>";
                break;
            case 2:
                echo "<p>El número aleatorio es 2</p>";
                break;              
            default:
                echo "<p>El número aleatorio es 3</p>";
                break;
        }
        $res = match ($n) {
             1=> "<p>El número aleatorio es 1</p>",
             2=> "<p>El número aleatorio es 2</p>",
             default => "<p>El número aleatorio es 3</p>"
        };
        echo $res;
        $par = $n%2;        
        switch ($par) {
            case 0:
                echo "<p>El número aleatorio $n es par</p>";
                break;                         
            default:
                echo "<p>El número aleatorio es impar</p>";
                break;
        }
    ?>
</body>
</html>