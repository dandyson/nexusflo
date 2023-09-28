<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WorryJournalEntry extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'main_worry',
        'thinking_traps',
        'balanced_thought',
    ];

    /**
     * Get the thinking traps for the worry journal entry.
     */
    public function thinkingTraps(): BelongsToMany
    {
        return $this->belongsToMany(ThinkingTraps::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
