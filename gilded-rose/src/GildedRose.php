<?php

namespace App;

class GildedRose
{
    protected static $lookup = [
        'Aged Briermal'                             => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Conjured Mana Cake'                        => Conjured::class,
        'normal'                                    => Normal::class
    ];


    public static function of($name, $quality, $sellIn)
    {
        $class = isset(static::$lookup[$name])
                 ? static::$lookup[$name]
                 : Item::class;

        return new $class($quality, $sellIn);
    }

}
