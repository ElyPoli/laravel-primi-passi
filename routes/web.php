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
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
            ]
        ]
    ];

    return view('home', $data);
});

Route::get('Horror', function () {
    // Array con i dati da passare
    $data = [
        "movieGenres" => [
            [
                "genre" => "Horror",
                "description" => "Il genere horror è noto per il suo intento di spaventare e mettere in tensione il pubblico attraverso l'uso di elementi come mostri, creature sovrannaturali, situazioni terrificanti e suspense. Questi film cercano di suscitare emozioni come la paura, l'ansia e l'orrore nei loro spettatori. L'horror può variare da storie paranormali a film basati su eventi reali o psicologici, offrendo una vasta gamma di esperienze spaventose.",
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
            ]
        ],
        "horror" => [
            [
                "title" => "L'Esorcista",
                "director" => "William Friedkin",
                "year" => 1973,
                "description" => "Una madre lotta per salvare sua figlia da una possessione demoniaca.",
            ],
            [
                "title" => "Shining",
                "director" => "Stanley Kubrick",
                "year" => 1980,
                "description" => "Un uomo assume il compito di sorvegliare un hotel isolato in inverno, ma le cose prendono una piega sinistra.",
            ],
            [
                "title" => "Il Silenzio degli Innocenti",
                "director" => "Jonathan Demme",
                "year" => 1991,
                "description" => "Un giovane agente dell'FBI cerca l'aiuto di un famigerato serial killer per risolvere un caso di omicidio in serie.",
            ],
            [
                "title" => "L'Alba dei Morti Viventi",
                "director" => "George A. Romero",
                "year" => 1978,
                "description" => "Un gruppo di sopravvissuti cerca rifugio da zombie affamati in un centro commerciale.",
            ],
            [
                "title" => "Il Sesto Senso",
                "director" => "M. Night Shyamalan",
                "year" => 1999,
                "description" => "Un giovane ragazzo vede i morti e cerca l'aiuto di uno psicologo per capire la sua maledizione.",
            ]
        ]
    ];

    return view('horror', $data);
});

Route::get('Sci-Fi', function () {
    // Array con i dati da passare
    $data = [
        "movieGenres" => [
            [
                "genre" => "Horror",
                "description" => "Il genere horror è noto per il suo intento di spaventare e mettere in tensione il pubblico attraverso l'uso di elementi come mostri, creature sovrannaturali, situazioni terrificanti e suspense. Questi film cercano di suscitare emozioni come la paura, l'ansia e l'orrore nei loro spettatori. L'horror può variare da storie paranormali a film basati su eventi reali o psicologici, offrendo una vasta gamma di esperienze spaventose.",
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
            ]
        ],
        "sciFi" => [
            [
                "title" => "Blade Runner",
                "director" => "Ridley Scott",
                "year" => 1982,
                "description" => "In un futuro distopico, un ex cacciatore di replicanti è incaricato di ritirare quattro replicanti fuggiti sulla Terra.",
            ],
            [
                "title" => "Interstellar",
                "director" => "Christopher Nolan",
                "year" => 2014,
                "description" => "Un gruppo di astronauti intraprende un viaggio attraverso un wormhole per cercare un nuovo pianeta per l'umanità minacciata dall'estinzione.",
            ],
            [
                "title" => "Matrix",
                "director" => "The Wachowskis",
                "year" => 1999,
                "description" => "Un hacker scopre che il mondo che conosce è una simulazione computerizzata e si unisce a una ribellione per combattere le macchine che lo schiavizzano.",
            ],
            [
                "title" => "Elysium",
                "director" => "Neill Blomkamp",
                "year" => 2013,
                "description" => "In un futuro in cui i ricchi vivono su una stazione spaziale lussuosa, un uomo comune cerca di raggiungere Elysium per guarire una malattia mortale.",
            ],
            [
                "title" => "Inception",
                "director" => "Christopher Nolan",
                "year" => 2010,
                "description" => "Un ladro di mente esperto si immerge in sogno profondo per rubare segreti commerciali, ma questa volta è incaricato di inserire un'idea invece di estrarla.",
            ]
        ]
    ];

    return view('sciFi', $data);
});

