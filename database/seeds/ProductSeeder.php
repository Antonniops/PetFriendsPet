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

        DB::table('products')->delete();

        $products = [

           
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
                'nombre' => 'SENSE ADULTO PUPPY SALMÓN Y PAVO 12KG',
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => false

            ],
            [
                
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
                'destacado' => true

            ]

        ];

        foreach($products as $prod){
            Product::create($prod);
        }

        
    }
}
