<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'imageName',
        'description',
    ];
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}