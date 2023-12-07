<?php 
	$conn = mysqli_connect('localhost','root','','benhnhannoitru');
	$id = $_GET['id'];
	$query_get_thuoc = mysqli_query($conn,"SELECT * FROM thuocbhyttheobenhnhan WHERE id= $id");
	$id_thuoc = 0;
	$soluongdung = 0;
	foreach($query_get_thuoc as $thuocbhyt) {
	  $id_thuoc = $thuocbhyt['thuocbhyt'];
	  $soluongdung = $thuocbhyt['soluongthuocbhyt'];
	}
	$query_get_thuocbhyt = mysqli_query($conn,"SELECT `soluongton` FROM `thuocbhyt` WHERE id = '$id_thuoc' LIMIT 1");
	$soluongton = 0;
	foreach($query_get_thuocbhyt as $thuocbhyt) {
	  $soluongton = $thuocbhyt['soluongton'];
	}
	$soLuongNew = $soluongdung + $soluongton;
	$query_update_thuocbhyt = mysqli_query($conn,"UPDATE `thuocbhyt` SET`soluongton`='$soLuongNew'WHERE id = '$id_thuoc'");
	$query_delete_thuoc = mysqli_query($conn,"DELETE FROM thuocbhyttheobenhnhan WHERE id= $id");
?>