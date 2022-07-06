<?php include("db.php"); ?>
<?php include("includes/head.php") ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/product.css">
</head>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE prd_id= $id";
    $result = mysqli_query($conn, $query);

    $product = mysqli_fetch_array($result);

    if (!$result) {
        die('QUERY FAILED');
    }

    // header("location: cocina.php");

?>

    <?php include("includes/header.php") ?>
    <div class="container">
        <div class="wrapper ">
            <div class="row product d-flex justify-content-center mb-4">
                <h1 class="prd-title"><b><?php echo $product['prd_title']; ?></b></h1>
                <img src="<?php echo $product['prd_img']; ?>" alt="">
                <div class="prd-info">
                    <p class="prd-descr"><?php echo $product['prd_descr']; ?></p>
                    <p class="prd-price"><b> RD$<?php echo $product['prd_price']; ?></b></p>
                    <form action="pedido.php?id=<?php echo $product['prd_id'];?>" method="POST" class="amount-form">
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <label class="">Cantidad:</label>
                                
                                <select name="prd_amount" class="amount-selector">
                                    <option selected value="1">1</option>
                                    <?php for ($i = 2; $i < 100; $i++) { ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <!-- <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option> -->
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-auto my-1 mt-5">
                                <button type="submit" name="add_prd"class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>

    </div>

    <!-- <div class="spaceBetweenLastprdAndFooter">
    <!-- this is here only with the separation purposes between the footer and the last product. If you know a better solution, send me a message to learn ig: @odalmerp -->
    </div>
    </div>
<?php } ?>
<?php include("includes/footer.php"); ?>