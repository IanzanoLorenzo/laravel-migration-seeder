@extends('layouts.app')

@section('content')
    <h1 class="text-center">TRENI <br> I treni di oggi: {{ date('d/m/Y', strtotime($data)) }}</h1>
    <div class="container mt-5">
        <div class="card">
            <ul class="list-group">
                @foreach ($trains as $train)
                    <li class="list-group-item">
                        {{ $train->stazione_di_partenza }}, {{ date('H:i', strtotime($train->orario_partenza)) }} - {{ $train->stazione_di_arrivo }}, {{ date('H:i', strtotime($train->orario_arrivo)) }}
                        @if (!$train->in_orario)
                            @if ($train->cancellato)
                                <span><strong>Treno cancellato</strong></span>
                            @else
                                <span><strong>In ritardo di {{ date('i', strtotime($train->delay))  }} minuti</strong></span>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection