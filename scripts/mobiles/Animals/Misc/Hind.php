<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Hind extends Mobile {
	public function summon() {
		$this->name = "a hind";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(21, 51);
		$this->dex = rand(47, 77);
		$this->int = rand(17, 47);
		$this->maxhits = rand(15, 29);
		$this->hits = $this->maxhits;
		$this->damage = 0;
		$this->damageMax = 0;
		$this->resist_physical = rand(5, 15);
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 300;
		$this->virtualarmor = 8;

}}
?>
