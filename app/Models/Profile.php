<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    
    protected $fillable =
    [
        'userimage', 'description','phone'
    ];

    //!funzione di relazione inversa tra User e il Profile
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
