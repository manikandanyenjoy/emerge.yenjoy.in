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

    <section class="landing-section">

        <!-- header section -->
        <div class="header-part">
            <div class="contain-wrap">
                <div class="header-wrap d-flex">
                    <div class="logo">
                        <img src="images/emerge-logo.png" alt="Logo" />
                    </div>
                    <div class="header-nav d-flex align-items-center w-100">
                        <ul class="d-flex align-items-center w-100">
                            <li class="mobile-logo d-none">
                                <img src="images/emerge-logo.png" alt="Logo" />
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/onboarding') }}">Dashboard</a></li>
                                @else
                                    <li><a href="javascript:;">About</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                    <li class="login-btn-list">
                                        <button class="login-bn btn">Login</button>
                                        <div class="register_lender-Barrower">
                                            <a href="{{ route('login') }}">Lender Login</a>
                                            <a href="{{ route('borrowerlogin') }}">Borrower Login</a>
                                        </div>
                                    </li>
                                @endauth

                            @endif
                        </ul>
                        <div class="hamburger-icon">
                            <a class="ham_icon"><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

        <!-- landing section -->
        <div class="banner-part">
            <div class="contain-wrap">
                <div class="banner-full-sec col-lg-12">
                    <div class="row">
                        <div class="left-content col-12 col-lg-8">
                            <h1>Invest & Earn from <span data-animate id="heading">Digital Lending</span></h1>
                            <ul class="certified-list">
                                <li>Emerge is registered as an NBFC-P2P</li>
                                <li>Emerge is registered with RBI (CoR No. N - 02.00299)</li>
                            </ul>
                            <button class="custom-btn btn-11"><a href="{{route('register')}}"> Open a Free Lending
                                    Account</a>
                                <div class="dot"></div>
                            </button>
                        </div>
                        <div class="right-content col-12 col-lg-4 pr-0">

                            <div class="days-average-percent w-100">
                                <div class="days-sec">
                                    <div class="avg-img">
                                        <img src="images/calendar.png" alt="Calendar">
                                    </div>
                                    <div class="card-content">
                                        <b>7 - 28 days</b>
                                        <span>Tenure</span>
                                    </div>
                                </div>

                                <div class="avg-perc-card">
                                    <div class="avg-img">
                                        <img src="images/average.png" alt="Average">
                                    </div>
                                    <div class="card-content">
                                        <b>12% p.a</b>
                                        <span>Avg RoI</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tp-widget-stars" id="tp-widget-stars">
                                <div class="">
                                    <div class="tp-stars tp-stars--4 tp-stars--4--half">
                                        <div
                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                            <svg role="img" aria-labelledby="starRating" viewBox="0 0 251 46"
                                                xmlns="http://www.w3.org/2000/svg"
                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                <title id="starRating" lang="en">4.7 out of five star rating on
                                                    Trustpilot</title>
                                                <g class="tp-star">
                                                    <path class="tp-star__canvas" fill="#dcdce6"
                                                        d="M0 46.330002h46.375586V0H0z"></path>
                                                    <path class="tp-star__shape"
                                                        d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                        fill="#FFF"></path>
                                                </g>
                                                <g class="tp-star">
                                                    <path class="tp-star__canvas" fill="#dcdce6"
                                                        d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                                                    <path class="tp-star__canvas--half" fill="#dcdce6"
                                                        d="M51.24816 46.330002h23.187793V0H51.248161z"></path>
                                                    <path class="tp-star__shape"
                                                        d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                        fill="#FFF"></path>
                                                </g>
                                                <g class="tp-star">
                                                    <path class="tp-star__canvas" fill="#dcdce6"
                                                        d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                                                    <path class="tp-star__canvas--half" fill="#dcdce6"
                                                        d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                                                    <path class="tp-star__shape"
                                                        d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                        fill="#FFF"></path>
                                                </g>
                                                <g class="tp-star">
                                                    <path class="tp-star__canvas" fill="#dcdce6"
                                                        d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                                                    <path class="tp-star__canvas--half" fill="#dcdce6"
                                                        d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                                                    <path class="tp-star__shape"
                                                        d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                        fill="#FFF"></path>
                                                </g>
                                                <g class="tp-star">
                                                    <path class="tp-star__canvas" fill="#dcdce6"
                                                        d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                                                    <path class="tp-star__canvas--half" fill="#dcdce6"
                                                        d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                                                    <path class="tp-star__shape"
                                                        d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="rating-descrip">Rated <span class="rating">4.5</span> stars by over 590
                                users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End landing section -->
    </section>


    <!-- Cards Section -->
    <section id="main-content">
        <div class="contain-wrap">
            <div class="cards-captions">
                <h6>INVEST SMARTER</h6>
                <h3><span class="half-color">Get 12%</span> returns with low risk</h3>
                <p>Invest in our partner backed kirana stores and commodity merchants for their working
                    capital needs and get steady returns with reduced risk and high liquidity.</p>
            </div>
            <div id="card-body">
                <div class="card-item">
                    <div class="card" id="card-1">
                        <div class="card-title">Low Risk</div>
                        <div class="card-body">To minimize defaults and lower the risk involved, we only lend to
                            businesses vetted by and dependant on our partners.</div>
                        <div id="card-cont"><img class="card-img" src="images/low-performance.png" /></div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card" id="card-2">
                        <div class="card-title">High Liquidity</div>
                        <div class="card-body">Investments have a tenure ranging from 7 to 28 days, thereby giving
                            lenders a highly liquid asset class with good returns.</div>
                        <div id="card-cont"><img class="card-img" src="images/interest-rate.png" /></div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card" id="card-3">
                        <div class="card-title">Low Investment</div>
                        <div class="card-body">Investments are diversified across borrowers thereby considerably
                            reducing risk and improving returns via quick rotation.</div>
                        <div id="card-cont"><img class="card-img" src="images/low-price.png" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cards Section -->

    <!-- business Loan Section -->
    <div class="business-loan-section">
        <div class="business-loan-wrap col-lg-12 pr-0 d-flex flex-wrap">
            <div class="business-content">
                <h2><span class="half-color">Business Loans</span> Portfolio Performance</h2>
                <p>Our investment products are the best way to invest money for individuals and we
                    have a track record to back the assertion. We are all set to scale these products and serve 20
                    lakh+ merchants in the next 12 months.</p>
                <div class="business-cards d-flex flex-wrap">
                    <div class="b-card">
                        <h6>100s of</h6>
                        <span><strong>Businesses</strong> use our platform for their daily credit needs.</span>
                    </div>
                    <div class="b-card">
                        <h6>Rs. 1.82 crores</h6>
                        <span><strong>Total Credit</strong> disbursed in the last few months.</span>
                    </div>
                    <div class="b-card">
                        <h6>100%</h6>
                        <span><strong>Repayments</strong> received for the credit disbursed.</span>
                    </div>
                    <div class="b-card">
                        <h6>11%-14%</h6>
                        <span><strong>Average</strong> RoI for lenders.</span>
                    </div>
                </div>
            </div>
            <div class="shop-owner">
                <img src="images/shop-owner.png" alt="shop owner">
            </div>
        </div>
    </div>

    <!-- End business Loan Section -->

    <div class="footer-banner">
        <a href="{{route('register')}}">
            <!-- <img class="w-100" src="images/end-banner.jpg" alt="Footer Banner"> -->
            <img class="w-100" src="images/ad-banner.jpg" alt="">
        </a>
    </div>

    <!-- Footer Section -->
    <section class="footer-section">
        <div class="contain-wrap">
            <div class="footer-wrap d-flex flex-wrap col-lg-12">
                <div class="footer-logo">
                    <img src="images/footer-emerge-logo.png" alt="footer-logo">
                    <span>CIN: U7XXXXXXXXXXXXXXXXX</span>
                </div>
                <div class="footer-links d-flex flex-wrap">
                    <div class="links-sec">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="javascript:;">About Us</a></li>
                            <li><a href="javascript:;">Team</a></li>
                            <li><a href="javascript:;">Blog</a></li>
                            <li><a href="javascript:;">FAQ's</a></li>
                        </ul>
                    </div>
                    <div class="links-sec">
                        <h6>RESOURCES</h6>
                        <ul>
                            <li><a href="javascript:;">Press & Media</a></li>
                            <li><a href="javascript:;">Portfolio Performance</a></li>
                            <li><a href="javascript:;">Grievance Redressal</a></li>
                            <li><a href="javascript:;">Fair Practices Code</a></li>
                        </ul>
                    </div>
                    <div class="links-sec">
                        <h6>LEGAL</h6>
                        <ul>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="end-footer text-center">
                <h5>© 2022 Emerge Financial Services. All rights reserved.</h5>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
</body>

</html>
