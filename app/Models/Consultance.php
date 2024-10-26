<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultance extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'imageName',
        'description',
        'career_id'
    ];
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
