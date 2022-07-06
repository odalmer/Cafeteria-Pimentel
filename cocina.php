<!-- prd = product -->


<?php include("db.php");
?>
<?php include("includes/head.php");?>
<link rel="stylesheet" href="css/cocina.css">

</head>
<?php include("includes/header.php");?>
<div class="content">

    <div class="container">
        <h1 class="section-title">Estas en cocina.</h1>
        <div class="wrapper">
            <div class="item">
                <a href="sandwiches.php"> <img
                        src="https://cdn0.iconfinder.com/data/icons/food-and-drinks-1-8/36/21-512.png"
                        alt="Sandwiches imagen" /></a>
                <p>Sandwiches</p>
            </div>
            <div class="item">
                <a href="platos_especiales.php"><img
                        src="https://cdn3.iconfinder.com/data/icons/food-drink-fruit-meat-nut/200/Food_French_fries-512.png"
                        alt="Imagen de frito con salami"></a>

                <p>Platos especiales</p>
            </div>

            <div class="item">
                <a href="jugos y batidas.php"><img src="https://image.flaticon.com/icons/png/512/167/167247.png"
                        alt="jugos y batidas icono" /></a>

                <p>Jugos y batidas</p>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include("includes/footer.php")?>