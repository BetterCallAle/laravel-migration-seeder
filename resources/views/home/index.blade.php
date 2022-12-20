@extends('layouts.app')

@section('title', 'Benvenuto su Feccia Rossa')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">I treni di oggi {{ date('d-m-Y') }}:</h2>
            <div class="row row-cols-3"> 
                @forelse ($trains as $train)
                    @include('partials.home-cards')
                @empty
                    <h2>Non ci sono treni in partenza</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection