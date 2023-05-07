@extends('layouts.app')
<title>Your card</title>
@section('content')
<link rel="stylesheet" href="{{ asset('css/marketplacecheckout.css') }}">
<div class="container">
        @if ($card_id == 1)
        
        <h1>¡Enhorabuena! Has obtenido a Drone JR.</h1>
        <h2><img src="{{ asset('/dronejr.png') }}" class="card-img-top" alt="Drone JR"></h2> 
        
        @elseif ($card_id == 2)
       <h1>¡Enhorabuena! Has obtenido a Stealth Army.</h1>
        <h2><img src="{{ asset('/stealtharmy.png') }}" class="card-img-top" alt="Stealth Army"></h2>
        
        @elseif ($card_id == 3)
        <h1>¡Enhorabuena! Has obtenido a Chunky Boy.</h1>
        <h2><img src="{{ asset('/chunkyboy.png') }}" class="card-img-top" alt="Chunky Boy"></h2>
        
        @else
        <h1>¡Enhorabuena! Has obtenido a Sky Walker.</h1>
        <h2><img src="{{ asset('/skywalkers.png') }}" class="card-img-top" alt="Sky Walkers"></h2>
    
        @endif 
        
        
</div>
        <h2>    
        <form action="{{ route('marketplace') }}">
            <button class="button"> RETURN TO THE MARKETPLACE </button>
        </form>       
        </h2>






@endsection





