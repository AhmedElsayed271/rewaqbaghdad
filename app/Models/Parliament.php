<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parliament extends Model
{
    use HasFactory;

    public function translation()
    {
        return $this->hasOne('App\Models\ParliamentTranslation', 'parent_id', 'id')->where('locale', appLangKey());
    }
    
    public function translations()
    {
        return $this->hasMany('App\Models\ParliamentTranslation', 'parent_id', 'id');
    }
}
