<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Nosotros',
            'our' => 'Somos una empresa especializado en brindar soluciones hidraulica para tu negocio:',
            'mission' => 'Nuestra Mission una empresa especializado en brindar soluciones hidraulica para tu negocio:',
            'vission' => 'Nuestra Vision una empresa especializado en brindar soluciones hidraulica para tu negocio',
            'imagen1' => 'about/default.jpg',
            'imagen2' => 'about/CrucpfiSnsH015Orn9cs5INwC6ztdM8DTO50h3Tv.jpg',
            'description' => 'Hprsa hidraulica',
            'keywords' => 'valvulas hidraulica',
            'user_id'=> 1
        ]);
    }
}
