<div class="halaman">
    <p> 
<?php
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
        echo "<h3>Selamat Datang Admin</h3>";
}
if (!isset($_SESSION['level']))
    {
        echo "Anda tidak boleh mengakses halaman ini tanpa : ";
        echo "<a class='bc' href='..\index.php'>Login </a><br>";
        echo "<a class='bc' href='../register.php'>Belum punya User?</a>";
    }
?></p>
</div>