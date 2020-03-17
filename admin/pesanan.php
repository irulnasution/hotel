<?php $page='Pesanan' ?>
<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<?php include 'inc/koneksi.php' ?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Daftar Pesanan</h3>
        <a href="?act=tambah" class="btn btn-theme pull-left">+ Tambah Pesanan</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Member</th>
                    <th scope="col">ID Kamar</th>
                    <th scope="col">Tgl. Masuk</th>
                    <th scope="col">Tgl. Keluar</th>
                    <th scope="col">Jml. Kamar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data_pesanan = mysqli_query($conn, "select * from pesanan");
                while ($data = mysqli_fetch_array($data_pesanan)) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['id_member'] ?></td>
                        <td><?php echo $data['id_kamar'] ?></td>
                        <td><?php echo $data['tanggal_masuk'] ?></td>
                        <td><?php echo $data['tanggal_keluar'] ?></td>
                        <td><?php echo $data['jumlah_kamar'] ?></td>
                        <td>
                            <a href="?act=edit&id=<?php echo $data['id_pesanan'] ?>">Edit</a> |
                            <a href="?act=hapus&id=<?php echo $data['id_pesanan'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table><br>
        <?php
        if (isset($_GET['act']) and $_GET['act'] == 'edit') {
            $isi = mysqli_fetch_array(mysqli_query($conn, "select * from pesanan where id_member='$_GET[id]'")); { ?> 
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Data Pesanan</h4>
                    <form class="form-horizontal style-form" action="?act=proses_edit" method="post">
                        <input type="hidden" name="id_member" value="<?php echo $isi['id_member']; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">ID Member</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ID Member" name="id_member" value="<?php echo $isi['id_member'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">ID Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ID Kamar" value="<?php echo $isi['id_kamar'] ?>" name="id_kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tgl. Masuk</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Tgl. <asuk" value="<?php echo $isi['tanggal_masuk'] ?>" name="tanggal_masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tgl. Keluar</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Tgl. Keluar" value="<?php echo $isi['tanggal_keluar'] ?>" name="tanggal_keluar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jml. Kamar</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Jml. Kamar" value="<?php echo $isi['jumlah_kamar'] ?>" name="jumlah_kamar">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-theme">
                    </form>
                </div>
            <?php } 
        } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_edit') {
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $telepon = $_POST['telepon'];
            $id = $_POST['id_member'];
            $update = mysqli_query($conn, "UPDATE member SET nama_depan='$nama_depan', nama_belakang='$nama_belakang',
            alamat='$alamat', email='$email', telepon='$telepon' WHERE id_member='$id'");
            if ($update) {
                echo "<script>            
                        window.location.href='member.php';
                    </script>";
            } else {
                echo "Data gagal diedit!";
            } 
      } elseif (isset($_GET['act']) and $_GET['act'] == 'hapus') {
          $hapus = mysqli_query($conn, "delete from member where id_member='$_GET[id]'");
          if ($hapus) {
              echo "<script>
                        window.location.href='member.php';
                    </script>";
          }
      }  elseif (isset($_GET['act']) and $_GET['act'] == 'tambah') { ?>
           <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Pesanan</h4>
                    <form class="form-horizontal style-form" action="?act=proses_tambah" method="post">
                        <input type="hidden" name="id_member" value="<?php echo $isi['id_member']; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">ID Member</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ID Member" name="id_member">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">ID Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="ID Kamar" name="id_kamar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tgl. Masuk</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Tgl. Masuk" name="tanggal_masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tgl. Keluar</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Tgl. Keluar" name="tanggal_keluar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jml. Kamar</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Jml. Kamar" name="jumlah_kamar">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Tambah" class="btn btn-theme">
                    </form>
                </div>
      <?php } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_tambah') {
            $insert = mysqli_query($conn, "INSERT INTO pesanan (id_member, id_kamar, tanggal_masuk,
            tanggal_keluar, jumlah_kamar) VALUEs ('$_POST[id_member]', '$_POST[id_kamar]', '$_POST[tanggal_masuk]',
            '$_POST[tanggal_keluar]', '$_POST[jumlah_kamar]')");
            if ($insert) {
                echo "<script>
                    window.location.href='pesanan.php';
                </script>";
            } else {
                echo "Data gagal ditambah";
            } 
      }?>  
    </section>
</section>
<?php include 'inc/footer.php' ?>
