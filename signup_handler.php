<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $userFound = false;

    foreach ($users as $user) {
        list($stored_email, $stored_username, $stored_password) = explode('=', $user);

        if ($stored_username == $username) {
            $userFound = true;
            $message = '<span style="color:yellow;">Username taken</span>';
            break;
        }

        if ($stored_email == $email) {
            $userFound = true;
            $message = '<span style="color:yellow;">A user with this email already exists</span>';
            break;
        }
    }

    if (!$userFound) {
        $userEntry = $email . '=' . $username . '=' . $password . PHP_EOL;
        file_put_contents('users.txt', $userEntry, FILE_APPEND);
        $message = '<span style="color:green;">Sign up successful!</span>';
    }

    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Status</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('/pics/e9aab86ef896e6cef0eeb9ef4681dc37.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Cinzel Decorative', cursive;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: gold;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
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
        <h1>Sign Up Status</h1>
        $message
        <br><br>
        <a href="index.php" class="button">Return Home</a>
    </div>
</body>
</html>
HTML;
}
