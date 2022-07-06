<div class="row product d-flex justify-content-center mb-4">

    <div class="col-md-4 col-lg-3 prd-img">
        <!-- IMAGE -->
        <a href="product.php?id=<?php echo $product['prd_id']; ?>"><img src="<?php echo $product['prd_img']; ?>"
                alt=""></a>
    </div>

    <div class="col-md-6 col-lg-4 prd-info">
        <!-- Information -->

        <!-- title -->
        <a href="product.php?id=<?php echo $product['prd_id']; ?>">
            <p class="prd-title"><b><?php echo $product['prd_title']; ?></b></p>
        </a>
        <!-- Description -->
        <!-- <a href="product.php?id=<?//php echo $product['prd_id']; ?>"> -->
        <!-- <p><?php //echo $product['prd_descr']; ?></p> -->
        <!-- </a> -->
        <!-- price -->
        <p class="prd-price"><b>$<?php echo $product['prd_price']; ?></b></p>

        <div class="amount">
            <form action="">
                <button class=" amtBtn" type="submit">
                    <i class=" fas fa-minus amtIcon"></i>
                </button>
                <p class="amountTxt">1</p>
                <button class="amtBtn" type="submit">
                    <i class="fas fa-plus amtIcon"></i>
                </button>
            </form>


        </div>
    </div>


</div>