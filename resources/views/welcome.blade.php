<x-layout>

    <x-header title="Benvenuto sulla mia pagina" />
    <div class="container-fluid bg-dark ">
        <div class="row d-flex flex-row-reverse justify-content-center">
            <div class="col-12 col-md-3 mt-5">
                <h3 class="h2-custom text-white">Salve a tutti, mi presento.</h3>
                <p class="text-white">Sono Salvatore Tarda vengo da Giarre un paese che si trova alle pendici dell'Etna,
                    sono un Junior Web Developer con la passione per l'arte e la grafica e anche della programmazione,
                    motivo per cui mi dedico nella creazione di progetti grafici e di siti web. </p>
            </div> 
            <div class="col-12 col-md-3 m-5">
                <div class="card-b card cardCustom ">
                    <a href="{{ route('Bio') }}"><img src="/img/Salvatore.jpg" class="card-img"
                            alt="immagine di profilo"></a>
                </div>
            </div>
                    
            
        </div>
    </div>

    <div class="container fluid d-flex flex-row-reverse justify-content-center">
        <div class="row ">
            <div class="col-12 col-md-6 mt-5">
                <h3 class="h2-custom ">Cosa faccio?</h3>
                <p class="">Mi dedico più verso il front-end-developer "in parole povere è colui che si occupa
                    dello
                    sviluppo dell'interfaccia utente grafica di un sito web attraverso l'uso di HTML, CSS e JavaScript
                    in
                    modo che gli utenti possano visualizzare e interagire con quel sito web", mi è sempre piaciuta la
                    programmazione e per questo motivo ho scelto di intraprendere questa strada, anche grazie ai miei
                    studi
                    in ambito Grafico mi sono voluto avvicinare per poter accomunare queste due passioni e per poterle
                    sfruttare in ambito lavorativo. </p>
            </div>
            <div class="col-12 col-md-6 p-5 mt-5">
                <div class="card-b card cardCustom">
                    <a href="{{ route('WebDeveloper') }}"><img src="/img/AulabPost.jpg" class="card-img"
                            alt="..."></a>
                </div>
            </div>
            <div class="col-12 col-md-3 m-5">
                <div class="card-b card cardCustom ">
                    <a href="{{ route('WebDeveloper') }}"><img src="/img/AulabPost2.jpg" class="card-img"
                            alt="immagine di profilo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row flex-row-reverse justify-content-center">
            <div class="col-12 col-md-3 mt-5">
           

            
                <h3 class="h2-custom text-white">Cosa mi appassiona</h3>
                <p class="text-white">Sono appassionato dell'Arte in ogni sua espressione, mi piace molto andare a
                    vedere le mostre nei musei, ma mi appassiona anche un'altra cosa la Grafica, che dal 2019 mi ha
                    portato a sviluppare un vero e proprio lavoro anche se part-time faccio lavori come grafico, per lo
                    più creo loghi per aziende o privati. Questo lavoro si svolge con la consulenza iniziale verso il
                    cliente e si prosegue con i primi schizzi di come dovrebbe essere il logo, successivamente si inizia
                    con la progettazione e man mano che si avanza nel lavoro si fa vedere il lavoro svolto, ed
                    eventualmente si effettuano le modifiche in base alle richieste del cliente. Fino alla presentazione
                    finale.</p>

                   
            </div>
            <div class="col-12 col-md-3 m-5">
                <div class="card-b card cardCustom ">
                    <a href="{{ route('GraficDesign') }}"><img src="/img/BM.jpg" class="card-img"
                            alt="immagine di profilo"></a>
                </div>
            </div>
        </div>

</x-layout>
