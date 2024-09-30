<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('/pics/5afef4e2ff186e2464b92810b7312bcb.jpg');
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
            font-family: 'Cinzel Decorative', cursive;
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

        .button-container {
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
            display: inline-block;
            padding: 15px 30px;
            background-color: rebeccapurple;
            color: gold;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            font-family: 'Cinzel Decorative', cursive;
        }

        .button-container a:hover {
            background-color: indigo;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Please create an account</h1>
        <form action="signup_handler.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
        <div class="button-container">
            <a href="index.php">Return Home</a>
        </div>
    </div>
</body>

</html>