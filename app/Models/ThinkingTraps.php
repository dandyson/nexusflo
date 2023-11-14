<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThinkingTraps extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    public function worryJournalEntries()
    {
        return $this->belongsToMany(WorryJournalEntry::class);
    }
}
