<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripify Dashboard</title>
    <link href="img/icon-deal.png" rel="icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(135deg, #00B98E, #007bff);
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
            display: block;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .sidebar a.active {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .sidebar button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #00B98E, #007bff);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .sidebar button:hover {
            background: linear-gradient(135deg, #007bff, #00B98E);
            transform: scale(1.05);
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .header .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 3px solid #00B98E;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header .user-info span {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            flex: 1;
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .content th,
        .content td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .content th {
            background: linear-gradient(135deg, #00B98E, #007bff);
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .content td {
            background-color: #f9f9f9;
            transition: background-color 0.3s ease;
        }

        .content tr:hover td {
            background-color: #e6f7ff;
        }

        .content button {
            background: linear-gradient(135deg, #00B98E, #007bff);
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .content button:hover {
            background: linear-gradient(135deg, #007bff, #00B98E);
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>
            <img src="img/icon-deal.png" alt="Tripify Logo" style="width: 30px; height: 30px; vertical-align: middle; margin-right: 10px;">
            TRIPIFY
        </h2>
        <a href="{{ route('fooldal') }}" class="active">Főoldal</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Kijelentkezés</button>
        </form>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Üdvözlünk a Tripify Dashboardon!</h1>
            <div class="user-info">
                <img src="img/avatar.png" alt="Profilkép">
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="content">
            <h2>Foglalásaim</h2>
            @if($bookings->isEmpty())
                <p>Nincs aktív szállásfoglalásod.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Szállás</th>
                            <th>Kezdő Dátum</th>
                            <th>Befejező Dátum</th>
                            <th>Művelet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->property->name }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td>
                                    <form action="{{ route('cancel-booking', $booking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Lemondás</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <h2>Utazásaim</h2>
            @if($tripBookings->isEmpty())
                <p>Nincs aktív utazásfoglalásod.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Úticél</th>
                            <th>Indulási Dátum</th>
                            <th>Érkezési Dátum</th>
                            <th>Művelet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tripBookings as $tripBooking)
                            <tr>
                                <td>{{ $tripBooking->trip->destination }}</td>
                                <td>{{ $tripBooking->start_date }}</td>
                                <td>{{ $tripBooking->end_date }}</td>
                                <td>
                                    <form action="{{ route('cancel-trip-booking', $tripBooking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Lemondás</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>

</html>
