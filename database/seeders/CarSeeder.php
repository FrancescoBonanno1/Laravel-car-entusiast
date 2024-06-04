<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Supra',
                'raceCar'=>'0',
                'image'=> 'suprawet.jpg',
                'maker' => 'Toyota',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Toyota Supra è diventata un icona grazie alla sua potenza e al design distintivo. È stata prodotta dal 1978 al 2002, ma i modelli degli anni 90 sono particolarmente ricercati dagli appassionati.',
            ],
            [
                'name' => 'Skyline GT-R',
                'raceCar'=>'0',
                'image'=> 'skylineGTR.jpg',
                'maker' => 'Nissan',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Nissan Skyline GT-R è leggendaria per le sue prestazioni e il suo dominio nelle gare di drift e di velocità. La versione del 1999, conosciuta come R34, è particolarmente popolare tra gli appassionati di auto sportive.',
            ],
            [
                'name' => 'Lancer Evolution',
                'raceCar'=>'0',
                'image'=> 'LancerevoV.jpg',
                'maker' => 'Mitsubishi',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'Il Mitsubishi Lancer Evolution è famoso per le sue vittorie nei rally. La versione del 1998, conosciuta come Evo V, ha guadagnato una reputazione per la sua maneggevolezza e la sua potenza.',
            ],
            [
                'name' => 'NSX',
                'raceCar'=>'0',
                'image'=> 'NSX.jpg',
                'maker' => 'Honda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD/AWD',
                'description' => 'La Honda NSX è stata una delle prime auto sportive giapponesi a sfidare le marche di lusso europee. Offriva un eccezionale combinazione di prestazioni e maneggevolezza.',
            ],
            [
                'name' => 'RX-7',
                'raceCar'=>'0',
                'image'=> 'Rx7.jpg',
                'maker' => 'Mazda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Mazda RX-7 è ammirata per il suo design sportivo e il suo motore rotativo. È diventata un icona degli anni \90 grazie alle sue prestazioni e alla sua agilità.',
            ],
            [
                'name' => '3000GT',
                'raceCar'=>'0',
                'image'=> '3000gt.jpg',
                'maker' => 'Mitsubishi',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Mitsubishi 3000GT, conosciuta anche come GTO in alcuni mercati, offriva tecnologia all avanguardia e prestazioni impressionanti. È stata una delle auto sportive più iconiche degli anni 90.',
            ],
            [
                'name' => 'Impreza WRX',
                'raceCar'=>'0',
                'image'=> 'impreza22b.jpg',
                'maker' => 'Subaru',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Subaru Impreza WRX è famosa per le sue prestazioni su strada e su pista. Ha dominato le competizioni rally degli anni 90 e ha guadagnato una reputazione per la sua affidabilità e la sua maneggevolezza.',
            ],
            [
                'name' => 'Silvia',
                'raceCar'=>'0',
                'image'=> 'Silvia.jpg',
                'maker' => 'Nissan',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Nissan Silvia è conosciuta per la sua maneggevolezza e il suo design sportivo. È diventata una delle scelte preferite per gli appassionati di drifting e tuning.',
            ],
            [
                'name' => 'Celica',
                'raceCar'=>'0',
                'image' => 'celicaFull.jpg',
                'maker' => 'Toyota',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'FWD/AWD',
                'description' => 'La Toyota Celica è stata una delle coupé sportive più popolari degli anni \'90. Offriva un mix di stile, prestazioni e affidabilità che l\'hanno resa una scelta popolare tra gli acquirenti.',
            ],
            [
                'name' => 'RX-8',
                'raceCar'=>'0',
                'image'=> 'Rx8.jpg',
                'maker' => 'Mazda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Mazda RX-8 è stata la successiva evoluzione della leggendaria RX-7. Offriva un design unico a quattro porte e un motore rotativo che la rendeva unica nel suo genere.',
            ],
            [
                'name' => 'Calsonic Nissan GTR (r32)',
                'raceCar'=>'1',
                'image'=> 'calsonic.jpg',
                'maker' => 'Nissan',
                'power' => '600+ hp',
                'drivetrain' => 'AWD',
                'description' => 'La famosa Calsonic Skyline r32 rappresenta la formula vincente dell ingegneria Nissan, con un RB26DETT da 2,6 litri twinturbo sviluppa una potenza che supera i 600 cavalli, unita poi al sistema di ripartizione della coppia ATTESA E-TS ed al sistema di quattro ruote sterzanti Super-Hicas,sbaragliò la competizione in quegli anni, venendo battezzata per sempre dalla stampa con il soprannome di : GODZILLA. ',
            ],
            [
                'name' => 'Suzuki Escudo (Pikes Peak version) Dirt trial car',
                'raceCar'=>'1',
                'image'=> 'Escudo.jpg',
                'maker' => 'Suzuki',
                'power' => '981 hp',
                'drivetrain' => 'AWD',
                'description' => 'La suzuki Escudo è il mostro generato per afrrontare la Pikes Peak International Hill Climb, gara che prevede la risalita del monte Pikes Peak senza limitazioni su specifiche e modello di auto. Detto ciò la Suzuki ha sviluppato una bestia dotata di ben due motori 2,6 litri twinturbo montato su ogni asse, arrivando così a 981 cv di potenza con un peso di 800kg, ottenendo così un rapporto peso/potenza di 0,81kg per cv. Dal lontano 1998 quest auto fa innamorare appassionati di motori grazie alle numerosissime comparse nella serie Gran Turismo. ',
            ],
            [
                'name' => 'Castrol Toms Supra',
                'raceCar'=>'1',
                'image'=> 'castrol_supra.jpg',
                'maker' => 'Toyota',
                'power' => '493 hp',
                'drivetrain' => 'RWD',
                'description' => 'La Castrol Toms Supra è la vettura più iconica della serie Super GT Giapponese, equipaggiata con un motore diverso dal v6 3.0 litri della Supra stradale, cioè un motore 2.0 litri turbo ed un peso di 800 kg, si è da sempre distinta sul circuito, dando notevole filo da torcere alla skyline della Nissan, dando così inizio alla rivalità tra le due case automobilisitche che continua ancora oggi. Famosa in quanto è anche la più bella vettura nel vestire la livrea Castrol',
            ],
            [
                'name' => 'RE Amemiya RX-7 Asparadrink',
                'raceCar'=>'1',
                'image'=> 'RE_rx7.jpg',
                'maker' => 'Mazda',
                'power' => '311 hp',
                'drivetrain' => 'RWD',
                'description' => 'Questa versione preparata da RE Amemiya ha performato in modo eccellente nei campionati della serie GT300 della Super GT Giapponese, equipaggiata con un motore rotativo a tre rotori riesce a sviluppare 311 cavalli con 1100 kg di peso. La RE Amemiya RX7 Asparadrink è un esempio eccellente di ingegneria automobilistica giapponese e di tuning specializzato, che ha lasciato un segno indelebile nel mondo delle corse GT',
            ],
            [
                'name' => 'Alfa Romeo 155 DTM',
                'raceCar'=>'1',
                'image'=> '155.jpg',
                'maker' => 'Alfa Romeo',
                'power' => '400 hp',
                'drivetrain' => 'AWD',
                'description' => 'L alfa romeo 155 SuperTurismo è passata alla storia per essere stata l incubo degli ingegneri tedeschi durante il campionato DTMl, equipafggiata con un sistema di trazione integrale ed un motore da 400cv 2,5 litri. Nota a molti appassionati italiani anche la vicenda di Alessandro Nannini a Singen (Ha fatto bene!).',
            ],
            [
                'name' => 'Lancia Stratos',
                'raceCar'=>'1',
                'image'=> 'lancia.jpg',
                'maker' => 'Lancia',
                'power' => '400 hp',
                'drivetrain' => 'RWD',
                'description' => 'L alfa romeo 155 SuperTurismo è passata alla storia per essere stata l incubo degli ingegneri tedeschi durante il campionato DTMl, equipafggiata con un sistema di trazione integrale ed un motore da 400cv 2,5 litri. Nota a molti appassionati italiani anche la vicenda di Alessandro Nannini a Singen (Ha fatto bene!).',
            ],
        ];

        foreach ($cars as $car) {
            $newCar = new Car();
            $newCar->fill($car);
            $newCar->save();
        }
    }
} 
