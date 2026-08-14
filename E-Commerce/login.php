<?php session_start(); ?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #fceae8, #ffd6cc);
        }

        .login-box {
            background: #ffffff;
            padding: 40px 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 340px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            color: #333;
            font-size: 22px;
        }

        .login-box input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .login-box input:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 5px rgba(255,107,107,0.3);
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to bottom, #ff8a65, #ff6b6b);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-box button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>
        <form action="auth.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>