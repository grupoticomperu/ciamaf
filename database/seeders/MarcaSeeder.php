<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'name' => 'Té Divina',
            'url'=>'te-divina',
            'state' => 1,
            'order' => 2,
        ]);


    }
}
