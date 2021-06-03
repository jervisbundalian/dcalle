<?php
    include 'widgets/header.php';
    include 'widgets/menu.php';
?>

<?php
    //first check if an id value was sent to this page via the get method (?=) usually from a link
    if(isset($_GET['id']))
    {
        //connect to the database
        include 'widgets/database.php';
        $id = $_GET['id'];

        //get the current record from the database based on the id get value
        try
        {
            $query = "select id, name, price, image, description from products where id = ? limit 0,1";
            $statement = $conn->prepare($query);

            //this is to bind our ? to id
            $statement->bindParam(1,$id);
            $statement->execute();

            //store retrieved record into associate array
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            extract($row);

            //individual values from the record
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $description = $row['description'];
        }
        catch(PDOException $exception)
        {
            die('ERROR: ' . $exception->getMessage());
        }
    }
    else
        {
            die('ERROR: Record not found');
        }
?>

<div class="product-wrapper">
    <div class="product-image">
        <img src=<?php echo htmlspecialchars($image, ENT_QUOTES); ?> alt="product" class="image">
    </div>

    <div class="product-info">
        <p class="name"><?php echo htmlspecialchars($name, ENT_QUOTES); ?></p>
        <p class="price">₱<?php echo htmlspecialchars($price, ENT_QUOTES); ?></p>
        <p class="description"><?php echo htmlspecialchars($description, ENT_QUOTES); ?></p>
        <a href='purchase.php' class='buy'>BUY</a>
    </div>
</div>

<?php include 'widgets/footer.php';?>