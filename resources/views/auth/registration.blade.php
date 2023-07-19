<!DOCTYPE html>
<html lang="en">

<head>
    @include ('layouts/head')
    <link rel="stylesheet" href="/css/index.css" />
    <script src="/js/script.js"></script>
    <title>Arcis | Register</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-self-center d-flex">
            <div class="col-lg-3">
                <form action="{{route('register-user')}}" method="POST">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <legend>Register</legend>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{old('name')}}" required>
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{old('email')}}" required>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
                <a href="/">Go Back Home</a> || <a href="/login">Have an Acccount?</a>
            </div>
        </div>
    </div>
</body>

</html>