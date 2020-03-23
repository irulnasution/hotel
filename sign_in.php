<?php include 'inc/header.php' ?>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4" style="margin: auto">
        <div class="panel">
            <div class="panel-heading">
                Sign In <br><br>
                <div class="panel-body">
                    <form action="?act=sign_in" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="genric-btn success medium">Submit</button><br><br>
                    </form>
                    <?php
                    if (isset($_GET['act']) and $_GET['act'] == 'sign_in') {
                                                            
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                                          
                        $select = mysqli_query($conn, "SELECT * FROM member WHERE email='$email' AND
                            password='$password'");
                        $data = mysqli_fetch_assoc($select);
                        if ($select) {
                            $_SESSION['status'] = "login";
                            $_SESSION['id_member'] = $data['id_member']; 
                            $_SESSION['email'] = $_POST['email'];
                            $_SESSION['password'] = $_POST['password'];
                            echo "<script>
                                    window.location.href='index.php';
                                </script>";
                        } else {
                            echo "<h4>Login Gagal, " . $mysqli_error($conn) . "</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>