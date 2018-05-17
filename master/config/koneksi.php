<?php
include'config.php';
class Database
{
	public function __construct()
	{
		$this->config=new Koneksi();
	}

	public function tampil_slider()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM slider");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function tampil_gallery_kiri()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM gallery ORDER BY id ASC LIMIT 4 ");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function tampil_gallery_kanan()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 4 ");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function tampil_produk_kiri()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM produk_olahan ORDER BY id ASC LIMIT 2 ");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function tampil_produk_kanan()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM produk_olahan ORDER BY id DESC LIMIT 2 ");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function tampil_kontak()
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM kontak ");
		foreach ($data as $row) 
		{
			$hasil[]=$row;
		}
		return $hasil;
	}

	public function hapus($id)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("DELETE FROM tbl_website WHERE id_website='$id' ");
	}

	public function edit($id)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("SELECT * FROM tbl_website WHERE id_admin='$id' ");
		return $data;
	}

	public function update_slider($id,$photo)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("UPDATE slider SET gambar='$photo' WHERE id='$id' ");
	}

	public function update_gallery($a,$b,$c,$d)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("UPDATE gallery SET gambar='$b',caption='$c',link='$d' WHERE id='$a' ");
	}

	public function update_produk($a,$b,$c)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("UPDATE produk_olahan SET title='$b',konten='$c'
		 WHERE id='$a' ");
	}

	public function update_kontak($a,$b,$c,$d,$e,$f,$g)
	{
		$mysqli=$this->config->database();
		$data   =$mysqli->query("UPDATE kontak SET jalan='$b',kota='$c',hp='$d',whatsapp='$e',email1='$f',email2='$g' WHERE id='$a' ");
	}

	public function input($a,$b,$c)
	{
		$mysqli=$this->config->database();
		$mysqli->query("INSERT INTO berita  VALUES(NULL,'$a','$b','$c')");
	}
}




