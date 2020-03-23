<?php $page='Blog' ?>
<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<?php include 'inc/koneksi.php' ?>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Daftar Blog</h3><br>
        <a href="?act=tambah" class="btn btn-theme pull-left">+ Tambah Blog</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col" width="35%">Isi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Gambar</th>
                    <th scope="col" width="10%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $data_blog = mysqli_query($conn, "select * from blog");
                    while ($data = mysqli_fetch_array($data_blog)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['judul'] ?></td>
                            <td><?php echo $data['deskripsi'] ?></td>
                            <td><?php echo $data['isi'] ?></td>
                            <td><?php echo $data['tanggal'] ?></td>
                            <td><?php echo $data['gambar'] ?></td>
                            <td>
                                <a href="?act=edit&id=<?php echo $data['id_blog'] ?>">Edit</a> |
                                <a href="?act=hapus&id=<?php echo $data['id_blog'] ?>">Hapus</a>
                            </td>                             
                        </tr>
                <?php } ?>                
            </tbody>
        </table>        

        <?php
            if (isset($_GET['act']) and $_GET['act'] == 'tambah') { ?>
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Blog</h4>
                    <form class="form-horizontal style-form" action="?act=proses_tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Judul" name="judul">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Isi</label>
                            <div class="col-sm-10">
                                <textarea type="textarea" class="form-control" placeholder="Isi Blog" name="isi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-theme">
                    </form>
                </div>
        <?php } elseif (isset($_GET['act']) and $_GET['act'] == 'edit') { 
                $isi = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM blog WHERE id_blog='$_GET[id]'")); { ?>
                  <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Blog</h4>
                    <form class="form-horizontal style-form" action="?act=proses_edit" method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="id_blog" value="<?php echo $isi['id_blog'] ?>">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?php echo $isi['judul']; ?>">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" value="<?php echo $isi['deskripsi']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Isi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Isi" name="isi" value="<?php echo $isi['isi']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar">
                                <img src="uploads/blog/<?=$isi['gambar']?>" width="100px" height="100px" alt="">
                            </div>
                        </div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-theme">
                    </form>
                </div>                  
        <?php } 
        } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_edit') {
            $id_blog = $_POST['id_blog'];
            // $update = mysqli_query($conn, "update kamar set nama_kamar='$_POST[nama_kamar]', tipe_kamar='$_POST[tipe_kamar]',
            // deskripsi='$_POST[deskripsi]', stok='$_POST[stok]' where id_kamar='$_POST[id_kamar]'");
            if ($_FILES['gambar']['error'] != 0) {
                $edit = mysqli_query($conn, "UPDATE blog SET judul='$_POST[judul]', deskripsi='$_POST[deskripsi]',
                isi='$_POST[isi]' where id_blog='$id_blog'") or die(mysqli_error($conn));
                } else {
                    $tmp_file = $_FILES['gambar']['tmp_name'];
                    $filename = $_FILES['gambar']['name'];
                    $filetype = $_FILES['gambar']['type'];
                    $filesize = $_FILES['gambar']['size'];
        
                    $destination = 'uploads/blog/' . $filename;
        
                    if (move_uploaded_file($tmp_file, $destination)) {
                        $gambar = $filename;
                    }
        
                    $edit = mysqli_query($conn, "UPDATE blog SET judul='$_POST[judul]', deskripsi='$_POST[deskripsi]',
                    isi='$_POST[isi]', $gambar where id_blog='$id_blog'") or die(mysqli_error($conn)); }            

            if ($edit) {
                echo "<script>
                window.location.href='blog.php';
                </script>";
            } else {
                echo "Data gagal diedit";
            }
        } elseif (isset($_GET['act']) and $_GET['act'] == 'hapus') {
            $delete = mysqli_query($conn, "DELETE from blog WHERE id_kamar='$_GET[id]'");
            if ($delete) {
                echo "<script>
                    window.location.href='blog.php';
                </script>";
            } else {
                echo "Data gagal dihapus";
            }
        } elseif (isset($_GET['act']) and $_GET['act'] == 'proses_tambah') {
            if ($_FILES['gambar']['error'] != 0) {
            $insert = mysqli_query($conn, "INSERT INTO blog (judul, deskripsi, isi,
            tanggal, gambar) VALUEs ('$_POST[judul]', '$_POST[deskripsi]', '$_POST[isi]', NOW())") or die(mysqli_error($conn));
            } else {
                $tmp_file = $_FILES['gambar']['tmp_name'];
                $filename = $_FILES['gambar']['name'];
                $filetype = $_FILES['gambar']['type'];
                $filesize = $_FILES['gambar']['size'];
    
                $destination = 'uploads/blog/' . $filename;
    
                if (move_uploaded_file($tmp_file, $destination)) {
                    $gambar = $filename;
                }
    
                $tambah = mysqli_query($conn, "INSERT INTO blog (judul, deskripsi, isi,
                tanggal, gambar) VALUEs ('$_POST[judul]', '$_POST[deskripsi]', '$_POST[isi]', 
                '$_POST[tanggal]', '$gambar')") or die(mysqli_error($conn)); }
    
    if ($tambah) {
        echo "<script>
            window.location.href='blog.php';
        </script>";
    } else {
        echo "Data gagal dihapus";
    }
    
        } ?>
      </section>
    </section>
    
<?php include 'inc/footer.php'; ?>
    
  