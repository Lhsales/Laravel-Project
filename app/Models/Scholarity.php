<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarity extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarity_type_id', 'course', 'institution', 'started_at', 'ended_at'
    ];
}
