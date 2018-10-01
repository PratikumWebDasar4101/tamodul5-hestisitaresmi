<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="view.php" method="POST" enctype="multipart/form-data">
			
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td> <input type="number" maxlength="10" name="nim"></td>
			</tr>
				<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama"></td>
			</tr>
				<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="myradio" value="Laki-Laki">Laki-Laki
					<input type="radio" name="myradio" value="Perempuan">Perempuan
				</td>		
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					
					<select name="prodi">	
							<option value="S1 TT">S1 TT</option>
							<option value="S1 TK">S1 TK</option>
							<option value="S1 IF">S1 IF</option>
							<option value="S1 TI">S1 TI</option>
							<option value="S1 DKV">S1 DKV</option>
							<option value="S1 MBTI">S1 MBTI</option>
							<option value="S1 ILKOM">S1 ILKOM</option>
							<option value="D3 M1">D3 MI</option>
							<option value="D3 TT">D3 TT</option>
							<option value="D3 TK">D3 TK</option>
							<option value="D3 IF">D3 IF</option>
					</select>
				</td>		
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
				<select name="fakultas">	
							<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
							<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>>
							<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
							<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
							<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
							<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
							<option value="	Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>>
				</select>
				</td>		
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Browsing">Browsing
					<input type="checkbox" name="hobi[]" value="Menyendiri">Menyendiri
					<input type="checkbox" name="hobi[]" value="Nonton">Nonton
					<input type="checkbox" name="hobi[]" value="Jalan-Jalan">Jalan-Jalan
				
				</td>		
			</tr>
			<tr>
				<td>Upload Foto</td>
				<td>:</td>
				<td>
					 <input type="file" name="dokumen" />
				</td>		
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Kirim">
				</td>
				
			</tr>
			
		</form>
	</table>

</body>
</html>
