<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // overriding the name of the table
    protected $table = 'my_flights';

    // overriding the primary key
    protected $primaryKey = 'flight_id';

    // making the primary key non incrementing by default
    public $incrementing = false;

    // setting the primary key to a string
    protected $keyType = 'string';

}
