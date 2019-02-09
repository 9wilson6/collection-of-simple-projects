<?php 
if (isset($_POST['submit'])) {
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$email=$_POST["email"];
require 'config.php';

$query="INSERT INTO customers(name, address, phone, email)VALUES('$name', '$address', '$phone', '$email')";
$results=mysqli_query($conn, $query);

if ($results==1) {
$msg="Successfully created customer ". $name.".";
header("LOCATION:customerList.php?msg=$msg");
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
    <title>Create a new customer</title>
</head>

<body>
    <header class="heading">
        <div class="heading__text">Create a new customer</div>
    </header>
    <main class="main">
        <section class="section__form">
            <form action="creatNewCustomer.php" method="POST" class="form">
                <label for="">Name:</label> <input type="text" name="name" placeholder="Wei Li" id=""><br><br>

                <label for="">Address:</label> <input type="text" name="address" placeholder="Bruce Highway Rockham" id=""><br><br>

                <label for="">Phone Number:</label> <input type="text" name="phone" placeholder="0749309686" id=""><br><br>

                <label for="">Email Address:</label> <input type="email" name="email" placeholder="w.li@cqi.edu.au" id=""><br><br>


                <button class="new__car--btn" type="submit" name="submit">Create Customer</button>
            </form>
            <a href="customerList.php" class="links--li">Customer List</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>