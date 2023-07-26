@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <ul class="list-group">
                @foreach ($trains as $train)
                    <li class="list-group-item">
                        {{ $train->stazione_di_partenza }}, {{ $train->orario_partenza }} - {{ $train->stazione_di_arrivo }}, {{ $train->orario_arrivo }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection