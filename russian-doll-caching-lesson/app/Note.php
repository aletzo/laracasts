<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    use Cacheable;

    protected $touches = ['card'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    
    }
}
