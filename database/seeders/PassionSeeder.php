<?php

namespace Database\Seeders;

use App\Models\PassionModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passions = [

            [
                'title'=>'Airsoft',
                'image'=>'',
                'description'=>'Il mondo dell Airsoft l ho scoperto per puro caso. Dopo anni ed anni passati a giocare a titoli FPS come Call of Duty, Battlefield o Medal Of Honor, finalmente ho potuto cimentarmi in quella che secondo me è una delle migliori discipline sportive degli ultimi anni.'

            ],
            [
                'title'=>'Meccanica',
                'image'=>'',
                'description'=>'Il mondo della meccanica è uno dei mondi che meglio descrive secondo me il progresso del genere umano, tramite lo studio e l ingegno, gli esseri umani nel corso della loro storia sono riusciti a creare dei macchinari di alta precisione che gli hanno permesso di fondare le basi della società e di vincere le sfide che da millenni attanagliavano il nostro genere. Tutto ciò che riguarda modificare, studiare, smontare e rimontare anche solo per imparare o fare manutenzione, è sempre stata un attività che ho amato e da ogni sbaglio ne ho sempre tratto enormi insegnamenti. '

            ],
            [
                'title'=>'Motori',
                'image'=>'',
                'description'=>'Il mondo dei motori è un pò un derivato della mia passione per la meccanica, tuttavia si estende in special modo ai veicoli, qualsiasi esso sia, terra, mare o aria non fa differenza, se fosse per me guiderei qualsiasi mezzo che l umanità ci ha messo a disposizione, oltre a volerne conoscere la storia e le caratteristiche tecniche che gli conferiscono determinate peculiarità.'

            ],
            [
                'title'=>'Coding',
                'image'=>'',
                'description'=>'Il mondo del coding è entrato nella mia vita generalmente da poco tempo, tuttavia ha occupato un posto importante in quello che sono oggi e che vorrei essere domani, ho sempre amato nei racconti fantasy il mondo della magia e di come i maghi o stregoni riescano a governarla e nella vita ho sempre cercato quel qualcosa che potesse essere visto come una magia, il manipolare un mondo dove le regole sei tu a farle, dove puoi dar vita ad un programma che fa delle cose al tuo posto o che ti assiste nei tuoi compiti, quasi come un mago farebbe con un famiglio od un golem. '

            ],
            [
                'title'=>'Videogames',
                'image'=>'',
                'description'=>'I videogames rappresentano un altra mia grande passione, spesso sono la mia valvola di sfogo o un attività che posso condividere con alcuni miei vecchi amici. Oltre a questo aspetto c è da sottolineare che i videogiochi alimentano la mia fantasia da decenni, mi raccontano delle storie meravigliose ed avvincenti, trattano temi ancora di spessore nel mondo odierno, permettono di poter vivere l istanza di un sogno che inseguiamo da anni e cosa più importante, insegnano grandissime lezioni morali.'

            ],
            [
                'title'=>'Stampa 3D',
                'image'=>'',
                'description'=>'la passione della stampa 3D nasce sempre come sottoprodotto della meccanica, con la mia stampante ho proprio la possibilità di poter creare ciò che voglio o di cui ho bisogno per poter soddisfare la mia voglia di creare'

            ],
            [
                'title'=>'Animali',
                'image'=>'',
                'description'=>'Amo tutti gli animali indistintamente, persino quelli che temo. Quando penso ad un mio animale domestico penso sempre come se fosse un membro della mia famiglia, un fratello o addirittura un figlio, mentre tutti gli altri li ammiro rispettosamente. Sono molto animalista e credo che gli animali debbano godere degli stessi diritti di cui godono le persone di un paese civilizzato. Violenza, sfruttamento e sperimentazioni sugli animali sono temi che nel mondo che vorrei non dovrebbero nemmeno esistere.'

            ],
            




        ];
        foreach ($passions as $passion) {
            $newPassion = new PassionModel();
            $newPassion->fill($passion);
            $newPassion->save();
        }
    }
}
