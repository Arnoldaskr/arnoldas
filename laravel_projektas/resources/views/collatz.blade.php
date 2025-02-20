<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collatz seka</title>
</head>
<body>
    <h2>Collatz skaičiavimas</h2>

 
    <form action="{{ url('/collatz') }}" method="GET">
        <label for="number">Įveskite skaičių:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Skaičiuoti</button>
    </form>

    @if(isset($number) && isset($sequence))
        <h3>Rezultatas</h3>
        <p>Įvestas skaičius: <strong>{{ $number }}</strong></p>
        <p>Sugeneruota seka: {{ implode(' → ', $sequence) }}</p>
    @endif
</body>
</html>
