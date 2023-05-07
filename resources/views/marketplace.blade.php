@extends('layouts.app')
<title>Marketplace</title>
@section('content')
<link rel="stylesheet" href="{{ asset('css/marketplace.css') }}">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card-deck">
        <div class="card">
          <img src="{{ asset('/dronejr.png') }}" class="card-img-top" alt="Drone JR">
          <div class="card-body">
            <h5 class="card-title">Drone JR</h5>
            <p class="card-text">Carta perteneciente a la facción de La Resistencia, este mortífero dron no dudará en disparar si detecta enemigos cercanos.</p>
            <a href="{{ route('marketplacecheckout', ['card_id' => 1]) }}" class="btn btn-primary">Comprar</a>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('/stealtharmy.png') }}" class="card-img-top" alt="Stealth Army">
          <div class="card-body">
            <h5 class="card-title">Stealth Army</h5>
            <p class="card-text">Bushido Gang, nada que añadir.</p>
            <a href="{{ route('marketplacecheckout', ['card_id' => 2]) }}" class="btn btn-primary">Comprar</a>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('/chunkyboy.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chunky Boy</h5>
            <p class="card-text">Si te lo encuentras, más vale que huyas.</p>
            <a href="{{ route('marketplacecheckout', ['card_id' => 3]) }}" class="btn btn-primary">Comprar</a>
          </div>
        </div>
        <div class="card">
          <img src="{{ asset('/skywalkers.png') }}"  class="card-img-top" alt="Sky Walkers">
          <div class="card-body">
            <h5 class="card-title">Sky Walkers</h5>
            <p class="card-text">Fuerzas especiales de La Resistencia.</p>
            <a href="{{ route('marketplacecheckout', ['card_id' => 4]) }}" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
