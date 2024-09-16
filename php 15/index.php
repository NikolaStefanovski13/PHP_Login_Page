<!-- had a lot of fun with this homework. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up / Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('/pics/55d828b9c9c06b9eaef9079eba900388.jpg');
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

        p {
            font-size: 18px;
            margin-bottom: 30px;
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
        <h1>Welcome, Weary Traveler</h1>
        <p>How dost thou wish to proceed on thy quest?</p>
        <p>(Scroll down on all pages for the full experience)</p>
        <a href="signup.php" class="button">Initiate to the Mysteries (Sign Up)</a>
        <a href="login.php" class="button">The Practicing Master (Login)</a>
    </div>
</body>

</html>