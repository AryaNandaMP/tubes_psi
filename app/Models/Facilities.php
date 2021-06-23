<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function Transactions(){
        $this -> belongsTo(Transactions::class);
    }

    public function Destinations(){
        $this -> belongsTo(Destinations::class);
    }
}
