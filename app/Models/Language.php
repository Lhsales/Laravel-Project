<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enum\LanguageLevelEnum;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'language_type_id', 'level'
    ];

    public function type() : BelongsTo 
    {
        return $this->belongsTo(LanguageType::class, 'language_type_id');
    }

    public function getLevel() : string
    {
        return LanguageLevelEnum::getAll()[$this->level];
    }
}
