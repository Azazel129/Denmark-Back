<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Monach extends Model
{
    use HasFactory;

    public $table='Monach';
    protected $fillable = ['name, image, description'];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
