<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include "Coneksi.php";
    if (isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //menampilkan data kelola
            default:
            $query="SELECT * FROM tbl_rekomendasi";
            $hasil=mysqli_query($db_koneksi,$query);
    ?>
    <center><h2>Halaman Kelola Rekomendasi</h2></center>
    <a class="bc" href="?page=reko&aksi=tambah">Tambah</a>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>id hotel</th>
            <th>Kategori</th>
            <th>Nama Hotel</th>
            <th>Gambar</th>
            <th>Isi</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        $no=1;
        while ($data=mysqli_fetch_array($hasil)){?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['id_hotel']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['nama_hotel']; ?></td>
            <td><?php echo $data['gambar']; ?></td> 
            <td><?php echo $data['isi']; ?></td>
            <td><a class="bc" href="?page=reko&aksi=lihat&id=<?php echo $data['id_hotel'];?>">View</a></td>
            <td><a class="bc" href="?page=reko&aksi=updat&id=<?php echo $data['id_hotel'];?>">Update</a></td>
            <td><a class="bc" href="?page=reko&aksi=delet&id=<?php echo $data['id_hotel'];?>" onclick="return confirm ('Apakah anda yakin menghapus data?')">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    break;
    case "tambah";
    include "page/tambah.php";
    break;
    // Lihat data
    case "lihat";
    include "page/lihat.php";
    break;
    //Update data
    case "updat";
    include "page\update.php";
    break;
    //Delete
    case "delet";
    include "page/Delete.php";
    break;
        }
    }else{
        include "./home.php";
    }
    ?>
</div>