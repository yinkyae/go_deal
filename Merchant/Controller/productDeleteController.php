<?php


$id = $_GET["id"];


    include "../Model/model.php";
    $sql = $pdo->prepare(
"UPDATE m_products SET del_flg = 1
WHERE id= :id"

    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    
    header("Location: ../View/Products/product.php");
    


?>