<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    use HasFactory;
}
