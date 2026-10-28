<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimony::create([
            'name' => 'Komang Wibisana',
            'comment' => 'Tempatnya cozy banget, cocok buat nongkrong bareng temen!',
            'rating' => 5,
            'image_path' => 'Testimonies/komangwibi.jpeg',
            'is_featured' => true
        ]);
        
        Testimony::create([
            'name' => 'Samsut',
            'comment' => 'Pelayanannya ramah dan kopinya enak enak semua!',
            'rating' => 5,
            'image_path' => 'Testimonies/samsut.jpeg',
            'is_featured' => true
        ]);

        Testimony::create([
            'name' => 'Fajar Sadboy',
            'comment' => 'Tempatnya cocok buat ngelamun mikirin dia :(',
            'rating' => 5,
            'image_path' => 'Assets/Logo/icon.png',
            'is_featured' => true
        ]);

        Testimony::create([
            'name' => 'Ervanthek',
            'comment' => 'Josjis wes pokokee',
            'rating' => 5,
            'image_path' => 'Assets/Logo/icon.png',
            'is_featured' => false
        ]);

        Testimony::create([
            'name' => 'Yanto Nugroho',
            'comment' => 'cocok banget buat nongkrong bareng temen-temen, suasananya asik dan nyaman.',
            'rating' => 4,
            'image_path' => 'Assets/Logo/icon.png',
            'is_featured' => true
        ]);

        Testimony::create([
            'name' => 'Budi Santoso',
            'comment' => 'Tempatnya nyaman dan suasananya asik banget. Cocok buat hangout bareng temen-temen.',
            'rating' => 5,
            'image_path' => 'Assets/Logo/icon.png',
            'is_featured' => false
        ]);
        
    }
}
