<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price'
    ];

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function modules() : HasMany {
        return $this->hasMany(Module::class);
    }
}
