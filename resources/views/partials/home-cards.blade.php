<div class="col">
    <div class="card bg-dark text-light p-3">
        <ul>
            <li>Compagnia: <strong>{{ $train->company }}</strong></li>
            <li>Stazione di partenza: <strong>{{ $train->departure_station }}</strong></li>
            <li>Stazione di arrivo: <strong> {{ $train->arrival_station }}</strong></li>
            <li>Orario di partenza: <strong>{{ $train->departure_time }}</strong></li>
            <li>Orario di arrivo <strong>{{ $train->arrival_time }}</strong></li>
            <li>Codice Treno: <strong>{{ $train->train_code }}</strong></li>
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