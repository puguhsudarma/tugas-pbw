<?php
require_once('../../config/library_config.php');
$conn = MysqlConnectionOpen();
$act = isset($_GET['act']) ? $_GET['act'] : '';
session_start();

switch($act){
	case 'login' :
		$data = array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password'])
		);

		$query = 'SELECT * FROM `admin` WHERE `username` = "'.$data['username'].'" AND `password` = "'.$data['password'].'";';
		$exec = mysqli_query($conn, $query);
		$record = mysqli_fetch_array($exec, MYSQLI_ASSOC);
		if($record){
			$_SESSION = array(
				'id'		=> $record['id'],
				'username'	=> $record['username'],
				'logged_in' => TRUE
			);
			echo 'test';
			//exit();
			redirect(base_url());
		} else {
			echo 'salah';
			//exit();
			redirect(base_url('index.php?page=autentikasi'));
		}
	break;

	case 'logout' :
		session_destroy();
		redirect(base_url());
	break;
}