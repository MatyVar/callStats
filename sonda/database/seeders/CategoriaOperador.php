<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaOperador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_operador')->insert([
            'record'=>'Monitoreo',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);

        DB::table('categoria_operador')->insert([
            'record'=>'BackOffice',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
        DB::table('categoria_operador')->insert([
            'record'=>'112',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
        DB::table('categoria_operador')->insert([
            'record'=>'777',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
        DB::table('categoria_operador')->insert([
            'record'=>'112/777',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
        DB::table('categoria_operador')->insert([
            'record'=>'112/777/Monitoreo',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
        DB::table('categoria_operador')->insert([
            'record'=>'112/777/Monitoreo/BackOffice',
            'created_at'=>date('y-m-d H:i:s'),
            'updated_at'=>date('y-m-d H:i:s'),
        ]);
      
      
      
      
    }
}
