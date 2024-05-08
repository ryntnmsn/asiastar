<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'status', 'language_id'
    ];

    public function language() {
        return $this->belongsTo(Language::class);
    }
}