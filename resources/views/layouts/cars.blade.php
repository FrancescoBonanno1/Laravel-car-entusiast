@extends('layouts.app')
@section('content')
<section id="cardHolder">
  {{-- <button id="RaceB">Race Button</button> --}}
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
<audio id="player" controls autoplay>
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

function RaceMode(index) {
    cards.forEach((card, i) => {
      if (i === index && cards.raceCar == true) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
      const button3 = document.getElementById('RaceB').addEventListener("click", RaceMode);
    })};

</script>

<style>
main{
    background-image: url("/img/red.png");
    background-size:cover;
}
.card{
    background-color: rgba(119, 118, 118, 0.466);
    width: 50%;
    height: 60%;
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
    position: relative;
}
#next{
  position: absolute;
  left: 70%;
  bottom: 9%;
}
#previous{
  position: absolute;
  left: 25%;
  bottom: 9%;
}
#player{
  position: absolute;
  right: 4%;
  top: 7%;
  display: none;
}
</style>
@endsection