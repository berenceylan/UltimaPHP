<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Sheep extends Mobile {
	public function summon() {
		$this->name = "a sheep";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0xD6;
		$this->str = 0;
		$this->dex = 0;
		$this->int = 0;
		$this->hits = 1;
		$this->maxhits = 2;
		$this->resist_physical = rand(5, 10);
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 300;
		$this->virtualarmor = 6;

}}
?>
