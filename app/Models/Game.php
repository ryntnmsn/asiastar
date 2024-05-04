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
        'game_category_id',
        'game_type_id',
        'is_featured',
        'released_date',
        'volatility',
        'rtp',
        'maximum_win',
        'region',
        'image_square',
        'image_horizontal',
        'image_vertical',
    ];


    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function provider() {
        return $this->belongsTo(Provider::class);
    }

    public function game_category() {
        return $this->belongsTo(GameCategory::class);
    }

    public function game_type() {
        return $this->belongsTo(GameType::class);
    }

    public function themes() {
        return $this->belongsToMany(Theme::class);
    }

    public function features() {
        return $this->belongsToMany(Feature::class);
    }

    public function available_languages() {
        return $this->belongsToMany(AvailableLanguage::class);
    }

}
