<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['name', 'description', 'url'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
