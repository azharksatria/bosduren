<?php
include'../sweetalert/sweetalert.php';
include'../config/koneksi.php';
$query= new Database();

$aksi=$_GET['aksi'];

if($aksi=='hapus')
	{
		$query->hapus(
			$id=$_GET['id']
		);
		header('location:../index.php');

	}
	
elseif($aksi=='update_slider')
{
			$folder    ="images/";
			$temp      =explode(".",$_FILES['photo']['name']);
			$id        =$_POST['id'];
			$rename    ="banner".$id.".".end($temp);
			$nama_file =$folder.basename($rename);
			$title		= $_FILES['photo']['tmp_name'];
			$upload    =move_uploaded_file($title,$nama_file);
		if($upload)
		{
			$query->update_slider(
			$id,
			$rename
			);
		}
			header('location:../index.php');
}

elseif($aksi=='update_gallery')
{
			$folder    ="images/";
			$temp      =explode(".",$_FILES['photo']['name']);
			$id        =$_POST['id'];
			$rename    ="gallery".$id.".".end($temp);
			$nama_file =$folder.basename($rename);
			$title		= $_FILES['photo']['tmp_name'];
			$upload    =move_uploaded_file($title,$nama_file);
		if($upload)
		{
			$query->update_gallery(
			$id,
			$rename,
			$_POST['caption'],
			$_POST['link']
			);
		}
			header('location:../index.php');
}

elseif($aksi=='update_produk')
{
			
			$query->update_produk(
			$_POST['id'],
			$_POST['title'],
			$_POST['konten']
			);

			header('location:../index.php');
}

elseif($aksi=='update_kontak')
{
			
			$query->update_kontak(
			$_POST['id'],
			$_POST['jalan'],
			$_POST['kota'],
			$_POST['hp'],
			$_POST['whatsapp'],
			$_POST['email1'],
			$_POST['email2']
			);

			header('location:../index.php');
}


elseif($aksi=='input')
{

				$folder    ="../images/";
				$nama_file = $folder.basename($_FILES['photo']['name']);
				$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
		if($upload)
		{
			$query->input(
			$_POST['id'],
			$nama_file
			);
		}

	
	
}