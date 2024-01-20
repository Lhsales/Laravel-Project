<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'ocupation', 'company', 'description', 'image', 'started_at', 'ended_at'
    ];

    public function works() : HasMany 
    {
        return $this->hasMany(Work::class);
    }
}
