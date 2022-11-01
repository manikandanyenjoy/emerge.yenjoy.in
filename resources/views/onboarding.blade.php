@extends('layouts.app')
@extends('layouts.sidemenu')
@section('content')
    <div class="right-section">
        <h1>Lender Onboarding</h1>
        <p>Let's make you a lender on Emerge!</p>
        <div class="welcome-onboard">
            <h5>Welcome <span>{{ Auth()->user()->name }}</span>!</h5>
            <p>We are glad that you want to participate in the alternate lending ecosystem in India where, as a 
                lender you not only benefit yourself with returns but also help borrowers fulfil their needs of a loan,</p>
            <p>We hope and firmly believe that we can make your lending experience on Emerge, beautiful and simple. Happy to have you on board. 
                Now lets buckle up and completeyour registration in a jiffy.</p>
            <p>Thank you and Happy Investing!</p>
            <h6>Regards,</h6>
            <h6>Emerge Team</h6>
        </div>
    </div>
</div>
@endsection
