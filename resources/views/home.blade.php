@extends('layouts.app')
<title>Home</title>
@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
        <h2>    <form action="/marketplace"  method="GET">
                    <button class="button" >GO TO THE MARKETPLACE</button>
                </form>
        </h2>
@endsection
