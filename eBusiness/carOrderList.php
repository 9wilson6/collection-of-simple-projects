<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>List of car Orders</title>
</head>
<header class="heading">
    <div class="heading__text">List of car orders</div>

    <h6 class="heading__small"><?php if (isset($_REQUEST['msg'])) {
       echo $_REQUEST['msg'];
    } ?></h6>

</header>
<div class="table">
     <?php
    require "config.php";
    $query="SELECT * FROM orders";
    $results=mysqli_query($conn, $query);
    $count=mysqli_num_rows($results);
     ?>
    <table width="100%">
        <tr>
            <th>Order#</th>
            <th>Customer</th>
            <th>Car</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach ($results as $result) {?>
             <tr>
            <td><?php echo $result['id'];
            $id=$result['id'];
             ?>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['car'] ?></td>
            <th><a href="delete.php?id=<?php echo $id ?>">Delete</a></th>
        </tr>
      <?php  }
         ?>
       
    </table>
  
    <div class="numberOfCars">Total Number of Customers: <?php echo $count; ?></div>
    <div class="mb"></div>
    <a href="createNewCarOrder.php" class="links--li">Create a car order</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>