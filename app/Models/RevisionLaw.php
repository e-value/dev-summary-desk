<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionLaw extends Model
{
    use HasFactory;

    protected $fillable = [
        'law_id',
        'content',
    ];

    /**
     * 法律とリレーション
     * 
     */
    public function law()
    {
        return $this->belongsTo(Law::class);
    }
}
