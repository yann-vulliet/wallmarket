<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {                
        Picture::create([
            'picture' => 'a1707123988.jpg',
            'alt_picture' => 'a1707123988',
            'place_id' => null,
            'article_id' => '1'
        ]);

        Picture::create([
            'picture' => 'a1707123940.jpg',
            'alt_picture' => 'a1707123940',
            'place_id' => '12',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123840.jpg',
            'alt_picture' => 'a1707123840',
            'place_id' => '2',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123912.jpg',
            'alt_picture' => 'a1707123912',
            'place_id' => '7',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123939.jpg',
            'alt_picture' => 'a1707123939',
            'place_id' => '3',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123740.jpg',
            'alt_picture' => 'a1707123740',
            'place_id' => '5',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123941.jpg',
            'alt_picture' => 'a1707123941',
            'place_id' => '3',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123942.jpg',
            'alt_picture' => 'a1707123942',
            'place_id' => '9',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123947.jpg',
            'alt_picture' => 'a1707123947',
            'place_id' => '3',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123952.jpg',
            'alt_picture' => 'a1707123952',
            'place_id' => '6',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707123970.jpg',
            'alt_picture' => 'a1707123970',
            'place_id' => '16',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707125940.jpg',
            'alt_picture' => 'a1707125940',
            'place_id' => '13',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1708223940.jpg',
            'alt_picture' => 'a1708223940',
            'place_id' => '11',
            'article_id' => null
        ]);

        Picture::create([
            'picture' => 'a1707121940.jpg',
            'alt_picture' => 'a1707121940',
            'place_id' => '1',
            'article_id' => null
        ]);
    }
}
