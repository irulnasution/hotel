<?php include 'inc/header.php';
    $select = mysqli_query($conn, "SELECT * FROM member WHERE email='$_SESSION[email]' AND password='$_SESSION[password]'");
    $data = mysqli_fetch_array($select) ?>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4" style="margin: auto">
        <div class="panel">
            <div class="panel-heading">
                Profil Saya <br><br>
                <div class="panel-body">
                    <form action="?act=profil" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="<?php echo $data['nama_depan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="<?php echo $data['nama_belakang'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $data['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data['password'] ?>">
                        </div>                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $data['telepon'] ?>">
                        </div>
                        <button type="submit" class="genric-btn success medium">Simpan</button><br><br>
                    </form>
                    <?php 
                        if (isset($_GET['act']) and $_GET['act'] == 'profil') {
                            # code...
                        }
                    ?>
     
