<!doctype html>
<html lang="en">

<head>
    <title>Sing in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('singin/css/style.css')}}">
</head>

<body class="img js-fullheight" style="background-image: url(singin/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sing In Admin</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Thai Massage Shop</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password"  class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                        </form>
                        <div class="form-group mt-4">
                        <a href="{{url('/')}}"><button type="submit" class="form-control btn btn-primary submit px-3">กลับหน้า Home</button></a>
                            </div>
                        {{-- <div class="form-group mt-4">
                            <a href="{{route('register')}}" class="form-control btn btn-primary submit px-3"> ไปหน้า Register </a>                        
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('singin/js/jquery.min.js')}}"></script>
    <script src="{{asset('singin/js/popper.js')}}"></script>
    <script src="{{asset('singin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('singin/js/main.js')}}"></script>

</body>

</html>