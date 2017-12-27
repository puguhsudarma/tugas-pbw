<?php
function title(){
	$title = isset($_GET['page']) ? $_GET['page'] : "";

	switch($title){
		case "mahasiswa"		: $title = "Data Mahasiswa";			break;
		case "autentikasi"		: $title = "CRUD Mahasiswa - Login";	break;
		default 				: $title = "CRUD Mahasiswa";			break;
	}

	return $title;
}

function content(){ 
	$mod = isset($_GET['page']) ? $_GET['page'] : "";

	switch($mod){
		case "" 			: include "modul/mod_home/home.php"; 				break;
		case "autentikasi"	: include "modul/mod_autentikasi/autentikasi.php"; 	break;
		case "mahasiswa"	: include "modul/mod_mahasiswa/mahasiswa.php";		break;
		default				: include "modul/mod_warning/error.php";			break;
	}
}

function menu(){
	$menu = "";
	if($_SESSION['logged_in'] == TRUE){
		$menu = "
			<li><a href='".base_url()."'><span class='glyphicon glyphicon-home'></span> Home</a></li>
			<li><a href='".base_url('index.php?page=mahasiswa')."'><span class='glyphicon glyphicon-th-large'></span> Data Mahasiswa</a></li>
			<li><a href='".base_url('modul/mod_autentikasi/aksi_autentikasi.php?act=logout')."'><span class='glyphicon glyphicon-th-large'></span> Logout</a></li>
		";
	} else {
		$menu = "
			<li><a href='".base_url()."'><span class='glyphicon glyphicon-home'></span> Home</a></li>
			<li><a href='".base_url('index.php?page=autentikasi')."'><span class='glyphicon glyphicon-th-large'></span> Login</a></li>
		";
	}
	//print_r($_SESSION['logged_in']);
	echo "
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class='container-fluid'>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='#'>CRUD Mahasiswa</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
				<ul class='nav navbar-nav'>
					".$menu."
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	";
}
?>