<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Fact extends Model
{
    use HasFactory;

    protected $table = 'facts';
    protected $fillable = ['name', 'image'];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
