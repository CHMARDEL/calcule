<?php

class Calcule
{
	private $a;
	private $b;

	function __construct($nb1,$nb2)
	{
		$this->a = $nb1;
		$this->b = $nb2;

	}

	public function addition(){
		return $resultat = $this->a + $this->b;
		
	}

	public function multiplication(){
		return $resultat = $this->a * $this->b;
	}

	public function division(){
	return $resultat = $this->a / $this->b;
	}

}


?>