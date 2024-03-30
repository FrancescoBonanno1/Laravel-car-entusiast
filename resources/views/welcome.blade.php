@extends('layouts.app')
@section('content')
<h1><center>BENVENUTO SU CAR ENTHUSIAST</center></h1>
<section id="bg">
<div class="white_card">
<p>Car enthusiast è il tributo alla mia più grande passione, il mondo delle auto. Con questo progetto mi presento ed ho intenzione di mostrarvi quelle che per me sono state le migliori auto che siano esistite, sia in termini di prestazioni, che in termini di design, buon divertimento!</p>
</div>
</section>

<style>
#bg{
    background-image: url("/img/gt_one.jpg");
    filter: sepia(75%);
    background-position-y: 71%;
    width: 100vw;
    height: 86.9vh;
}
.white_card{
    background-color:rgba(220 234 247 / 22%);
    width: 100%;
    height: 10%;
    text-align: center;
}
.white_card p{
    font-family: sans-serif;
    font-weight: bold;
    font-size: 1.6rem;

}


</style>
@endsection