<?php 
 $customer = $_SESSION["user_account"] ;

 include "../Model/model.php";

 $user_account_sql = $pdo->prepare(
    "SELECT * FROM m_customers WHERE id = :userId AND del_flg = 0"
 );
 $user_account_sql->bindValue(":userId", $customer);
 $user_account_sql->execute();
 $user_account_result = $user_account_sql->fetchAll(PDO::FETCH_ASSOC);

?>