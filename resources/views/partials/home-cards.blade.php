<div class="col">
    <div class="card bg-dark text-light p-3">
        <ul>
            <li>Codice Treno: <strong>{{ $train->train_code }}</strong></li>
            <li>Compagnia: <strong>{{ $train->company }}</strong></li>
            <li>Stazione di partenza: <strong>{{ $train->departure_station }}</strong></li>
            <li>Stazione di arrivo: <strong> {{ $train->arrival_station }}</strong></li>
            <li>Partenza: <strong>{{ substr_replace($train->departure_time, '', 16, 3)}}</strong></li>
            <li>Arrivo: <strong>{{ substr_replace($train->arrival_time, '', 16, 3) }}</strong></li>
            <li>Carrozze: <strong>{{ $train->total_carriages_num }}</strong></li>
            <li>
                Treno in orario:
                @if ($train->in_time)
                    <strong>Si</strong> 
                @else
                    <strong>No</strong>
                @endif
            </li>
        
            <li>
                Treno Cancellato:
                @if ($train->cancelled)
                    <strong>Si</strong> 
                @else
                    <strong>No</strong>
                @endif
            </li>
        </ul>
    </div>
</div>