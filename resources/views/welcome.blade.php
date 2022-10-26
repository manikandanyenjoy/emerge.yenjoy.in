<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <section class="header-sec">
        <div class="header-part">
            <div class="content-wrap">
                <div class="header-wrap d-flex">
                    <div class="logo">
                        <img src="images/emerge-logo.png" alt="Logo" />
                    </div>
                    @if (Route::has('login'))
                        <div class="header-nav d-flex align-items-center w-100">
                            <ul class="d-flex align-items-center w-100">
                                @auth
                                    <li><a href="{{ url('/home') }}">Lenders</a></li>
                                @else
                                    <li><a href="javascript:;">About</a></li>
                                    @if (Route::has('register'))
                                        <li>
                                            <p class="register-btn"><span>Register</span></p>
                                            <div div class="register_lender-Barrower">
                                                <a href="{{ route('register') }}">Lenders</a>
                                                <a href="/borrower">Borrower</a>
                                            </div>
                                        </li>
                                    @endif
                                    <li>

                                        <p class="register-btn"><span>Log in</span></p>

                                        <div class="register_lender-Barrower">
                                            <a href="{{ route('login') }}">Lender</a>
                                            <a href="/borrowerlogin">Borrower</a>
                                        </div>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
</body>

</html>
