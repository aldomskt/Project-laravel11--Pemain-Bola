<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemain Bola</title>
</head>
<body>
    <h1>Daftar Pemain Bola</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Klub</th>
                <th>Posisi</th>
                <th>Negara</th>
                <th>Harga Pasar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->club }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->country }}</td>
                <td>£{{ number_format($player->market_value, 0, ',', ',') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
