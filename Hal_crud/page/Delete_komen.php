<div class="halaman">
    <?php
    include "Coneksi.php";
    $id=$_GET['id'];
    $query_delete="DELETE FROM tbl_komen WHERE id_komen='$id'";
    $hasil=mysqli_query($db_koneksi,$query_delete);

    if($hasil){
        header('Location: ?page=kelola');
    }else{
        echo "Gagal Hapus Data";
    }
    ?>
</div>