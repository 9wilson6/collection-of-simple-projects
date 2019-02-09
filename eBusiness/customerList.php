<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>List of customers</title>
</head>
<header class="heading">
    <div class="heading__text">List of customers</div>
    
    <h6 class="heading__small"><?php if (isset($_REQUEST['msg'])) {
       echo $_REQUEST['msg'];
    } ?></h6>
     <?php 
    require "config.php";
    $query="SELECT * FROM customers";
    $results=mysqli_query($conn, $query);
    $count=mysqli_num_rows($results);
     ?>
</header>
<div class="table">
    <table width="100%">

        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Orders</th>
            <th>Action</th>
        </tr>
        <?php
         foreach ($results as $result) {?>
             <tr>
            <td><?php echo $result['name'];
            $id=$result['id'];
             ?>
            <td><?php echo $result['address'] ?></td>
            <td><?php echo $result['orders'] ?></td>
            <th><a href="customerDetails.php?id=<?php echo $id ?>&&name=<?php echo $result['name'] ?>">Details</a></th>
        </tr>
      <?php  }
         ?>
    </table>
   
    <div class="numberOfCars">Total Number of Customers: <?php echo $count; ?></div>
    <div class="mb"></div>
    <a href="creatNewCustomer.php" class="links--li">Create a new customer</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>