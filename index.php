<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <form action="singup.php" method="get" class="mt-5">
            <h2>Registration</h2>
            <input name="login" type="text" class="form-controle mt-2" placeholder="login" required><br>
            <input name="password" type="password" class="form-controle mt-2" placeholder="password" required><br>
            <button type="submit" class="btn btn-dark mt-3">Submit</button>
        </form>
    </div>

    <div class="container">
        <form action="singin.php" method="get" class="mt-5">
            <h2>Login</h2>
            <input name="login" type="text" class="form-controle mt-2" placeholder="login" required><br>
            <input name="password" type="password" class="form-controle mt-2" placeholder="password" required><br>
            <button type="submit" class="btn btn-dark mt-3">Submit</button>
        </form>
    </div>
</body>
</html>