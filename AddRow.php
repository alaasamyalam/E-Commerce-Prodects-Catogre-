<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleaddrow.css">
    <!--[if It IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
    <title>Add New Product</title>
</head>

<body>
<div align="center">
    <table border="1" cellpadding="10" cellspacing="20" >
        <form  method="post" action="AddRow.php" enctype="multipart/form-data" action="file-upload.php">
            <tr><th>Enter name of product:</th> <td><input type="text" name="name" required="Yes" /></td></tr>

            <tr><th>Enter description of product: </th> <td><input type="text" name="descrip" required="Yes" /></td></tr>
            <tr><th>Enter price of product: </th> <td><input type="text" name="price" required="Yes"/></td></tr>
            <tr><th>Photo: </th> <td><input type="file" name="filePhoto" required="Yes"/></td></tr>
            <tr><th>Select Catogre Type:</th> <td>
                    <select name="catogre" style="font-size: 30px" o" >
                        <option value="Care">Care</option>
                        <option value="Phone">Phone</option>
                        <option value="Closes">Closes</option>
                        <option value="Beald">Beald</option>
                        <option value="Arm">Arm</option>
                    </select> </td></tr>
            <tr><th colspan="2"><input type="submit" name="btnSubmit" value="Save Item"  class="btn btn-success" /></th> </tr>
        </form>
    </table>
    <h3> <i><a href="product.php">Go To Product</a></i></h3>
</div>
</body>
</html>
<?php
include_once('database.php');
if(isset($_POST['btnSubmit']))
{
    move_uploaded_file($_FILES['filePhoto']['tmp_name'], "photos/".$_FILES['filePhoto']['name']);
    $query="INSERT INTO products
        ( name, description, price,photo,catogre)
                     VALUES('".$_POST['name']."','".$_POST['descrip']."','".$_POST['price']."','".$_FILES['filePhoto']['name']."','".$_POST['catogre']."')";
    $db->myExec($query);

    $db->phpAlert("Add Is Seccess");
    include_once('AddRow.php');
}

?>
