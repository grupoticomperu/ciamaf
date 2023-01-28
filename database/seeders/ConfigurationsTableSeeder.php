<?php

namespace Database\Seeders;
use App\Models\Hometwo;
use App\Models\Homethree;
use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'logo' => 'configurations/0phTSZQF8dPymo0QTlzT1jSCV7DD4kyKpOT7t9FD.jpg',
            'icon' => '#',
            'telephono' => '7959969',
            'movil' => '956724233',
            'facebook' => '#',
            'youtube' => '#',
            'instagram' => '#',
            'description' => 'Somos una empresa especializada en brindar soluciones tecnologicas en Hidrauulica',
            'email' => 'ventas@hfphydraulic.com',
            'address' => 'Av Petit Thouars 1255 Lima Lima',
            'user_id'=> 1
        ]);

        Hometwo::create([
            'title1' => 'titulo 1 famaic',
            'title2' => 'titulo 2 famaic',
            'title3' => 'titulo 3 famaic',
            'iconsubtitle1' => 'flaticon-box-1',
            'user_id'=> 1
        ]);

        Homethree::create([
            'title1' => 'titulo 1 famaic',
            'title2' => 'titulo 2 famaic',
            'title3' => 'titulo 3 famaic',

            'user_id'=> 1
        ]);
    }
}
