<?php 
require_once '../config/koneksi.php'; 

$query = "SELECT * FROM tbl_datamatakuliah ORDER BY matakuliah_id ASC";

$result = mysqli_query($konek,$query);

$array = array();

while ($row  = mysqli_fetch_assoc($result))
{
	$array[] = $row; 
}


echo ($result) ? 
json_encode(array("kode" => 1, "result"=>$array)) :
json_encode(array("kode" => 0, "pesan"=>"data tidak ditemukan"));


?>