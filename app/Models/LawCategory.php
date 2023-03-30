<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawCategory extends Model
{
    use HasFactory;

    /**
     * 
     * 法律とマイグレーション
     * 
     */
    public function laws()
    {
        return $this->hasMany(Law::class);
    }
}
