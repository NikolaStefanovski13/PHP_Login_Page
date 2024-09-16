<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('/pics/b818a747eedd2375822dd1da2b6d26b7.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            margin: 0;
            padding: 0;
            font-family: 'Cinzel Decorative', cursive;
            color: white;
            height: 300vh;
        }

        .content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: gold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 18px;
            margin-bottom: 10px;
            color: lightgray;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        button {
            padding: 15px 30px;
            text-decoration: none;
            background-color: rebeccapurple;
            color: gold;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: 'Cinzel Decorative', cursive;
        }

        button:hover {
            background-color: indigo;
        }

        .button {
            padding: 15px 30px;
            margin: 10px;
            text-decoration: none;
            background-color: rebeccapurple;
            color: gold;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: indigo;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Enter the Realm</h1>
        <form action="login_handler.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="index.php" class="button">Return Home</a>
    </div>
</body>

</html>