<?php
	class Database{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "apotek";

	
	//$namaObat,$jenisObat,$jumlahStok,$hargaBeli,$hargaJual,$detailObat
	public function isiMysql($namaObat,$jenisObat,$jumlahStok,$hargaBeli,$hargaJual,$detailObat){
		$con = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		mysqli_query($con,"insert into obat values('','$namaObat','$jenisObat','$jumlahStok','$hargaBeli','$hargaJual','$detailObat')");
	}
	public function tampilMysql(){
		$con = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		$sqlTampil = mysqli_query($con,"select * from obat");
		while($row=mysqli_fetch_array($sqlTampil))
			$data[] = $row;
		return  $data;
	}
	public function hapusMysql($namaObat){
		$con = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		mysqli_query($con,"delete from obat where namaObat='$namaObat'");
	}
	public function editMysql($namaObat){
		$con = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		$sqlEdit =mysqli_query($con,"select * from obat where namaObat='$namaObat'");
		while($row =mysqli_fetch_array($sqlEdit))
			$hasil[] = $row;
		return $hasil;
	}
	public function updateMysql($namaObat,$jenisObat,$jumlahStok,$hargaBeli,$hargaJual,$detailObat){
		$con = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
		mysqli_query($con,"update obat set namaObat='$namaObat', jenisObat='$jenisObat', jumlahStok='$jumlahStok', hargaBeli='$hargaBeli'
		, hargaJual='$hargaJual', detailObat='$detailObat' where namaObat='$namaObat'");
	}
}
?>
	 
 