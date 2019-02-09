<?php 
if (isset($_POST['submit'])) {
$R_number=$_POST["R_number"];
$C_make=$_POST["C_make"];
$C_model=$_POST["C_model"];
$D_type=$_POST["D_type"];
$B_Color=$_POST["B_Color"];
$transmission=$_POST["transmission"];
$C_engine=$_POST["C_engine"];
$F_type=$_POST["F_type"];
$D_number=$_POST["D_number"];
$S_number=$_POST["S_number"];
$price=$_POST["price"];
$Odometer=$_POST["Odometer"];
$Rego_no=$_POST["Rego_no"];
$Rego_exp=$_POST["Rego_exp"];
$S_history=$_POST["S_history"];
$V_id=$_POST["V_id"];
$C_history=$_POST["C_history"];
$C_number=$_POST["C_number"];
require_once("config.php");
$query="INSERT INTO used_cars(R_number,C_make,C_model,D_type,B_Color,transmission,C_engine,F_type,D_number,S_number,price,Odometer,Rego_no,Rego_exp, S_history,V_id,C_history,C_number) 
VALUES ('$R_number','$C_make','$C_model','$D_type','$B_Color','$transmission','$C_engine','$F_type','$D_number','$S_number','$price','$Odometer','$Rego_no','$Rego_exp', '$S_history','$V_id','$C_history','$C_number')";

$results=mysqli_query($conn,$query)or die(mysqli_error($conn));
   if ($results==1) {
    $msg="Successfully Created Car: ".$C_make." ". $C_model." Record";
       header("LOCATION:stcokOfUsedCars.php?msg=$msg");
   }else{
    echo "Failed";
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
    <title>Create a used Car</title>
</head>

<body>
    <header class="heading">
        <div class="heading__text">Create a used car</div>
    </header>
    <main class="main">
        <section class="section__form">
            <form action="createUsedCar.php" method="POST" class="form">
                <label for="">Reference Number:</label>
                 <input placeholder="U12345" type="text" name="R_number" id="">
                 <br><br>

                <label for="">Car Make:</label>
                 <input placeholder="Nissan" type="text" name="C_make" id="">
                 <br><br>

                <label for="">Car Model:</label>
                 <input placeholder="X-TRAIL" type="text" name="C_model" id="">
                 <br><br>

                <label for="">Drive Type:</label>
                 <input placeholder="4x4" type="text" name="D_type" id="">
                 <br><br>

                <label for="">Body Color:</label>
                 <input placeholder="White" type="text" name="B_Color" id="">
                 <br><br>

                <label for="">Transmission:</label>
                 <input placeholder="Automatic" type="text" name="transmission" id="">
                 <br><br>

                <label for="">Car Engine:</label>
                 <input placeholder="4 Cylinder" type="text" name="C_engine" id="">
                 <br><br>

                <label for="">Fuel type:</label>
                 <input placeholder="Petrol" type="text" name="F_type" id="">
                 <br><br>

                <label for="">Number of Doors:</label>
                 <input placeholder="5" type="text" name="D_number" id="">
                 <br><br>

                <label for="">Number of Seats:</label>
                 <input placeholder="5" type="text" name="S_number" id="">
                 <br><br>

                <label for="">Price:</label>
                 <input placeholder="21999" type="text" name="price" id="">
                 <br><br>

                <label for="">Odometer:</label>
                 <input placeholder="15000" type="text" name="Odometer" id="">
                 <br><br>

                <label for="">Rego No:</label> 
                <input placeholder="123ABC" type="text" name="Rego_no" id="">
                <br><br>

                <label for="">Rego Expiry:</label> 
                <input placeholder="2018" type="text" name="Rego_exp" id="">
                <br><br>

                <label for="">Service History:</label>
                 <input placeholder="This Car HAs Been........." type="text" name="S_history"
                    id="">
                    <br><br>
                <label for="">Vehicle Identification Number:</label>
                 <input placeholder="VIN123" type="text" name="V_id" id="">
                 <br><br>
                <label for="">Car History:</label>
                 <input placeholder="This car has ever been........." type="text"
                    name="C_history" id="">
                    <br><br>
                <label for="">Number of Cars:</label>
                 <input placeholder="2" type="text" name="C_number" id="">
                 <br><br>

                <button class="new__car--btn" name="submit" type="submit">Create a used car</button>
            </form>
            <a href="brandNewCarsStock.php" class="links--li">The Stock of used cars</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>