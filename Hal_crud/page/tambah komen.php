<div class="halaman">
    <h2>Tambah data</h2>
    <form method="POST" action="">
        <table border="1" align="center">
        <tr><input type="hidden" name="id_komen"></tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" size="50" placeholder="Masukkan nama anda"></font></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td>:</td>
            <td>
                <textarea name="isi" cols="48" rows="7"></textarea><br>
            </td>
        </tr>
            <tr><td colspan="3"><input type="submit" name="submit" value="TAMBAH"></td></tr>
        </table>
    </form>
    <a class="bc" href="?page=kelola">Kembali Kelola</a>
</div>
<?php
include "Coneksi.php";
@$id_komen=$_POST['id_komen'];
@$nama = $_POST['nama'];
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if($submit){
    $query_insert="INSERT INTO tbl_komen VALUES ('','$nama', '$isi')"; 
    $hasil=mysqli_query($db_koneksi,$query_insert) or die ("ERROR INSERT DATA");
    if($hasil){
        header('Location:?page=kelola');
    }
}
?>