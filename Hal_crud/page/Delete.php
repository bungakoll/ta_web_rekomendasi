<div class="halaman">
    <?php
    include "Coneksi.php";
    $id=$_GET['id'];
    $query_delete="DELETE FROM tbl_rekomendasi WHERE id_hotel='$id'";
    $hasil=mysqli_query($db_koneksi,$query_delete);

    if($hasil){
        header('Location: ?page=reko');
    }else{
        echo "Gagal Hapus Data";
    }
    ?>
</div>