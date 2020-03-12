<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<?php include 'inc/koneksi.php' ?>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Daftar Kamar</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kamar</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">harga</th>
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
                                <a href="?act=edit&id=<?php echo $data['id_member'] ?>">Edit</a>
                                <a href="?act=hapus&id=<?php echo $data['id_member'] ?>">Hapus</a>
                            </td>                             
                        </tr>
                <?php } ?>
                
            </tbody>
        </table>
      </section>
    </section>
    
<?php include 'inc/footer.php'; ?>
    
  