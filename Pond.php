<?php

/**
 *	allowed to edit
 * 
 */
include 'Fish.php';
include 'Fish_Inherit.php';
// include('Fish_Inherit.php');

class Pond
{

	/**
	 * make new fish object in pond and return array of object fish
	 * @return array array of object fish
	 */
	public function getFish()
	{
		$fish = [];
		for ($i = 0; $i <= 9; $i++) {
			$fish[$i] = new Fish_Inherit();
			if ($i <= 3) {
				// Koi
				$fish[$i]->name = "Koi";
				// Koi Speed
				$fish[$i]->setSpeed(1);
			} else if ($i > 3 && $i <= 5) {
				// Gurame
				$fish[$i]->name = "Gurame";
				// Gurame Speed
				$fish[$i]->setSpeed(2);
			} else if ($i > 4 && $i <= 7) {
				// Nila
				$fish[$i]->name = "Nila";
				// Nila Speed
				$fish[$i]->setSpeed(3);
			} else if ($i > 7 && $i <= 9) {
				// Bawal
				$fish[$i]->name = "Bawal";
				// Bawal Speed
				$fish[$i]->setSpeed(4);
			}
		}
		return $fish;
	}
}
