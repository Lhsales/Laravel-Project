<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scholarity extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarity_type_id', 'course', 'institution', 'started_at', 'ended_at'
    ];

    public function type() : BelongsTo
    {
        return $this->belongsTo(ScholarityType::class, 'scholarity_type_id');
    }
}
