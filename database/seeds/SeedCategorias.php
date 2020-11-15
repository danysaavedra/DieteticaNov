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

        DB::table('subcategories')->insert(
            [
                'name' => 'Bebidas',
                'imagen' => '../img/subBebi.jpg',

                ]
            );


        DB::table('subcategories')->insert(
            [
                'name' => 'Perfumería y Limpieza',
                'imagen' => '../img/subPerLimp.jpg',

            ]
        );


        /* //comestibles */

        DB::table('categories')->insert(
            [
              'name' => 'Fiambres y Quesos',
              'imagen' => '../img/subComestibles.jpg',
              'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Aceites y Vinagres',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Dulces y Mermeladas',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );


        DB::table('categories')->insert(
            [
              'name' => 'Condimentos y Aderezos',
              'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Galletitas',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Infusiones y Endulzantes',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
              'name' => 'Yerbas',
              'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Conservas y Legumbres',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Rebozadores',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
              'name' => 'Harinas y Premezclas',
              'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Arroz',
                'imagen' => '../img/subComestibles.jpg',
               'sub_category_id' => 1,
                ]
            );


        DB::table('categories')->insert(
            [
                'name' => 'Fideos',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Snacks',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Repostería',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Lácteos',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Panes',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Cereales',
                'imagen' => '../img/subComestibles.jpg',
                'sub_category_id' => 1,
            ]
        );



/* //perfumeria y limpieza */


        DB::table('categories')->insert(
            [
                'name' => 'Higiene Personal',
                'imagen' => '../img/subPerLimp.jpg',
                'sub_category_id' => 3,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Superficies y Pisos',
                'imagen' => '../img/subPerLimp.jpg',
                'sub_category_id' => 3,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Repelentes',
                'imagen' => '../img/subPerLimp.jpg',
                'sub_category_id' => 3,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Ropa',
                'imagen' => '../img/subPerLimp.jpg',
                'sub_category_id' => 3,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Varios',
                'imagen' => '../img/subPerLimp.jpg',
                'sub_category_id' => 3,
            ]
        );



/* bebidas */


        DB::table('categories')->insert(
            [
                'name' => 'Con Alcohol',
                'imagen' => '../img/subBebi.jpg',
                'sub_category_id' => 2,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Sin Alcohol',
                'imagen' => '../img/subBebi.jpg',
                'sub_category_id' => 2,
            ]
        );
    }
}