Route::get('Commedia', function () {
    // Array con i dati da passare
    $data = [
        "movieGenres" => [
            [
                "genre" => "Horror",
                "description" => "Il genere horror è noto per il suo intento di spaventare e mettere in tensione il pubblico attraverso l'uso di elementi come mostri, creature sovrannaturali, situazioni terrificanti e suspense. Questi film cercano di suscitare emozioni come la paura, l'ansia e l'orrore nei loro spettatori. L'horror può variare da storie paranormali a film basati su eventi reali o psicologici, offrendo una vasta gamma di esperienze spaventose.",
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
            ]
        ],
        "commedia" => [
            [
                "title" => "Una settimana da Dio",
                "director" => "Tom Shadyac",
                "year" => 2003,
                "description" => "Un uomo che riceve poteri divini per una settimana decide di migliorare il mondo a suo modo.",
            ],
            [
                "title" => "La vita è bella",
                "director" => "Roberto Benigni",
                "year" => 1997,
                "description" => "Un uomo cerca di proteggere suo figlio durante l'Olocausto facendogli credere che il campo di concentramento sia un gioco.",
            ],
            [
                "title" => "Forrest Gump",
                "director" => "Robert Zemeckis",
                "year" => 1994,
                "description" => "La storia della vita straordinaria di Forrest Gump, un uomo con un QI inferiore alla media ma con una vita incredibile.",
            ],
            [
                "title" => "C'è posta per te",
                "director" => "Nora Ephron",
                "year" => 1998,
                "description" => "Due persone che si odiano via email si innamorano senza conoscersi nella vita reale.",
            ],
            [
                "title" => "Superbad",
                "director" => "Greg Mottola",
                "year" => 2007,
                "description" => "Due amici cercano di fare tutto il possibile prima del diploma, ma le cose non vanno come previsto.",
            ]
        ]
    ];

    return view('commedia', $data);
});

Route::get('Drammatico', function () {
    // Array con i dati da passare
    $data = [
        "movieGenres" => [
            [
                "genre" => "Horror",
                "description" => "Il genere horror è noto per il suo intento di spaventare e mettere in tensione il pubblico attraverso l'uso di elementi come mostri, creature sovrannaturali, situazioni terrificanti e suspense. Questi film cercano di suscitare emozioni come la paura, l'ansia e l'orrore nei loro spettatori. L'horror può variare da storie paranormali a film basati su eventi reali o psicologici, offrendo una vasta gamma di esperienze spaventose.",
            ],
            [
                "genre" => "Sci-Fi",
                "description" => "Il genere della fantascienza (sci-fi) esplora temi legati alla scienza, alla tecnologia e al futuro. Questi film spesso presentano avanzate tecnologie, esplorazioni spaziali, viaggi nel tempo, mondi futuristici e situazioni ipotetiche che sfidano la realtà. La fantascienza può essere utilizzata per esaminare questioni sociali, etiche e filosofiche e per immaginare un mondo diverso da quello che conosciamo oggi, offrendo una prospettiva affascinante del possibile futuro dell'umanità.",
            ],
            [
                "genre" => "Commedia",
                "description" => "Il genere della commedia ha l'obiettivo principale di far ridere il pubblico. Questi film presentano situazioni divertenti, personaggi esilaranti e dialoghi spiritosi. La commedia può assumere molte forme, tra cui commedie romantiche, commedie nere, commedie slapstick e molto altro. L'obiettivo è far sorridere e ridere gli spettatori, spesso offrendo una pausa dall'ansia e dal dramma della vita quotidiana.",
            ],
            [
                "genre" => "Drammatico",
                "description" => "Il genere drammatico è noto per affrontare temi seri ed emotivi attraverso storie coinvolgenti e complesse. Questi film esplorano le emozioni umane, le relazioni, le sfide personali e le lotte interiori dei personaggi. Possono trattare argomenti come l'amore, la perdita, la lotta per la sopravvivenza, le ambizioni e molto altro. Il dramma mira a suscitare empatia e riflessione negli spettatori, spesso fornendo una rappresentazione autentica e profonda delle sfide della vita.",
            ]
        ],
        "drammatico" => [
            [
                "title" => "Forrest Gump",
                "director" => "Robert Zemeckis",
                "year" => 1994,
                "description" => "La storia della vita straordinaria di Forrest Gump, un uomo con un QI inferiore alla media ma con una vita incredibile.",
            ],
            [
                "title" => "La lista di Schindler",
                "director" => "Steven Spielberg",
                "year" => 1993,
                "description" => "Un uomo cerca di salvare un gruppo di ebrei dalla persecuzione nazista durante l'Olocausto.",
            ],
            [
                "title" => "Il Padrino",
                "director" => "Francis Ford Coppola",
                "year" => 1972,
                "description" => "La storia di una famiglia mafiosa italo-americana e del suo patriarca, Don Vito Corleone.",
            ],
            [
                "title" => "Titanic",
                "director" => "James Cameron",
                "year" => 1997,
                "description" => "La storia di un amore tragico tra due passeggeri del Titanic durante il suo fatidico viaggio inaugurale.",
            ],
            [
                "title" => "Requiem for a Dream",
                "director" => "Darren Aronofsky",
                "year" => 2000,
                "description" => "La storia di un uomo ossessionato dalla ricerca della perfezione nel mondo del ballo.",
            ]
        ]
    ];

    return view('drammatico', $data);
});
