@extends('admin.layouts.app')
@extends('admin.layouts.sidemenu')
@section('content')
<div class="main-container">
    <div class="main-header">
        <span>Customer Details</span>
    </div>
    <div class="content-wrapper">
        <div class="upload-items">
        <div class="details-caption">
            <h2>Lender</h2>
        </div>
        <div class="details-secton">
            <div class="each-detail">
                <h6>MSME Certificate</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>GST Certificate</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Last 2 Years IT Returns</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Last 1 Year Business Statement</h6>
                <a href="">Click here to see</a>
            </div>
        </div>
    </div>

    <div class="upload-items">
        <div class="details-caption">
            <h2>Borrower</h2>
        </div>
        <div class="details-secton">
            <div class="each-detail">
                <h6>Income Proof</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Company ID Card</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Last 3 Months Payslip</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Last 6 Months Salary Statement</h6>
                <a href="">Click here to see</a>
            </div>
            <div class="each-detail">
                <h6>Last 1 Year Business Statement</h6>
                <a href="">Click here to see</a>
            </div>
        </div>
    </div>

        <div class="form-details-section">
            <h2>Form Details</h2>
        <div class="form-details">
            <div class="group">
                <label>PAN Number</label>
                <span>1234</span>
            </div>
            <div class="group">
                <label>Gender</label>
                <span>Male</span>
            </div>
            <div class="group">
                <label>Marital Status</label>
                <span>Married</span>
            </div>
            <div class="group">
                <label>Occupation</label>
                <span>XXX</span>
            </div>
            <div class="group">
                <label>Occupation</label>
                <span>XXX</span>
            </div>
            <div class="group">
                <label>Address</label>
                <span>XXX</span>
            </div>
            <div class="group">
                <label>City</label>
                <span>XXX</span>
            </div>
            <div class="group">
                <label>Pin Code</label>
                <span>XXX</span>
            </div>
            
        </div>
    </div>
    </div>
    
</div>
</div>
<div class="overlay-app"></div>
</div>
@endsection
