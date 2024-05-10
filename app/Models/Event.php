<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'host',
        'name',
        'type',
        'location',
        'price',
        'start',
        'end',
        'image',
        'private',
        'description',
        'slug'
    ];        
}
