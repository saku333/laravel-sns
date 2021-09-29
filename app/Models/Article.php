<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\User;

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}