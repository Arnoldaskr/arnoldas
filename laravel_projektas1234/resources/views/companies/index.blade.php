@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Įmonių sąrašas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
                <th>Kodas</th>
                <th>Adresas</th>
                <th>Telefonas</th>
                <th>El. paštas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->pavadinimas }}</td>
                    <td>{{ $company->kodas }}</td>
                    <td>{{ $company->adresas }}</td>
                    <td>{{ $company->telefonas }}</td>
                    <td>{{ $company->el_pastas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
