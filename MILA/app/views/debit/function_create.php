<?php
require("../../config/db.php");

if($_POST){
    $nama       =trim($_POST['nama']);
    $jenis_kartu     =trim($_POST['jenis_kartu']);
    $debit       =trim($_POST['debit']);
  
   
    
    try{
        $sql='INSERT INTO debit(nama, jenis_kartu, debit)
              VALUES(:nama, :jenis_kartu, :debit)';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":nama",$nama);
        $stmt->bindParam(":jenis_kartu",$jenis_kartu);
        $stmt->bindParam(":debit",$debit);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?status=created");
            exit();
            }
        else{
            header("Location: read.php?status=fail_create");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?status=fail_create");
    exit();
}
?>