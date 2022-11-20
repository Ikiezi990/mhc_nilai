<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body{
            background: rgb(2,0,36);
            font-family: 'Anton', sans-serif;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,52,1) 35%, rgba(0,212,255,1) 100%);
        }
    </style>
</head>
<body>
    <div class="mt-5">
<div class="row">
    <div class="col-md-12">

                <div class="container">

                    <section class="">
                        <div class="container">
                            <div class="card ">
                                <div class="card-header bg-success"></div>
                                <div class="card-body my-auto">
                                    <div class="container-fluid h-custom">
                                        <div class="row d-flex justify-content-center ">
                                          <div class="col-md-9 col-lg-6 col-xl-5">
                                            <img src="{{ asset('a.png') }}"
                                              class="img-fluid" alt="Sample image">
                                          </div>
                                          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                            <h4 class="card-title mt-5"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Login Page</h4> <hr>
                                            <form method="POST" class="mt-5" action="{{ route('login') }}">
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-12 col-form-label text-md-start"><i class="bi bi-envelope-at"></i>&nbsp;{{ __('Email Address') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-12 col-form-label text-md-start"><i class="bi bi-unlock"></i>&nbsp;{{ __('Password') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-12 ">
                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-0">
                                                    <div class="col-md-12 ">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="bi bi-box-arrow-in-left"></i>&nbsp;{{ __('Login') }}
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                            <hr class="mt-5">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="card-footer bg-success"></div>
                                          </div>
                        </div>

                      </section>
                </div>

    </div>
    </div>
</div>
    </div>
        <script>
        document.getElementById('see-button').addEventListener('click', evt => {
            document.getElementById('blur-work').style.display = 'none';
        })

        </script>
</body>
</html>
