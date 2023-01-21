<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $fillable = [
        'title',
        'street',
        'house',
        'contact_number',
        'opening_time',
        'closing_time'
    ];
}
