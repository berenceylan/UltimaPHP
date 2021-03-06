<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class ThinLongsword extends TypeNormal {
	public function build() {
		$this->name = "thin longsword";
		$this->graphic = 0x13B8;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 35;
		$this->aosmindamage = 15;
		$this->aosmaxdamage = 16;
		$this->aosspeed = 30;
		$this->mlspeed = 3;
		$this->oldstrengthreq = 25;
		$this->oldmindamage = 5;
		$this->oldspeed = 35;
		$this->defhitsound = 0x237;
		$this->defmisssound = 0x23A;
		$this->hits = 31;
		$this->maxHits = 110;
		$this->weight = 1.0;

}}
?>
