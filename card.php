<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylecard.css">
    <!--[if It IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
    <title>Card Page</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12"><h1>Item Card</h1></div>
        <div class="col-xs-12"><h1> <i><a href="product.php">Go To Product</a></i></h1></div>

<div class="col-xs-12">
    <div id="container" align="center">
        <div id="main" align="center">

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Catogre</th>
            <th>Price</th>
            <th>Amount</th>
            <th>photo</th>
            <th>Action</th>
        </tr>
        <?php
        include_once('database.php');
        $rows = $db->getRows("SELECT *,count(*) as amount FROM card group by name ORDER BY name ASC", array());
        foreach ($rows as $row) {?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['catogre'];?></td>
                <td><?php echo $row['price'];?>$</td>
                <td><?php echo $row['amount'];?></td>
                <td><img src='photos/<?php echo $row['photo']; ?>' width="50" height="50"></td>
                <td> <?php echo  "<a href=\"delete.php?id=$row[prod_id]\"
		onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-danger'>Delete</a>" ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
        </div>
                </div>
            </div>
    </div>
    </div>
<script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

