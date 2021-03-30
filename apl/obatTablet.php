<?php
include_once("obat.php");
class obatTablet implements Obat{
	public $kdObat;
	public $namaobat;
	public $jenisObat;
	public $jumlahStok;
	public $hargaBeli;
	public $hargaJual;
	public $detailObat;

public function isiData($data=array())
{	
	$jumlahData = count($data);
	if($jumlahData > 0){
	 $this->namaobat  =$data['namaobat'];
	 $this->jenisObat =$data['jenisobat'];
	 $this->jumlahStok=$data['stokobat'];
	 $this->hargaBeli =$data['hbobat'];
	 $this->hargaJual =$data['hjobat'];
	 $this->detailObat=$data['det1'];
	}
}
public function getData(){
	echo"Data Obat";
	echo "<pre>";
	echo "Kode Obat   	: " .  $this->kdObat ."<br/>";
	echo "Nama Obat   	: " .  $this->namaobat ."<br/>";
	echo "Jenis Obat  	: " .  $this->jenisObat ."<br/>";
	echo "Jumlah Stok 	: " .  $this->jumlahStok ."<br/>";
	echo "Harga beli  	: " .  $this->hargaBeli ."<br/>";
	echo "HargaJual   	: " .  $this->hargaJual ."<br/>";
	echo "Detail Obat   	: " .  $this->detailObat ."<br/>";
	echo "</pre>";
	
 }
public function form(){
	
	echo"<center> <h3>INPUT DATA OBAT TABLET</h3>";
	echo"<form action='prosesisi.php' method='post'>";
	echo"<input type='hidden' name='kelas' value='".get_class($this)."' />" ;
	echo"<div class='form-group'>";
	echo"Nama Obat: <input type='text' style='width:300px' class='form-control' name='namaobat'></input>";
	echo"</div>";
	echo"<div class='form-group'>";
	echo"Jenis Obat: <input type='text' style='width:300px' class='form-control' name='jenisobat'></input>";
	echo"</div>";
	echo"<div class='form-group'>";
	echo"Stok Obat: <input type='text' style='width:300px' class='form-control' name='stokobat'></input>";
	echo"</div>";
	echo"<div class='form-group'>";
	echo"Harga beli obat(Rp.) : 	<input type='text' style='width:300px' class='form-control' name='hbobat'></input>";
	echo"</div>";
	echo"<div class='form-group'>";
	echo"Harga jual obat(Rp.) :	<input type='text' style='width:300px' class='form-control' name='hjobat'></input>";
	echo"</div>";
	echo"<div class='form-group'>";
	echo"Detail obat     :	<input type='text' style='width:300px' class='form-control' name='det1'></input>";
	echo"</div>";
	echo"<input type='submit' class='btn btn-primary' name='submit' value='Confirm'></input>";
	echo"</center>";
	echo"</form>";
}
}
?>