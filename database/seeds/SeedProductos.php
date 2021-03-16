<?php

use Illuminate\Database\Seeder;

class SeedProductos extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // COMESTIBLES
        //SOPEROS

        DB::table('products')->insert(
            [
                'name' => 'Munición',
                'description' => 'Peso Neto 500 gr',
                'price' => 210,
                'avatar' => '..\img\seedPro\barletta-soperos-municion-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Ave María',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-avemaria-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Dedalitos',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-dedalito-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pamperito',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-pamperito-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Anillitos',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-anillito-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Letritas',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-anillito-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cornetín',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-cornetin-fideo.jpg',
                'category_id' => 34,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        // COMESTIBLES
        //GUISEROS
        DB::table('products')->insert(
            [
                'name' => 'Dedal',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-guiseros-dedal.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Codito Rayado',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-coditosrayados.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Caracol',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-caracol.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Ñoquis',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-nioquis.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Chelentano',
                'description' => 'Peso Neto 500 gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\barletta-guiseros-chelentano.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mostachol',
                'description' => 'Peso Neto 500 gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\barletta-guiseros-mostachol.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Rigatti',
                'description' => 'Peso Neto 500 gr',
                'price' => 175,
                'avatar' => '..\img\seedPro\barletta-guiseros-rigatti.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tirabuzón',
                'description' => 'Peso Neto 500 gr',
                'price' => 110,
                'avatar' => '..\img\seedPro\barletta-guiseros-tirabuzon.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        DB::table('products')->insert(
            [
                'name' => 'Penne Rigatti',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-pennerigatti.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Penetas',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-penetas.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Canudos',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-canudos.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mil rayas',
                'description' => 'Peso Neto 500 gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\barletta-guiseros-milrayas.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Cornetín',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-guiseros-cornetin.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tubetti',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-guiseros-tubetti.png',
                'category_id' => 35,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // COMESTIBLES
        //MOÑITOS
        DB::table('products')->insert(
            [
                'name' => 'Moños',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-monios-monio.png',
                'category_id' => 36,
                'stock' => 50,
                'promo' => 0,
            ]
        );

     // COMESTIBLES
        //NIDOS
        DB::table('products')->insert(
            [
                'name' => 'Nidos al Huevo n°1',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n1-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos al Huevo n°2',
                'description' => 'Peso Neto 500 gr',
                'price' => 71,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n2-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
          [
            'name' => 'Nidos al Huevo n°3',
            'description' => 'Peso Neto 500 gr',
            'price' => 75,
            'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n3-fideo.jpg',
            'category_id' => 37,
            'stock' => 50,
            'promo' => 0,
          ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos al Huevo de Espinaca',
                'description' => 'Peso Neto 500 gr',
                'price' => 75,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-espinaca-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Nidos al Huevo de Morrón',
                'description' => 'Peso Neto 500 gr',
                'price' => 65,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-morron-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nido al Huevo Pappardelle',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-fideo.png',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos Semolados n°1',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n1-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos Semolados n°2',
                'description' => 'Peso Neto 500 gr',
                'price' => 71,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n2-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
          [
            'name' => 'Nidos Semolados n°3',
            'description' => 'Peso Neto 500 gr',
            'price' => 75,
            'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-n3-fideo.jpg',
            'category_id' => 37,
            'stock' => 50,
            'promo' => 0,
          ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos Semolados de espinaca',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-semolados-verdes-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos Semolados de morrón',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-semolados-rojos-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nido Semolados Pappardelle',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-nidos-alhuevo-pappardelle-fideo.jpg',
                'category_id' => 37,
                'stock' => 50,
                'promo' => 0,
            ]
        );

    // COMESTIBLES
        //TRICOLOR
        DB::table('products')->insert(
            [
                'name' => 'Ave María',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-tricolor-ave-maria.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Dedalitos',
                'description' => 'Peso Neto 500 gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\barletta-soperos-tricolor-dedalitos.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Pamperitos',
                'description' => 'Peso Neto 500 gr',
                'price' => 65,
                'avatar' => '..\img\seedPro\barletta-soperos-tricolor-pamperitos.png',
                'category_id' => 38,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Letritas',
                'description' => 'Peso Neto 500 gr',
                'price' => 43,
                'avatar' => '..\img\seedPro\barletta-soperos-tricolor-letritas.png',
                'category_id' => 38,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Rigatti',
                'description' => 'Peso Neto 500 gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\barletta-guiseros-tricolor-rigatti.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tirabuzón',
                'description' => 'Peso Neto 500 gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\barletta-guiseros-tricolor-tirabuzon.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Penne rigate',
                'description' => 'Peso Neto 500 gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\barletta-guiseros-tricolor-pennerigate.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Moños',
                'description' => 'Peso Neto 500 gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\barletta-monios-tricolor-monios.png',
                'category_id' =>38,
                'stock' => 50,
                'promo' => 0,
            ]
        );

    }
}
