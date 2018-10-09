<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Monserrat White',
                'link' => 'http://www.dietrich.com/',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kelton Huels',
                'link' => 'http://sporer.biz/nihil-molestias-voluptatibus-similique-minus-dolores-voluptas',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'John Ryan',
                'link' => 'http://www.mraz.com/recusandae-ex-quos-ipsa-aut-voluptatem-porro-delectus',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Brooks Gusikowski',
                'link' => 'http://keeling.net/nihil-consequatur-sint-incidunt-nihil-perferendis',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Marcos Wintheiser',
                'link' => 'https://www.hills.com/ut-sunt-et-earum-quos-qui-harum-qui-nemo',
            ),
        ));
        
        
    }
}