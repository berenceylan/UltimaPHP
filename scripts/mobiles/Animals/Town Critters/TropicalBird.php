<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class TropicalBird extends Mobile {
	public function summon() {
		$this->name = "a tropical bird";
		$this->body = 6;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0xBF;
		$this->str = 0;
		$this->dex = rand(25, 35);
		$this->int = 0;
		$this->hits = 0;
		$this->maxhits = 0;
		$this->resist_physical = 0;
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 150;
		$this->virtualarmor = 0;

}}
?>
