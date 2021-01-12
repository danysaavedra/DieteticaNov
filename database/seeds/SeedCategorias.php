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
              'imagen' => '../img/subComestibles.jpg',

            ]
        );


        /* //comestibles */

        DB::table('categories')->insert(
            [
              'name' => 'Soperos',
              'imagen' => '../img/subComestibles.jpg',
              'sub_category_id' => 7,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Guiseros',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 7,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Moñitos',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 7,
            ]
        );


        DB::table('categories')->insert(
            [
              'name' => 'Nidos',
              'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 7,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Tricolor',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 7,
                ]
            );


    }
}
