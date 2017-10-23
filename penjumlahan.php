<?php

class bangun{
	public $p,$l,$s,$a,$t;

	public function set_bill($p,$l,$s,$a,$t){
		$this->panjang = $p;
		$this->lebar = $l;
		$this->sisi = $s;
		$this->alas = $a;
		$this->tinggi = $t;
	}
	public function get_bill(){
		return $this->panjang * $this->lebar;
	}
	public function get_bill1(){
		return $this->sisi * $this->sisi;
	}
	public function get_bill2(){
		return $this->alas * $this->tinggi / 2;
	}
}
$bangun1 = new bangun;
$bangun1->set_bill(10,5,5,10,2);
echo "Persegi panjang Luasanya...".$bangun1->get_bill().'<br>'
	."Persegi Luasnya...".$bangun1->get_bill1().'<br>'
	."segitiga luasnya...".$bangun1->get_bill2();

?>