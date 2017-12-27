<?php

//session_start();
//validasi user
/*if(!isset($_SESSION['logged_in'])){
	exit('Redirect access forbidden');
}*/

require_once('../../config/library_config.php');
$conn = MysqlConnectionOpen();
$act = isset($_GET['act']) ? $_GET['act'] : '';

switch($act){
	case 'create'	:
		$data = array(
			0 => $_POST['nim'],
			1 => $_POST['nama'],
			2 => $_POST['alamat'],
			3 => $_POST['jenis_kelamin'],
			4 => $_POST['agama']
		);

		$query = 'INSERT INTO `mahasiswa` VALUES("'.$data[0].'", "'.$data[1].'", "'.$data[2].'", "'.$data[3].'", "'.$data[4].'");';
		$exec = mysqli_query($conn, $query);

		print json_encode($exec);
	break;

	case 'read'		:
		$record = array();
		$query = 'SELECT * FROM `mahasiswa`;';
		$exec = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($exec, MYSQLI_ASSOC)){
			$record[] = $row;
		}

		print json_encode($record);
	break;

	case 'readOne'	:
		$nim = isset($_GET['nim']) ? $_GET['nim'] : '';
		$nim = mysqli_escape_string($nim);

		$query = 'SELECT * FROM `mahasiswa` WHERE `nim` = "'.$nim.'";';
		$exec = mysqli_query($conn, $query);
		$record = mysqli_fetch_array($exec, MYSQLI_ASSOC);

		print json_encode($record);
	break;
	
	case 'update'	:
		$data = array(
			0 => $_POST['nim'],
			1 => $_POST['nama'],
			2 => $_POST['alamat'],
			3 => $_POST['jenis_kelamin'],
			4 => $_POST['agama']
		);

		$query = 'UPDATE `mahasiswa` SET `nama_lengkap`  = "'.$data[1].'",
										 `alamat`		 = "'.$data[2].'",
										 `jenis_kelamin` = "'.$data[3].'",
										 `agama`		 = "'.$data[4].'"
						WHERE `nim` = "'.$data[0].'";
				';
		$exec = mysqli_query($conn, $query);

		print json_encode($exec);
	break;

	case 'delete'	:
		$nim = isset($_GET['nim']) ? $_GET['nim'] : '';
		$nim = mysqli_escape_string($nim);

		$query = 'DELETE FROM `mahasiswa` WHERE `nim` = "'.$nim.'" LIMIT 1;';
		$exec = mysqli_query($conn, $query);

		print json_encode($exec);
	break;
}

MysqlConnectionClose($conn);