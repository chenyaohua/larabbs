<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Founder',
                'guard_name' => 'web',
                'created_at' => '2018-10-09 15:20:51',
                'updated_at' => '2018-10-09 15:20:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maintainer',
                'guard_name' => 'web',
                'created_at' => '2018-10-09 15:20:51',
                'updated_at' => '2018-10-09 15:20:51',
            ),
        ));
        
        
    }
}