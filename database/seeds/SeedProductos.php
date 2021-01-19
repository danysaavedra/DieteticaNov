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
                'description' => 'Peso Neto ...gr',
                'price' => 210,
                'avatar' => '..\img\seedPro\higosAlmiBro.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Ave María',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLightArand.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Dedalitos',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthNar.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pamperito',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthFr.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Anillitos',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthFrRoj.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Letritas',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroCir.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cornetín',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroDur.png',
                'category_id' => 28,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        // COMESTIBLES
        //GUISEROS
        DB::table('products')->insert(
            [
                'name' => 'Dedal',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroFru.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Codito Rayado',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampC.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Caracol',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampN.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Ñoquis',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampD.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Chelentano',
                'description' => 'Peso Neto ...gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\mermCampBCfr.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mostachol',
                'description' => 'Peso Neto ...gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\mermCampBCaran.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Rigatti',
                'description' => 'Peso Neto ...gr',
                'price' => 175,
                'avatar' => '..\img\seedPro\jaleaCampBCmem.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tirabuzón',
                'description' => 'Peso Neto ...gr',
                'price' => 110,
                'avatar' => '..\img\seedPro\jaleaCampMem.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        DB::table('products')->insert(
            [
                'name' => 'Penne Rigatti',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCD.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Penetas',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCDama.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Canutos',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCC.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mil rayas',
                'description' => 'Peso Neto ...gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCn.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Cornetín',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabDurz.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tubetti',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabFb.png',
                'category_id' => 29,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // COMESTIBLES
        //MOÑITOS
        DB::table('products')->insert(
            [
                'name' => 'Moños',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabLightDurz.png',
                'category_id' => 30,
                'stock' => 50,
                'promo' => 0,
            ]
        );

     // COMESTIBLES
        //NIDOS
        DB::table('products')->insert(
            [
                'name' => 'Nidos n°1',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabLightFb.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos n°2',
                'description' => 'Peso Neto ...gr',
                'price' => 71,
                'avatar' => '..\img\seedPro\mermMolDam.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
          [
            'name' => 'Nidos n°3',
            'description' => 'Peso Neto ...gr',
            'price' => 75,
            'avatar' => '..\img\seedPro\mermMolLightDam.png',
            'category_id' => 31,
            'stock' => 50,
            'promo' => 0,
          ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Nidos Verdes',
                'description' => 'Peso Neto ...gr',
                'price' => 75,
                'avatar' => '..\img\seedPro\mermMolLightDur.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );

          //MAROLIO
        DB::table('products')->insert(
            [
                'name' => 'Nidos Rojos',
                'description' => 'Peso Neto ...gr',
                'price' => 65,
                'avatar' => '..\img\seedPro\mermMarLightDam.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Nidos a la Espinaca',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFb.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Nidos al Morrón',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFr.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Pappardelle',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFdelB.png',
                'category_id' => 31,
                'stock' => 50,
                'promo' => 0,
            ]
        );

    // COMESTIBLES
        //TRICOLOR
        DB::table('products')->insert(
            [
                'name' => 'Ave María',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassCAFb.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Dedalitos',
                'description' => 'Peso Neto ...gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassCAGuinda.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Pamperitos',
                'description' => 'Peso Neto ...gr',
                'price' => 65,
                'avatar' => '..\img\seedPro\fainalind.png',
                'category_id' => 32,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Letritas',
                'description' => 'Peso Neto ...gr',
                'price' => 43,
                'avatar' => '..\img\seedPro\hariMar000.png',
                'category_id' => 32,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Rigatti',
                'description' => 'Peso Neto ...gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsLinoChia.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tirabuzón',
                'description' => 'Peso Neto ...gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsMixSem.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pennerigate',
                'description' => 'Peso Neto ...gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsTra.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Moños',
                'description' => 'Peso Neto ...gr',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleLeivaSalvX3.png',
                'category_id' =>32,
                'stock' => 50,
                'promo' => 0,
            ]
        );

    }
}
