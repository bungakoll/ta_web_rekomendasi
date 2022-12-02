<div class="halaman">
    <?php
    include "Coneksi.php";
    $id=$_GET['id'];
    $query_delete="DELETE FROM tbl_user WHERE id_user='$id'";
    $hasil=mysqli_query($db_koneksi,$query_delete);

    if($hasil){
        header('Location: ?page=user');
    }else{
        echo "Gagal Hapus Data";
    }
    ?>
</div>