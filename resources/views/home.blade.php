@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Benvenuto su TRENI <br> Dove vedi i treni che vanno e vengono.</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('todays-train') }}">
                    GUARDA I TRENI DI OGGI
                </a>
            </div>
        </div>
    </div>
@endsection