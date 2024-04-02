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
                'maker' => 'Toyota',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Toyota Supra è diventata un icona grazie alla sua potenza e al design distintivo. È stata prodotta dal 1978 al 2002, ma i modelli degli anni 90 sono particolarmente ricercati dagli appassionati.',
            ],
            [
                'name' => 'Skyline GT-R',
                'maker' => 'Nissan',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Nissan Skyline GT-R è leggendaria per le sue prestazioni e il suo dominio nelle gare di drift e di velocità. La versione del 1999, conosciuta come R34, è particolarmente popolare tra gli appassionati di auto sportive.',
            ],
            [
                'name' => 'Lancer Evolution',
                'maker' => 'Mitsubishi',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'Il Mitsubishi Lancer Evolution è famoso per le sue vittorie nei rally. La versione del 1998, conosciuta come Evo V, ha guadagnato una reputazione per la sua maneggevolezza e la sua potenza.',
            ],
            [
                'name' => 'NSX',
                'maker' => 'Honda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD/AWD',
                'description' => 'La Honda NSX è stata una delle prime auto sportive giapponesi a sfidare le marche di lusso europee. Offriva un eccezionale combinazione di prestazioni e maneggevolezza.',
            ],
            [
                'name' => 'RX-7',
                'maker' => 'Mazda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Mazda RX-7 è ammirata per il suo design sportivo e il suo motore rotativo. È diventata un icona degli anni \90 grazie alle sue prestazioni e alla sua agilità.',
            ],
            [
                'name' => '3000GT',
                'maker' => 'Mitsubishi',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Mitsubishi 3000GT, conosciuta anche come GTO in alcuni mercati, offriva tecnologia all avanguardia e prestazioni impressionanti. È stata una delle auto sportive più iconiche degli anni 90.',
            ],
            [
                'name' => 'Impreza WRX',
                'maker' => 'Subaru',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'AWD',
                'description' => 'La Subaru Impreza WRX è famosa per le sue prestazioni su strada e su pista. Ha dominato le competizioni rally degli anni 90 e ha guadagnato una reputazione per la sua affidabilità e la sua maneggevolezza.',
            ],
            [
                'name' => 'Silvia',
                'maker' => 'Nissan',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Nissan Silvia è conosciuta per la sua maneggevolezza e il suo design sportivo. È diventata una delle scelte preferite per gli appassionati di drifting e tuning.',
            ],
            [
                'name' => 'Celica',
                'maker' => 'Toyota',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'FWD/AWD',
                'description' => 'La Toyota Celica è stata una delle coupé sportive più popolari degli anni \'90. Offriva un mix di stile, prestazioni e affidabilità che l\'hanno resa una scelta popolare tra gli acquirenti.',
            ],
            [
                'name' => 'RX-8',
                'maker' => 'Mazda',
                'power' => 'Varia a seconda della versione',
                'drivetrain' => 'RWD',
                'description' => 'La Mazda RX-8 è stata la successiva evoluzione della leggendaria RX-7. Offriva un design unico a quattro porte e un motore rotativo che la rendeva unica nel suo genere.',
            ],
        ];

        foreach ($cars as $car) {
            $newCar = new Car();
            $newCar->fill($car);
            $newCar->save();
        }
    }
}
