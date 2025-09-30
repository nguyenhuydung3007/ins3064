<?php
include "connection.php";

$id = $_GET["id"];

// Xóa sản phẩm
mysqli_query($link,"DELETE FROM Laptops WHERE LaptopID=$id");

// Reset lại ID liên tục
mysqli_query($link, "SET @count = 0");
mysqli_query($link, "UPDATE Laptops SET LaptopID = @count:=@count+1 ORDER BY LaptopID");
mysqli_query($link, "ALTER TABLE Laptops AUTO_INCREMENT = 1");

header("Location: index.php");
exit();
?>
