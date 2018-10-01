<?php
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$komentar=$_POST['komentar'];
	$hitung= count(explode(" ", $komentar));
	$prodi=$_POST['prodi'];
	$fakultas=$_POST['fakultas'];
	$hobi=$_POST['hobi'];

	echo "Nim 	: $nim";
	echo "<br><br>Nama : $nama";
	echo "<br><br>Email :$email";
	
	echo "<br><br>Jumlah Kata : $hitung";

	if($hitung < 5){
		$selisih=5-$hitung;
		echo "<br><br>Eror : Maaf jumlah kata yang anda inputkan kurang $selisih kata :)";

	}else{
		die("<br><br>Komentar : $komentar");
	}

	echo "<br><br>Program Studi : $prodi";
	echo "<br><br>Fakultas : $fakultas";
	echo "<br><br>Hobi : ";
	$hobby = array($_POST['hobi']);

	foreach($_POST['hobi'] as $hobby) {

	echo $hobby."," ;
	}

	echo "<br><br>Upload foto : ";
	$file=$_FILES['dokumen'];
	$nama_file=$file['name'];
	$nama_tmp=$file['tmp_name'];
	$upload_dir= "upload/";
	move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
	

?>
<br><img width = "500" src="upload/<?php echo $nama_file; ?>"><br>
