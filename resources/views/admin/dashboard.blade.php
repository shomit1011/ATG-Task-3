<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="display:flex; justify-content:space-between; padding-top:2em;">
                <h4>Dashboard</h4>
                <p style="padding-top:0.5em;"><a href="{{ route('auth.logout') }}">Logout</a></p>
            </div>
            <p style="padding-top:2em;">Hello, {{ $LoggedUserInfo['name'] }}</p>
        </div>
    </div>

</body>
</html>