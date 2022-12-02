<div class="halaman">
    <h2>Tambah data</h2>
    <form method="POST" action="">
        <table border="1" align="center">
        <tr><input type="hidden" name="id_hotel"></tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><input type="text" name="kategori" size="50" placeholder="Masukkan Kategori"></font></td>
        </tr>
        <tr>
            <td>Nama Hotel</td>
            <td>:</td>
            <td><textarea name="nama_hotel" cols="48" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"></i></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>:</td>
            <td>
                <textarea name="isi" cols="48" rows="7"></textarea><br>
            </td>
        </tr>
            <tr><td colspan="3"><input type="submit" name="submit" value="TAMBAH"></td></tr>
        </table>
    </form>
    <a class="bc" href="?page=reko">Kembali Kelola</a>
</div>
<?php
include "Coneksi.php";
@$id_hotel=$_POST['id_hotel'];
@$kategori = $_POST['kategori'];
@$nama_hotel = $_POST['nama_hotel'];
@$gambar = $_POST['gambar'];
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if($submit){
    $query_insert="INSERT INTO tbl_rekomendasi VALUES ('','$kategori','$_nama_hotel','$gambar','$isi')"; 
    $hasil=mysqli_query($db_koneksi,$query_insert) or die ("ERROR INSERT DATA");
    if($hasil){
        header('Location:?page=reko');
    }
}
?>