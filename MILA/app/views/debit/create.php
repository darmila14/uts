<?php include("atas.php") ?>
<div class="col-lg-12">

    <h1>Form Tambah Data Nasabah</h1>
    <form method="post" action="function_create.php">
        <div class="form-group">
            <label class="control-label" for="inputSuccess">Nama Nasabah</label>
            <input type="text" name="nama" class="form-control"  required>
        </div>
        <div class="form-group">
            <label class="control-label" name="jenis_kartu" >Jenis Kartu</label>
            <select name="jenis_kartu" class="form-control" required>
                <option>Gold</option>
                <option>Silver</option>
                <option>Premium</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="inputWarning">Jumlah Debit </label>
            <input type="number" name="debit" class="form-control"required>
        </div>
        <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>

        </div>

    </form>

</div>
<?php include("bawah.php") ?>