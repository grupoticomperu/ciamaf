<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title1' => 'Valvulas Hidraulicas',
            'title2' => 'para',
            'title3' => 'Mineras',
            'title4' => 'Desde S/ 400',
            'url' => '#',
            'image' => 'sliders/yyuTR6AWJFNIhjdxGrkqaaRpghJUvCf60PHsm4I1.jpg',
            'state' => 1,
            'user_id'=> 1
        ]);

        Slider::create([
            'title1' => 'Bombas Hidraulicas',
            'title2' => 'para',
            'title3' => 'Negocios',
            'title4' => 'Desde S/ 800',
            'url' => '#',
            'image' => 'sliders/63qF6MrZla6BObscVRlRjZiPwmeQFrr7PcyfiEr5.jpg',
            'state' => 1,
            'user_id'=> 1
        ]);


    }
}
