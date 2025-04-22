<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemain Bola</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        .logout-form {
            margin-bottom: 20px;
        }
        .logout-form button {
            padding: 8px 16px;
            background-color: #c0392b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-form button:hover {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>

    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <h1>Daftar Pemain Bola</h1>

    <table>
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
