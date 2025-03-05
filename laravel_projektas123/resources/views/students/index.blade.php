@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Studentų sąrašas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Gimimo data</th>
                <th>Telefonas</th>
                <th>Adresas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->vardas }}</td>
                    <td>{{ $student->pavarde }}</td>
                    <td>{{ $student->gim_data }}</td>
                    <td>{{ $student->telefonas }}</td>
                    <td>{{ $student->adresas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
