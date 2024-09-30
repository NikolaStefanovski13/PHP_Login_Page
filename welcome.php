<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('/pics/91ef23d24d6988257eb7399330f4e7e1.jpg');
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
            font-size: 48px;
            margin-bottom: 20px;
        }

        p {
            font-size: 24px;
            color: lightgray;
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
        <h1>Welcome, <?php echo htmlspecialchars($_GET['username']); ?>!</h1>
        <p>Congratulations on successfully logging in.</p>
        <a href="index.php" class="button">Return to Main Menu</a>
    </div>
</body>

</html>