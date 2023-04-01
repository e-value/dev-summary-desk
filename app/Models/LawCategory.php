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
        return $this->hasMany(Law::class, 'category_id');
    }

    /**
     * 契約しているユーザーとリレーション
     */
    public function contractedLawUsers()
    {
        return $this->belongsToMany(User::class, 'contracted_laws', 'category_id', 'user_id');
    }
}
