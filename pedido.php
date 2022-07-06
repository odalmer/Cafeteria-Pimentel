<?php include("db.php"); ?>
<?php include("includes/head.php") ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/products.css">
<link rel="stylesheet" href="css/pedido.css">
</head>
<?php include("includes/header.php") ?>
<div class="container">
    <h1 class="title-sec-prd">Orden</h1>
    <div class="wrapper ">
        <?php
        if(!isset($_SESSION['id']) && !isset($_SESSION['amount'])){
            $_SESSION['id'] = [];
            $_SESSION['amount'] = [];

        }

        if (isset($_POST['add_prd'])) {
            array_push($_SESSION['id'],  $_GET['id']);
            array_push($_SESSION['amount'],  $_GET['prd_amount']);
            header('refresh:0');
            // echo $_SESSION['amount'];

        }
        var_dump($_SESSION);
        
        foreach ($_SESSION['id'] as $key => $value) {
            $id = $_SESSION['id'];
            $query = "SELECT * FROM products WHERE prd_id = $value";
            $result = mysqli_query($conn, $query);

            $product = mysqli_fetch_array($result);
            echo $value;
            if (!$result) {
                die('QUERY FAILED');
            }

        ?>

        <?php include('includes/products.php');?>

        <?php }?>
        <div class="buy-btn">
            <a href="finalizar_pedido.php"><input type="submit" value="Comprar"></a>
        </div>
    </div>
</div>
<div class="spaceBetweenLastprdAndFooter">
    <!-- this is here only with separation purposes between the footer and the last product. If you know a better solution, send me a message ig: @odalmerp -->
</div>
</div>

<?php include("includes/footer.php"); ?>