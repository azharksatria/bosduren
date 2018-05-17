<?php
include'../sweetalert/sweetalert.php';
include'../config/crud.php';
$query= new Database();
$akse=$_GET['aksi'];
if($akse=='input'){
	
$query->input(
			$_POST['judul'],
			$_POST['berita']
			);
}
		
// define ('HOST','localhost');
// define ('USERNAME','root');
// define ('PASSWORD','password');
// define ('DATABASE','db_lapas_wanita');

// $mysqli= new mysqli(HOST,USERNAME,PASSWORD,DATABASE);

// $a=$_POST['judul'];
// $b=$_POST['berita'];

// $folder    ="../uploads/berita/";
// 			$nama_file = $folder.basename($_FILES['photo']['name']);
// 			$upload    =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
// 		if($upload)
// // 		{
			// $insert=$mysqli->query("INSERT INTO berita VALUES (NULL,'$a','$a','$b')");
			// if($insert){
			// 	echo "berhasil";
			// }else 
			// {
			// 	echo "string";
			// }
		// }else
		// {
		// 	echo "gambar gagal uploads";
		// }