<?php 
$query="SELECT * FROM used_cars";
require_once("config.php");
$results=mysqli_query($conn, $query);
$count=mysqli_num_rows($results);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>The stock used cars</title>
</head>
<header class="heading">
    <div class="heading__text">The stock of used</div>
    <h6 class="heading__small"><?php if (isset($_REQUEST['msg'])) {
        echo $_REQUEST['msg'];
    } ?></h6>

</header>
<div class="table">
    <table width="100%">
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Reference Number</th>
        </tr>
        <?php 
        foreach ($results as $result) {?>
            <tr>
            <td><?php echo $result['C_make']; ?></td>
            <td><?php echo $result['C_model']; ?></td>
            <td><a href="#"> <?php echo $result['R_number']; ?></a></td>
        </tr>
      <?php  }
         ?>
    </table>
    <div class="numberOfCars">Total Number of used cars: <?php echo $count; ?></div>
    <div class="mb"></div>
    <a href="createUsedCar.php" class="links--li">Create a used Car</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>