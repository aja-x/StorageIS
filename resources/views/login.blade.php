
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('') }}concept-assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('concept-assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center">
            <a href="../index.html" class="navbar-brand">
                Storage IS
            </a>
            <span class="splash-description">Login Page</span>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input class="form-control form-control-lg" name="email"
                           type="email" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password"
                           type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{ asset('concept-assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('concept-assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>