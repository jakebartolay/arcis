<!DOCTYPE html>
<html lang="en">

<head>
    @include ('layouts/head')
    <link rel="stylesheet" href="/css/index.css" />
    <script src="/js/script.js"></script>
    <title>Arcis | Register</title>
</head>

<body style="background-color: #ADD8E6">
    <div class="container mt-5">
        <div class="row g-0 mt-5 mb-5 height-100 justify-content-center">
            <div class="col-lg-6">
                <div class="bg-white p-4 h-100">
                    <div class="p-3 d-flex justify-content-center flex-column align-items-center">
                        <span class="main-heading"></span>
                        <ul class="social-list mt-3">
                            <li>
                                <h1>REGISTER</h1>
                            </li>
                        </ul>
                        <br>
                        <form action="{{route('loginuser')}}" method="POST">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-data">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control w-100" placeholder="Enter your name" value="{{old('name')}}" required>
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                            </div>
                            <div class="form-data">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control w-100" placeholder="Enter your email" value="{{old('email')}}" required>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-data">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control w-100" placeholder="Password" value="{{old('password')}}" required>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="signin-btn w-100 mt-2"> <button class="btn btn-primary btn-block" type="submit">Register</button> </div>
                            <div class="d-block mt-4">
                                <a href="/" class="text-decoration-none">Go Back Home</a> | | <a href="/login" class="text-decoration-none">Have an Acccount?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="row justify-content-center align-self-center d-flex">
            <div class="col-lg-3">
                <form action="{{route('registeruser')}}" method="POST">
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
        </div> -->
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>

</html>