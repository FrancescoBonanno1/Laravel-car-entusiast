@extends('layouts.app')
@section('content')
<section id="cardHolder">
@foreach ($cars as $car)
<div class="card">
    <h1>{{$car->name}}</h1>
    <img src="../img/{{$car->image}}" alt="img">
    <h2>{{$car->maker}}</h2>
    <p>{{$car->description}}</p>
    <span>{{$car->power}}</span>
</div>
@endforeach
<button id="next">Successiva</button>
<button id="previous">Precedente</button>
<audio controls autoplay>
  <source src="{{ asset('songs/AnOldBassman.mp3') }}" type="audio/mpeg">
Il tuo browser non supporta il formato audio.
</audio>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Seleziona tutte le carte all'interno del carosello
    const cards = document.querySelectorAll('.card');
    // Variabile per tenere traccia dell'indice della carta corrente
    let currentIndex = 0;

  // Funzione per mostrare una carta specifica e nascondere le altre
  function showCard(index) {
    cards.forEach((card, i) => {
      if (i === index) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  }

  // Funzione per passare alla prossima carta nel carosello
  function nextCard() {
    // Incrementa l'indice corrente e assicurati che rimanga all'interno dei limiti delle carte
    currentIndex = (currentIndex + 1) % cards.length;
    // Mostra la carta corrente
    showCard(currentIndex);
  }

  // Funzione per passare alla carta precedente nel carosello
  function prevCard() {
    // Decrementa l'indice corrente e assicurati che rimanga all'interno dei limiti delle carte
    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    // Mostra la carta corrente
    showCard(currentIndex);
  }

  // Mostra la prima carta all'avvio
  showCard(currentIndex);

  // Crea e aggiungi event listener per i pulsanti "Next" e "Previous"
  const button1= document.getElementById('next').addEventListener("click", nextCard);

  const button2= document.getElementById('previous').addEventListener("click", prevCard);
});
</script>

<style>
main{
    background-image: url("/img/red.png");
    background-size:cover;
}
.card{
    background-color: rgba(119, 118, 118, 0.466);
    width: 50%;
    height: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.card img{
    width: 50%
}
#cardHolder{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
}
</style>
@endsection