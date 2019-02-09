<?php  $count=""; ?>
<?php if (isset($_POST['submit'])) {

    $O_number=$_POST['O_number'];
    require_once("config.php");
    $query="SELECT * FROM orders where id like '%$O_number%'";
    $results=mysqli_query($conn, $query);
    $count=mysqli_num_rows($results);
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Find a Car Order</title>
</head>
<header class="heading">
    <div class="heading__text">List Of found Orders</div>


</header>
<div class="table">
    <table width="100%">
       <?php if ($count>0) {?>
          <tr>
            <th>Order #</th>
            <th>Customer</th>
            <th>Car</th>
            <th>Created At</th>
            <th>Unity Price</th>
            <th>Qty</th>
           
        </tr>
        <?php 
        foreach ($results as $result) {?>
           <tr>
            <td><?php echo $result['id']; ?> </td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['date'] ?></td>
            <td><?php echo $result['quantity'] ?></td>
            <td>1</td>
            <td>$100,000</td>

        </tr>
      <?php  }
         ?>
     <?php  }else{
        echo "No results found";
     } ?>
    </table>
    <div class="numberOfCars">Total Orders: 0</div>
    <div class="mb"></div>
    <a href="createNewCarOrder.php" class="links--li">Create a new car Order</a>
    <a href="index.php" class="links--li">Main Page</a>
</div>

<body>

</body>

</html>