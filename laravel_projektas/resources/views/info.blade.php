<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemos Informacija</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Sistemos informacija</h1>
    <ul class="list-group">
        @foreach($data as $key => $value)
            <li class="list-group-item"><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>
