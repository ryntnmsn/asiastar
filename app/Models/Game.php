<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'language_id',
        'provider_id',
        'status',
        'game_category',
        'game_type',
        'is_featured',
        'released_date',
        'volatility',
        'rtp',
        'maximum_win',
        'region',
        'theme',
        'image'
    ];


    public function language() {
        return $this->belongsTo(Language::class);
    }

}
