<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MY file PHP</title>
</head>
<body>
    <?php 
    $name = "Mr. A";
    $age = 20;
    $courses = array("Java", "C", "PHP");
    echo "Name: " . $name . ", age: ".$age. "<br/>3rd course is:" . $courses[2];
    ?>
</body>
</html>