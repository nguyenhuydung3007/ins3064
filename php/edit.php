
<?php
include "connection.php";
$id = $_GET["id"];

// Khai báo biến rỗng
$brand = $model = $processor = $ram = $storage = $price = $quantity = "";

// Lấy dữ liệu laptop theo ID
$res = mysqli_query($link, "SELECT * FROM Laptops WHERE LaptopID=$id");
while ($row = mysqli_fetch_array($res)) {
    $brand = $row["Brand"];
    $model = $row["Model"];
    $processor = $row["Processor"];
    $ram = $row["RAM"];
    $storage = $row["Storage"];
    $price = $row["Price"];
    $quantity = $row["Quantity"];
}
?>

<html lang="en">
<head>
    <title>Edit Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Edit Laptop Data</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand" value="<?php echo $brand; ?>">
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" class="form-control" name="model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label>Processor:</label>
                <input type="text" class="form-control" name="processor" value="<?php echo $processor; ?>">
            </div>
            <div class="form-group">
                <label>RAM:</label>
                <input type="text" class="form-control" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label>Storage:</label>
                <input type="text" class="form-control" name="storage" value="<?php echo $storage; ?>">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="number" step="0.01" class="form-control" name="price" value="<?php echo $price; ?>">
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" class="form-control" name="quantity" value="<?php echo $quantity; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>
</body>

<?php
if (isset($_POST["update"])) {
    mysqli_query($link, "UPDATE Laptops 
                         SET Brand='$_POST[brand]', 
                             Model='$_POST[model]', 
                             Processor='$_POST[processor]', 
                             RAM='$_POST[ram]', 
                             Storage='$_POST[storage]', 
                             Price='$_POST[price]', 
                             Quantity='$_POST[quantity]' 
                         WHERE LaptopID=$id");

    echo "<script type='text/javascript'>window.location='index.php';</script>";
}
?>
</html>

