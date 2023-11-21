@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Elenco Treni</h1>

        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">in ritardo</th>
                        <th scope="col">cancellato</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>{{$train->azienda}}</td>
                            <td>{{$train->stazione_partenza}}</td>
                            <td>{{$train->stazione_arrivo}}</td>
                            <td>{{$train->orario_partenza}}</td>
                            <td>{{$train->orario_arrivo}}</td>
                            <td>{{$train->codice_treno}}</td>
                            <td>{{$train->numero_carrozze}}</td>
                            <td>{{$train->is_delayed ? 'Si' : 'No'}}</td>
                            <td>{{$train->is_deleted ? 'Si' : 'No'}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
