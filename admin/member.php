<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<?php include 'inc/koneksi.php' ?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Daftar Member</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data_member = mysqli_query($conn, "select * from member");
                while ($data = mysqli_fetch_array($data_member)) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_depan'] ?></td>
                        <td><?php echo $data['nama_belakang'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['telepon'] ?></td>
                        <td>
                            <a href="?act=edit&id=<?php echo $data['id_member'] ?>">Edit</a> |
                            <a href="?act=hapus&id=<?php echo $data['id_member'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table><br>
        <?php
        if (isset($_GET['act']) and $_GET['act'] == 'edit') {
            $isi = mysqli_fetch_array(mysqli_query($conn, "select * from member where id_member='$_GET[id]'")); { ?> 
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Data Member</h4>
                    <form class="form-horizontal style-form" action="?act=proses_edit" method="post">
                        <input type="hidden" name="id_member" value="<?php echo $isi['id_member']; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Depan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" value="<?php echo $isi['nama_depan'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Belakang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Belakang" value="<?php echo $isi['nama_belakang'] ?>" name="nama_belakang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Alamat" value="<?php echo $isi['alamat'] ?>" name="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Email" value="<?php echo $isi['email'] ?>" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Telepon" value="<?php echo $isi['telepon'] ?>" name="telepon">
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
      } ?>  
    </section>
</section>

<?php include 'inc/footer.php'; ?>