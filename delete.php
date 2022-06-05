<?php
require_once('koneksi.php');
// untuk Hapus data barang berdasarkan id barang
$isbn = $_GET['isbn'];
$sql = "DELETE FROM buku WHERE isbn= ?";
/**
 * @var $connection PDO
 */
$row = $connection->prepare($sql);
$row->execute(array($isbn));

echo '<script>alert("Berhasil Hapus Data");window.location="all.php"</script>';
?>
