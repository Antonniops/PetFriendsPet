<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Stripe\Stripe::setApiKey('sk_test_z54RRPaXuWxGmHckqh5Sv4Rb00wUfvEEAW');

        DB::table('products')->delete();

        $products = [

           
            [
                

                'product_sku' => 'sku_001',
                'nombre' => 'SENSE PUPPY SALMÓN Y PAVO 2KG',
                'descripcion' => 'COMPOSICIÓN: Carne fresca de pavo 20%, salmón fresco 20%, carne deshidratada de pavo 16%, patata, guisantes pelados, aceite de pollo, concentrado de proteínas vegetales, proteína deshidratada de pollo, pulpa de remolacha, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (boniato, zanahoria y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condroitinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 30%, Aceites y grasas brutos 17%, Fibras brutas 2,5%, Materia inorgánica 5,9%, Vitamina A 20000 U.I., Vitamina D3 2000 U.I., Vitamina E (α-tocoferol) 115 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 210 mg (como carbonato ferroso), Yodo 2,5 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 48 mg (como óxido manganoso), Zinc 195 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).',
                'precio' => 16.85,
                'imagen' => 'sensesalmonypavo.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 9.45,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'puppy'

            ],
            [
                'product_sku' => 'sku_002',
                'nombre' => 'SENSE ADULTO POLLO Y PATO 2KG',
                'descripcion' => 'COMPOSICIÓN: Carne fresca de pollo 20%, carne fresca de pato 20%, carne deshidratada de pollo 20%, guisantes pelados, patata, aceite de pollo, pulpa de remolacha, proteína deshidratada de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitinasulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).',
                'precio' => 16.85,
                'imagen' => 'senseadultopolloypato.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_003',
                'nombre' => 'SENSE ADULTO SALMÓN 2KG',
                'descripcion' => 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ',
                'precio' => 16.85,
                'imagen' => 'senseadultosalmon.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_004',
                'nombre' => 'SENSE ADULTO MINI CORDERO 2KG',
                'descripcion' => 'COMPOSICIÓN: carne fresca de cordero 33%, carne deshidratada de cordero 25%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 28%, Aceites y grasas brutos 17 %, Fibras brutas 2,2%, Materia inorgánica 5,9%. Vitamina A 17000 U.I., Vitamina D3 1650 U.I., Vitamina E (α-tocoferol) 112 mg.
                
                ADITIVOS Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 198 mg (como carbonato ferroso), Yodo 2,3 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 47 mg (como óxido manganoso), Zinc 190 mg (como óxido de zinc), Selenio 0,34 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).',
                'precio' => 16.85,
                'imagen' => 'senseadultocordero.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_005',
                'nombre' => 'SENSE ADULTO CORDERO 2KG',
                'descripcion' => 'COMPOSICIÓN: carne fresca de cordero 33 %, carne deshidratada de cordero 22%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15 %, Fibras brutas 2,8%, Materia inorgánica 5,9%. Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg..
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).',
                'precio' => 16.85,
                'imagen' => 'senseadultocordero.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_006',
                'nombre' => 'SENSE ADULTO SALMÓN 12KG',
                'descripcion' => 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ',
                'precio' => 65.45,
                'imagen' => 'senseadultosalmon.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '12',
                'precio_kilogramo' => 5.45,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_007',
                'nombre' => 'SENSE HUMEDO JAVALÍ Y CIERVO 380G',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 7,5%, Aceites y grasas brutos 7%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 78%.


                COMPOSICIÓN: Carnes frescas 76% (ciervo 41%, jabalí 35%), patata, verduras y frutas frescas 4% (boniatos, pimiento rojo y arándanos), aceite de
                salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales,
                plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).',
                'precio' => 2.75,
                'imagen' => 'sensehumedojavaliyciervo.jpg',
                'marca' => 'Sense',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '380',
                'precio_kilogramo' => 7.23,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_008',
                'nombre' => 'SENSE HUMEDO POLLO Y PATO 380G',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 6%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 78%.


                COMPOSICIÓN: Carnes frescas 76% (pollo 44%, pato 32%), patata, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), aceite
                de salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales,
                plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).',
                'precio' => 2.75,
                'imagen' => 'sensehumedopolloypato.jpg',
                'marca' => 'Sense',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '380',
                'precio_kilogramo' => 7.23,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'


            ],
            [
                'product_sku' => 'sku_009',
                'nombre' => 'SENSE ADULTO POLLO Y PATO 12KG',
                'descripcion' => 'COMPOSICIÓN: Carne fresca de pollo 20%, carne fresca de pato 20%, carne deshidratada de pollo 20%, guisantes pelados, patata, aceite de pollo, pulpa de remolacha, proteína deshidratada de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitinasulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).',
                'precio' => 65.45,
                'imagen' => 'senseadultopolloypato.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '12',
                'precio_kilogramo' => 5.45,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_010',
                'nombre' => 'SENSE PUPPY SALMÓN Y PAVO 12KG',
                'descripcion' => 'COMPOSICIÓN: Carne fresca de pavo 20%, salmón fresco 20%, carne deshidratada de pavo 16%, patata, guisantes pelados, aceite de pollo, concentrado de proteínas vegetales, proteína deshidratada de pollo, pulpa de remolacha, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (boniato, zanahoria y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condroitinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 30%, Aceites y grasas brutos 17%, Fibras brutas 2,5%, Materia inorgánica 5,9%, Vitamina A 20000 U.I., Vitamina D3 2000 U.I., Vitamina E (α-tocoferol) 115 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 210 mg (como carbonato ferroso), Yodo 2,5 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 48 mg (como óxido manganoso), Zinc 195 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).',
                'precio' => 65.45,
                'imagen' => 'sensesalmonypavo.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '12',
                'precio_kilogramo' => 5.45,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'puppy'

            ],
            [
                'product_sku' => 'sku_011',
                'nombre' => 'SENSE ADULTO CORDERO 12KG',
                'descripcion' => 'COMPOSICIÓN: carne fresca de cordero 33 %, carne deshidratada de cordero 22%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15 %, Fibras brutas 2,8%, Materia inorgánica 5,9%. Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg..
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).',
                'precio' => 65.45,
                'imagen' => 'senseadultocordero.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '12',
                'precio_kilogramo' => 5.45,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_012',
                'nombre' => 'SENSE HUMEDO CORDERO 380G',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 4,5%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 79%.


                COMPOSICIÓN: Carne fresca de cordero 76%, patata, verduras y frutas frescas 4% (judías verdes y manzana), aceite de salmón 1% (fuente de ácidos
                grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales, plantas aromáticas con propiedades
                antioxidantes naturales 0,02% (romero, tomillo y orégano).',
                'precio' => 2.75,
                'imagen' => 'sensehumedocordero.png',
                'marca' => 'Sense',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '380',
                'precio_kilogramo' => 7.23,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_013',
                'nombre' => 'SENSE HUMEDO PUPPY PAVO Y SALMÓN 380G',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 6,5%, Fibras brutas 1%, Materia inorgánica 1%, Humedad 79%.

                COMPOSICIÓN: Carne fresca de pavo 44%, salmón fresco 32%, patata, verduras y frutas frescas 4% (boniato, zanahoria y manzana), aceite de salmón
                1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales, plantas
                aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).',
                'precio' => 2.75,
                'imagen' => 'sensehumedopuppypavoysalmon.png',
                'marca' => 'Sense',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '380',
                'precio_kilogramo' => 7.23,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'puppy'

            ],
            [
                'product_sku' => 'sku_014',
                'nombre' => 'SENSE HUMEDO SALMÓN 380G',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 7%, Aceites y grasas brutos 6,5%, Fibras brutas 1,5%, Materia inorgánica 1%, Humedad 80%.


                COMPOSICIÓN: Pescados frescos 73% (salmón fresco 40%, arenques frescos 33%), patata, verduras y frutas frescas 4 % (espinacas, zanahoria y
                manzana), aceite de salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM),
                sustancias minerales, plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).',
                'precio' => 2.75,
                'imagen' => 'sensehumedosalmon.jpg',
                'marca' => 'Sense',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '380',
                'precio_kilogramo' => 7.23,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_015',
                'nombre' => 'SENSE ADULTO LIGHT&SENIOR PATO Y PAVO 2KG',
                'descripcion' => 'COMPONENTES ANALÍTICOS: Proteína bruta 24%, Grasa bruta 9%, Fibra bruta 4,8%, Materia Inorgánica 5,9%, Vitamina A 22000 UI/kg, Vitamina D3 2200 UI/kg, Vitamina E (α-tocoferol) 120 mg/kg, Ca 1,5%, P 0,9%, Na 0,11%, E.M. 3322,5 kcal/kg.

                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 750 mg, Glucosamina sulfato 750 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).
                Las carnes frescas de pollo y pato utilizadas en su elaboración son, en su origen, de consumo humano lo que garantiza altos niveles de proteínas de calidad y digestabilidad. El pavo usado en su elaboración es bajo en grasa y, además, es fuente de proteínas y rico en minerales y vitaminas del grupo B. El alimento incorpora fibra digestible para proporcionar sensación de saciedad, así como protectores articulares con el fin de mejorar y mantener un aparato locomotor en buen estado. El contenido calórico de la ración está acorde a las necesidades nutricionales definidas.
                
                COMPOSICIÓN: Carne fresca de pato 20%*, carne fresca de pollo 20%*, carne deshidratada de pavo 18%, guisantes pelados*, patata, almidón de guisante, pulpa de remolacha, proteína deshidratada de pollo, aceite de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones*, arándanos*, mango* y manzana*), fibra vegetal 1% (lignocelulosa, fibra insoluble natural con efecto saciante), aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitina sulfato, Glucosamina sulfato y MSM), L-carnitina 0,1%, yuca, raíz de achicoria (fuente de inulina -FOS-), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano). *Ingredientes naturales.
                
                COMPONENTES ANALÍTICOS: Proteína bruta 24%, Grasa bruta 9%, Fibra bruta 4,8%, Materia Inorgánica 5,9%, Vitamina A 22000 UI/kg, Vitamina D3 2200 UI/kg, Vitamina E (α-tocoferol) 120 mg/kg, Ca 1,5%, P 0,9%, Na 0,11%, E.M. 3322,5 kcal/kg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 750 mg, Glucosamina sulfato 750 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).
                
                MODO DE EMPLEO: Ponga el alimento sobre el comedero dejando siempre agua limpia y fresca a disposición. Si realiza algún cambio de alimentación que se paulatino, a lo largo de 4 o 5 días, para evitar desórdenes intestinales. Mantener el envase bien cerrado en un lugar fresco y seco, lejos del suelo y de la luz directa del sol. No apto para consumo humano. (Ver tabla orientativa).',
                'precio' => 16.85,
                'imagen' => 'senseadultopatoypavo.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'senior'

            ],
            [
                'product_sku' => 'sku_016',
                'nombre' => 'SENSE ADULTO MINI SALMÓN 2KG',
                'descripcion' => 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).

                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.
                
                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ',
                'precio' => 16.85,
                'imagen' => 'senseadultosalmon.png',
                'marca' => 'Sense',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '2',
                'precio_kilogramo' => 8.42,
                'tipo_animal' => 'perro',
                'destacado' => true,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_017',
                'nombre' => 'DICAN RAZAS PEQUEÑAS POLLO Y ARROZ 3KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de razas pequeñas.

                    RICO EN POLLO, FUENTE DE PROTEÍNAS DE ALTO VALOR BIOLÓGICO.
                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA FÁCIL DIGESTIÓN.
                    NIVEL ENERGÉTICO ADAPTADO A NECESIDADES DE RAZAS PEQUEÑAS.
                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.
                
                    Composición:
                    
                    pollo (30,46% fuente de proteínas), maíz, arroz (14%), trigo, aceite de pollo, salvado de trigo, proteínas de ave hidrolizadas, garrofa, sustancias minerales y extractos de plantas (yuca 0,02%).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 18000 U.I., Vitamina D3 1800 U.I., Vitamina E (α-tocoferol) 160 mg. Oligoelementos: Hierro 180 mg (como carbonato ferroso), Yodo 1,8 mg (como yoduro potásico), Cobre 11mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 150 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	28%
                    Materias grasas brutas 	14%
                    Celulosa bruta 	2.4%
                    Cenizas brutas 	8%
                    Energía metabolizable  	3486 Kcal/kg',
                'precio' => 7.95,
                'imagen' => 'dicanpolloyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '3',
                'precio_kilogramo' => 2.65,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_018',
                'nombre' => 'DICAN ATÚN Y ARROZ 3KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta.

                    RICO EN ATÚN, PESCADO AZUL, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO. RICO EN ÁCIDOS GRASOS ω-3, DHA Y EPA. BENEFICIOSO PARA EL CORAZÓN Y EL SISTEMA NERVIOSO.
                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN.
                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS.
                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.
                    
                    Composición:
                    
                    Carnes deshidratadas 20,5%, maíz integral, cebada, fibra de cereal, aceite refinado de ave, pescado azul deshidratado (atún 6%, salmón 4%), arroz 4%, garrofa, salmón hidrolizado 2%, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	26%
                    Aceites y grasas brutos  	12%
                    Fibras brutas 	2,3%
                    Materia inorgánica  	7,9%
                    Calcio 	2.2%
                    Fósforo 	1,1%
                    Vitamina A 	12000 UI/kg
                    Vitamina D3 	1200 UI/kg
                    Vitamina E 	(α-tocoferol) 100 mg/kg',
                'precio' => 7.95,
                'imagen' => 'dicanatunyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '3',
                'precio_kilogramo' => 2.65,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_019',
                'nombre' => 'DICAN CORDERO Y ARROZ 3KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media-alta.

                    RICO EN CORDERO, FUENTE DE PROTEÍNA ALTAMENTE APETECIBLE Y DIGESTIBLE
                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN
                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS
                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES
                
                    Composición:
                    
                    Carnes deshidratadas 31% (cordero 6%), maíz integral, cebada, fibra de cereal, aceite refinado de ave, arroz 4%, pulpa de remolacha, proteína hidrolizada de cordero 2%, garrofa, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	26%
                    Aceites y grasas brutos  	12%
                    Fibras brutas  	2,3%
                    Materia inorgánica  	7,9%
                    Calcio 	2,2%
                    Fósforo 	1,1%
                    Vitamina A 	12000 UI/kg
                    Vitamina D3  	1200 UI/kg
                    Vitamina E 	(α-tocoferol) 100 mg/kg.',
                'precio' => 7.95,
                'imagen' => 'dicancorderoyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '3',
                'precio_kilogramo' => 2.65,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_020',
                'nombre' => 'DICAN BAJO EN CALORIAS SENIOR PAVO Y ARROZ 3KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física baja y perros de edad avanzada, todos ellos con tendencia al sobrepeso.

                    PROTEÍNAS DE HUEVO, APORTE DE AMINOÁCIDOS ESENCIALES.
                    FIBRA NATURAL CON EFECTO DE SACIEDAD.
                    ADECUADO NIVEL ENERGÉTICO PARA CONTROL DE PESO.
                    RECUBIERTO CON SALSA DE HÍGADO APORTANDO UN SABOR IRRESISTIBLE.
                
                    Composición:
                    
                    Maíz integral, carne deshidratada de pavo 20%, arroz, fibra de cereal, aceite de pollo, hígado de pollo ultrahidrolizado, pulpa de remolacha, proteína de maíz, garrofa, huevo, levaduras, sustancias minerales, aceituna 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinalis), Romero 0,01% (Rosmarinus oficinalis).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Oligoelementos: Hierro 155 mg (como carbonato ferroso), Yodo 2,6 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 150 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	4%
                    Aceites y grasas brutos  	8%
                    Materia inorgánica  	7,5%
                    Calcio 	1,9%
                    Fósforo 	1%
                    Vitamina A 	20000 UI/kg
                    Vitamina D3 	1800 UI/kg
                    Vitamina E 	(α-tocoferol) 105 mg/kg
                    Energía metabolizable  	3148 Kcal/kg',
                'precio' => 7.95,
                'imagen' => 'dicanbajoencaloriaspavoyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '3',
                'precio_kilogramo' => 2.65,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'senior'

            ],
            [
                'product_sku' => 'sku_021',
                'nombre' => 'DICAN COMPLETE PAVO Y CALAMAR 3KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta

                    RICO EN PAVO, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO.
                    CON CALAMAR, FUENTE DE PROTEÍNA RICA EN AMINOÁCIDOS ESENCIALES. AYUDA A CONTROLAR EL NIVEL DE COLESTEROL.
                    CON VERDURAS (ZANAHORIAS Y GUISANTES), FUENTE DE VITAMINAS Y MINERALES. AYUDAN A PREVENIR LA RETENCIÓN DE LÍQUIDOS.
                    CROQUETAS DE DIFERENTES FORMAS, MÁS APETECIBLES
                    
                    Composición:
                    
                    maíz, pavo (22,5%), trigo, aceite de pollo, calamar deshidratado (4%), verduras (zanahorias 2%, guisantes 2%), sustancias minerales, garrofa, proteínas de ave hidrolizadas y extractos de plantas (yuca 0,02%).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 12000 U.I., Vitamina D3 1200 U.I., Vitamina E (α-tocoferol) 105 mg. Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	25%
                    Materias grasas brutas 	12%
                    Celulosa bruta 	2.7%
                    Cenizas brutas 	8%',
                'precio' => 7.95,
                'imagen' => 'dicanpavoycalamar.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '3',
                'precio_kilogramo' => 2.65,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_022',
                'nombre' => 'DICAN CORDERO Y ARROZ 14KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media-alta.

                    RICO EN CORDERO, FUENTE DE PROTEÍNA ALTAMENTE APETECIBLE Y DIGESTIBLE
                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN
                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS
                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES
                
                    Composición:
                    
                    Carnes deshidratadas 31% (cordero 6%), maíz integral, cebada, fibra de cereal, aceite refinado de ave, arroz 4%, pulpa de remolacha, proteína hidrolizada de cordero 2%, garrofa, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	26%
                    Aceites y grasas brutos  	12%
                    Fibras brutas  	2,3%
                    Materia inorgánica  	7,9%
                    Calcio 	2,2%
                    Fósforo 	1,1%
                    Vitamina A 	12000 UI/kg
                    Vitamina D3  	1200 UI/kg
                    Vitamina E 	(α-tocoferol) 100 mg/kg.',
                'precio' => 27.95,
                'imagen' => 'dicancorderoyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '14',
                'precio_kilogramo' => 1.99,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_023',
                'nombre' => 'DICAN ATÚN Y ARROZ 14KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta.

                    RICO EN ATÚN, PESCADO AZUL, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO. RICO EN ÁCIDOS GRASOS ω-3, DHA Y EPA. BENEFICIOSO PARA EL CORAZÓN Y EL SISTEMA NERVIOSO.
                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN.
                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS.
                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.
                
                    Composición:
                    
                    Carnes deshidratadas 20,5%, maíz integral, cebada, fibra de cereal, aceite refinado de ave, pescado azul deshidratado (atún 6%, salmón 4%), arroz 4%, garrofa, salmón hidrolizado 2%, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	26%
                    Aceites y grasas brutos  	12%
                    Fibras brutas 	2,3%
                    Materia inorgánica  	7,9%
                    Calcio 	2.2%
                    Fósforo 	1,1%
                    Vitamina A 	12000 UI/kg
                    Vitamina D3 	1200 UI/kg
                    Vitamina E 	(α-tocoferol) 100 mg/kg',
                'precio' => 27.95,
                'imagen' => 'dicanatunyarroz.png',
                'marca' => 'Dican',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '14',
                'precio_kilogramo' => 1.99,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_024',
                'nombre' => 'DICAN COMPLETE PAVO Y CALAMAR 14KG',
                'descripcion' => 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta

                    RICO EN PAVO, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO.
                    CON CALAMAR, FUENTE DE PROTEÍNA RICA EN AMINOÁCIDOS ESENCIALES. AYUDA A CONTROLAR EL NIVEL DE COLESTEROL.
                    CON VERDURAS (ZANAHORIAS Y GUISANTES), FUENTE DE VITAMINAS Y MINERALES. AYUDAN A PREVENIR LA RETENCIÓN DE LÍQUIDOS.
                    CROQUETAS DE DIFERENTES FORMAS, MÁS APETECIBLES
                
                    Composición:
                    
                    maíz, pavo (22,5%), trigo, aceite de pollo, calamar deshidratado (4%), verduras (zanahorias 2%, guisantes 2%), sustancias minerales, garrofa, proteínas de ave hidrolizadas y extractos de plantas (yuca 0,02%).
                    
                    Aditivos:
                    
                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 12000 U.I., Vitamina D3 1200 U.I., Vitamina E (α-tocoferol) 105 mg. Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).
                    
                    Componentes analíticos:
                    Humedad 	10%
                    Proteína bruta 	25%
                    Materias grasas brutas 	12%
                    Celulosa bruta 	2.7%
                    Cenizas brutas 	8%',
                'precio' => 27.95,
                'imagen' => 'dicanpavoycalamar.png',
                'marca' => 'Woolf',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '14',
                'precio_kilogramo' => 1.99,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_025',
                'nombre' => 'WOOLF FILETES DE PAVO 100G',
                'descripcion' => 'Snack natural Woolf Filetes de Pato para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición:  pato(94%), bacalao(20%),almidón (2%), glicerina (0,5%).
                    
                    Análisis químico: Proteína bruta 35%, grasa bruta 6%, fibra bruta 1%, ceniza bruta 3,5%, humedad 25%
                    
                    Presentación: 100gr',
                'precio' => 3.70,
                'imagen' => 'woolfsoftduckfillet.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_026',
                'nombre' => 'WOOLF FILETES DE POLLO 100G',
                'descripcion' => 'Snack natural Woolf Filetes de Pollo para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición: pollo(94%), glicerina (0,5%).
                    
                    Componentes analíticos: Proteína bruta 45%, grasa bruta 4%, fibra bruta 1%, ceniza bruta 3,5%, humedad 25%. 
                    
                    Presentación: 100gr',
                'precio' => 3.70,
                'imagen' => 'woolffiletesdepollo.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_027',
                'nombre' => 'WOOLF DADOS DE SALMÓN 100G',
                'descripcion' => 'Snack natural Woolf dados de salmón para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición:salmón (91%), proteína de guisante (4%), glicerina (3%).
                    
                    Componentes analíticos: Proteína bruta 35%, grasa cruda 8%, fibra cruda 1%, ceniza bruta 4%, humedad 25%. 
                    
                    Presentación: 100gr',
                'precio' => 4.10,
                'imagen' => 'woolfdadosdesalmon.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_028',
                'nombre' => 'WOOLF TWISTER DE PATO 100G',
                'descripcion' => 'Snack natural Woolf Twister de pato para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición: pato (91%), vacuno (4%), glicerina (3%).
                    
                    Componentes analíticos: Proteína bruta 35%, grasa cruda 8%, fibra cruda 1%, ceniza bruta 4%, humedad 25%. 
                    
                    Presentación: 100gr',
                'precio' => 3.70,
                'imagen' => 'woolftwisterdepato.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_029',
                'nombre' => 'WOOLF DADOS DE CORDERO 100G',
                'descripcion' => 'Snack natural Woolf Dados de Cordero para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición: cordero(91%), glicerina (0,5%).
                    
                    Análisis químico: Proteína bruta 35%, grasa bruta 6%, fibra bruta 1%, ceniza bruta 3,2%, humedad 25%
                    
                    Presentación: 100gr',
                'precio' => 4.10,
                'imagen' => 'woolfdadosdecordero.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_030',
                'nombre' => 'WOOLF POLLO CON MARISCO 100G',
                'descripcion' => 'Snack natural Woolf pollo con marisco para perros de cualquier edad o tamaño.

                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.
                    
                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.
                    
                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.
                    
                    Composición:  Pollo (92%), extracto de marisco (1%), glicerina (4%).
                    
                    Componentes analíticos: Proteína bruta 40%, grasa cruda 4%, fibra cruda 1%, ceniza bruta 4%, humedad 30%.
                    
                    Presentación: 100gr',
                'precio' => 4.10,
                'imagen' => 'woolfpolloconmarisco.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '100',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_031',
                'nombre' => 'WOOLF SNACK CEPILLO DENTAL PEQUEÑO 200G',
                'descripcion' => 'Woolf presenta sus nuevos mordedores comestibles para perros Woolfies, unos mordedores en forma de cepillo que promueven la salud dental de tu mascota ya que eliminan el sarro y la placa dental. Una divertida forma de mantener los dientes de tu mascota sin sarro, los mordedores comestibles Woolfies están fabricados con ingredientes comestibles y muy fáciles de digerir. Contribuye a la eliminación del mal aliento y a enfermedades dentales que en muchas ocasiones derivan en la pérdida de las piezas de tu mascota. Se aconseja lavar los dientes de tu mascota a menudo para poder garantizar su salud bucodental, Woolf ha diseñado estos mordedores que tu perro roerá pasando largas horas entretenido aportándole grandes beneficios.

                    Los cepillos dentales Woolfies Dental Brush son para perros de tamaño pequeño-mediano.
                    
                    Composición:
                    
                    -Harina de Patata Dulce
                    
                    -Almidón de Maíz
                    
                    -Almidón Pregelatinizado
                    
                    -Harina de Guisante
                    
                    -Glicerina
                    
                    -Aceite Vegetal
                    
                    -Levadura de Cerveza deshidratada
                    
                    -Carbonato de Calcio
                    
                    -Algas deshidratadas
                    
                    -agua
                    
                    -Aditivos: Ascorbato de Calcio (fuente de vitamina C), celulosa en polvo, sabores naturales, sorbato de Potasio, condroitin, lecitina, pigmentos comestibles
                    
                    -Aditivos nutricionales: Vitamina E. Componentes analíticos: proteína bruta 4,78%, grasa cruda 0,2%, fibra bruta 0,1%, ceniza bruta 0,95%, humedad 18%.
                    
                    Woolf diseña sus productos para beneficiar a tu mascota, tanto sus snacks como sus mordedores son beneficiosos en el día a día de tu mascota.',
                'precio' => 4.95,
                'imagen' => 'woolcepillodentalsmall.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '200',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_032',
                'nombre' => 'WOOLF SNACK CEPILLO DENTAL MEDIANO 200G',
                'descripcion' => 'Mordedores dentales para perros de tamaño mediano, los mordedores Woolfies Dental Brush contribuyen a la eliminación del sarro y la placa en los dientes de tu mascota. Un mordedor que elimina el mal aliento y evita enfermedades dentales que en algunos casos pueden provocar la pérdida de las piezas dentales de las mascotas. Woolf ha diseñado estos originales cepillos que tu mascota roerá haciendo un efecto cepillado en sus dientes y previniendo la aparición del sarro en sus dientes. Sus ingredientes son comestibles y muy digeribles. Woolfiees dental brush está indicado para perros de tamaño mediano-grande.

                    En Woolf Snacks Ibérica te recordamos que es importante limpiar regularmente con cepillo y pasta los dientes de las mascotas para evitar la aparición de sarro y de la placa bacteriana en los dientes de tu mascota. Con la utilización de los Mordedores Woolfies Dental Brush ayudarás a mantener limpia y sin olor la dentadura de tu mascota.
                    
                    Composición:
                    
                    Harina de Patata Dulce, Almidón de Maíz, Almidón Pregelatinizado, Harina de Guisante, Glicerina, Aceite Vegetal, Levadura de Cerveza deshidratada, Carbonato de Calcio, Algas deshidratadas, agua,
                    
                    Aditivos: Ascorbato de Calcio (fuente de vitamina C), celulosa en polvo, sabores naturales, sorbato de Potasio, condroitin, lecitina, pigmentos comestibles,
                    
                    Aditivos nutricionales: Vitamina E. Componentes analíticos: proteína bruta 4,78%, grasa cruda 0,2%, fibra bruta 0,1%, ceniza bruta 0,95%, humedad 18%.
                    
                    Se recomienda ofrecer una pieza al día a perros a partir de los 9 meses de edad cuyo pero sea a partir de 2,5 Kg.',
                'precio' => 4.95,
                'imagen' => 'woolcepillodentalmedium.png',
                'marca' => 'Woolf',
                'categoria' => 'snacks-y-huesos',
                'ud_peso' => 'g',
                'peso_unidad' => '200',
                'precio_kilogramo' => null,
                'tipo_animal' => 'perro',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_033',
                'nombre' => 'MONGE HUMEDO POLLO CON ALOE 80g',
                'descripcion' => 'Composición:

                    Pollo 55%, aloe 5%, arroz, F.O.S. (Fructo-oligosacáridos) 400 mg / kg.

                    Componentes analíticos:

                    Humedad 82%, proteínas crudas 13%, grasas crudas 0,5%, fibras crudas 1%, cenizas crudas 2%.

                    Aditivos nutricionales:

                    Vitamina E (alfa-tocoferol) 50mg / kg.

                    2-3 latas satisfacer las necesidades diarias de un peso promedio de gato. Para ser servido a temperatura ambiente, o calentado. Conservar en el refrigerador después de abrir. No le dé demasiado frío al producto. Siempre deje agua fresca y limpia a disposición del animal.',
                'precio' => 1.75,
                'imagen' => 'mongehumedopolloyaloe.png',
                'marca' => 'Monge',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '80',
                'precio_kilogramo' => null,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'kitten'

            ],
            [
                'product_sku' => 'sku_034',
                'nombre' => 'MONGE HUMEDO ATUN Y MANZANA 80g',
                'descripcion' => 'Composición:

                Atún (Katsuwonus pelamis) 55%, manzana 5%, arroz, F.O.S. (Fructo-oligosacáridos) 400 mg / kg.

                Componentes analíticos:

                Humedad 82%, proteínas crudas 13%, grasas crudas 0,5%, fibras crudas 1%, cenizas crudas 2%.

                Aditivos nutricionales:

                Vitamina E (alfa-tocoferol) 50mg / kg.

                2-3 latas satisfacer las necesidades diarias de un peso promedio de gato. Para ser servido a temperatura ambiente, o calentado. Conservar en el refrigerador después de abrir. No le dé demasiado frío al producto. Siempre deje agua fresca y limpia a disposición del animal.',
                'precio' => 1.75,
                'imagen' => 'mongehumedoatunymanzana.png',
                'marca' => 'Monge',
                'categoria' => 'comida-humeda',
                'ud_peso' => 'g',
                'peso_unidad' => '80',
                'precio_kilogramo' => null,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_035',
                'nombre' => 'MONGE KITTEN RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), maíz, proteínas animales hidrolizadas, pulpa de remolacha, harina de gluten de maíz, ), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada schidigera, escaramujo.

                Componentes analíticos:

                Proteínas Crudas 34,00%, Aceites y Grasas Crudos 20,00%, Grasas Gruesas 2,50%, Cenizas Crudas 6,50%, Cálcio 1,50%, Fósforo 1,10%, Omega 6 Ácidos Grasos Esenciales 8,98%, Omega 3 Ácidos Grasos Esenciales 1,00%, Energía Metabolizable 4,220 Kcal /kg.

                Aditivos nutricionales:

                Vitamina A 26,000 UI, Vitamina D3 1,830 UI, Vitamina E 130 mg, Vitamina B1 12 mg, Vitamina B2 12 mg, Vitamina B6 7 mg, Vitamina B12 0,10 mg, Biotina 0,30 mg, Niacina 46 mg, Vitamina C 200 mg, Ácido pantoténico 12 mg, ácido fólico 16 mg, cloruro de colina 3 000 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8 g, Taurina 0,25%.

                Puede ser administrado libremente, o racionado según el peso y la edad de su gatito. El gatito siempre debe tener agua fresca disponible. Es conveniente dividir la ración diaria en porciones 2/3. Para las hembras lactantes, las croquetas deben administrarse ad libitum, ya que las necesidades del gato varían dependiendo del número de gatitos que tenga.',
                'precio' => 14.30,
                'imagen' => 'mongekittenricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 9.53,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'kitten'

            ],
            [
                'product_sku' => 'sku_036',
                'nombre' => 'MONGE ADULT RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), proteínas animales hidrolizadas, pulpa de remolacha, gluten de maíz, huevo entero en polvo (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yucca schidigera, .

                Componentes analíticos:

                Proteínas Crudas 33,00%, Aceites y Grasas Crudos 14,00%, Fibra Bruta 2,50%, Ceniza Cruda 6,50%, Calcio 1,80%, Fósforo 1,20%, Omega 6 Ácidos Grasos Esenciales 7,00%, Omega 3 Ácidos Grasos Esenciales 0,80%, Energía Metabolizable 3,950 Kcal /kg.

                Aditivos nutricionales:

                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8,8 g, Taurina 0,25%.

                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.',
                'precio' => 13.00,
                'imagen' => 'mongeadultricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_037',
                'nombre' => 'MONGE HAIRBALL RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Pollo (fresco 10%, deshidratado 26%), maíz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), arroz, pulpa de remolacha, harina de gluten de maíz, proteínas animales hidrolizadas, huevo entero ), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada schidigera, escaramujo.

                Componentes analíticos:

                Proteína Cruda 31,00%, Aceites y Grasas Crudos 16,00%, Fibra Bruta 3,50%, Ceniza Cruda 6,50%, Calcio 1,40%, Fósforo 1,00%, Omega 6 Ácidos Grasos Esenciales 10,00%, Omega 3 Ácidos Grasos Esenciales 1,50%, Energía Metabolizable 4,000 Kcal /kg.

                Aditivos nutricionales:

                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8,50 g, Taurina 0,25%.

                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.',
                'precio' => 14.30,
                'imagen' => 'mongehairballricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 9.53,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_038',
                'nombre' => 'MONGE INDOOR RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), pulpa de remolacha, harina de gluten de maíz, proteínas animales hidrolizadas, pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera, escaramujo

                Componentes analíticos:

                Proteína Cruda 29,00%, Aceite y Grasas Crudos 12,00%, Fibra Bruta 3,00%, Ceniza Cruda 6,50%, Calcio 1,25%, Fósforo 0,90%, Omega 6 Ácidos Grasos Esenciales 8,50%, Omega 3 Ácidos Grasos Esenciales 1,00%, Energía Metabolizable 3,840 kcal /kg.

                Aditivos nutricionales:

                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente puro 7,60 g, Taurina 0,25%.

                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible',
                'precio' => 13.30,
                'imagen' => 'mongeindoorricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.86,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_039',
                'nombre' => 'MONGE ESTERILIZADO RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Pollo (fresco 10%, deshidratado 26%), trigo, harina de gluten de maíz, avena, proteínas animales hidrolizadas, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), fibra de guisante insoluble, huevo entero proteínas), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera.

                Componentes analíticos:

                Grasas Grasas 10,00%, Grasas Grises 6,00%, Grasas Gruesas 6,00%, Calcio 1,20%, Fosforo 1,10%, Magnesio 0,08%, Sodio 0,20%, Omega 6 Acidos Grasos Esenciales 8,50%, Omega 3 Grasos Esenciales Ácidos 1,00%, Energía Metabolizable 3,590 Kcal / kg.

                Aditivos nutricionales:

                Vitamina A 32.000 UI, Vitamina D3 1.500 UI, Vitamina E 510 mg, Vitamina B1 22 mg, Vitamina B2 23 mg, Vitamina B6 14 mg, Vitamina B12 0,20 mg, Biotina 0,57 mg, Niacina 100 mg, Vitamina C 360 mg, Ácido pantoténico 22 mg, ácido fólico 31 mg, cloruro de colina 2,500 mg, E5 Sulfato manganeso monohidrato 56 mg, E6 óxido de zinc 260 mg, E4 Sulfato de cobre Pentahidrato 22 mg, E1 Sulfato de hierro monohidrato 185 mg, E8 Selenito sódico 0,37 mg, E2 yodato de calcio 2,80 mg, L - Carnitina 500 mg, DL - metionina técnicamente pura 3,00 g, Taurina 0,25%.

                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.',
                'precio' => 13.90,
                'imagen' => 'mongeesterilizadoricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 9.26,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_040',
                'nombre' => 'MONGE URINARIO RICO EN POLLO 1.5KG',
                'descripcion' => 'Composición:

                Arroz, harina de gluten de maíz, pollo (fresco 5%, deshidratado 18%), pescado (salmón deshidratado), grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), avena, proteínas animales hidrolizadas, guisantes deshidratados, huevo entero polvo (rico en proteínas completas), aceite de pescado (aceite de salmón), taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera.

                Componentes analíticos:

                Proteína Cruda 31,00%, Aceite y Grasas Crudos 16,00%, Fibra Bruta 2,50%, Ceniza Cruda 5,00%, Calcio 0,80%, Fósforo 0,80%, Magnesio 0,06%, Sodio 0,20%, Omega 6 Ácidos Grasos Esenciales 8,50%, Omega 3 Grasos Esenciales Ácidos 1,00%, Energía Metabolizable 4,100 Kcal / kg.

                Aditivos nutricionales:

                Vitamina A 27.000 UI, Vitamina D3 1.500 UI, Vitamina E 510 mg, Vitamina B1 22 mg, Vitamina B2 23 mg, Vitamina B6 14 mg, Vitamina B12 0,20 mg, Biotina 0,57 mg, Niacina 100 mg, Vitamina C 360 mg, Ácido pantoténico 22 mg, ácido fólico 31 mg, cloruro de colina 2,500 mg, E5 Sulfato manganeso monohidrato 56 mg, E6 óxido de zinc 260 mg, E4 Sulfato de cobre Pentahidrato 22 mg, E1 Sulfato de hierro monohidrato 185 mg, E8 Selenito sódico 0,37 mg, E2 yodato de calcio 2,80 mg, L - Carnitina 500 mg, DL - metionina técnicamente pura 3,00 g, Taurina 0,25%.

                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.',
                'precio' => 13.60,
                'imagen' => 'mongeurinarioricoenpollo.png',
                'marca' => 'Monge',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 9.06,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_041',
                'nombre' => 'PURITY HAIRBALL 1.5KG',
                'descripcion' => '76 % DE PROTEÍNAS DE ORIGEN ANIMAL

                COMIDA COMPLETA PARA GATOS ADULTOS DE PELO LARGO
                
                CARNE DE VACUNO - tiene un alto valor biológico y es una de las más completa desde el punto de vista nutricional al contener grandes cantidades de aminoácidos esenciales, hierro y vitamina B2, La carne de res estimula el crecimiento de la masa muscular y afecta favorablemente al sistema inmunológico del organismo.
                
                HÍGADO DE VACUNO - es una fuente importante de vitaminas y minerales. La vitamina B12, junto con el hierro, tienen un efecto positivo sobre la hematopoyesis, En el hígado el hierro se encuentra en forma de hierro hemínico que es más fácil de absorber y aprovechar.
                
                ORTIGA - es un ingrediente activo que facilita la depuración de la sangre y, por tanto, la desintoxicación del cuerpo; incide favorable­ mente en los riñones y la vejiga. Además, contiene el ácido silícico que tiene un efecto muy beneficioso sobre la vitalidad de los huesos, los ojos, los dientes, los cartílagos, el tejido fibroso, los tendones y las articulaciones.
                
                HOJAS DE DIENTE DE LEÓN - estimula la actividad del aparato digestivo y la secreción de jugos gástricos. Tiene beneficios cura­tivos contra la infección de las vías urinarias y los cálculos renales; aumenta la producción y la secreción de la bilis en los trastornos gástricos; aumenta el apetito, estimula la producción de los ácidos gástricos y beneficia positivamente al hígado y a los riñones.
                
                LINAZA - es una excelente fuente de ácidos grasos omega 3 para una piel y un pelaje más sano. Estimula el sistema inmunológico, mejora la capacidad de digestión.
                
                FIBRA - facilita el buen funcionamiento de las paredes intestinales y la desintoxicación del cuerpo para evitar que las toxinas persistan demasiado tiempo en el intestino facilitando de este modo la expul­sión del bezoar formado de pelo.
                
                LEVADURA DE CERVEZA - aumenta el apetito, mejora la digestión y reduce el cansancio. También actúa como repelente.
                
                COMPOSICIÓN:
                
                carne (carne de hígado fresco de vacuno 50 %, carne deshidrata­da de vacuno 13 %, y carne deshidratada de pollo 13 %, hígado de cerdo 4 %), patatas de cultivo, guisantes verdes, grasa de aves, fibra de remolacha, fibra natural, huevos de gallina, linaza 1,5 %, levadura de cerveza 1,3 %, levadura Saccharomyces cerevisiae inactiva, aceite prensado en frío procedente de salmón noruego, complejo de hierbas (hojas de ortiga mayor 0,25 %, hojas de diente de león 0,25 %, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño), manzanas, minerales, alga Schyzochitrium lamacinum, raíz de achicoria, yuca de Mojave.
                
                COMPONENTES ANALÍTICOS:
                
                proteína bruta 31 %, aceites y grasas brutos 19 %, fibras brutas 4,l %, ceniza bruta 6,8 %, calcio 1,1 %, fósforo 0,8 %, sodio 0,4 %.',
                'precio' => 12.60,
                'imagen' => 'purityhairball.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.40,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_042',
                'nombre' => 'PURITY CASTRATE 1.5KG',
                'descripcion' => '80 % DE PROTEÍNAS DE ORIGEN ANIMAL

                COMIDA COMPLETA PARA GATOS ADULTOS CON SOBREPESO, CASTRADOS Y ESTERILIZADOS
                
                CARNE DE POLLO - es ligera, sabrosa y altamente digestible gracias al pequeño diámetro de las fibras musculares y el bajo contenido del colágeno y la elastina. Es rica en hierro y zinc, dos minerales que son muy importantes para oxigenar la sangre y los tejidos, y para una piel más sana del animal. El alto contenido de ácido linoleico contribuye a proteger la piel y es beneficioso para la calidad del pelaje y el sistema reproductivo.
                
                ALFALFA - tiene un efecto positivo en el aparato digestivo y estimu­la la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.
                
                HOJAS DE DIENTE DE LEÓN - estimula la actividad del aparato digestivo y la secreción de jugos gástricos. Tiene beneficios cura­tivos contra la infección de las vías urinarias y los cálculos renales; aumenta la producción y la secreción de la bilis en los trastornos gástricos; aumenta el apetito, estimula la producción de los ácidos gástricos y beneficia positivamente al hígado y a los riñones.
                
                GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.
                
                CARDO MARIANO - contiene antioxidantes, estimula el creci­miento de las células del hígado, es beneficioso para el hígado y le protege de las toxinas.
                
                L-CARNITINA - facilita la eliminación de grasa y ayuda a proteger el miocardio.
                
                COMPOSICIÓN:
                
                carne (carne deshidratada de pollo 27,5 %, carne de pollo fresca 30,5 %, carne deshidratada de pato 6 %, hígado de cerdo 4 %), patatas de cultivo, guisantes verdes, fibra de remolacha, grasa de aves, al­falfa 2,5 %, manzanas, huevos de gallina, levadura de cerveza, leva­dura Saccharomyces cerevisiae inactiva, linaza, grosella negra 1 %, complejo de hierbas (hojas de ortiga mayor 1 %, hojas de diente de león 0,25%, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño), aceite prensa­do en frío procedente del salmón noruego, raíz de achicoria, cardo mariano 0,1 %, alga de agua dulce clorela, yuca de Mojave, complejo de antioxidantes naturales para la regeneración celular.
                
                COMPONENTES ANALÍTICOS:
                
                proteína bruta 35 %, aceites y grasas brutos 12 %, fibras brutas 3,5 %, ceniza bruta 7,4 %, calcio 1,1%, fósforo 0,83 %, sodio 0,33 %.',
                'precio' => 12.60,
                'imagen' => 'puritycastrate.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.40,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_043',
                'nombre' => 'PURITY DELICIOUS 1.5KG',
                'descripcion' => '

                    7l % DE PROTEÍNAS DE ORIGEN ANIMAL
                    
                    ALIMENTO COMPLETO Y MUY SABROSO, PREPARADO CON INGREDIENTES CUIDADOSAMENTE SELECCIONADOS PARA GATOS ADULTOS EXIGENTES
                    
                    LA CARNE DE CAZA - es un alimento nutritivo, fácilmente digerible y bajo en grasas. Es rico en minerales (sodio, potasio, hierro, fósforo) y vitaminas del grupo B. La carne de caza se caracteriza por un aroma y un sabor específicos.
                    
                    MELISA - calma, relaja y mejora la digestión.
                    
                    MANZANILLA - ejerce una influencia positiva en el aparato di­gestivo y el sistema urinario, también tiene efecto antiinflamatorio y antiséptico y reduce la flatulencia. El complejo tiene un efecto positivo en el aparato digestivo y el sistema urinario.
                    
                    ARÁNDANOS - fortalecen la vista, la elasticidad y la firmeza de las paredes de los vasos sanguíneos. Además, tienen un efecto desinfectante que incide positivamente en las enfermedades inflamatorias del aparato digestivo o el sistema urinario.
                    
                    CLORELA- contiene una cantidad significativa de vitaminas, mine­rales y proteínas que afectan positivamente al cuerpo. Retrasa el envejecimiento, tiene un efecto positivo en el hemograma y estimula la desintoxicación.
                    
                    EXTRACTO DE ROMERO - sirve como un antioxidante natural que protege las células musculares del daño causado por los radicales libres, prolonga la vida plena de las células, estimula la función del hígado y mejora la digestión.
                    
                    EL HÍGADO DE JABALÍ - es una fuente importante de vitaminas (A, D y vitaminas del grupo B) y minerales (hierro, zinc, cobre). Gracias a su composición, incide positivamente en la función normal de los glóbulos rojos y la hematopoyesis
                    
                    COMPOSICIÓN:
                    
                    carne (carne de caza fresca 25 %, carne deshidratada de pato 20 %, hígado de cerdo fresco 19 %, carne deshidratada de res y de cerdo 6 %), guisantes verdes, patatas, grasa de aves, fibra de remolacha, hue­vos de gallina, levadura de cerveza, linaza, manzanas, minerales, le­vadura Saccharomyces cerevisiae inactiva, aceite prensado en frío procedente de salmón noruego, complejo de hierbas (hojas de orti­ga mayor, hojas de diente de león, flores de manzanilla de Castilla 0,17%, hojas de melisa 0,17 %, flo­res de tilo norteño), arándanos 1 %, raíz de achicoria, yuca de Mojave, alga de agua dulce clorela 0,05 %.
                    
                    COMPONENTES ANALÍTICOS:
                    
                    proteína bruta 33,5 %, aceites y grasas brutos 20,5 %, fibras brutas 2,3 %, ceniza bruta 8,3 %, calcio 1,5 %, fósforo 1,1 %, sodio 0,4 %.',
                'precio' => 12.99,
                'imagen' => 'puritydelicious.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_044',
                'nombre' => 'PURITY INDOOR 1.5KG',
                'descripcion' => '69% DE PROTEÍNAS DE ORIGEN ANIMAL

                    ALIMENTO COMPLETO PARA GATOS ADULTOS QUE PERMANECEN PREFERENTEMENTE O SIEMPRE EN EL INTERIOR DE LAS CASAS
                    
                    EL PESCADO - es una fuente completa de proteínas, grasas de alto valor biológico, vitaminas A, D y 8 y minerales (fósforo, flúor y sodio). Contiene, sobre todo, yodo, esencial para el normal funcio­namiento de la glándula tiroides.
                    
                    MELISA - calma, relaja y mejora la digestión.
                    
                    YUCA DE MOJAVE - estimula el sistema inmunológico, el hígado y los riñones. Incide en la liberación de gases intestinales y la reduc­ción del mal olor de los excrementos.
                    
                    GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.
                    
                    ALFALFA - tiene un efecto positivo en el aparato digestivo y esti­mula la depuración de los riñones. Es beneficiosa para el metab­olismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.
                    
                    CLORELA - contiene una cantidad significativa de vitaminas, mine­rales y proteínas que afectan positivamente al cuerpo. Retrasa el envejecimiento, tiene un efecto positivo en el hemograma y estimula la desintoxicación.
                    
                    LAS BAYAS DE GOJI - debido a la gran cantidad de beta-caroteno, vitamina C, 81, 82, aminoácidos esenciales y oligoelementos (zinc, selenio, hierro y calcio, etc.), inciden positivamente en las defensas del cuerpo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.
                    
                    COMPOSICIÓN:
                    
                    pescado (arenque fresco 45%, pescado deshidratado 19 % - ba­calao, congrio, sardina, salmón fresco 5 %), patatas, guisantes verdes, grasa de aves, fibra de remolacha, levadura de cerveza, huevos de gallina, aceite prensado en frío procedente de salmón no­ruego, linaza, alfalfa 1,5 %, levadura Saccharomyces cerevisiae inactiva, grosella negra 1 %, compleja de hierbas (hojas de ortiga mayor, hojas de diente de león, flores de man­zanilla de Castilla, hojas de meli­sa 0,17 %, flores de tilo norteño), minerales, raíz de achicoria, bayas de Goji 0,2 %, alga de agua dulce clorela 0,05 %, yuca de Mojave 0,05 %.
                    
                    COMPONENTES ANALÍTICOS:
                    
                    proteína bruta 31 %, aceites y grasas brutas 17,5 %, fibras brutas 2,8 %, ceniza bruta 6,7 %, calcio 0,86 %, fósforo 0,8 %, sodio 0,4 %.',
                'precio' => 12.99,
                'imagen' => 'purityindoor.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ],
            [
                'product_sku' => 'sku_045',
                'nombre' => 'PURITY KITTEN 1.5KG',
                'descripcion' => '86 %  DE PROTEÍNAS DE ORIGEN ANIMAL

                    COMIDA COMPLETA PARA GATITOS HASTA 12 MESES DE EDAD Y GATAS EN GESTACIÓN Y LACTANTES
                    
                    CARNE DE POLLO - es ligera, sabrosa y altamente digestible gracias al pequeño diámetro de las fibras musculares y el bajo contenido del colágeno y la elastina. Es rica en hierro y zinc, dos minerales que son muy importantes para oxigenar la sangre y los tejidos, y para una piel animal sana. El alto contenido de ácido linoleico con­tribuye a proteger la piel y es beneficioso para la calidad del pelaje y el sistema reproductivo.
                    
                    MANZANILLA - ejerce una influencia positiva en el aparato digestivo y el sistema urinario, también tiene efecto antiinflama­torio y antiséptico y reduce la flatulencia. La manzanilla tiene un efecto positivo en el aparato digestivo y el sistema urinario.
                    
                    BAYAS DE GOJI - las vitaminas y los oligoelementos con­tenidos en estos frutos influyen positivamente en las de­fensas del organismo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.
                    
                    JENGIBRE - tiene efecto antiinflamatorio e influye positivamente en la digestión. Facilita también la desintoxicación del cuerpo.
                    
                    EXTRACTO DE ROMERO - sirve para prolongar la vida plena de las células, estimular la función del hígado y mejorar la digestión.
                    
                    HÍGADO DE CERDO - tiene un efecto positivo sobre la hematopoye­sis; además, el hígado contiene hierro altamente absorbible en el organismo.
                    
                    COMPOSICIÓN:
                    
                    carne (carne deshidratada de pollo 24 %, carne de pollo fresca 20 %, hígado de cerdo fresco 19 %, carne deshidratada de pato 8 %, pescado deshidratado 5,6 % - merluza, con­grio y sardina, carne deshidratada de vaca y cerdo 1,7 %), grasa de aves, patatas de cultivo, guisantes verdes, huevos de gallina, fibra de remolacha, manzanas, levadura Saccharomyces cerevisiae inacti­vada, levadura de cerveza, cuajada, semilla de lino, aceite prensado en frío de salmón noruego, complejo de hierbas (hojas de ortiga, hojas de diente de león, flores de manzanilla 0,17 %, hojas de meli­sa, flores de tilo), minerales, raíz de achicoria, bayas Goji 0,2 %, raíz de jengibre 0,1 %,Yucca schidigera.
                    
                    COMPONENTES ANALÍTICOS
                    
                    proteína bruta 38 %, aceites y grasas brutos 22 %, fibras brutas 2 %, ceniza bruta 7,1 %, calcio 1,2 %, fósforo 0,9 %, sodio 0,4 %.',
                'precio' => 12.99,
                'imagen' => 'puritykitten.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'kitten'

            ],

            [
                'product_sku' => 'sku_046',
                'nombre' => 'PURITY SENIOR 1.5KG',
                'descripcion' => '7l % DE PROTEÍNAS DE ORIGEN ANIMAL

                    ALIMENTO COMPLETO PARA GATOS ANCIANOS (MÁS DE 8 AÑOS) CON SUPLEMENTOS NUTRICIONALES PARA UNA BUENA SALUD
                    
                    CARNE DE CONEJO - tiene un valor nutritivo muy alto y con­ tiene una cantidad significativa de proteínas altamente digestibles; además, es baja en grasa y colesterol. En cuanto a los minerales, es una rica fuente de calcio, fósforo, cobre, cobalto y zinc. Por todas las características mencionadas, la carne de conejo es un ingrediente ideal para un pienso bajo en calorías.
                    
                    CARNE DE CORDERO - es una fuente excelente de vitaminas del grupo B, esenciales para las reacciones metabólicas en el cuerpo (por ejemplo, B12 y tiamina). La carne de cordero contiene zinc, esencial para el crecimiento, la curación y un sistema inmunológico saludable.
                    
                    CARDO MARIANO - contiene antioxidantes, estimula el crecímiento de las células del hígado, es beneficioso para el hígado y le protege de las toxinas.
                    
                    ARÁNDANOS - fortalecen la vista, la elasticidad y la firmeza de las paredes de los vasos sanguíneos. Además, tienen efecto desinfec­tante que incide positivamente en las enfermedades inflamatorias del aparato digestivo o el sistema urinario. Otro beneficio que ofrece es el efecto positivo en la consistencia de los excrementos.
                    
                    GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.
                    
                    ALFALFA - tiene un efecto positivo en el aparato digestivo y estimula la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.
                    
                    MEJILLÓN DE LABIOS VERDES - es una fuente natural de tau­rina. Facilita la recuperación de los cartílagos y el líquido sinovial, contribuyendo así a la regeneración del sistema locomotor.
                    
                    COMPOSICIÓN:
                    
                    carne (carne deshidratada de pollo 20 %, carne de conejo fresca 15 %, carne de cordero fresca 15 %, carne deshidratada de cordero 9 %, híga­do de cerdo 4 %), patatas, guisantes verdes, grasa de aves, manzanas, fibra de remolacha, linaza, huevos de gallina, levadura de cerveza, aceite prensado en frío proveni­ente del salmón noruego, levadura Saccharomyces cerevisiae inacti­va, alfalfa 1 %, grosella negra 1 %, complejo de hierbas (hojas de orti­ga mayor, hojas de diente de león, flores de manzanilla de Castilla, hojas de melisa, flores de tilo nor­teño), arándanos 1 %, minerales, raíz de achicoria, mejillones de labios verdes 0,2 %, cardo mariano 0,1 %, Yuca de Mojave, complejo de antioxidantes naturales para la regeneración celular.
                    
                    COMPONENTES ANALÍTICOS:
                    
                    proteína bruta 3,1 %, aceites y grasas brutos 1,1 %, fibras brutas 3,1 %, ceniza bruta 7,6 %, calcio 1,3 %, fósforo 0,95 %, sodio 0,35 %.',
                'precio' => 12.99,
                'imagen' => 'puritysenior.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'senior'

            ],
            [
                'product_sku' => 'sku_047',
                'nombre' => 'PURITY URINARY 1.5KG',
                'descripcion' => '75 % DE PROTEÍNAS DE ORIGEN ANIMAL

                    ALIMENTO COMPLETO PARA GATOS ADULTOS CON UN EFECTO POSITIVO SOBRE EL SISTEMA URINARIO
                    
                    LA CARNE DE PAVO - es ligera, sabrosa y altamente digestible. Se encuentra entre las mayores fuentes de proteínas de alta calidad, necesarias para la regeneración de las células del cuerpo. La carne de pavo es rica en vitaminas del complejo 8, minerales (hierro, cal­cio, selenio y zinc). Gracias al alto contenido de zinc, tiene un efecto positivo sobre los sistemas inmunológico y reproductivo. Además, el zinc, junto con el selenio, pertenece a los minerales capaces de combatir los radicales libres, presentes en el organismo animal todos los días.
                    
                    ORTIGA - es un ingrediente activo que facilita la depuración de la sangre y, por tanto, la desintoxicación del cuerpo; incide favorable­mente en los riñones y la vejiga. Además, contiene el ácido silícico que tiene un efecto muy beneficioso sobre la vitalidad de los huesos, los ojos, los dientes, los cartílagos, el tejido fibroso, los tendones y las articulaciones.
                    
                    TILO - incide positivamente en el aumento de la excreción de orina, jugos gástricos y en una digestión mejor.
                    
                    ARÁNDANOS ROJOS - destacan por sus efectos antibacterianos, son eficaces para combatir las infecciones de las vías urinarias y de los intestinos.
                    
                    LAS BAYAS DE GOJI - debido a la gran cantidad de beta-caroteno, vitamina C, 81, 82, aminoácidos esenciales y oligoelementos (zinc, selenio, hierro y calcio, etc.), inciden positivamente en las defensas del cuerpo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.
                    
                    ALFALFA - tiene un efecto positivo en el aparato digestivo y estimula la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.
                    
                    EXTRACTO DE ROMERO - sirve como un antioxidante natural que protege las células musculares del daño causado por los radicales libres, prolonga la vida plena de las células, estimula la función del hígado y mejora la digestión.
                    
                    COMPOSICIÓN:
                    
                    carne (carne deshidratada de pollo 25 %, carne de pollo fresca 20 %, carne deshidratada de pavo 5 %, hígado de cerdo 4 %, pescado deshidratado 3,5 % - bacalao, congrio y sardina), patatas, gra­sa de aves, guisantes verdes, fibra de remolacha, manzanas, huevos de gallina, levadura de cerveza, aceite prensado en frío procedente del salmón noruego, levadura Saccharomyces cerevi­siae inactiva, linaza, complejo de hierbas (hojas de ortiga mayor 0,25 %, hojas de diente de león, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño 0,16 %), arándanos rojos 1 %, minerales, alfalfa 0,5 %, raíz de achicoria, bayas de Goji 0,2 %, yuca de Mojave.
                    
                    COMPONENTES ANALÍTICOS:
                    
                    proteína bruta 3,1 %, aceites y grasas brutos 20 %, fibras brutas 2,3 %, ceniza bruta 6,7 %, calcio 1 %, fósforo 0,8 %, sodio 0,37 %, magnesio 0,11 %.',
                'precio' => 12.99,
                'imagen' => 'purityurinary.png',
                'marca' => 'Purity',
                'categoria' => 'pienso-seco',
                'ud_peso' => 'kg',
                'peso_unidad' => '1.5',
                'precio_kilogramo' => 8.66,
                'tipo_animal' => 'gato',
                'destacado' => false,
                'edad' => 'adult'

            ]

        ];

        foreach($products as $prod){
          
            Product::create($prod);
        }

        
    }
}
