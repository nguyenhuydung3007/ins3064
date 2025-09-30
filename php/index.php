<?php
include "connection.php";
?>

<html lang="en">
<head>
    <title>Laptop Shop Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Laptop Data Form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand" placeholder="Enter brand">
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" class="form-control" name="model" placeholder="Enter model">
            </div>
            <div class="form-group">
                <label>Processor:</label>
                <input type="text" class="form-control" name="processor" placeholder="Enter processor">
            </div>
            <div class="form-group">
                <label>RAM:</label>
                <input type="text" class="form-control" name="ram" placeholder="Enter RAM size">
            </div>
            <div class="form-group">
                <label>Storage:</label>
                <input type="text" class="form-control" name="storage" placeholder="Enter storage">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="number" step="0.01" class="form-control" name="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>
</div>

<div class="col-lg-12">
    <h2>Laptop List</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $res = mysqli_query($link,"SELECT * FROM Laptops ORDER BY LaptopID ASC");
        while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row["LaptopID"]."</td>";
            echo "<td>".$row["Brand"]."</td>";
            echo "<td>".$row["Model"]."</td>";
            echo "<td>".$row["Processor"]."</td>";
            echo "<td>".$row["RAM"]."</td>";
            echo "<td>".$row["Storage"]."</td>";
            echo "<td>".$row["Price"]."</td>";
            echo "<td>".$row["Quantity"]."</td>";
            echo "<td><a href='edit.php?id=".$row["LaptopID"]."'><button type='button' class='btn btn-warning'>Edit</button></a></td>";
            echo "<td><a href='delete.php?id=".$row["LaptopID"]."'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<?php
// Xử lý Insert
if(isset($_POST["insert"])) {
    mysqli_query($link,"INSERT INTO Laptops (Brand, Model, Processor, RAM, Storage, Price, Quantity) 
                        VALUES ('$_POST[brand]', '$_POST[model]', '$_POST[processor]', '$_POST[ram]', '$_POST[storage]', '$_POST[price]', '$_POST[quantity]')");
    echo "<script type='text/javascript'>window.location=window.location.href;</script>";
}
?>
</html>
