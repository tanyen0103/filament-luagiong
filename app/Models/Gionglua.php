<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gionglua extends Model
{
    use HasFactory;
    protected $fillable = [ 'nhomlua_id', 'name'];
    public function nhomlua()
    {
        return $this->belongsTo(Nhomlua::class);
    }
}
