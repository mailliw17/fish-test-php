<?php

/** 
 * Not allowed to edit
 */

class Fish
{

	public $positionX = 0;
	public $positionY = 0;
	protected $speed = 1;
	protected $direction = 'RIGHT';
	public $name = '';

	public function __construct()
	{
		$this->name = $this->getFishName(2);
		$this->positionX = rand(1, 20);
	}

	public function setSpeed($speed)
	{
		$this->speed = $speed;
	}

	/**
	 * Get fish name randomly
	 * @param  integer $length 
	 * @return string          
	 */
	public function getFishName($length = 10)
	{
		return substr(sha1(rand()), 0, $length);
	}

	/**
	 * draw fish in comand-line
	 */
	public function draw()
	{
		echo "\033[" . $this->positionX . ";" . $this->positionY . "f fish #" . $this->name;
	}

	/**
	 * move fish to certain position
	 */
	public function move()
	{
		if ($this->direction === 'RIGHT') {
			$this->positionY -= $this->speed;
		} else {
			$this->positionY += $this->speed;
		}
		$this->draw();
	}
}
