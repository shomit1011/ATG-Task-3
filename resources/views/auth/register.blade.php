<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-4 col-md-offset-4">
                <h4 style="padding-bottom:1em;">Register Here</h4>
                <form action="{{ route('auth.save') }}" method="post">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group" style="padding-bottom:1.5em;">
                        <label>Name</label>
                        <input type="text" pattern="[A-Za-z ]{1,40}" class="form-control" name="name" placeholder="Enter Full Name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group" style="padding-bottom:1.5em;">
                        <label>Email</label>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group" style="padding-bottom:1.5em;">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="button-container" style="padding-top:0.5em;">
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.login') }}">Already have an account, Sign-In here!</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>