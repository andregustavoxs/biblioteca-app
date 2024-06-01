<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected array $dates = ['publishing_date'];

    protected $fillable = [
        'name',
        'publishing_date',
        'isbn',
        'summary',
        'cover',
    ];
}
