<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/index.css" />
    <script src="/js/script.js"></script>
    @include ('layouts/head')
    <title>Arcis | Login</title>
</head>

<body style="background-color: #ADD8E6">
        <div class="container">
            <div class="row g-0 mt-5 mb-5 height-100">
                <div class="col-md-6">
                    <div class="bg-light p-4 h-100 sidebar align-items-center d-flex">
                        <ul class="chart-design">
                            <img src="/img/arcislogonobg.png" />
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-4 h-100">
                        <div class="p-3 d-flex justify-content-center flex-column align-items-center">
                            <span class="main-heading"></span>
                            <ul class="social-list mt-3">
                                <li>
                                    <h1>LOGIN</h1>
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
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control w-100" placeholder="Enter your email" value="{{old('email')}}" required>
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="form-data">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}" required>
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                                <div class="d-flex justify-content-between w-100 align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                                    </div>
                                    <a class="text-decoration-none forgot-text" href="#">Forgot password?</a>
                                </div>
                                <div class="signin-btn w-100 mt-2"> <button class="btn btn-primary btn-block">Signin</button> </div>
                                <div class="d-block mt-5">
                                    <a href="/" class="text-decoration-none">Go Back Home</a> | | <a href="/registration" class="text-decoration-none"> Don't Have an Acccount?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts/footer')
</body>

</html>