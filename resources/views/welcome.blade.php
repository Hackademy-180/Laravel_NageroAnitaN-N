<x-layout>


<style>

    body{
        background-image: url('/media/sfondo1.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }




.big-title{

    font-size: 3rem;
    font-weight: 800;
}


.btn-costum{

    background-color: yellow;
    color: red;
    font-weight: bold;
    border-radius: 10px;
}



</style>




<h1 class="big-title text-white">BENVENUTO! LEGGI GLI ARTICOLI!</h1>

<p class="text-white text-center fw-bold fs-4"> In questo blog potrai scrivere articoli, ed aggiungere un tag di riconoscimento per il tuo argomento trattato.</p>

<a href="{{ route('articles.create') }}" class="btn btn-costum">Entrato, lasciaci un tuo pensiero!</a>







</x-layout>