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
}
