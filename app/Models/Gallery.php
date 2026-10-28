<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /** @use HasFactory<\Database\Factories\GalleryFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image_path'
    ];

    public const CATEGORIES = [
        'foto'  => 'Foto',
        'video' => 'Video',
    ];

    public function getImageUrlAttribute(): ?string
{
    return $this->image_path ? asset('storage/' . $this->image_path) : null;
}
}
