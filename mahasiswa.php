<?php
	$conn = mysqli_connect('localhost','root','','progweb');

	$query = mysqli_query($conn, "select * from mahasiswa order by nim asc");

	$data = array();

	while($row = mysqli_fetch_array($query)){
		array_push($data,array(
		"nim"=>$row['nim'],
		"nama"=>$row['nama_mahasiswa']
		));
	}

	echo json_encode(array('mahasiswa'=>$data));
	
	mysqli_close($conn);
?>