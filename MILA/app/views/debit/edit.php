<?php include("atas.php") ?>
<?php 

$id = $_GET['id'] ? intval($_GET['id']) : 0;

try{
  $sql="SELECT * FROM debit WHERE id = :id LIMIT 1" ;
  $stmt=$db->prepare($sql);
  $stmt->bindParam(":id",$id, PDO::PARAM_INT);
  $stmt->execute();
}
catch(Exception $e){
  echo "Error " . $e->getMessage();
  exit(); 
}
if(!$stmt->rowCount()){
  header("Location: index.php");
  exit();
}
$debit=$stmt->fetch();


?>

<div class="col-lg-12">

    <h1>Form Edit Data Nasabah</h1>
    <form method="post" action="function_edit.php">
        <div class="form-group">
            <label class="control-label" for="inputSuccess">Nama Nasabah</label>
            <input type="text" name="nama" value="<?= $debit['nama'] ?>" class="form-control" required>
            <input type="hidden" name="id" value="<?= $debit['id'] ?>" class="form-control" required>
 
        </div>
        <div class="form-group">
            <label class="control-label" name="jenis_kartu">Jenis Kartu</label>
           
            <select id="heard" name="jenis_kartu" class="form-control" required="">
                <option value="" disable>--Pilih--</option>
                <?php 
                                        if($debit['jenis_kartu']=="Gold"){  ?>
                <option value="Gold" selected>Gold</option>
                <option value="Silver">Silver</option>
                <option value="Premium">Premium</option>

                <?php   
                                      } elseif($debit['jenis_kartu']=="Silver"){
                                     ?>

                <option value="Gold">Gold</option>
                <option value="Silver" selected>Silver</option>
                <option value="Premium">Premium</option>
                <?php   
                                      } elseif($debit['jenis_kartu']=="Premium"){
                                     ?>
                <option value="Gold">Gold</option>
                <option value="Silver">Silver</option>
                <option value="Premium" selected>Premium</option>
                <?php   
                                     } 
                                     ?>



            </select>

        </div>
        <div class="form-group">
            <label class="control-label" for="inputWarning">Jumlah Debit </label>
            <input type="number" value="<?= $debit['debit'] ?>" name="debit" class="form-control" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>

        </div>

    </form>

</div>
<?php include("bawah.php") ?>