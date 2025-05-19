<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    // alternative to $fillable
    protected $guarded = [];

    public function user()
    {
        // one to one relationship
        return $this->belongsTo(User::class);
    }

    public function trips()
    {
        // one to many relationship
        return $this->hasMany(Trip::class);
    }
}
