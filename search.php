<?php include("db.php"); ?>
<?php include("includes/head.php") ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/products.css">
</head>
<?php include("includes/header.php") ?>
<div class="container">
    <h1 class="title-sec-prd"></h1>
    <div class="wrapper ">
        <?php
        if(isset($_POST['search'])){
            $prdTitle = $_POST['itemInput'];
            if($prdTitle == null){
                header("location: cocina.php");
            }
            $query = "SELECT * FROM products WHERE prd_title= '$prdTitle'";
            $result_prd = mysqli_query($conn, $query);
            while ($product = mysqli_fetch_array($result_prd)) { 
                include('includes/products.php');
            }
        } ?>
    </div>
</div>
<div class="spaceBetweenLastprdAndFooter">
    <!-- this is here only with the separation purposes between the footer and the last product. If you know a better solution, send me a message to learn ig: @odalmerp -->
</div>
</div>

<?php include("includes/footer.php"); ?>