<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'status',
        'game_category_id'
    ];

    public function game_category() {
        return $this->belongsTo(GameCategory::class);
    }
}
