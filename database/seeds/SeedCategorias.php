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
              'name' => 'Pasta corta',
              'imagen' => '../img/seedPro/categoria-pasta-corta.png',

            ]
        );

        DB::table('subcategories')->insert(
            [
              'name' => 'Especialidades',
              'imagen' => '../img/seedPro/categoria-pasta-especialidades.png',

            ]
        );

        DB::table('subcategories')->insert(
            [
              'name' => 'Pasta larga',
              'imagen' => '../img/seedPro/categoria-pasta-larga.png',

            ]
        );


        /* //comestibles */

        DB::table('categories')->insert(
            [
              'name' => 'Soperos',
              'imagen' => '../img/seedPro/barletta-soperos-pamperito-fideo.jpg',
              'sub_category_id' => 12,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Guiseros',
                'imagen' => '../img/seedPro/barletta-soperos-dedalito-fideo.jpg',
                'sub_category_id' => 12,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Moños',
                'imagen' => '../img/seedPro/barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'sub_category_id' => 13,
            ]
        );


        DB::table('categories')->insert(
            [
              'name' => 'Nidos',
              'imagen' => '../img/seedPro/barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'sub_category_id' => 13,
            ]
        );

/*         DB::table('categories')->insert(
            [
                'name' => 'Tricolor',
                'imagen' => '../img/seedPro/barletta-soperos-avemaria-fideo.jpg',
                'sub_category_id' => 14,
                ]
            );
 */

    }
}
