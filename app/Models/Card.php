<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'full_name', 'type_of_card', 'residential_address',
        'registration_token', 'phone', 'email', 'user_id', 'status', 'date_of_submission', 'number', 'cvv', 'balance'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
