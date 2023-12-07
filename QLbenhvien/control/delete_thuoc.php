<?php 
	$conn = mysqli_connect('localhost','root','','benhnhannoitru');
	$id = $_GET['id'];
	$query_get_thuoc = mysqli_query($conn,"SELECT * FROM thuoctheobenhnhan WHERE id= $id");
	$id_thuoc = 0;
	$soluongdung = 0;
	foreach($query_get_thuoc as $thuocban) {
	  $id_thuoc = $thuocban['thuocmua'];
	  $soluongdung = $thuocban['soluong'];
	}
	$query_get_thuocban = mysqli_query($conn,"SELECT `soluongton` FROM `thuocban` WHERE id = '$id_thuoc' LIMIT 1");
	$soluongton = 0;
	foreach($query_get_thuocban as $thuocban) {
	  $soluongton = $thuocban['soluongton'];
	}
	$soLuongNew = $soluongdung + $soluongton;
	echo $soLuongNew. "\n";
	echo $soluongdung. "\n";
	echo $soluongton. "\n";
	$query_update_thuocban = mysqli_query($conn,"UPDATE `thuocban` SET`soluongton`='$soLuongNew'WHERE id = '$id_thuoc'");
	$query_delete_thuoc = mysqli_query($conn,"DELETE FROM thuoctheobenhnhan WHERE id= $id");
	
	?>