<?php
    include("db.php");
    if(isset($_POST['save_prd'])){
        $prd_title = $_POST['prd_title'];
        $prd_img = $_POST['prd_img'];
        $prd_price = $_POST['prd_price'];
        $prd_cat = $_POST['prd_cat'];
        $prd_descr = $_POST['prd_descr'];
        
        $query = "INSERT INTO products(prd_title, prd_img, prd_descr, prd_price, prd_cat) VALUES ('$prd_title', '$prd_img','$prd_descr', '$prd_price', '$prd_cat')";
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            die("Query failed");
        }

        $_SESSION["message"] = 'Producto guardado exitosamente';
        $_SESSION['message_type'] = 'success';
        header("Location: edit.php");
    }
?>