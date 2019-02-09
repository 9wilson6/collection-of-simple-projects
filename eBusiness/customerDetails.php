
<?php if (isset($_REQUEST['id'])) {
       $id=$_REQUEST['id'];
      require_once "config.php";
      $query="SELECT * FROM customers WHERE id ='$id'";
      $results=mysqli_query($conn, $query);
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Customer <?php echo $_REQUEST['name']; ?></title>
</head>
<header class="heading">
    <div class="heading__text">Customer <?php echo $_REQUEST['name']; ?></div>
    
    <h6 class="heading__small"></h6>

</header>
<div class="table">
    <table width="100%">
    	<h2>Details</h2><hr>
    	<?php foreach ($results as $result) {
    		echo "ID:". $result['id']."<br>";
    		$name=$result['name'];
    		echo "Name:".$result['name']."<br>";
    		echo "Address:".$result['address']."<br>";
    		echo "Orders:".$result['orders']."<br>";
    		echo "Phone:".$result['phone']."<br>";
    		echo "Email:".$result['email']."<br> <br>";

    	} ?>
    	<hr> <br>
    	<?php 
 		$query="SELECT * FROM customers LEFT JOIN orders ON customers.name=orders.name where customers.name='$name'";
      $results=mysqli_query($conn, $query) or die(mysqli_error($conn));
    	 ?>
    	<h2>Car Orders</h2>
        <tr>
            <th>#</th>
            <th>Time Created</th>
            <th>Car</th>
            <th>Quantity</th>
            <!-- <th>Total Price</th> -->
        </tr>
        <?php 
	foreach ($results as $result) {?>
	 	<tr>
            <td><?php echo $result['id']; ?> </td>
            <td><?php echo $result['date']; ?></td>
            <td><?php echo $result['car']; ?></td>
            <!-- <td><?php #echo $result['price']; ?></td> -->
            <td><?php echo $result['quantity']; ?></td>
            <!-- <td><?php #echo $result['price']; ?></td> -->
        </tr>
	<?php }

         ?>
       
    </table>
    <!-- <div class="numberOfCars">Total Number of Customers: <?php #echo $count; ?></div> -->
    <div class="mb"></div>
    <a href="customerList.php" class="links--li">Customer List</a>
    <a href="carOrderList.php" class="links--li">Car Order List</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>