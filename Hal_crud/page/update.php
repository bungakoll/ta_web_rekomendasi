<div class="halaman">
    <?php
    include "Coneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_rekomendasi WHERE id_hotel='$id';";
    $hasil = mysqli_query($db_koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    ?>
    <h3>Edit data</h3>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_hotel" value="<?php echo $data['id_hotel']; ?>"></tr>
            <tr>
                <td>Kategori</td>
                <td>: </td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Hotel</td>
                <td>: </td>
                <td><textarea name="nama_hotel"><?php echo $data['nama_hotel']; ?></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>: </td>
                <td><input type="file" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>: </td>
                <td><input type="text" name="isi" value="<?php echo $data['isi']; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
    <a class="bc" href="?page=reko">Kembali</a>
</div>
<?php
@$id_hotel = $_POST['id_hotel'];
@$kategori = $_POST['kategori'];
@$gambar = $_POST['gambar'];
@$nama_hotel = $_POST['nama_hotel'];
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if ($submit) {
    $query_update = "UPDATE tbl_rekomendasi SET kategori='$kategori', nama_hotel='$nama_hotel', gambar='$gambar', isi='$isi' WHERE id_hotel = '$id_hotel';";
    $hasil = mysqli_query($db_koneksi, $query_update) or die("ERROR UPDATE DATA");
    if ($hasil) {
        header('Location: ?page=reko');
    }
}
?>
</div>