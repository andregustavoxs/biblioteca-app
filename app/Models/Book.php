<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'publisher_id',
    ];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
}
