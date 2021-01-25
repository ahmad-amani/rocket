<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table="courses";

    public function getShortTextAttribute()
    {
        return $this->attributes["short-text"];
    }
    public function setShortTextAttribute($value)
    {
        $this->attributes["short-text"]=$value;
        return $this;
    }

    public function user()
    {
        return $this->belongsTo(User::class,"userid","id");
    }
}
