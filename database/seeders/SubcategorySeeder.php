<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'Tina Quesera',
            'slug' => Str::slug('Tina Quesera'),
            'state'=>1,
            'categoria_id'=>1
        ]);

        Subcategory::create([
            'name' => 'Marmitas',
            'slug' => Str::slug('Marmitas'),
            'state'=>1,
            'categoria_id'=>1
        ]);

        Subcategory::create([
            'name' => 'Mescladoras',
            'slug' => Str::slug('Mescladoras'),
            'state'=>1,
            'categoria_id'=>1
        ]);
        Subcategory::create([
            'name' => 'Prensas',
            'slug' => Str::slug('Prensas'),
            'state'=>1,
            'categoria_id'=>1
        ]);


    }
}
