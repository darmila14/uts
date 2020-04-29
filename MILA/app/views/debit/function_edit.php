<?php  
require("../../config/db.php");

if($_POST){
    $id             =(int) $_POST['id'];
    $nama       =trim($_POST['nama']);
    $jenis_kartu     =trim($_POST['jenis_kartu']);
    $debit       =trim($_POST['debit']);
  
    
    try{
        $sql='UPDATE debit SET 
                nama = :nama,
                jenis_kartu = :jenis_kartu,
                debit = :debit
            WHERE id = :id';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":nama",$nama);
        $stmt->bindParam(":jenis_kartu",$jenis_kartu);
        $stmt->bindParam(":debit",$debit);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?id=".$id."&status=updated");
            exit();
            }
        else{
            header("Location: read.php?id=".$id."&status=fail_update");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?id=".$id."&status=fail_update");
    exit();
}
?>