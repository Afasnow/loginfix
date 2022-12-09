<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" media="screen" href="{{ asset('js/particles.js-master/demo/css/style.css') }} ">
    <script src="{{ asset('js/vendor.js') }}"></script>
</head>
<body>
    <div class="box">
        <div class="form">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="text" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <input type="submit" value="Login">
        </div>
    </div>
</body>
</html>