<x-layout>

    <x-header title="Benvenuti sulla mia pagina" />
    <div class="container-fluid ">
        <div class="row d-flex flex-row-reverse justify-content-around align-items-center ">
            <div class="col-12 col-md-4 mt-4">
                <h3 class="h2-custom text-center text-bl">Salve a tutti, mi presento.</h3>
                <p class="h6 my-5 text-bl">Sono Salvatore Tarda, vengo da  <a href="https://it.wikipedia.org/wiki/Giarre">
                        Giarre
                    </a> un paese che si trova alle pendici dell'Etna,
                    ma dal 2020 vivo a Roma. Sono un Junior Web Developer e Grafico,
                    con la passione per l'arte, la grafica e la programmazione web, motivo per cui mi dedico alla
                    creazione di progetti grafici e di siti
                    web.
                </p>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <div class="card-b card cardCustom ">
                    <a href="{{ route('Bio') }}"><img src="/img/Salvatore.jpg" class="card-img"
                            alt="immagine di profilo"></a>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid bg-bl mt-5">
        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-12 col-md-4 mt-4">
                <h3 class="h2-custom text-w text-center">Cosa faccio come Web Developer</h3>
                <p class="text-w h6 my-5">Sono un Full-stack developer, ma nello specifico mi occupo del "front-end" (sviluppo dell'interfaccia utente grafica di un sito web) attraverso l'uso di HTML, CSS e JavaScript, in modo che gli utenti possano visualizzare e interagire efficacemente con il sito web.</p>
                
            </div>
            <div class="col-12 col-md-3 mx-5 mt-5">
                <div class="card-b card cardCustom">
                    <a href="{{ route('WebDeveloper') }}"><img src="/img/AulabPost.jpg" class="card-img" alt="..."></a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-12 col-md-3 my-5 mx-md-5">
                <div class="card-b card cardCustom">
                    <a href="{{ route('WebDeveloper') }}"><img src="/img/AulabPost2.jpg" class="card-img" alt="immagine di profilo"></a>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-5 mx-5 mb-4">
                <p class="text-w h6">Inizialmente, il mio obiettivo con la programmazione era quello di ampliare i miei orizzonti lavorativi. Poi, ho compreso che la mia creatività avrebbe potuto trovare molto più spazio unendo alla programmazione le mie competenze da grafico.</p>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid  ">
        <div class="row d-flex justify-content-around align-items-center ">
            <div class="col-12 col-md-3 mt-5">



                <h3 class="h2-custom text-center text-bl">Come mi sono avvicinato alla grafica</h3>
                <p class="h6 my-5 text-bl">Sono appassionato d'arte in ogni sua espressione, interesse scoperto
                    sin da bambino e consolidato con i miei studi. Nel mio tempo libero amo visitare i musei e le gallerie d'arte di Roma. Dall'arte alla grafica, il passo è stato breve. 
                    Dal 2019, infatti, lavoro free-lance come grafico creando loghi per
                    aziende e
                    privati.
                
                </p>


            </div>
            <div class="col-12 col-md-4 mt-4 mb-4">
                <div class="card-b card cardCustom ">
                    <a href="{{ route('GraficDesign') }}"><img src="/img/LOGOSALVATORETARDAtrasp.png" class="card-img"
                            alt="immagine di profilo"></a>
                </div>
            </div>
        </div>

</x-layout>
