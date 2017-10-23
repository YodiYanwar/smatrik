<?php 

	class Database{

		public $host = "localhost";
		public $user = "root";
		public $password = "";
		public $dbname = "smatrik";	

		// Fungsi untuk koneksi
		function koneksi(){
			mysql_connect($this->host, $this->user, $this->password);
			mysql_select_db($this->dbname);
		}	
	}


	class Mahasiswa{

		//Menampilkan Data Mahasiswa
		function tampil_mhs(){
			$ambildata = mysql_query("SELECT * FROM mahasiswa");
				if (mysql_num_rows($ambildata) > 0) {
					while ($ad = mysql_fetch_assoc($ambildata)) // Perulangan while ini jangan pake {}
						$data[] = $ad;
						return $data;
				} else{
					echo "Data mahasiswa kosong";
				}
		}

		function tambahMahasiswa($nim, $nama, $fakultas){
			mysql_query("INSERT INTO mahasiswa (nim,nama,fakultas) VALUES ('$nim','$nama','$fakultas')");
		}

		function hapus_mhs($id){
			mysql_query("DELETE FROM mahasiswa WHERE id='$id'");
		}
	}


	// Membuat instance untuk class-class
	$db = new Database();
	$db->koneksi();

	$mhs = new Mahasiswa();


 ?>