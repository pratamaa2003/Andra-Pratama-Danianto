<?php
if (empty($_POST['nama'])) {
    header("Location:latihan_9.3.php");
}   else {
    echo "<center>Nama :",$_POST['nama']."</center><br>";
}
?>