<?php

class Fish_Inherit extends Fish
{
    // Function to speed random speed for each fish
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    // Function to set randomly fish moving
    public function move()
    {
        $rand = rand(0, 3);
        if ($rand == 0) {
            // RIGHT
            $this->positionY += $this->speed;
        } else if ($rand == 1) {
            // LEFT
            $this->positionY -= $this->speed;
        } else if ($rand == 2) {
            // UP
            $this->positionX -= $this->speed;
        } else if ($rand == 3) {
            // DOWN
            $this->positionX += $this->speed;
        }
        $this->draw();
    }

    // public function draw()
    // {
    //     echo "\033[1;32fish - " . $this->name . "\033[0m\n";
    // }
}
