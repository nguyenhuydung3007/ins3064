<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php 

    //Truyền đường link: http://ins3064.test/index.php?x=5&y=3
    $x = $_GET["x"];
    $y = $_GET["y"];
    echo "x: " . $x . "</br>";
    echo "x: " . $y . "</br>";
    echo "x/y: " .($x/$y) . "</br>";
    echo "x%y: " .($x%$y) . "</br>";
    echo "x++: " .($x++) . "</br>";
    echo "++y: " .(++$y) . "</br>";
    ?>

</body>
</html>
