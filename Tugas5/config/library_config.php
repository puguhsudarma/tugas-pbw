<?php
//function untuk membuka koneksi ke database mysql
function MysqlConnectionOpen(){
	$setting_mysql = array(
					"host"		=> "localhost",
					"username"	=> "root",
					"password"	=> "",
					"database"	=> "pbw_tugas"
				);

	$Connection = @mysqli_connect($setting_mysql['host'],$setting_mysql['username'],$setting_mysql['password'], $setting_mysql['database']);
	
	if(!$Connection){
		printf("<pre>");
		printf("	Error 					: Unable to connect to MySQL.<br />");
		printf("	Debugging error number 	: %d<br />", mysqli_connect_errno());
		printf("	Debugging error 		: %s<br />", mysqli_connect_error());
		printf("</pre>");
		exit;
	}

	return $Connection;
}

//function untuk menutup koneksi ke database mysql
function MysqlConnectionClose($Connection){
	if(!$Connection){
		return 0;
	} else {
		mysqli_close($Connection);
	}
}

//function untuk menentukan url root dari website
function base_url($string = ""){
	if($string == ""){
		$url = $_SERVER['SERVER_NAME'] == 'localhost' ? 'http://localhost/web_latihan/Tugas5/' : 'http://'.$_SERVER['SERVER_NAME']."/web_latihan/Tugas5/";	
	} else {
		$url = $_SERVER['SERVER_NAME'] == 'localhost' ? 'http://localhost/web_latihan/Tugas5/'.$string : 'http://'.$_SERVER['SERVER_NAME']."/web_latihan/Tugas5/".$string;
	}
	
	return $url;
}

//fungsi untuk berpindah halaman
function redirect($uri, $http_response_code = 302){
	header("Location: ".$uri, TRUE, $http_response_code);
	exit;
}