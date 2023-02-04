<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhomlua extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function giongluas()
    {
        return $this->hasMany(Gionglua::class);
    }
}
