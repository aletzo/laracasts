<?php

namespace App;

class Normal extends Item
{

    public function tick()
    {
        $this->sellIn--;

        if ($this->quality === 0) {
            return;
        }

        $this->quality--;

        if ($this->sellIn <= 0) {
            $this->sellIn--;
        }
    }

}
