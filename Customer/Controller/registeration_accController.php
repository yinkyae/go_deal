<?php 


if (isset($_SESSION["user_account"]))
{

if($_SESSION["user_account"]!= null){

    $cusotmer_id= $_SESSION["user_account"];

    include "../../Model/model.php";
 
   $sql = $pdo->prepare(
     
     "SELECT * FROM m_customers WHERE id = :userId AND del_flg = 0"
 );
 
 $sql -> bindValue(":userId",$cusotmer_id);
 $sql -> execute();
 $accountresult = $sql->fetchAll(PDO::FETCH_ASSOC);
}
}else{
    $accountresult = null;
}
?>