<?php
    header("location:cocina.php");
    
    include("pedido.php");
    include('includes/products.php');
    unset($_SESSION['id']);
    unset($_SESSION['amount']);    
?>