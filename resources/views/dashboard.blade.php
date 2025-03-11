<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            background-color: #343a40;
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
        .content .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .content .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .content .card p {
            font-size: 14px;
            color: #666;
        }
     
    </style>
</head>
<body>
    <!-- Oldalsó navigáció -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ route('fooldal') }}" class="active">Főoldal</a>
        <a href="#">Profil</a>
        <a href="#">Beállítások</a>
        <!-- Kijelentkezési gomb -->
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 10px;">
            @csrf
            <button type="submit" class="logout-button">Kijelentkezés</button>
        </form>
    </div>

    <!-- Fő tartalom -->
    <div class="main-content">
        <!-- Fejléc -->
        <div class="header">
            <h1>Üdvözlünk a Dashboardon!</h1>
            <div class="user-info">
                <img src="img/avatar.png" alt="Profilkép">
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>

        <!-- Tartalom -->
        <div class="content">
            <h2>Áttekintés</h2>
            <div class="card">
                <h3>Statisztikák</h3>
                <p>Itt láthatod a legfrissebb statisztikákat.</p>
            </div>
            <div class="card">
                <h3>Feladatok</h3>
                <p>Ne felejtsd el elvégezni a mai feladataidat!</p>
            </div>
        </div>
    </div>
</body>
</html>
