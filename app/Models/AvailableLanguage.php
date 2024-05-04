<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image'
    ];


    public function games() {
        return $this->belongsToMany(Game::class);
    }

}
