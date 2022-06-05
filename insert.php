<?php
include 'koneksi.php';
/**
 * @var $connection PDO
 */
$statement = $connection->query("insert into buku values('1226','Habis Gelap Terbitlah Terang','R.A. Kartini',123,'1989-04-21','Habis Gelap Terbitlah Terang......')");
//atur supaya hasil query berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$result = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($result);
