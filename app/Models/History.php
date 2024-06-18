<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class History extends Model
{
    use HasFactory;

    public $table='History';
    protected $fillable = ['Title, Description, Images'];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
