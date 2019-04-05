<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if It IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
    <title>Product Page</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class=" col-xs-6">
            <h1> <i><a href="card.php">Go To Card</a></i></h1>
        </div>
        <div class=" col-xs-6">
            <h1> <i><a href="AddRow.php">Add New Product</a></i></h1>
        </div>
        <div class="col-xs-12">
            <h1>Product List</h1>
        </div>
        <!-- For loop to show all product-->
        <?php
        include_once('database.php');
        $rows = $db->getRows("SELECT * FROM products ORDER BY name ASC", array());
        foreach ($rows as $row) {?>

            <div  class="col-lg-4 col-xs-6" >
                 <div id="id1">

                    <img   src='photos/<?php echo $row['photo']; ?>'  width="300px" height="225px">
              <div align="center">
                  <span>  Description  <br> </span><?php echo $row['description'];?><br>
                   <span>	Name          <br> </span><?php echo $row['name'];?><br>
                   <span>  Catogre       <br> </span><?php echo $row['catogre'];?><br>
                   <span>  Price         <br> </span><?php echo $row['price'];?>$<br>

                <form action="AddRowToCard.php" method="get">

                   <span>   Action        <br> </span>
                    <input type="submit" value="Add To card" class="btn btn-success" ><br>
                    <?php     echo "<td><h1><a href=\"edit.php?id=$row[prod_id]\">Edit</a></h1></td>";?>

                    <input type="hidden" name="id" value="<?php echo $row['prod_id'];?>">
                </form>
              </div>
                 </div>
            </div>

            <?php
        }
        ?>

        <!-- end for-->
    </div>
</div>
<script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>