<?php

namespace App;

class BackstagePass extends Item
{

    public function tick()
    {
        $this->sellIn--;

        if ($this->quality >== 50) {
            return;
        }

        if ($this->sellIn < 0) {
            $this->quality = 0;

            return;
        }

        $this->quality++;

        if ($this->sellIn < 10) {
            $this->quality++;
        }

        if ($this->sellIn < 5) {
            $this->quality++;
        }
    }

}
