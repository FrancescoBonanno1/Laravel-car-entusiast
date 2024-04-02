@extends('layouts.app')
@section('content')
@foreach ($cars as $car)
<h1>{{$car->name}}</h1>
<img src="" alt="img">
<h2>{{$car->maker}}</h2>
<span>{{$car->power}}</span>

    
@endforeach
<style>
main{
    background-image: url("/img/red.png");
    background-size:cover;
}
</style>
@endsection