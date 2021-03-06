<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class TormentedMinotaur extends Mobile {
	public function summon() {
		$this->name = "tormented minotaur";
		$this->body = 262;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(822, 930);
		$this->dex = rand(401, 415);
		$this->int = rand(128, 138);
		$this->maxhits = rand(4000, 4200);
		$this->hits = $this->maxhits;
		$this->damage = 16;
		$this->damageMax = 30;
		$this->resist_physical = 0;
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = -20000;
		$this->fame = 20000;
		$this->virtualarmor = 0;

}}
?>
