<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;


    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

}
