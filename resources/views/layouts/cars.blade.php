@extends('layouts.app')
@section('content')
<section id="cardHolder">
@foreach ($cars as $car)
<div class="card">
<h1>{{$car->name}}</h1>
<img src="../img/{{$car->image}}" alt="img">
<h2>{{$car->maker}}</h2>
<span>{{$car->power}}</span>
</div>
@endforeach
<button id="previous"></button>
<button id="next"></button>
<script src="@vite('js/cars.js')"></script>
</section>

<style>
main{
    background-image: url("/img/red.png");
    background-size:cover;
}
.card{
    background-color: rgba(119, 118, 118, 0.466);
    width: 33%;
    height: 33%;
}
#cardHolder{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
}
</style>
@endsection