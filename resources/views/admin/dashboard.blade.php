<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripify Dashboard</title>
    <link href="img/icon-deal.png" rel="icon">
    <style>
        /* Alap stílusok */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            height: 100vh;
        }

        /* Oldalsó navigációs sáv */
        .sidebar {
            width: 250px;
            background-color: #00B98E;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar a.active {
            background-color: #007bff;
        }
        .sidebar form {
            margin-top: 10px;
        }
        .sidebar button {
            width: 100%;
            padding: 10px;
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .sidebar button:hover {
            background-color: #e60000;
        }

        /* Fő tartalom */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Fejléc */
        .header {
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 20px;
            color: #333;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .user-info span {
            font-size: 16px;
            color: #333;
        }

        /* Tartalom */
        .content {
            padding: 20px;
            flex: 1;
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .content th, .content td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .content th {
            background-color: #f4f4f9;
        }
        .content button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .content button:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <!-- Oldalsó navigáció -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ route('fooldal') }}" class="{{ request()->routeIs('fooldal') ? 'active' : '' }}">Főoldal</a>
        <a href="#" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profil</a>
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 10px;">
            @csrf
            <button type="submit" class="logout-button">Kijelentkezés</button>
        </form>
    </div>

    <!-- Fő tartalom -->
    <div class="main-content">
        <!-- Fejléc -->
        <div class="header">
            <h1>Üdvözlünk a Tripify Dashboardon!</h1>
            <div class="user-info">
                <img src="img/avatar.png" alt="Profilkép">
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>

        <!-- Tartalom -->
        <div class="content">
            <h2>Foglalásaim</h2>
            <!-- Szállásfoglalások -->
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

            <!-- Utazásfoglalások -->
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
