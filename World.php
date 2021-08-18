<?php
include('Pond.php');
/** 
 * Not allowed to edit
 */

class World
{

	public $isWorldRunning = true;

	public function __construct()
	{
		$this->run();
	}

	public function run()
	{
		$this->clear();

		$pond = new Pond;
		$fish = $pond->getFish();

		while ($this->isWorldRunning) {

			foreach ($fish as $key) {
				$key->move();
			}

			usleep(90000);
			$this->clear();
		}
	}

	public function clear()
	{
		if (strncasecmp(PHP_OS, 'win', 3) === 0) {
			popen('cls', 'w');
		} else {
			system('clear');
		}
	}
}
