<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 契約している法律
     * Lawテーブルと多対多
     */
    public function contractedLaws()
    {
        return $this->belongsToMany(Law::class, 'contracted_laws', 'user_id', 'law_id');
    }

    /**
     * 契約している法律の法分類とリレーション
     */
    public function contractedLawCategories()
    {
        return $this->belongsToMany(LawCategory::class, 'contracted_laws', 'user_id', 'category_id');
    }
}
