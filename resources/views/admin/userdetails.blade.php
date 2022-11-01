@extends('admin.layouts.app')
@extends('admin.layouts.sidemenu')
@section('content')
    <div class="main-container">
        <div class="main-header">
            <span>Customer Details</span>
        </div>
        <div class="content-wrapper">
            @if($userdetails)
            @if ($userdetails->kyctype == 'lender')
                <div class="upload-items">
                    <div class="details-caption">
                        <h2>Lender</h2>
                    </div>
                    <div class="details-secton">
                        <div class="each-detail">
                            <h6>MSME Certificate</h6>
                            <a href="{{ asset('file_uploads/MSME_cert/'.$userdetails->MSME_cert) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>GST Certificate</h6>
                            <a href="{{ asset('file_uploads/GST_cert/'.$userdetails->GST_cert) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Last 2 Years IT Returns</h6>
                            <a href="{{ asset('file_uploads/two_yrs_it_returns/' . $userdetails->two_yrs_it_returns) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Last 1 Year Business Statement</h6>
                            <a href="{{ asset('file_uploads/one_yr_business_statement/' . $userdetails->one_yr_business_statement) }}"
                                target="_blank">Click here to see</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="upload-items">
                    <div class="details-caption">
                        <h2>Borrower</h2>
                    </div>
                    <div class="details-secton">
                        <div class="each-detail">
                            <h6>Income Proof</h6>
                            <a href="{{ asset('file_uploads/income_proof/' . $userdetails->income_proof) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Company ID Card</h6>
                            <a href="{{ asset('file_uploads/company_idcard/' . $userdetails->company_idcard) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Last 3 Months Payslip</h6>
                            <a href="{{ asset('file_uploads/three_months_payslip/' . $userdetails->three_months_payslip) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Last 6 Months Salary Statement</h6>
                            <a href="{{ asset('file_uploads/six_months_sal_statement/' . $userdetails->six_months_sal_statement) }}"
                                target="_blank">Click here to see</a>
                        </div>
                        <div class="each-detail">
                            <h6>Last 1 Year Business Statement</h6>
                            <a href="{{ asset('file_uploads/one_yr_business_statement/' . $userdetails->one_yr_business_statement) }}"
                                target="_blank">Click here to see</a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="form-details-section">
                <h2>Form Details</h2>
                <div class="form-details">
                    <div class="group">
                        <label>PAN Number</label>
                        <span>{{ $userdetails->pan_number }}</span>
                    </div>
                    <div class="group">
                        <label>Gender</label>
                        <span>{{ $userdetails->gender }}</span>
                    </div>
                    <div class="group">
                        <label>Marital Status</label>
                        <span>{{ $userdetails->marital_status }}</span>
                    </div>
                    <div class="group">
                        <label>Occupation</label>
                        <span>{{ $userdetails->occupation }}</span>
                    </div>
                    <div class="group">
                        <label>Address</label>
                        <span>{{ $userdetails->address }}</span>
                    </div>
                    <div class="group">
                        <label>City</label>
                        <span>{{ $userdetails->city }}</span>
                    </div>
                    <div class="group">
                        <label>Pin Code</label>
                        <span>{{ $userdetails->pincode }}</span>
                    </div>

                </div>
            </div>
            @else
            <div>
                <h3>User Datails Not Found...!</h3>
            </div>
            @endif
        </div>

    </div>
    </div>
    <div class="overlay-app"></div>
    </div>
@endsection
