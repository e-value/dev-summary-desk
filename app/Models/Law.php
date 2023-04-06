<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    /**
     * 法改正情報とリレーション
     */
    public function revisionLaws()
    {
        return $this->hasMany(RevisionLaw::class);
    }

    /**
     * 方分類とリレーション
     */
    public function category()
    {
        return $this->belongsTo(LawCategory::class);
    }

    /**
     * 契約しているユーザー
     * Userテーブルと多対多
     */
    public function contractedUsers()
    {
        return $this->belongsToMany(User::class, 'contracted_laws', 'law_id', 'user_id');
    }

    /**
     * 法律が契約されているか
     * 
     * @param int $userId
     * @return bool
     */
    public function isContracted(int $userId): bool
    {
        return $this->contractedUsers()->where('user_id', $userId)->exists();
    }
}
