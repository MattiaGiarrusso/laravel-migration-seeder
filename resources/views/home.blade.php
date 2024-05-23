@extends('layouts.app')

@section('main-content')
    <div>
        <h1>Train</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Treno</th>
                <th scope="col">Binario</th>
                <th scope="col">Partenza</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Orario di arrivo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
              <tr>
                <td>{{ $train->code_train }}</td>
                <td>{{ $train->platform }}</td>
                <td>{{ $train->departure }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival }}</td>
                <td>{{ $train->arrival_time }}</td>
              </tr>
              @endforeach 
            </tbody>
          </table>
@endsection

