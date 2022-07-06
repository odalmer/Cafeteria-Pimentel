<?php include("db.php");
    ?>
<?php include("includes/head.php")?>
</head>
<?php include("includes/header.php")?>
<div class="content">
    <!-- <div class="search-wrapper">
        <input type="text" class="search" placeholder="Buscar" />
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col">
                <?php if(isset($_SESSION['message'])) {?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php session_unset(); }?>

                <div class="card card-body mt-5">
                    <h1 class="section-title m-0">Crea, actualiza, o elimina.</h1>
                    <form action="save_prd.php" method="POST">
                        <div class="form-group  m-3">
                            <input type="text" name="prd_title" class="form-control" placeholder="Titulo del producto"
                                autofocus>
                        </div>
                        <div class="form-group m-3">
                            <input type="text" name="prd_img" class="form-control" placeholder="Imagen del producto">
                        </div>
                        <div class="form-group m-3">
                            <input type="text" name="prd_descr" class="form-control"
                                placeholder="Descripción del producto">
                        </div>
                        <div class="form-group m-3">
                            <input type="text" name="prd_price" class="form-control" placeholder="Precio del producto">
                        </div>
                        <div class="form-group m-3">
                            <input type="text" name="prd_cat" class="form-control" placeholder="Categoria">
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-warning btn-block btn-submit" value="Guardar producto"
                                name="save_prd">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include("includes/footer.php")?>

    <!-- SCRIPTS -->
    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

    </html>