<?php

session_start();

   $brandId = $_SESSION["brand_id"];
   $brandP_searchText = $_POST["SearchBrand_product"];
 


   include "../Model/model.php";

   $sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE p_brand =:brandId AND p_title LIKE :searchText AND del_flg = 0"

   );

   $sql->bindValue(":searchText","%".$brandP_searchText."%");
   $sql->bindValue(":brandId",$brandId);
   $sql->execute();

  $brandP_searchResult = $sql->fetchAll(PDO::FETCH_ASSOC) ;


   echo json_encode($brandP_searchResult);



?>