<?php

abstract class Hewan {
	protected $nama, $darah, $jumlah_kaki, $keahlian;

	abstract public function atraksi();
}

interface Fight {
	public function serang();
	public function diserang($attack);
}

class Harimau Extends Hewan implements Fight{
	public $attackPower, $defencePower;

	public function __construct($nama, $darah=50, $jumlah_kaki=4, $keahlian="Berlari Cepat"){
		$this->nama 		= $nama;
		$this->darah		= $darah;
		$this->jumlah_kaki 	= $jumlah_kaki;
		$this->keahlian 	= $keahlian;
		$this->attackPower  = 10;
		$this->defencePower = 5;
	}

	public function atraksi(){
		return $this->nama ." Sedang ".$this->keahlian;
	}

	public function serang(){
		return $this->nama . " Sedang Meyerang Elang";
	}

	public function diserang($attack){
		echo $this->nama . " Sedang Diserang";
		$this->darah = $this->darah - $attack / $this->defencePower;

	}

	public function getInfoHewan(Harimau $harimau){
		return "{$harimau->nama}, darah : {$harimau->darah}, kemampuan : {$harimau->keahlian}, Jenis Hewan : Harimau";
	}
}

class Elang Extends Hewan implements Fight{
	public $attackPower, $defencePower;

	public function __construct($nama, $darah=50, $jumlah_kaki=2, $keahlian="Terbang Tinggi"){
		$this->nama 		= $nama;
		$this->darah		= $darah;
		$this->jumlah_kaki 	= $jumlah_kaki;
		$this->keahlian 	= $keahlian;
		$this->attackPower  = 7;
		$this->defencePower = 8;
	}

	public function atraksi(){
		return $this->nama ." Sedang ".$this->keahlian;
	}

	public function serang(){
		return $this->nama . " Sedang Meyerang Harimau";
	}

	public function diserang($attack){
		echo $this->nama . " Sedang Diserang";
		$this->darah = $this->darah - $attack / $this->defencePower;
	}

	public function getInfoHewan(Elang $elang){
		return "{$elang->nama}, darah : {$elang->darah}, kemampuan : {$elang->keahlian}, Jenis Hewan : Elang";
	}
}

$harimau_1 = new Harimau("harimau_1");
$elang_1 = new Elang("elang_1");

echo $harimau_1->atraksi()."<br>";
echo $harimau_1->serang()."<br>";
echo $harimau_1->diserang($elang_1->attackPower)."<br>";
echo $harimau_1->getInfoHewan($harimau_1);
echo "<hr>";
echo $elang_1->atraksi()."<br>";
echo $elang_1->serang()."<br>";
echo $elang_1->diserang($harimau_1->attackPower)."<br>";
echo $elang_1->getInfoHewan($elang_1);
?>