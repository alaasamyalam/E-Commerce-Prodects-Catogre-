<?php
//including the database connection file
include_once ("database.php");

//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result =$db->deleteRow("DELETE FROM card WHERE prod_id=?",array($id));
//redirecting to the display page (index.php in our case)
header("Location:card.php");
?>
