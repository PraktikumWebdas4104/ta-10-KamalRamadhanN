<?php
	class model{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "mahasiswa";
		//inisialisasi awal untuk class biasa disebut instansiasi

		function __construct(){
			$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			$query = "SELECT * FROM user";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "SELECT * FROM user WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $genre, $tempatwisata){
			$query = "UPDATE user SET nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', program='$prodi', genre='$genre', tempatwisata='$tempatwisata' WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "DELETE FROM user WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $genre, $tempatwisata){
			$query = "INSERT INTO user VALUES ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$genre', '$tempatwisata')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>