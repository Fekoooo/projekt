<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Alap stílusok */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:#00B98E; /* Zöld háttér */
        }

        /* Login konténer */
        .login-container {
            background-color: #ffffff; /* Fehér doboz */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .login-container input:focus {
            border-color: #00B98E;
            outline: none;
            box-shadow: 0 0 5px rgba(39, 174, 96, 0.3);
        }

        .login-container a {
            display: block;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #00B98E;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-container a:hover {
            color: #00B98E;
        }

        .login-container button {
            width: 100%;
            padding: 0.75rem;
            background-color: #00B98E;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #00B98E;
        }

        .login-container .signup {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #333;
        }

        .login-container .signup a {
            color: #00B98E;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .login-container .signup a:hover {
            color: #00B98E;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <a href="#">Forgot password?</a>
            <button type="submit">Login</button>
        </form>
        <div class="signup">
            Don't have an account? <a href="{{ route('register') }}">Signup</a>
        </div>
    </div>
</body>
</html>
