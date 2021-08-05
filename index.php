<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/cb61d7f3fb.js"
      crossorigin="anonymous" 
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <title>Cafeteria Pimentel -Cocina</title>

    <!-- CSS -->

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- my's css -->
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <?php include("db.php");
    ?>
    <div class="content">
      <header class="header">
        <div class="logo">
          <img
            src="https://colmado.pimentel.do/images/logo.png"
            width="60%"
            alt=""
          />
        </div>
      </header>
      <div class="search-wrapper">
        <input type="text" class="search" placeholder="Buscar" />
      </div>

      <div class="container">
        <h1 class="section-title">Estas en cocina</h1>
        <div class="wrapper">
          <div class="item">
            <img
              src="https://cdn0.iconfinder.com/data/icons/food-and-drinks-1-8/36/21-512.png"
              alt=""
            />
            <p>Sandwiches</p>
          </div>
          <div class="item">
            <img src="https://cdn3.iconfinder.com/data/icons/food-drink-fruit-meat-nut/200/Food_French_fries-512.png"
            alt="Imagen de frito con salami">
            <p>Platos especiales</p>
          </div>
        
          <div class="item">
            <img
              src="https://image.flaticon.com/icons/png/512/167/167247.png"
              alt=""
            />
            <p>Jugos y batidas</p>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="footer">
        <ul>
          <li>
            <a href=""><i class="fas fa-hamburger"></i> Cocina</a>
          </li>
          <li>
            <a href=""><i class="fas fa-user"></i> 
            Delante
            </a>
          </li>
          <li>
            <a href=""><i class="fas fa-hamburger"></i> 
            Buscar</a>

          </li>
          <li>
            <a href=""><i class="fas fa-shopping-cart"></i>
            Pedido</a>
          </li>
        </ul>
      </footer>
    </div>

    <!-- SCRIPTS -->
    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
