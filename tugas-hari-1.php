<?php

abstract class Hewan {
	protected $nama, $darah, $jumlah_kaki, $keahlian;

	abstract public function atraksi();
}

abstract class Fight {
	protected $attackPower, $defencePower;

	abstract public function serang();
	abstract public function diserang();
}

class Harimau Extends Hewan {
	public function __construct($nama, $darah=50, $jumlah_kaki=4, $keahlian="Berlari Cepat"){
		$this->nama 		= $nama;
		$this->darah		= $darah;
		$this->jumlah_kaki 	= $jumlah_kaki;
		$this->keahlian 	= $keahlian;
	}

	public function atraksi(){
		return $this->nama ." Sedang ".$this->keahlian;
	}
}

$harimau_1 = new Harimau("harimau_1");
echo $harimau_1->serang();



