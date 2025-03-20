@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Klientų sąrašas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Telefonas</th>
                <th>El. paštas</th>
                <th>Įmonė</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->vardas }}</td>
                    <td>{{ $client->pavarde }}</td>
                    <td>{{ $client->telefonas }}</td>
                    <td>{{ $client->el_pastas }}</td>
                    <td>{{ $client->company->pavadinimas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
