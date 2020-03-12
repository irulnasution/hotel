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
                                <a href="?act=edit&id=<?php echo $data['id_member'] ?>">Edit</a> ||
                                <a href="?act=hapus&id=<?php echo $data['id_member'] ?>">Hapus</a>
                            </td>                            
                        </tr>
                <?php } ?>
                
            </tbody>
        </table>        
    </section>
</section>

<?php include 'inc/footer.php'; ?>