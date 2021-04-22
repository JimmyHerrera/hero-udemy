<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');//resetea las claves foraneas y el autoincremental

        DB::table('levels')->truncate(); //limpia los datos ingresados y llama a resetear el autoincrmental

        $xp =  100;

        for($i=0;$i<10;$i++){
            $xp =  $xp * 2;
            DB::table('levels')->insert([
                'xp'=>$xp
            ]);
        }
    }
}
