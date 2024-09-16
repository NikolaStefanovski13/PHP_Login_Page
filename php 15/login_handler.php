<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $userFound = false;

    foreach ($users as $user) {
        $userParts = explode('=', $user);

        if (count($userParts) == 3) {
            list($stored_email, $stored_username, $stored_password) = $userParts;

            if ($stored_username === $username && password_verify($password, $stored_password)) {
                $userFound = true;
                $_SESSION['username'] = $username;
                break;
            }
        }
    }

    if ($userFound) {
        header("Location: welcome.php?username=" . urlencode($username));
        exit();
    } else {
        $errorMessage = '<span style="color:red;">Wrong username/password</span>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('/pics/9d7e1c69c36c279c1115452e612fca9e.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            margin: 0;
            padding: 0;
            font-family: 'Cinzel Decorative', cursive;
            color: white;
            height: 300vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .error-message {
            color: red;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .button {
            padding: 15px 30px;
            text-decoration: none;
            background-color: rebeccapurple;
            color: gold;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .button:hover {
            background-color: indigo;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        if (isset($errorMessage)) {
            echo '<div class="error-message">' . $errorMessage . '</div>';
        }
        ?>
        <a href="login.php" class="button">Time to Try again</a>
    </div>
</body>

</html>