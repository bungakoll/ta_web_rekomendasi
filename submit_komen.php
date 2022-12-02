<?php
                include "Coneksi.php";
                @$id_komen = $_POST['id_komen'];
                @$nama = $_POST['nama'];
                @$isi = $_POST['isi'];
                @$submit = $_POST['submit'];
                if ($submit) {
                    $query_insert = "INSERT INTO tbl_komen VALUES ('','$nama', '$isi')";
                    $hasil = mysqli_query($db_koneksi, $query_insert) or die("ERROR INSERT DATA");
                    if ($hasil) {
                        header('Location:home_user.php');
                    }
                }
