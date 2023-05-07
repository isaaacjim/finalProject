@foreach ($cards as $card)
    <p>Card Name: {{ $card->name }}</p>
    <p>Card ID: {{ $card->id }}</p>
@endforeach
