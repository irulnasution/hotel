<?php $page='Kamar' ?>
<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<?php include 'inc/koneksi.php' ?>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Daftar Kamar</h3><br>
        <a href="?act=tambah" class="btn btn-theme pull-left">+ Tambah Kamar</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kamar</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $data_kamar = mysqli_query($conn, "select * from kamar");
                    while ($data = mysqli_fetch_array($data_kamar)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_kamar'] ?></td>
                            <td><?php echo $data['tipe_kamar'] ?></td>
                            <td><?php echo $data['deskripsi'] ?></td>
                            <td><?php echo $data['harga'] ?></td>
                            <td><?php echo $data['stok'] ?></td>
                            <td>
                                <a href="?act=edit&id=<?php echo $data['id_kamar'] ?>">Edit</a> |
                                <a href="?act=hapus&id=<?php echo $data['id_kamar'] ?>">Hapus</a>
                            </td>                             
                        </tr>
                <?php } ?>                
            </tbody>
        </table>        

        <?php
            if (isset($_GET['act']) and $_GET['act'] == 'tambah') { ?>
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Kamar</h4>
                    <form class="form-horizontal style-form" action="?act=proses_tambah" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Kamar" name="nama_kamar">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="col-sm-2 col-sm-2 control-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Tipe Kamar" name="tipe_kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="textarea" class="form-control" placeholder="Tambahkan Deskripsi" name="deskripsi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Harga" name="harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Stok Kamar" name="stok">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-theme">
                    </form>
                </div>
        <?php } elseif (isset($_GET['act']) and $_GET['act'] == 'edit') { 
                $isi = mysqli_fetch_array(mysqli_query($conn, "select * from kamar where id_kamar='$_GET[id]'")); { ?>
                  <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Data Kamar</h4>
                    <form class="form-horizontal style-form" action="?act=proses_edit" method="post">
                        <input type="hidden" name="id_kamar" value="<?php echo $isi['id_kamar'] ?>">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Kamar" name="nama_kamar" value="<?php echo $isi['nama_kamar']; ?>">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="col-sm-2 col-sm-2 control-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Tipe Kamar" name="tipe_kamar" value="<?php echo $isi['tipe_kamar']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="textarea" class="form-control" placeholder="Tambahkan Deskripsi" name="deskripsi" value="<?php echo $isi['deskripsi']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?php echo $isi['harga']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Stok Kamar" name="stok" value="<?php echo $isi['stok']; ?>">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-theme">
                    </form>
                </div>                  
        <?php } 
        } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_edit') {
            $update = mysqli_query($conn, "update kamar set nama_kamar='$_POST[nama_kamar]', tipe_kamar='$_POST[tipe_kamar]',
            deskripsi='$_POST[deskripsi]', stok='$_POST[stok]' where id_kamar='$_POST[id_kamar]'");

            if ($update) {
                echo "<script> 
                        window.location.href='kamar.php';
                      </script>";
            } else {
                echo "Data gagal diedit";
            }
        } elseif (isset($_GET['act']) and $_GET['act'] == 'hapus') {
            $delete = mysqli_query($conn, "DELETE from kamar WHERE id_kamar='$_GET[id]'");
            if ($delete) {
                echo "<script>
                    window.location.href='kamar.php';
                </script>";
            } else {
                echo "Data gagal dihapus";
            }
        } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_tambah') {
            $insert = mysqli_query($conn, "INSERT INTO kamar (nama_kamar, tipe_kamar, deskripsi,
            harga, gambar, stok) VALUEs ('$_POST[nama_kamar]', '$_POST[tipe_kamar]', '$_POST[deskripsi]',
            '$_POST[harga]', 'default.jpg', '$_POST[stok]')") or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>
                    window.location.href='kamar.php';
                </script>";
            } else {
                echo "Data gagal ditambah";
            }
        } ?>
      </section>
    </section>
    
<?php include 'inc/footer.php'; ?>
    
  