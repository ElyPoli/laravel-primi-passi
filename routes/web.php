<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Array con i dati da passare
    $data = [
        "movieGenres" => [
            [
                "genre" => "Horror",
                "description" => "Il genere horror è noto per il suo intento di spaventare e mettere in tensione il pubblico attraverso l'uso di elementi come mostri, creature sovrannaturali, situazioni terrificanti e suspense. Questi film cercano di suscitare emozioni come la paura, l'ansia e l'orrore nei loro spettatori. L'horror può variare da storie paranormali a film basati su eventi reali o psicologici, offrendo una vasta gamma di esperienze spaventose.",
                "route" => 1
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
                "route" => 2
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
                "route" => 3
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
                "route" => 4
            ]
        ]
    ];

    return view('home', $data);
});
