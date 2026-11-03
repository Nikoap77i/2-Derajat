<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Founder::create([
            'name' => 'Nathanael Evan Purnomo',
            'description' => 'Nathanael Evan Purnomo adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Nathanael berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Calvin Emmanuel Harianto ',
            'description' => 'Calvin Emmanuel Harianto merupakan seorang pengusaha muda yang memiliki ketertarikan dalam dunia bisnis dan industri kopi. Dengan semangat inovasi dan kreativitas, Calvin ingin menghadirkan coffee shop yang tidak hanya menawarkan kopi berkualitas, tetapi juga menjadi tempat yang nyaman untuk berkumpul, bersantai, dan berbagi cerita.',
            'image_path' => 'Founders/calvin2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Axell Immanuel ',
            'description' => 'Axell Immanuel adalah seorang pengusaha muda yang memiliki visi untuk membangun coffee shop dengan suasana yang unik dan berkesan. Dengan mengutamakan kualitas produk, kenyamanan tempat, dan kepuasan pelanggan, Axell berkomitmen untuk menciptakan pengalaman menikmati kopi yang menyenangkan bagi setiap pengunjung.',
            'image_path' => 'Founders/axel2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Kevin Juan Felicio Kwee',
            'description' => 'Kevin Juan Felicio Kwee merupakan seorang pengusaha muda yang memiliki minat besar dalam bidang kuliner dan pengembangan bisnis. Melalui coffee shop ini, Kevin ingin menghadirkan perpaduan antara cita rasa kopi berkualitas dan suasana yang hangat, sehingga setiap pengunjung dapat menikmati waktu bersama dengan nyaman.',
            'image_path' => 'Founders/kevin2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Benaya Abe Nugroho ',
            'description' => 'Benaya Abe Nugroho adalah seorang pengusaha muda yang percaya bahwa coffee shop bukan sekadar tempat menikmati kopi, melainkan juga ruang untuk membangun koneksi dan menciptakan pengalaman baru. Dengan visi tersebut, Benaya berkomitmen untuk menghadirkan pelayanan terbaik, produk berkualitas, dan suasana yang membuat setiap pengunjung merasa seperti di rumah sendiri.',
            'image_path' => 'Founders/abe2derajat.jpeg'
        ]);
    }
}
