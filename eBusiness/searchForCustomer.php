
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Search For Customer</title>
</head>

<body>
      <?php 
if (isset($_POST['submit'])) {
   $search=$_POST['search'];

   require("config.php");
   $query="SELECT * FROM customers WHERE name LIKE '$search%'";
   
   $results=mysqli_query($conn, $query)or die(mysqli_error($conn));
$count=mysqli_num_rows($results);
   ?>

    <header class="heading">
        <div class="heading__text">Customer Search Reasults</div>
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
<?php
die();
 }

 ?>
    <header class="heading">
        <div class="heading__text">Search For Customer</div>
    </header>
    <?php 
if (isset($_POST['submit'])) {
   $search=$_POST['search'];

   require("config.php");
   $query="SELECT * FROM customers WHERE name LIKE '$search%'";
   die($query);
   $results=mysqli_query($conn, $query)or die(mysqli_error($conn));
   die(print_r($results)) ;
}

 ?>
    <main class="main">
        <section class="section__form">
            <form action="searchForCustomer.php" method="POST" class="form">
                <label for="">Name:</label> <input placeholder="WEi Li" type="text" name="search" id=""><br><br>
                <button class="new__car--btn" type="submit" name="submit">Search For Customer</button>
            </form>
            <a href="customerList.php" class="links--li">The Stock of used Cars</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>