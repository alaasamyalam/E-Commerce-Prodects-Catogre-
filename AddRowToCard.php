<?php
include_once('database.php');
$id=$_GET['id'];
$rows = $db->getRows("Select * from products where prod_id=".$id."", array());
foreach($rows as $row)
    $query="INSERT INTO card
        ( name, description, price,photo,catogre)
                     VALUES('". $row['name']."','".$row['description']."','".$row['price']."','".$row['photo']."','".$row['catogre']."')";
$db->myExec($query);
$db->phpAlert("Add Is Seccess");
include_once('product.php');
?>
