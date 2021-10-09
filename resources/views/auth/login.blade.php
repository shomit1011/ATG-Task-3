<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-4 col-md-offset-4">
                <h4 style="padding-bottom:1.5em;">Login Here</h4>
                <form action="{{ route('auth.check') }}" method="post">

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group" style="padding-bottom:1.5em;">
                        <label>Email</label>
                        <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                        <div class="span text-danger">@error('email'){{ $message }} @enderror</div>
                    </div>
                    <div class="form-group" style="padding-bottom:1.5em;">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <div class="span text-danger">@error('password'){{ $message }} @enderror</div>
                    </div>
                    <div class="button-container" style="padding-top:0.5em;">
                        <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                    </div>
                    
                    <br>
                    <a href="{{ route('auth.register') }}">I don't have an account, create new here!</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>