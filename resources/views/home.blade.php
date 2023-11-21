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

                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection
