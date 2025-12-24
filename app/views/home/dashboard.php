<!DOCTYPE html>
<html>

<head>
    <title>Welcome Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            color: #333;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Welcome to School Site</h1>
    <p>Please choose an option:</p>

    <a href="<?= $router->url('login') ?>">Sign In</a>
    <a href="<?= $router->url('register') ?>">Sign Up</a>
</body>

</html>