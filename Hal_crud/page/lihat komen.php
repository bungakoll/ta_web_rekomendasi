<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include 
    "Coneksi.php";
    $id=$_GET['id'];
    $query_lihat="SELECT * FROM tbl_komen WHERE id_komen='$id'";
    $hasil=mysqli_query($db_koneksi, $query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3>Lihat data</h3>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>Nama Komentator</th>
            <th>Komentar</th>
        </tr>
        <tr>
            <td><?php echo $data['id_komen'];?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['isi']; ?></td> 
        </tr>
    </table>
    <a class="bc" href="?page=kelola">Kembali</a>
</div>