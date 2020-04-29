<?php include("atas.php") ?>

<?php if (isset($_GET['status']) && $_GET['status']=="deleted") : ?>
<div class="alert alert-success alert-dismissible mt-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil Dihapus!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="fail_delete") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Tidak berhasil DIhapus!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="updated") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil DiUbah!</strong>
</div>
<?php endif ?>
<?php if (isset($_GET['status']) && $_GET['status']=="created") : ?>
<div class="alert alert-info alert-dismissible mt-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil Ditambahkan!</strong>
</div>
<?php endif ?>

<?php if (isset($_GET['status']) && $_GET['status']=="fail_update") : ?>
<div class="alert alert-danger alert-dismissible mt-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Tidak Berhasil DiUbah!</strong>
</div>
<?php endif ?>
<div class="col-lg-12">
<div class="row">
  <div class="col-md-12">
    <a href="create.php" class="btn btn-info btn-md"> <span class="fa fa-plus-square-o"></span> Tambahkan Data
       </a>
  </div>

</div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Data Debit Nasabah
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kartu</th>
                            <th>Jumlah Debit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1;
                        if($result->rowCount() > 0) : ?>
                        <?php foreach($result as $debit) : ?>
                        <tr class="info">
                            <td><?=$i++ ?></td>
                            <td><?=$debit['nama'] ?></td>
                            <td><?=$debit['jenis_kartu'] ?></td>
                            <td><?=$debit['debit'] ?></td>
                            <td>
                                <a title="detail"title="detail" class="btn btn-success"
                                    href="detail.php?id=<?=$debit['id']?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a title="edit" title="edit"class="btn btn-info" href="edit.php?id=<?=$debit['id']?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                <a type="button" title="hapus" class="btn btn-danger" data-toggle="modal"
                                    data-target=".bs-example-modal-sm-<?=$debit['id']?>">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php include("modal.php") ?>
                            </td>
                        </tr>
                        <?php endforeach ?>

                        <?php endif ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
</div>
<?php include("bawah.php") ?>