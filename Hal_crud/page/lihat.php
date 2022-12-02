<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include 
    "Coneksi.php";
    $id=$_GET['id'];
    $query_lihat="SELECT * FROM tbl_rekomendasi WHERE id_hotel='$id'";
    $hasil=mysqli_query($db_koneksi, $query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3>Lihat data</h3>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>Kategori</th>
            <th>Nama Hotel</th>
            <th>Gambar</th>
            <th>Isi</th>
        </tr>
        <tr>
            <td><?php echo $data['id_hotel'];?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['nama_hotel']; ?></td>
            <td><?php echo $data['gambar']; ?></td>
            <td><?php echo $data['isi']; ?></td> 
        </tr>
    </table>
    <a class="bc" href="?page=reko">Kembali</a>
</div>