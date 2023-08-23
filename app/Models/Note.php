<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    /**
     * Get the notebook that owns the note.
     */
    public function notebook(): BelongsTo
    {
        return $this->belongsTo(Notebook::class);
    }
}
