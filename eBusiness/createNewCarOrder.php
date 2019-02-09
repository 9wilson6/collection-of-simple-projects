<?php 
if (isset($_POST['submit'])) {
require 'config.php';
$name=$_POST["name"];
$car=$_POST["car"];
$quantity=$_POST["quantity"];
$query="INSERT INTO orders(name, car, quantity)VALUES('$name', '$car', '$quantity')";
$results=mysqli_query($conn, $query);

if ($results==1) {
$msg="Successfully created the order for ". $name.".";
header("LOCATION:carOrderList.php?msg=$msg");
}else{
   echo "Failed...."; 
}
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Create a new car order</title>
</head>

<body>
    <header class="heading">
        <div class="heading__text">Create a new car order</div>
    </header>
    <main class="main">
        <section class="section__form">
            <form action="createNewCarOrder.php" method="POST" class="form">
                <label for="">Customer:</label> <input type="text" name="name" placeholder="Wei Li" id=""><br><br>

                <label for="">Car:</label> <input type="text" name="car" placeholder="Land Cruiser 200-$100000" id=""><br><br>

                <label for="">Quantity:</label> <input type="number" min="1" name="quantity" placeholder="1" id=""><br><br>




                <button class="new__car--btn" name="submit" type="submit">Create a car Order</button>
            </form>
            <a href="carOrderList.php" class="links--li">Car Order List</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>