<?php

namespace App;
use App\Models\Photo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function userPhoto() {
        foreach (User::all() as $user) {
            foreach ($user->photos as $photo) {
                return $photo;
            }
        }
    }
}
