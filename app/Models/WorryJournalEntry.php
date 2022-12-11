<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorryJournalEntry extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'main_worry',
        'balanced_thought',
        'thinking_traps',
    ];

    /**
     * Get the thinking traps for the worry journal entry.
     */
    public function thinkingTraps()
    {
        return $this->belongsToMany(ThinkingTraps::class);
    }
}
