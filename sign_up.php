<?php include 'inc/header.php' ?><br>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4" style="margin: auto">
        <div class="panel">
            <div class="panel-heading">
                Sign Up <br><br>
                <div class="panel-body">
                    <form action="?act=sign_up" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmai Password</label>
                            <input type="password" class="form-control" name="konfirmasi_password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                        </div>
                        <button type="submit" class="genric-btn success medium">Submit</button><br><br>
                    </form>
                    <?php
                    if (isset($_GET['act']) and $_GET['act'] == 'sign_up') {
                        if ($_POST['password'] == $_POST['konfirmasi_password']) {
                            $input = mysqli_query($conn, "INSERT INTO member (nama_depan, nama_belakang,
                            alamat, email, password, telepon) VALUES ('$_POST[nama_depan]', '$_POST[nama_belakang]',
                            '$_POST[alamat]', '$_POST[email]', '$_POST[password]', '$_POST[telepon]')");
                            if ($input) {
                                echo "<h4>Data Berhasil Disimpan</h4>";
                            } else {
                                echo "<h4>Data Gagal Disimpan</h4>";
                            }
                        } else {
                            echo "<h4>Password Harus Sama</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>