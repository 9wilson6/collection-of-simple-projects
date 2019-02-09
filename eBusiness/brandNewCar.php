<?php 
if (isset($_POST['submit'])) {
$R_number=$_POST['R_number'];
$C_make=$_POST['C_make'];
$C_model=$_POST['C_model'];
$D_type=$_POST['D_type'];
$B_type=$_POST['B_type'];
$B_Color=$_POST['B_Color'];
$transmission=$_POST['transmission'];
$C_engine=$_POST['C_engine'];
$F_type=$_POST['F_type'];
$D_number=$_POST['D_number'];
$S_number=$_POST['S_number'];
$price=$_POST['price'];
$warranty=$_POST['warranty'];
$E_warranty=$_POST['E_warranty'];
$A_package=$_POST['A_package'];
$N_cars=$_POST['N_cars'];
require_once("config.php");
$query="INSERT INTO new_cars(R_number,C_make,C_model,D_type,B_type,B_Color,transmission,C_engine, F_type, D_number, S_number, price, warranty,E_warranty,A_package,N_cars)VALUES('$R_number','$C_make','$C_model','$D_type','$B_type','$B_Color','$transmission','$C_engine', '$F_type', '$D_number', '$S_number', '$price', '$warranty','$E_warranty','$A_package','$N_cars')";
$results=mysqli_query($conn, $query);
if ($results==1) {
    $msg="Successfully created car : ".$C_make. " ".$C_model;
    header("LOCATION:brandNewCarsStock.php?msg=$msg");
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
    <title>Brand New Car</title>
</head>

<body>
    <header class="heading">
        <div class="heading__text">Create a brand new car</div>
    </header>
    <main class="main">
        <section class="section__form">
            <form action="brandNewCar.php" method="POST" class="form">
                <label for="">Reference Number:</label>
                 <input placeholder="N12345" type="text" name="R_number" id="">
                 <br><br>
                <label for="">Car Make:</label>
                 <input placeholder="Toyota" type="text" name="C_make" id="">
                 <br><br>
                <label for="">Car Model:</label>
                 <input placeholder="LAnd Cruiser 200" type="text" name="C_model" id="">
                 <br><br>

                <label for="">Drive Type:</label>
                 <input placeholder="4x4" type="text" name="D_type" id="">
                 <br><br>

                <label for="">Body Type:</label>
                 <input placeholder="White" type="text" name="B_type" id="">
                 <br><br>

                <label for="">Body Color:</label>
                 <input placeholder="White" type="text" name="B_Color" id="">
                 <br><br>

                <label for="">Transmission:</label> 
                <input placeholder="Automatic" type="text" name="transmission" id="">
                <br><br>

                <label for="">Car Engine:</label>
                 <input placeholder="V8" type="text" name="C_engine" id="">
                 <br><br>

                <label for="">Fuel type:</label> 
                <input placeholder="Diesel" type="text" name="F_type" id="">
                <br><br>

                <label for="">Number of Doors:</label>
                 <input placeholder="5" type="text" name="D_number" id="">
                 <br><br>

                <label for="">Number of Seats:</label>
                 <input placeholder="7" type="text" name="S_number" id="">
                 <br><br>

                <label for="">Price:</label>
                 <input placeholder="100000" type="text" name="price" id="">
                 <br><br>

                <label for="">Warranty:</label>
                 <input placeholder="3" type="text" name="warranty" id="">
                 <br><br>

                <label for="">Extending Warranty:</label>
                 <input placeholder="2" type="text" name="E_warranty" id="">
                 <br><br>

                <label for="">Road Side Assistance Package:</label>
                 <input type="text" placeholder="Toyota Road Side Combo---"
                    name="A_package" id="">
                    <br><br>

                <label for="">Number Of Cars:</label> 
                <input placeholder="20" type="text" name="N_cars" id="">
                <br><br>

                <button class="new__car--btn" name="submit" type="submit">Create a Brand New Car</button>
            </form>
            <a href="brandNewCarsStock.php" class="links--li">The Stock of Brand New Cars</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>