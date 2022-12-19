@extends('layouts.app')

@section('title', 'Benvenuto su Feccia Rossa')

@section('content')
    @foreach ($trains as $train)
        <ul>
            <li>Compagnia: {{ $train->company }}</li>
            <li>Stazione di partenza: {{ $train->departure_station }}</li>
            <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
            <li>Orario di partenza: {{ $train->departure_time }}</li>
            <li>Orario di arrivo {{ $train->arrival_time }}</li>
            <li>Codice Treno: {{ $train->train_code }}</li>
            <li>Carrozze: {{ $train->total_carriages_num }}</li>
            <li>
                Treno in orario:
                @if ($train->in_time)
                    Si
                @else
                    No
                @endif
            </li>

            <li>
                Treno Cancellato:
                @if ($train->cancelled)
                    Si
                @else
                    No
                @endif
            </li>
        </ul>
    @endforeach
@endsection