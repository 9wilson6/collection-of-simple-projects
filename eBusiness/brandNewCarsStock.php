<?php 

require_once("config.php");
$query="SELECT * FROM new_cars";
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
    <title>The stock of brand new cars</title>
</head>
<header class="heading">
    <div class="heading__text">The stock of brand new cars</div>
    <h6 class="heading__small">
        <?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg']; } ?></h6>

</header>
<div class="table">
    <table width="100%">

        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Reference Number</th>
        </tr>
        <?php 
            foreach ($results as $result) {
                $id=$result['id'];
                ?>
                <tr>
            <td><?php echo $result['C_make']; ?></td>
            <td><?php echo $result['C_model']; ?></td>

            <td><a href="newCarDetails.php?id=<?php echo $id ?>"><?php echo $result['R_number']; ?></a></td>
        </tr>
           <?php }
         ?>
    </table>
    <div class="numberOfCars">Total Number of new cars: <?php echo $count; ?></div>
    <div class="mb"></div>
    <a href="brandNewCar.php" class="links--li">Create a Brand New Cars</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>