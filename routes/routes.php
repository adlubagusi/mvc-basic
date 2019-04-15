<?php
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
		$nim = $_GET['e'];
		$main->viewEdit($nim);
	}else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$nim = $_GET['d'];
		$main->delete($nim);
	}else if(isset($_GET['i'])){
		$main->viewInsert(); //kondisi untuk mengakses halaman add
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>