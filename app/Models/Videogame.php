<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable = 
    
    [   
        'title',
        // 'author',
        'year',
        'description',
        'img'
    ];


    
    //funzione di relazione tra la classe modello Videogame e la classe modello User inversa di una 1-N ovvero
    //!una 1-1 one to one
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
