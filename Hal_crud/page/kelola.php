<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include "Coneksi.php";
    if (isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //menampilkan data kelola
            default:
            $query="SELECT * FROM tbl_komen";
            $hasil=mysqli_query($db_koneksi,$query);
    ?>
    <center><h2>Halaman Kelola Komen</h2></center>
    <a class="bc" href="?page=kelola&aksi=tambah">Tambah</a>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>Nama Komentator</th>
            <th>Komentar</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $no=1;
        while ($data=mysqli_fetch_array($hasil)){?>
        <tr>
            <td><?php echo $data['id_komen']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['isi']; ?></td>
            <td><a class="bc" href="?page=kelola&aksi=lihat&id=<?php echo $data['id_komen'];?>">View</a></td>
            <td><a class="bc" href="?page=kelola&aksi=delete&id=<?php echo $data['id_komen'];?>" onclick="return confirm ('Apakah anda yakin menghapus data?')">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    break;
    case "tambah";
    include "page/tambah komen.php";
    break;
    // Lihat data
    case "lihat";
    include "page\lihat komen.php";
    break;
    //Delete
    case "delete";
    include "page\Delete_komen.php";
    break;
        }
    }else{
        include "./home.php";
    }
    ?>
</div>