<?php
include_once ("database.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $result = $db->updateRow("UPDATE products SET name=?,description=?,price=? WHERE prod_id=?",
        array($name,$description,$price,$id));
    header("Location: product.php");
}
?>
<?php
$id = $_GET['id'];

$res = $db->getRow("SELECT * FROM products WHERE prod_id=?",array($id));
$name = $res['name'];
$description = $res['description'];
$price = $res['price'];
?>
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
    <title>Edit Data</title>
</head>

<body>
<div class="container">
    <div class="row">
       <div class="col-xs-12">
<h1><i><a href="product.php">Go To Product</a></i></h1>

       </div>
<form name="form1" method="post" action="edit.php">
  <div class="col-xs-12">
          <div class="col-xs-6"><h1> Name</h1></div>
            <div class="col-xs-6"><h1><input type="text" name="name" value="<?php echo $name;?>" required></h1></div>
  </div>

    <div class="col-xs-12">
        <div class="col-xs-6"><h1>  description </h1></div>
        <div class="col-xs-6"><h1> <input type="text" name="description" value="<?php echo $description;?>" required ></h1></div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6"><h1> price </h1></div>
        <div class="col-xs-6"><h1><input type="text" name="price" value="<?php echo $price ;?>"></h1></div>
    </div>

    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    <div class="col-xs-12">
              <h1> <input type="submit" name="update" value="Update" class="btn btn-danger"></h1>
    </div>

</form>
    </div>
</div>
<script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

