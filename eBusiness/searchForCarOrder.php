<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>Search For Car Order</title>
</head>

<body>
    <header class="heading">
        <div class="heading__text">Search For a car Order</div>
    </header>
    <main class="main">
        <section class="section__form">
            <form action="foundOrders.php" class="form">
                <label for="">Order #:</label> <input placeholder="8.." type="text" name="O_number" id=""><br><br>
                <button class="new__car--btn" type="submit" name="submit"><a href="foundOrders.php">Search For order</a></button>
            </form>
            <a href="carOrderList.php" class="links--li">Car Orders Available</a>
            <a href="index.php" class="links--li">Main Page</a>
        </section>
    </main>
</body>

</html>