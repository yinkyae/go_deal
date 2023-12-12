<?php


include "../../Model/model.php";

$sql = $pdo->prepare(

    
    " SELECT * FROM m_merchants INNER JOIN m_regions ON m_merchants.me_region = m_regions.id
    "
);

$sql->execute();
$merchantreg = $sql->fetchAll(PDO::FETCH_ASSOC);

// $sql = $pdo->prepare(

    
//     " SELECT * FROM m_merchants INNER JOIN m_townships ON m_merchants.me_township = m_townships.id
//     "
// );

// $sql->execute();
// $merchanttown = $sql->fetchAll(PDO::FETCH_ASSOC);

?>