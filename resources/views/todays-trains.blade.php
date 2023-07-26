@extends('layouts.app')

@section('content')
    <h1 class="text-center">TRENI <br> I treni di oggi: {{ $data }}</h1>
    <div class="container mt-5">
        <div class="card">
            <ul class="list-group">
                @foreach ($trains as $train)
                    <li class="list-group-item">
                        {{ $train->stazione_di_partenza }}, {{ $train->orario_partenza }} - {{ $train->stazione_di_arrivo }}, {{ $train->orario_arrivo }}
                        @if (!$train->in_orario)
                            @if ($train->cancellato)
                                <span><strong>Treno cancellato</strong></span>
                            @else
                                <span><strong>In ritardo di {{ $train->delay }}</strong></span>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection