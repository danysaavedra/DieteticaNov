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

      // PERFURMERÍA Y LIMPIEZA
      //   HIG PERSONAL
        DB::table('products')->insert(
            [
              'name' => 'Toallitas Calipso x8',
              'description' => 'Pocket con alas',
              'price' => 43,
              'avatar' => '../img/seedPro/toallFemCalipso.png',
              'category_id' => 18,
              'stock' => 50,
              'promo' => 0,

            ]
        );

        DB::table('products')->insert(
            [
              'name' => 'Toallitas Siempre Libre ',
              'description' => 'Ultrafinas con alas',
              'price' => 65,
              'avatar' => '../img/seedPro/siemLib.png',
              'category_id' => 18,
              'stock' => 50,
              'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Jabón Rexona fresh',
                'description' => 'Unilever 125gr x 1U.',
                'price' => 35,
                'avatar' => '..\img\seedPro\jabTocRex1.png',
                'category_id' => 18,
                'stock' => 50,
                'promo' => 0,
            ]
        );
         DB::table('products')->insert(
            [
                'name' => 'Alcohol en gel',
                'description' => 'Bactericida 65 mm.',
                'price' => 80,
                'avatar' => '..\img\seedPro\alcGel.png',
                'category_id' => 18,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Alcohol fino Purocol',
                'description' => 'Alcohol etílico 250mm.',
                'price' => 65,
                'avatar' => '..\img\seedPro\alcFino.png',
                'category_id' => 18,
                'stock' => 50,
                'promo' => 0,

            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Papel Higienol Export',
                'description' => 'Higienol x4u. 30mts',
                'price' => 55,
                'avatar' => '..\img\seedPro\papHig.png',
                'category_id' => 18,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        // PERFURMERÍA Y LIMPIEZA
        //SUP Y PISOS
        DB::table('products')->insert(
            [
                'name' => 'Esponja Mortimer',
                'description' => 'Cuadriculada x 1U',
                'price' => 16,
                'avatar' => '..\img\seedPro\esponjMort.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Antigrasa Ayudín',
                'description' => 'Repuesto pack 500cm3',
                'price' => 55,
                'avatar' => '..\img\seedPro\AntiAyu.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cif Crema',
                'description' => '750cm3 Crema',
                'price' => 115,
                'avatar' => '..\img\seedPro\cif75.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Desinfectante Odex',
                'description' => 'mata el 99.99% bacterias',
                'price' => 120,
                'avatar' => '..\img\seedPro\limVidOdexRp.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lavavajilla limón',
                'description' => 'Cif  300cm3',
                'price' => 70,
                'avatar' => '..\img\seedPro\lavavaCif300Lim.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lavavajilla cítrica',
                'description' => 'Cif  300cm3',
                'price' => 70,
                'avatar' => '..\img\seedPro\lavavaCif300Cit.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lavavajilla limón verde',
                'description' => 'Cif 300cm3',
                'price' => 70,
                'avatar' => '..\img\seedPro\lavavaCif300LimV.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lavavajilla Ala',
                'description' => '450cm3 d7 pack',
                'price' => 70,
                'avatar' => '..\img\seedPro\lavavaAla450.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lavandina Gel Ayudín',
                'description' => '700cm3 en Gel',
                'price' => 110,
                'avatar' => '..\img\seedPro\lavAyuGel700.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Limpiavidrio Odex',
                'description' => 'Repuesto Odex 450ml',
                'price' => 40,
                'avatar' => '..\img\seedPro\limVidOdexRp.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lvandina Ayudín 2lt.',
                'description' => 'Original x 2lts',
                'price' => 92,
                'avatar' => '..\img\seedPro\lavAyu2lt.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Detergente 5lts',
                'description' => 'Bidón x 5lts',
                'price' => 190,
                'avatar' => '..\img\seedPro\deter5lt.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Autobrillo Blem Negro',
                'description' => '900cm3 color negro',
                'price' => 135,
                'avatar' => '..\img\seedPro\aublem900Neg.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cera Suiza natural',
                'description' => '300cm3 color natural',
                'price' => 160,
                'avatar' => '..\img\seedPro\ausuiza300.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cera Polycera incol.',
                'description' => '450ml color natural',
                'price' => 110,
                'avatar' => '..\img\seedPro\aupoli450.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lustramuebles Blem',
                'description' => '360cm3 Autobrillo',
                'price' => 155,
                'avatar' => '..\img\seedPro\lustrablem.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Lustramuebles Ceramicol',
                'description' => '360cm3 Autobrillo',
                'price' => 140,
                'avatar' => '..\img\seedPro\lustraceramicol.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Lavanda',
              'description' => '900cm3 Procenex',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Lav.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
                            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Pino',
              'description' => '900cm3 Procenex',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Pin.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,

            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Marina',
              'description' => '900cm3 Procenex',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Mar.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Limón',
              'description' => '900cm3 Procenex',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Lim.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Bebé',
              'description' => '900cm3 Procenex',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Bebe.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante pisos Floral',
              'description' => '900cm3 Floral',
              'price' => 57,
              'avatar' => '..\img\seedPro\procx900Flor.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
              'name' => 'Desodorante ambiente ',
              'description' => '360cm3 Glade',
              'price' => 68,
              'avatar' => '..\img\seedPro\desAmbGla360.png',
              'category_id' => 19,
              'stock' => 50,
              'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Desodorante pisos Echo.',
                'description' => '450ml Repuesto',
                'price' => 98,
                'avatar' => '..\img\seedPro\echo450Re.png',
                'category_id' => 19,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        // PERFURMERÍA Y LIMPIEZA
        //REPELENTES
        DB::table('products')->insert(
            [
                'name' => 'Espirales Mosquitrap',
                'description' => 'Mosquitrap caja x 12U.',
                'price' => 65,
                'avatar' => '..\img\seedPro\espiMos.png',
                'category_id' => 20,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Insecticida Mosquitrap',
                'description' => 'Mata moscas y mosquitos',
                'price' => 95,
                'avatar' => '..\img\seedPro\insMosAero.png',
                'category_id' => 20,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Insecticida Fuyí',
                'description' => 'Mata moscas y mosquitos',
                'price' => 99,
                'avatar' => '..\img\seedPro\insFuyiAero.png',
                'category_id' => 20,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Insecticida Raid',
                'description' => 'Mata moscas y mosquitos',
                'price' => 130,
                'avatar' => '..\img\seedPro\insRaidAero.png',
                'category_id' => 20,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        // PERFURMERÍA Y LIMPIEZA
        //ROPA

        DB::table('products')->insert(
            [
                'name' => 'Jabón liquido Woolite',
                'description' => 'Mosquitrap caja x 12U.',
                'price' => 106,
                'avatar' => '..\img\seedPro\jabLiqWoo450.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Camellito Ala Matic',
                'description' => '450cm3 Ala Matic',
                'price' => 93,
                'avatar' => '..\img\seedPro\jabLiqCamAla450.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Suavizante Vivere',
                'description' => '900cm3 Vivere',
                'price' => 90,
                'avatar' => '..\img\seedPro\suaViv900.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Suavizante Comfort',
                'description' => '900cm3 Comfort',
                'price' => 134,
                'avatar' => '..\img\seedPro\suaCom900.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Quitamancha Vanish',
                'description' => '450cm3 Vanish.',
                'price' => 68,
                'avatar' => '..\img\seedPro\quitaVanish450.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Suavizante Esencial',
                'description' => '900cm3 Esencial',
                'price' => 47,
                'avatar' => '..\img\seedPro\suaEse900.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Apresto Klaro',
                'description' => 'Para planchar',
                'price' => 180,
                'avatar' => '..\img\seedPro\apresKlaro360.png',
                'category_id' => 21,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        // PERFURMERÍA Y LIMPIEZA
        //VARIOS


        DB::table('products')->insert(
            [
                'name' => 'Papel Manteca',
                'description' => 'precio x rollo',
                'price' => 53,
                'avatar' => '..\img\seedPro\papelMant.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Repasador con diseño',
                'description' => 'Varios diseños',
                'price' => 98,
                'avatar' => '..\img\seedPro\repa.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Velitas de noche',
                'description' => 'V. x 12U.',
                'price' => 87,
                'avatar' => '..\img\seedPro\velas.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Secador de goma',
                'description' => 'goma de 40cm',
                'price' => 135,
                'avatar' => '..\img\seedPro\sec40.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Rollo cocina Sussex',
                'description' => 'Clásico x 3',
                'price' => 65,
                'avatar' => '..\img\seedPro\rolSusseX3.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Broches de madera',
                'description' => 'B. de madera x 12U',
                'price' => 35,
                'avatar' => '..\img\seedPro\brochesx12.png',
                'category_id' => 22,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // COMESTIBLES
        //DULCES Y Mermeladas

        DB::table('products')->insert(
            [
                'name' => 'Higos en almibar B.',
                'description' => 'Brocal x 454gr',
                'price' => 210,
                'avatar' => '..\img\seedPro\higosAlmiBro.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Arandanos B.',
                'description' => 'Brocal Light x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLightArand.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Naranja B.',
                'description' => 'Brocal Light x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthNar.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Frutilla B.',
                'description' => 'Brocal Light x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthFr.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Fr. Rojos B.',
                'description' => 'Brocal light x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroLigthFrRoj.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Mermelada Ciruela B.',
                'description' => 'Brocal x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroCir.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Durazno B.',
                'description' => 'Brocal x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroDur.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Frutilla B.',
                'description' => 'Brocal x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermBroFru.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // MERMELADA Campagnola

        DB::table('products')->insert(
            [
                'name' => 'Mermelada Ciruela C.',
                'description' => 'La Campagnola x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampC.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Naranja C.',
                'description' => 'La Campagnola x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampN.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Durazno C.',
                'description' => 'La Campagnola x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampD.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // MERMELADA Campagnola BC
        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Frutilla',
                'description' => 'BC x 454gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\mermCampBCfr.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Arandanos',
                'description' => 'BC x 454gr',
                'price' => 170,
                'avatar' => '..\img\seedPro\mermCampBCaran.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Jalea de membrillo BC',
                'description' => 'BC x 454grs',
                'price' => 175,
                'avatar' => '..\img\seedPro\jaleaCampBCmem.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Jalea de membrillo C.',
                'description' => 'La Campagnola x 454grs',
                'price' => 110,
                'avatar' => '..\img\seedPro\jaleaCampMem.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Durazno',
                'description' => 'BC x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCD.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Damasco',
                'description' => 'BC x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCDama.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Ciruela',
                'description' => 'BC x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCC.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada BC Naranja',
                'description' => 'BC x 454gr',
                'price' => 95,
                'avatar' => '..\img\seedPro\mermCampBCn.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        // MERMELADA CABAÑA MICO
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Mico Durazno',
                'description' => 'sabor durazno x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabDurz.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Mico Framb',
                'description' => 'sabor frambuesa x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabFb.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Mico Dur L.',
                'description' => 'Light durazno x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabLightDurz.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Mico Framb L.',
                'description' => 'Light frambuesa x 454gr',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermCabLightFb.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        // MERMELADA MOLTO


        DB::table('products')->insert(
            [
                'name' => 'Mermelada Molto Damasco',
                'description' => 'damasco x 454gr',
                'price' => 71,
                'avatar' => '..\img\seedPro\mermMolDam.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
          [
            'name' => 'Mermelada Molto Dam L.',
            'description' => 'Light damasco x 454gr',
            'price' => 75,
            'avatar' => '..\img\seedPro\mermMolLightDam.png',
            'category_id' => 3,
            'stock' => 50,
            'promo' => 0,
          ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Durazno L.',
                'description' => 'Molto x 454gr',
                'price' => 75,
                'avatar' => '..\img\seedPro\mermMolLightDur.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

          //MAROLIO
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Light Dam',
                'description' => 'Marolio x 454gr',
                'price' => 65,
                'avatar' => '..\img\seedPro\mermMarLightDam.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );



  // MERMELADA MASSEUBBE
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Framb S/Az',
                'description' => 'Masseube Sin Azucar',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFb.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Mermelada Frutilla S/Az',
                'description' => 'Masseube Sin Azucar',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFr.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Mermelada Fr. Bosque S/Az',
                'description' => 'Masseube Sin Azucar',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassSAFdelB.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Mermelada Framb C/Az',
                'description' => 'Masseube Con Azucar',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassCAFb.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Mermelada Guinda C/Az. ',
                'description' => 'Masseube Con Azucar',
                'price' => 185,
                'avatar' => '..\img\seedPro\mermMassCAGuinda.png',
                'category_id' => 3,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //COMESTIBLES Harinas
        DB::table('products')->insert(
            [
                'name' => 'Fainalind',
                'description' => 'Harina para preparar faina',
                'price' => 65,
                'avatar' => '..\img\seedPro\fainalind.png',
                'category_id' => 10,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Harina 000 Marolio',
                'description' => 'Harina 000',
                'price' => 43,
                'avatar' => '..\img\seedPro\hariMar000.png',
                'category_id' => 10,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        //COMESTIBLES Galletitas MARINERAS
        DB::table('products')->insert(
            [
                'name' => 'Marineras NS Lino y Chia',
                'description' => '400gr 0% grasas trans',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsLinoChia.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Marineras NS Mix de Semillas',
                'description' => '400gr 0% grasas trans',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsMixSem.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Marineras NS Tradicional',
                'description' => '400gr 0% grasas trans',
                'price' => 62,
                'avatar' => '..\img\seedPro\mariNsTra.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //COMESTIBLES Galletitas

        //LEIVA
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Salvado Leiva x3',
                'description' => '345gr tenor graso 11.5%',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleLeivaSalvX3.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Sandwich Leiva x3',
                'description' => '345gr tenor graso 11.5%',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleLeivaX3.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Light Leiva x3',
                'description' => '345gr Light',
                'price' => 80,
                'avatar' => '..\img\seedPro\galleLeivaLightX3.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //GRANIX
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Salvado Granix S/sal',
                'description' => '450gr Sin Sal',
                'price' => 48,
                'avatar' => '..\img\seedPro\galleGranixSalvSinSal.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Sin sal Granix x3',
                'description' => '450gr Sin Sal',
                'price' => 48,
                'avatar' => '..\img\seedPro\galleGranixSinSalX3.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Sésamo Granix S/sal',
                'description' => '175gr Sin Sal',
                'price' => 54,
                'avatar' => '..\img\seedPro\galleGranixSesamoSinSal.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        // BAGLEY
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Avena Bagley',
                'description' => '155gr 139Kcal x porción',
                'price' => 50,
                'avatar' => '..\img\seedPro\galleCereBagleyAvena.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Arroz Bagley',
                'description' => '155gr 139Kcal x porción',
                'price' => 50,
                'avatar' => '..\img\seedPro\galleCereBagleyArroz.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Salvado Bagley',
                'description' => '155gr 139Kcal x porción',
                'price' => 50,
                'avatar' => '..\img\seedPro\galleCereBagleyInt.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Amor Bagley',
                'description' => '112gr Amor',
                'price' => 39,
                'avatar' => '..\img\seedPro\galleAmor.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Chocolinas',
                'description' => '250gr Chocolinas Bagley',
                'price' => 39,
                'avatar' => '..\img\seedPro\galleBgleyCho.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Ópera',
                'description' => '55gr Ópera Bagley',
                'price' => 35,
                'avatar' => '..\img\seedPro\galleOpera55.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //SERRANITAS

        DB::table('products')->insert(
            [
                'name' => 'Galletitas Serranitas x3',
                'description' => 'pack x 3',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleSerraX3.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        //TOSTADAS


        DB::table('products')->insert(
            [
                'name' => 'Tostadas Riera Dulces',
                'description' => '2 pack de 100gr',
                'price' => 60,
                'avatar' => '..\img\seedPro\tostRieraDul.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tostadas Riera Integral',
                'description' => '2 pack de 100gr',
                'price' => 70,
                'avatar' => '..\img\seedPro\tostRieraInt.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Tostadas Crackines arroz',
                'description' => 'tostaditas de arroz',
                'price' => 65,
                'avatar' => '..\img\seedPro\tostRieraInt.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        //GRISINES

        DB::table('products')->insert(
            [
                'name' => 'Grisines Grisinopolis Tradicional',
                'description' => '180 gr. Tradicionales',
                'price' => 38,
                'avatar' => '..\img\seedPro\grisGrissiTra.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Grisines Grisinopolis Sin Sal',
                'description' => '180 gr. Sin Sal',
                'price' => 38,
                'avatar' => '..\img\seedPro\grisGrissiSinSal.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Grisines Grisinopolis Salvado',
                'description' => '180 gr. Salvado',
                'price' => 38,
                'avatar' => '..\img\seedPro\grisGrissiSalv.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


//BIZCOCHO

        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos Dulcypas D.',
                'description' => 'Bizcochos Dulces',
                'price' => 16,
                'avatar' => '..\img\seedPro\bizDulcyDul.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos Dulcypas S.',
                'description' => 'Bizcochos Salados',
                'price' => 16,
                'avatar' => '..\img\seedPro\bizDulcyDul.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos 9 de Oro Salados',
                'description' => 'Ideales para acompañar el mate',
                'price' => 38,
                'avatar' => '..\img\seedPro\grisGrissiSinSal.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos Don Satur Salados',
                'description' => '200gr grasa',
                'price' => 38,
                'avatar' => '..\img\seedPro\bizDonSal.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos Don Satur Agridulces',
                'description' => '200gr agridulces',
                'price' => 38,
                'avatar' => '..\img\seedPro\bizDonDul.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Bizcochitos Don Satur Negritas',
                'description' => '200gr agridulces',
                'price' => 38,
                'avatar' => '..\img\seedPro\bizDonNeg.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //TALITAS

        DB::table('products')->insert(
            [
                'name' => 'Talitas Tostex Queso',
                'description' => '125gr sabor queso',
                'price' => 65,
                'avatar' => '..\img\seedPro\taliTosQu.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Talitas Tostex Cebolla',
                'description' => '125gr sabor cebolla',
                'price' => 65,
                'avatar' => '..\img\seedPro\taliTosCeb.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Talitas Tostex Clásicas',
                'description' => '125gr sabor clásicas',
                'price' => 65,
                'avatar' => '..\img\seedPro\taliTosClasic.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        //Dulces
        DB::table('products')->insert(
            [
                'name' => 'Biscuit Soriano',
                'description' => '250 gr 3 U.',
                'price' => 00,
                'avatar' => '..\img\seedPro\biscuitSor.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Vainillas Mauri',
                'description' => '320gr 14U',
                'price' => 00,
                'avatar' => '..\img\seedPro\vainMauri.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Vainillas Valente Grandes',
                'description' => '480gr 36U.',
                'price' => 110,
                'avatar' => '..\img\seedPro\vainValen.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Vainillas Bimbo 160gr',
                'description' => '16gr 12U.',
                'price' => 00,
                'avatar' => '..\img\seedPro\vainiBimb.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Galletitas Morochitas',
                'description' => '140gr chocolate Par Nor',
                'price' => 7,
                'avatar' => '..\img\seedPro\galleMoroPar.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Coquitos',
                'description' => '170gr coco y vainilla Par Nor',
                'price' => 7,
                'avatar' => '..\img\seedPro\galleCoquiPar.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pitusas Ch.',
                'description' => '160gr Chocolate Par Nor',
                'price' => 00,
                'avatar' => '..\img\seedPro\gallePituCh.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Bananitas',
                'description' => '400gr Dulces Pepay',
                'price' => 65,
                'avatar' => '..\img\seedPro\galleBana.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Polvorón',
                'description' => '400gr Dulces Pepay',
                'price' => 65,
                'avatar' => '..\img\seedPro\gallePolvo.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Varichip',
                'description' => '400gr Dulces Pepay',
                'price' => 65,
                'avatar' => '..\img\seedPro\gallePepVari.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Formis',
                'description' => '72gr chocolate',
                'price' => 38,
                'avatar' => '..\img\seedPro\galleFormis.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Galletitas Lenguitas',
                'description' => '400gr coco vainilla Cilo',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleLengu.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pepas Light',
                'description' => '400gr Dulces Light Cilo',
                'price' => 62,
                'avatar' => '..\img\seedPro\gallePepasCiloLigth.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Anillos',
                'description' => '400gr Limón Cilo',
                'price' => 62,
                'avatar' => '..\img\seedPro\galleCiloAnill.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pepas Light',
                'description' => '400gr Dulces Light Cilo',
                'price' => 62,
                'avatar' => '..\img\seedPro\gallePepasCiloLigth.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Madalena Valente Vainilla',
                'description' => '225gr Marmolada con chips',
                'price' => 57,
                'avatar' => '..\img\seedPro\madalenaValen.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Frutigran Tropical',
                'description' => '250gr Frutigran Tropical',
                'price' => 80,
                'avatar' => '..\img\seedPro\galleFruti.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pepas Pay',
                'description' => '500gr Pepas Tradicional',
                'price' => 65,
                'avatar' => '..\img\seedPro\gallePepPepasClasic.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pepas Pay limón',
                'description' => '500gr Pepas limón',
                'price' => 65,
                'avatar' => '..\img\seedPro\gallePepPepasLimon.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Pepas Pay chocolate',
                'description' => '500gr Pepas chocolate',
                'price' => 65,
                'avatar' => '..\img\seedPro\gallePepPepasCh.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Galletitas Toddy dulce de leche',
                'description' => '50gr dulce de leche',
                'price' => 63,
                'avatar' => '..\img\seedPro\galleTodyDuleche.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Galletitas Toddy Black',
                'description' => '50gr chocolate',
                'price' => 63,
                'avatar' => '..\img\seedPro\galleTodyBlack.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Alfajor Subom x 6U',
                'description' => 'Subom x 6U',
                'price' => 44,
                'avatar' => '..\img\seedPro\alfaSubonx6.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        DB::table('products')->insert(
            [
                'name' => 'Alfajor Jorgito x 6U',
                'description' => 'Minimouse x 6U',
                'price' => 89,
                'avatar' => '..\img\seedPro\alfaJorx6.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Turrón Oblea x 6U',
                'description' => 'Arcor x 6U',
                'price' => 56,
                'avatar' => '..\img\seedPro\turronx6.png',
                'category_id' => 5,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //COMESTIBLES PANES

        DB::table('products')->insert(
            [
                'name' => 'Pan blanco Bimbo x 400gr',
                'description' => '400gr de pan blanco',
                'price' => 120,
                'avatar' => '..\img\seedPro\panBimbx400.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan blanco Bimbo x 600gr',
                'description' => '600gr de pan blanco',
                'price' => 195,
                'avatar' => '..\img\seedPro\panBimbx600.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan pancho Bimbo Artesano',
                'description' => '130gr 6 U',
                'price' => 84,
                'avatar' => '..\img\seedPro\panPchBimbArte.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Pan pancho Bimbo Clásico',
                'description' => '130gr 6 U',
                'price' => 65,
                'avatar' => '..\img\seedPro\panPchBimbClas.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan Hamb. Bimbo Clásico',
                'description' => '130gr 4 U',
                'price' => 65,
                'avatar' => '..\img\seedPro\panBimbHamb.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan Bimbo Artesano',
                'description' => '500gr pan Artesano',
                'price' => 150,
                'avatar' => '..\img\seedPro\panBimbArte.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan Bimbo Lino',
                'description' => '500gr pan con lino',
                'price' => 135,
                'avatar' => '..\img\seedPro\panBimbLino.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan Integral Bimbo',
                'description' => '500gr pan integral',
                'price' => 115,
                'avatar' => '..\img\seedPro\panBimbInt.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Pan blanco Oroweat',
                'description' => '500gr pan blanco',
                'price' => 200,
                'avatar' => '..\img\seedPro\panPchBimbArte.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        //RAPIDITAS
        DB::table('products')->insert(
            [
                'name' => 'Rapiditas',
                'description' => 'Rapiditas clásicas',
                'price' => 98,
                'avatar' => '..\img\seedPro\rapiClas.png',
                'category_id' => 16,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //CEREALES
        DB::table('products')->insert(
            [
                'name' => 'Cereales Granix Maíz',
                'description' => '160gr Sin Azucar',
                'price' => 45,
                'avatar' => '..\img\seedPro\cereGranixSinSal160.png',
                'category_id' => 17,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cereales Granix Fibra',
                'description' => '200gr Fibra Total',
                'price' => 82,
                'avatar' => '..\img\seedPro\cereGranixPasas.png',
                'category_id' => 17,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cereales Granix Skarchitos',
                'description' => '160gr Con Azucar',
                'price' => 65,
                'avatar' => '..\img\seedPro\cereGranixSkarch.png',
                'category_id' => 17,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Cereales Granix Almohaditas',
                'description' => '180gr frutilla',
                'price' => 93,
                'avatar' => '..\img\seedPro\almBocFruGranix.png',
                'category_id' => 17,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //SNACKS
        DB::table('products')->insert(
            [
                'name' => 'Papas fritas krachitos T',
                'description' => 'Corte Tradicional',
                'price' => 85,
                'avatar' => '..\img\seedPro\papasKraClasic.png',
                'category_id' => 13,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Papas fritas krachitos CA',
                'description' => 'Corte americano',
                'price' => 85,
                'avatar' => '..\img\seedPro\papasKraAmeric.png',
                'category_id' => 13,
                'stock' => 50,
                'promo' => 0,
            ]
        );


      //YERBAS
      DB::table('products')->insert(
          [
              'name' => 'Yerba Cachamate amarilla',
              'description' => '500gr con hierbas',
              'price' => 120,
              'avatar' => '..\img\seedPro\yerbaCachaAma500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Cachamate rosa',
              'description' => '500gr con hierbas',
              'price' => 120,
              'avatar' => '..\img\seedPro\yerbaCachaRos500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Playadito',
              'description' => '500gr pack',
              'price' => 130,
              'avatar' => '..\img\seedPro\yerbaPlaya500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Romance suave',
              'description' => '500gr pack',
              'price' => 150,
              'avatar' => '..\img\seedPro\yerbaRomSua500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );

      DB::table('products')->insert(
          [
              'name' => 'Yerba Andresito',
              'description' => '500gr pack',
              'price' => 130,
              'avatar' => '..\img\seedPro\yerbaAndre500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Piporé',
              'description' => '500gr pack',
              'price' => 130,
              'avatar' => '..\img\seedPro\yerbaPipo500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Andresito Especial',
              'description' => '500gr pack',
              'price' => 158,
              'avatar' => '..\img\seedPro\yerbaAndreEsp500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Taragui',
              'description' => '500gr pack',
              'price' => 115,
              'avatar' => '..\img\seedPro\yerbaTarag500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba CBSé',
              'description' => '500gr con hierbas serranas',
              'price' => 120,
              'avatar' => '..\img\seedPro\yerbaCbse500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Rosamonte',
              'description' => '500gr Tradicional pack',
              'price' => 132,
              'avatar' => '..\img\seedPro\yerbaRos500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Rosamonte suave',
              'description' => '500gr suave pack',
              'price' => 136,
              'avatar' => '..\img\seedPro\yerbaRosSua500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba Union suave',
              'description' => '500gr pack',
              'price' => 115,
              'avatar' => '..\img\seedPro\yerbaUnionSua500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Yerba La Merced',
              'description' => '500gr Campo y Monte',
              'price' => 225,
              'avatar' => '..\img\seedPro\yerbaLaMer500.png',
              'category_id' => 7,
              'stock' => 50,
              'promo' => 0,
          ]
      );


      //MATECOCIDO
      DB::table('products')->insert(
          [
              'name' => 'Matecocido Crysf x 25',
              'description' => '25 saquitos',
              'price' => 40,
              'avatar' => '..\img\seedPro\mateCrysfx25.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Matecocido Crysf x 50',
              'description' => '50 saquitos',
              'price' => 75,
              'avatar' => '..\img\seedPro\mateCrysfx50.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );

      //TE
      DB::table('products')->insert(
          [
              'name' => 'Te Cachamai hierbas',
              'description' => '4 saquitos',
              'price' => 53,
              'avatar' => '..\img\seedPro\teCachaHier.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Cachamai manzanilla',
              'description' => '4 saquitos',
              'price' => 53,
              'avatar' => '..\img\seedPro\teCachaManz.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Cachamai rosa',
              'description' => '4 saquitos',
              'price' => 55,
              'avatar' => '..\img\seedPro\teCachaRosa.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Cachamai verde',
              'description' => '4 saquitos',
              'price' => 50,
              'avatar' => '..\img\seedPro\teCachaVerd.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );

      DB::table('products')->insert(
          [
              'name' => 'Te Crysf x 50',
              'description' => '50 saquitos',
              'price' => 70,
              'avatar' => '..\img\seedPro\teCrysfx50.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Crysf x 25',
              'description' => '25 saquitos',
              'price' => 40,
              'avatar' => '..\img\seedPro\teCrysfx25.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Taragui x 50',
              'description' => '50 saquitos',
              'price' => 76,
              'avatar' => '..\img\seedPro\teTarax50.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Taragui x 100',
              'description' => '100 saquitos',
              'price' => 155,
              'avatar' => '..\img\seedPro\teTarax100.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Big Ben Boldo',
              'description' => '4 saquitos',
              'price' => 53,
              'avatar' => '..\img\seedPro\teBigBenBol.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te La Virginia x 50',
              'description' => '50 saquitos',
              'price' => 72,
              'avatar' => '..\img\seedPro\teVirx50.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Te Green Hill x 50',
              'description' => '50 saquitos',
              'price' => 85,
              'avatar' => '..\img\seedPro\teGreenx50.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );

      //LACTEOS

      DB::table('products')->insert(
          [
              'name' => 'Leche larga Vida',
              'description' => 'La Serenisima',
              'price' => 78,
              'avatar' => '..\img\seedPro\lecheSereLgVi.png',
              'category_id' => 15,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'leche en polvo entera',
              'description' => 'La Serenisima',
              'price' => 108,
              'avatar' => '..\img\seedPro\lechePolvoSereEnt.png',
              'category_id' => 15,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'leche en polvo descremada',
              'description' => 'La Serenisima',
              'price' => 108,
              'avatar' => '..\img\seedPro\lechePolvoSereDes.png',
              'category_id' => 15,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'leche chocolatada',
              'description' => '200mm Nesquik',
              'price' => 36,
              'avatar' => '..\img\seedPro\chocoNesq200.png',
              'category_id' => 15,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'leche chocolatada',
              'description' => '1lt Cindor',
              'price' => 135,
              'avatar' => '..\img\seedPro\chocoCin.png',
              'category_id' => 15,
              'stock' => 50,
              'promo' => 0,
          ]
      );

      //Azucar
      DB::table('products')->insert(
          [
              'name' => 'Azucar Ledesma 1kg',
              'description' => '1kg Ledesma',
              'price' => 75,
              'avatar' => '..\img\seedPro\azucarLedes.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Azucar Ledesma Light 500g',
              'description' => '500g Light',
              'price' => 75,
              'avatar' => '..\img\seedPro\azucarLightLedes.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'Azucar Domino 1kg',
              'description' => '1kg Domino',
              'price' => 65,
              'avatar' => '..\img\seedPro\azucarDom.png',
              'category_id' => 6,
              'stock' => 50,
              'promo' => 0,
          ]
      );

        //edulcorantes

        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Hileret C. x 100',
                'description' => '100 sobres Clásico',
                'price' => 120,
                'avatar' => '..\img\seedPro\edulHilClasicx100.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Hileret S. x 50',
                'description' => '50 sobres Sweet',
                'price' => 58,
                'avatar' => '..\img\seedPro\edulHilSwx50.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Hileret C. x 50',
                'description' => '50 sobres Clásico',
                'price' => 68,
                'avatar' => '..\img\seedPro\edulHilClasicx50.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Hileret S. x 100',
                'description' => '100 sobres Sweet',
                'price' => 90,
                'avatar' => '..\img\seedPro\edulHilSwx100.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Hileret Z. x 50',
                'description' => '50 sobres Zucra',
                'price' => 75,
                'avatar' => '..\img\seedPro\edulHilZucx50.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Equal Sweet x 50',
                'description' => '50 sobres',
                'price' => 75,
                'avatar' => '..\img\seedPro\edulEqSwx50.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Equal Sweet x 100',
                'description' => '100 sobres Clásico',
                'price' => 147,
                'avatar' => '..\img\seedPro\edulEqSwx100Clasic.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Equal Sweet x 200',
                'description' => '200 sobres',
                'price' => 168,
                'avatar' => '..\img\seedPro\edulEqSwx200.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Equal Sweet x 400',
                'description' => '400 sobres Clásico',
                'price' => 475,
                'avatar' => '..\img\seedPro\edulEqSwx400Clasic.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Semble x 250',
                'description' => '250cm3',
                'price' => 96,
                'avatar' => '..\img\seedPro\edulSemx250.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Semble x 500',
                'description' => '500cm3',
                'price' => 135,
                'avatar' => '..\img\seedPro\edulSemx500.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Chucker x 250',
                'description' => '250cm3',
                'price' => 70,
                'avatar' => '..\img\seedPro\edulChucx250.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Edulcorante Chucker x 500',
                'description' => '500cm3',
                'price' => 135,
                'avatar' => '..\img\seedPro\edulChucx500.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );


        //CAFE
        DB::table('products')->insert(
            [
                'name' => 'Café Cabrales x 20u',
                'description' => '4 saquitos',
                'price' => 140,
                'avatar' => '..\img\seedPro\cafCabSaq20.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Cabrales x 500g',
                'description' => '500grs Colombiano',
                'price' => 450,
                'avatar' => '..\img\seedPro\cafCabColx500.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Dolca Suave',
                'description' => '170grs suave',
                'price' => 195,
                'avatar' => '..\img\seedPro\cafDol170.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Dolca Intenso',
                'description' => '170grs intenso',
                'price' => 195,
                'avatar' => '..\img\seedPro\cafDolInt170.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Bonafide Suave',
                'description' => '250gr intenso',
                'price' => 117,
                'avatar' => '..\img\seedPro\cafBonSua250.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Bonafide Intenso',
                'description' => '250gr suave',
                'price' => 117,
                'avatar' => '..\img\seedPro\cafBonInt250.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Dolca Cortado',
                'description' => '125gr cortado',
                'price' => 115,
                'avatar' => '..\img\seedPro\cafDolCort125.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Dolca Con leche',
                'description' => '125gr con leche',
                'price' => 115,
                'avatar' => '..\img\seedPro\cafDoleche125.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café Cappuccino Cabrales',
                'description' => '125gr instantáneo',
                'price' => 148,
                'avatar' => '..\img\seedPro\cafCabCapu125.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café cápsulas Lungo Dolce',
                'description' => 'Lungo Dolce',
                'price' => 520,
                'avatar' => '..\img\seedPro\capLunDol.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café cápsulas Expresso Dolce',
                'description' => 'Expresso Dolce',
                'price' => 520,
                'avatar' => '..\img\seedPro\capExpDol.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café cápsulas Cortado Dolce',
                'description' => 'Cortado Dolce',
                'price' => 520,
                'avatar' => '..\img\seedPro\capCortDol.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café cápsulas Cappuccino Dolce',
                'description' => 'Cappuccino Dolce',
                'price' => 520,
                'avatar' => '..\img\seedPro\capCapuDol.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Café cápsulas Cabrales',
                'description' => 'cápsulas para nespresso',
                'price' => 520,
                'avatar' => '..\img\seedPro\capCabpNess.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );



        //MALTAS
        DB::table('products')->insert(
            [
                'name' => 'Malta El Posillo pack',
                'description' => '125gr pack',
                'price' => 92,
                'avatar' => '..\img\seedPro\maltaElpoPack.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Malta El Posillo frasco',
                'description' => '170gr frasco',
                'price' => 150,
                'avatar' => '..\img\seedPro\maltaElpoFr.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Malta Maltifé frasco',
                'description' => '170gr frasco',
                'price' => 215,
                'avatar' => '..\img\seedPro\maltaMaltiFr.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Malta Maltifé pack',
                'description' => '125gr pack',
                'price' => 175,
                'avatar' => '..\img\seedPro\maltaMaltiPack.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Melita filtro n2',
                'description' => 'filtro papel n2',
                'price' => 95,
                'avatar' => '..\img\seedPro\maltaMelFil2.png',
                'category_id' => 6,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        //TOMATES

        DB::table('products')->insert(
            [
                'name' => 'Pulpa de tomates Salsati',
                'description' => '520gr Salsati',
                'price' => 50,
                'avatar' => '..\img\seedPro\pulpaToSal.png',
                'category_id' => 8,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Tomate lata Gentleman',
                'description' => 'tomates pelados peritas',
                'price' => 62,
                'avatar' => '..\img\seedPro\lataTomGen.png',
                'category_id' => 8,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Tomate botella Gentleman',
                'description' => '500g Gentleman',
                'price' => 86,
                'avatar' => '..\img\seedPro\botTomGen.png',
                'category_id' => 8,
                'stock' => 50,
                'promo' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Tomate botella Don Fran',
                'description' => '1k Don Francisco',
                'price' => 85,
                'avatar' => '..\img\seedPro\botTomDon.png',
                'category_id' => 8,
                'stock' => 50,
                'promo' => 0,
            ]
        );
          //latas
          DB::table('products')->insert(
              [
                  'name' => 'Lenteja en lata Caracas',
                  'description' => 'lentejas remojadas',
                  'price' => 52,
                  'avatar' => '..\img\seedPro\lataLentCara.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Lenteja en lata La Banda',
                  'description' => 'lentejas remojadas',
                  'price' => 48,
                  'avatar' => '..\img\seedPro\lataLentBan.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );

          DB::table('products')->insert(
              [
                  'name' => 'Lenteja en lata La Banda',
                  'description' => 'lentejas remojadas',
                  'price' => 48,
                  'avatar' => '..\img\seedPro\lataLentBan.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Morrones en lata Marolio',
                  'description' => 'morrones enteros',
                  'price' => 73,
                  'avatar' => '..\img\seedPro\lataMorrMar.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Morrones en lata Caracas',
                  'description' => 'morrones enteros',
                  'price' => 83,
                  'avatar' => '..\img\seedPro\lataMorrCara.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
            [
              'name' => 'Arvejas en lata La Camp',
              'description' => 'arvejas remojadas',
              'price' => 51,
              'avatar' => '..\img\seedPro\lataArvCamp.png',
              'category_id' => 8,
              'stock' => 50,
              'promo' => 0,
            ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Arvejas en lata Caracas',
                  'description' => 'arvejas remojadas',
                  'price' => 35,
                  'avatar' => '..\img\seedPro\lataArvCara.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Arvejas tetrapack',
                  'description' => 'arvejas remojadas',
                  'price' => 35,
                  'avatar' => '..\img\seedPro\tetraArvMol.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Jardinera tetrapack',
                  'description' => 'jardinera Molto',
                  'price' => 39,
                  'avatar' => '..\img\seedPro\tetraJardMol.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );

          DB::table('products')->insert(
              [
                  'name' => 'Choclo Gentleman',
                  'description' => 'Choclo en grano lata',
                  'price' => 95,
                  'avatar' => '..\img\seedPro\lataChoGen.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Choclo cremoso Molto',
                  'description' => 'Choclo cremoso lata',
                  'price' => 37,
                  'avatar' => '..\img\seedPro\lataChoCrMol.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );

          //atun

          DB::table('products')->insert(
              [
                  'name' => 'Atún natural Lomito',
                  'description' => 'Lomito La Campagnola',
                  'price' => 175,
                  'avatar' => '..\img\seedPro\lataAtunDesNatCamp.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Atún desmenuzado en aceite',
                  'description' => 'en aceite Caracas',
                  'price' => 65,
                  'avatar' => '..\img\seedPro\lataAtunDesAceiCara.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Atún desmenuzado en aceite',
                  'description' => 'en aceite El Dique',
                  'price' => 53,
                  'avatar' => '..\img\seedPro\lataAtunDesAceiDiq.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Atún desmenuzado al natural',
                  'description' => 'natural Caracas',
                  'price' => 65,
                  'avatar' => '..\img\seedPro\lataAtunDesNatCara.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Atún desmenuzado al natural',
                  'description' => 'natural El Dique',
                  'price' => 53,
                  'avatar' => '..\img\seedPro\lataAtunDesNatDiq.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );
          DB::table('products')->insert(
              [
                  'name' => 'Atún al natural Cumaná',
                  'description' => 'desmenuzado natural',
                  'price' => 37,
                  'avatar' => '..\img\seedPro\lataAtunDesNatCuma.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );



          DB::table('products')->insert(
              [
                  'name' => 'Durazno en lata Gentleman L.',
                  'description' => 'Bajas calorías',
                  'price' => 99,
                  'avatar' => '..\img\seedPro\lataDurGen.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );

          DB::table('products')->insert(
              [
                  'name' => 'Coctel en lata Gentleman L.',
                  'description' => 'Bajas calorías',
                  'price' => 135,
                  'avatar' => '..\img\seedPro\lataCoctGen.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );

          DB::table('products')->insert(
              [
                  'name' => 'Coctel en lata Gentleman',
                  'description' => 'Coctel de 5 frutas',
                  'price' => 135,
                  'avatar' => '..\img\seedPro\lataCoctGen.png',
                  'category_id' => 8,
                  'stock' => 50,
                  'promo' => 0,
              ]
          );




            //FIDEOS MAROLIO

            DB::table('products')->insert(
                [
                    'name' => 'Fideos Coditos Marolio',
                    'description' => '500gr peso neto.',
                    'price' => 7,
                    'avatar' => '..\img\seedPro\fideosCodMar.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Mostachole Marolio',
                    'description' => '500gr peso neto.',
                    'price' => 7,
                    'avatar' => '..\img\seedPro\fideosMosMar.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Dedalitos Marolio',
                    'description' => '500gr peso neto.',
                    'price' => 7,
                    'avatar' => '..\img\seedPro\fideosDedaMar.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos C. de angel Marolio',
                    'description' => '500gr peso neto.',
                    'price' => 7,
                    'avatar' => '..\img\seedPro\fideosCabAngMar.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //FIDEOS MOLTO

            DB::table('products')->insert(
                [
                    'name' => 'Fideos Mostachole Molto',
                    'description' => '500gr peso neto.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\fideosMosMol.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Dedalitos Molto',
                    'description' => '500gr peso neto.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\fideosDedaMol.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Coditos Molto',
                    'description' => '500gr peso neto.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\fideosCodMol.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Spaghetti Molto',
                    'description' => '500gr peso neto.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\fideosEspaMol.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //GENTLEMAN
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Spaghetti Gentleman',
                    'description' => '500gr peso neto.',
                    'price' => 120,
                    'avatar' => '..\img\seedPro\fideosEspaGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Tallarín Gentleman',
                    'description' => '500gr peso neto.',
                    'price' => 120,
                    'avatar' => '..\img\seedPro\fideosTallGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Bucattini Gentleman',
                    'description' => '500gr peso neto.',
                    'price' => 120,
                    'avatar' => '..\img\seedPro\fideosBucaGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );


            DB::table('products')->insert(
                [
                    'name' => 'Fideos P. Rigatti Gentleman',
                    'description' => '500gr peso neto.',
                    'price' => 120,
                    'avatar' => '..\img\seedPro\fideosPeneGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Moño Gentleman',
                    'description' => '500gr peso neto.',
                    'price' => 120,
                    'avatar' => '..\img\seedPro\fideosMonoGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                ]
            );


            //FIDEOS 308

            DB::table('products')->insert(
                [
                    'name' => 'Fideos Ave María 308',
                    'description' => '500gr peso neto.',
                    'price' => 50,
                    'avatar' => '..\img\seedPro\fideosAvMa308.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Dedalitos 308',
                    'description' => '500gr peso neto.',
                    'price' => 50,
                    'avatar' => '..\img\seedPro\fideosDed308.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Moño 308',
                    'description' => '500gr peso neto.',
                    'price' => 50,
                    'avatar' => '..\img\seedPro\fideosMono308.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Mostachole 308',
                    'description' => '500gr peso neto. 3 Vegetales',
                    'price' => 48,
                    'avatar' => '..\img\seedPro\fideosMosVg308.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Nido espinaca 308',
                    'description' => '500gr peso neto.',
                    'price' => 65,
                    'avatar' => '..\img\seedPro\fideosMonoGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Fideos Nido Morrón 308',
                    'description' => '500gr peso neto.',
                    'price' => 65,
                    'avatar' => '..\img\seedPro\fideosMonoGen.png',
                    'category_id' => 12,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //ARROZ

            DB::table('products')->insert(
                [
                    'name' => 'Arroz Largo fino Molto 1k',
                    'description' => '1k peso neto.',
                    'price' => 70,
                    'avatar' => '..\img\seedPro\arrozLgFinMol1k.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Arroz Largo fino Molto',
                    'description' => '500gr peso neto.',
                    'price' => 36,
                    'avatar' => '..\img\seedPro\arrozLgFinMol500g.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Arroz Amarillo Molto 1k',
                    'description' => '1k peso neto.',
                    'price' => 95,
                    'avatar' => '..\img\seedPro\arrozAmaParMol1k.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Arroz Amarillo Molto',
                    'description' => '500gr peso neto.',
                    'price' => 50,
                    'avatar' => '..\img\seedPro\arrozAmaParMol500g.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Arroz Doble Caro Molto 1k',
                    'description' => '1k peso neto.',
                    'price' => 130,
                    'avatar' => '..\img\seedPro\arrozDblCaroMol1k.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Arroz Doble Caro Molto',
                    'description' => '500gr peso neto.',
                    'price' => 66,
                    'avatar' => '..\img\seedPro\arrozDblCaroMol500g.png',
                    'category_id' => 11,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );


            //VINAGRES
            DB::table('products')->insert(
                [
                    'name' => 'Vinagre de Man. 1lt',
                    'description' => '1lt Molto.',
                    'price' => 66,
                    'avatar' => '..\img\seedPro\vinaManMol1lt.png',
                    'category_id' => 2,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Vinagre de Man.',
                    'description' => '500cm3 Menoyo.',
                    'price' => 39,
                    'avatar' => '..\img\seedPro\vinaManMeno500g.png',
                    'category_id' => 2,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Vinagre Man. 1lt',
                    'description' => '1lt Marolio .',
                    'price' => 57,
                    'avatar' => '..\img\seedPro\vinaManMa1lt.png',
                    'category_id' => 2,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Vinagre Man. 500cm3',
                    'description' => '500cm3 Marolio.',
                    'price' => 41,
                    'avatar' => '..\img\seedPro\vinaManMa500.png',
                    'category_id' => 2,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Vinagre Vin. 1lt',
                    'description' => '1lt Alcazar.',
                    'price' => 55,
                    'avatar' => '..\img\seedPro\vinaVinoAlca1lt.png',
                    'category_id' => 2,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //ACETO
            DB::table('products')->insert(
                [
                    'name' => 'Aceto Menoyo',
                    'description' => '500cm3 contenido neto.',
                    'price' => 178,
                    'avatar' => '..\img\seedPro\acetoMeno.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Aceto Monterrey',
                    'description' => '500cm3 contenido neto.',
                    'price' => 145,
                    'avatar' => '..\img\seedPro\acetoMonte.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Salsa de Soja',
                    'description' => '500cm3 contenido neto.',
                    'price' => 58,
                    'avatar' => '..\img\seedPro\salsaSoja.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //SALES
            DB::table('products')->insert(
                [
                    'name' => 'Sal Gruesa Celusal',
                    'description' => '1k contenido neto.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\salGruesaCelu500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Fina Celusal',
                    'description' => '500gr contenido neto.',
                    'price' => 35,
                    'avatar' => '..\img\seedPro\salFinaCelu500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Gruesa Dique',
                    'description' => '1k contenido neto.',
                    'price' => 30,
                    'avatar' => '..\img\seedPro\salGruesaDiq1k.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Fina Dique',
                    'description' => '500gr contenido neto.',
                    'price' => 15,
                    'avatar' => '..\img\seedPro\salFinaDiq500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Fina Marolio',
                    'description' => '500gr contenido neto.',
                    'price' => 15,
                    'avatar' => '..\img\seedPro\salFinaMar500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Parrillera pack',
                    'description' => '1k Marolio.',
                    'price' => 38,
                    'avatar' => '..\img\seedPro\salParriMar1k.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Sal Parrillera estuche',
                    'description' => '1k Marolio.',
                    'price' => 40,
                    'avatar' => '..\img\seedPro\salParriMarEst1k.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //ADEREZOS
            DB::table('products')->insert(
                [
                    'name' => 'Mayonesa Natura x 250',
                    'description' => '250g contenido neto.',
                    'price' => 42,
                    'avatar' => '..\img\seedPro\mayoNat250.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Mayonesa Natura x 500',
                    'description' => '500g contenido neto.',
                    'price' => 62,
                    'avatar' => '..\img\seedPro\mayoNat500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Mayonesa Mayoliva x 500',
                    'description' => '500g contenido neto.',
                    'price' => 110,
                    'avatar' => '..\img\seedPro\mayoOliv500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Mayonesa Hellmans x 250',
                    'description' => '250g contenido neto.',
                    'price' => 45,
                    'avatar' => '..\img\seedPro\mayoHell250.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Mayonesa Hellmans x 500',
                    'description' => '500g contenido neto.',
                    'price' => 98,
                    'avatar' => '..\img\seedPro\mayoHell500.png',
                    'category_id' => 4,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //Aceitunas
            DB::table('products')->insert(
                [
                    'name' => 'Aceitunas rodajas Nucete',
                    'description' => '180g contenido neto.',
                    'price' => 55,
                    'avatar' => '..\img\seedPro\aceiRodNuc180.png',
                    'category_id' => 1,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Aceitunas rellenas Nucete',
                    'description' => '180g contenido neto.',
                    'price' => 55,
                    'avatar' => '..\img\seedPro\aceiRellNuc180.png',
                    'category_id' => 1,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Aceitunas sin carozo Nucete',
                    'description' => '180g contenido neto.',
                    'price' => 52,
                    'avatar' => '..\img\seedPro\aceiSCNuc180.png',
                    'category_id' => 1,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            DB::table('products')->insert(
                [
                    'name' => 'Aceitunas verdes Gentleman',
                    'description' => '100g contenido neto.',
                    'price' => 39,
                    'avatar' => '..\img\seedPro\aceiCCGen100.png',
                    'category_id' => 1,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );
            DB::table('products')->insert(
              [
                'name' => 'Aceitunas sin carozo ',
                'description' => '100g Gentleman.',
                'price' => 45,
                'avatar' => '..\img\seedPro\aceiSCGen100.png',
                'category_id' => 1,
                'stock' => 50,
                'promo' => 0,
              ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Pepinitos Nucete',
                    'description' => '100g contenido neto.',
                    'price' => 75,
                    'avatar' => '..\img\seedPro\pepiNuc.png',
                    'category_id' => 1,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );

            //BIZCOCHUELO

            DB::table('products')->insert(
              [
                'name' => 'Bizcochuelo Ravana Vain',
                'description' => 'rinde 13 porciones',
                'price' => 95,
                'avatar' => '..\img\seedPro\bizRavVai.png',
               'category_id' => 14,
                'stock' => 50,
                'promo' => 0,
              ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Flan Ravana Vain',
                    'description' => 'rinde 8 porciones',
                    'price' => 10,
                    'avatar' => '..\img\seedPro\flanRavVai.png',
                   'category_id' => 14,
                    'stock' => 50,
                    'promo' => 0,
                ]
            );



    }
}
