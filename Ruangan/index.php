<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #D7CCC8;
        }
        .form-login {
            width: 500px;
            margin: 100px auto;
            background-color: #EFEBE9;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="form-login">
            <h2 class="text-center mb-3">Login</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</body>
</html>