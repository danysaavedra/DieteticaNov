<?php

use Illuminate\Database\Seeder;

class SeedCategorias extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::table('subcategories')->insert(
            [
              'name' => 'Comestibles',
              'imagen' => '../img/seedPro/barletta-soperos-pamperito-fideo.jpg',

            ]
        );


        /* //comestibles */

        DB::table('categories')->insert(
            [
              'name' => 'Soperos',
              'imagen' => '../img/seedPro/barletta-soperos-pamperito-fideo.jpg',
              'sub_category_id' => 7,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Guiseros',
                'imagen' => '../img/seedPro/barletta-soperos-dedalito-fideo.jpg',
                'sub_category_id' => 7,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Moñitos',
                'imagen' => '../img/seedPro/barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'sub_category_id' => 7,
            ]
        );


        DB::table('categories')->insert(
            [
              'name' => 'Nidos',
              'imagen' => '../img/seedPro/barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'sub_category_id' => 7,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Tricolor',
                'imagen' => '../img/seedPro/barletta-soperos-avemaria-fideo.jpg',
                'sub_category_id' => 7,
                ]
            );


    }
}
