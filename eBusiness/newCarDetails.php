

<?php if (isset($_REQUEST['id'])) {
       $id=$_REQUEST['id'];
      require_once "config.php";
      $query="SELECT * FROM new_cars WHERE id ='$id'";
      $results=mysqli_query($conn, $query);
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Car  <?php echo $_REQUEST['id'];  ?> Details</title>
</head>
<header class="heading">
    <div class="heading__text">Car <?php echo $_REQUEST['id']; ?></div>
    
    <h6 class="heading__small"></h6>

</header>
<div class="table">
    <table width="100%">
    	<?php 
      $results=mysqli_query($conn, $query) or die(mysqli_error($conn));
    	 ?>
    	<h2>Car Orders</h2>
         <tr>
            <th>Reference Number</th>
            <th>Make</th>
            <th>Model</th>
            <th>Drive Type</th>
            <th>Colour</th>
            <th>Transmission</th>
            <th>Engine</th>
            <th>Fuel Type</th>
            <th>Seats</th>
            <th>No. of Cars</th>
            <th>Warranty</th>
            <th>Extending Warranty</th>
            <th>Road Side Assistance Package</th>
            <th>Price</th>
        </tr>
        <?php 
	foreach ($results as $result) {?>
	 	<tr>
           <td><?php echo $result['R_number']; ?></td>
            <td><?php echo $result['C_make']; ?> </td>
            <td><?php echo $result['C_model']; ?></td>
            <td><?php echo $result['D_type']; ?></td>
            <td><?php echo $result['B_Color']; ?></td>
            <td><?php echo $result['transmission']; ?></td>
            <td><?php echo $result['C_engine']; ?></td>
            <td><?php echo $result['F_type']; ?></td>
            <td><?php echo $result['S_number']; ?></td>
            <td><?php echo $result['N_cars']; ?></td>
            <td><?php echo $result['warranty']; ?></td>
            <td><?php echo $result['E_warranty']; ?></td>
            <td><?php echo $result['A_package']; ?></td>
            <td><?php echo $result['price']; ?></td>
            
        </tr>
	<?php }

         ?>
       
    </table>
    <!-- <div class="numberOfCars">Total Number of Customers: <?php #echo $count; ?></div> -->
    <div class="mb"></div>
    <a href="brandNewCar.php" class="links--li">Brand New Car List</a>
    
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>