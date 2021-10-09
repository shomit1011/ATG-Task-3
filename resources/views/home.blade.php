<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="first-container">
            <h4 style="padding-top:3em; padding-left:3em; padding-bottom:2em;">Laravel Authentication System</h4>
            <div class="buttons" style="padding-left:4.5em;">
                <button class="btn btn-primary"><a href="{{ route('auth.register') }}" style="color:white; text-decoration:none;">Sign Up</a></button>
                <button class="btn btn-primary"><a href="{{ route('auth.login') }}" style="color:white; text-decoration:none;">Sign-In</a></button>
            </div>
        </div>
    </div>

</body>
</html>