@extends('layouts.app')
@extends('layouts.sidemenu')
@section('content')
    <div class="right-section">
        <h1>KYC Documents</h1>
        <p>Please Complete the below steps</p>
        <div class="welcome">
            <div class="radio-btn-section">
                <form action="#">
                    <label class="radio-inp-label">Select the Category</label>
                    <div class="radio-btn-plot">
                    <p class="lender-rb">
                      <input type="radio" id="rd1" name="radio-group">
                      <label for="rd1">Lender</label>
                    </p>
                    <p class="borrower-rb">
                      <input type="radio" id="rd2" name="radio-group">
                      <label for="rd2">Borrower</label>
                    </p>
                </div>
                  </form>
                  <div class="svg-arrow-img">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
                        <path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
                      </svg>
                      <span class="select-one-checkbox">Select Any One</span>
                </div>
            </div>
            <div class="both-forms">
                <div class="documents-wrap lender-form">
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>MSME Certificate</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>GST Certificate</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Last 2 Years IT Returns</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Last 1 Year Business Statement</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Pan, Address, City Etc.</p>
                        <div class="pan-input">
                            <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="form-popup btn btn-primary">Add Here</button>
                        </div>
                    </div>
                    <!-- <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>PAN Card Details</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Bank Details</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div> -->
                    
                </div>
                <div class="documents-wrap borrower-form">
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Income Proof</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Company ID Card</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Last 3 Months Payslip</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Last 6 Months Salary Statement</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Last 1 Year Business Statement</p>
                        <div class="pan-input">
                            <input type="file" id="myfile" name="myfile">
                            <button class="choose-file">Upload</button>
                        </div>
                    </div>
                    
                    <div class="cards">
                        <div class="status">
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                        </div>
                        <p>Pan, Address, City Etc.</p>
                        <div class="pan-input">
                            <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="form-popup btn btn-primary">Add Here</button>
                        </div>
                    </div>
                   
                    
                </div>
                
            </div>

        </div>
    </div>
</div>
<!-- modal popup -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>This information will help us approve you as a lender on our platform quicker.</p>
          <form name="kycForm" id="kycForm" method="post" action="javascript:void(0)">
            <div class="form-group">
                <label for="user">
                    PAN
                </label>
                <input type="text" name="pan" id="pan" class="form-control">
                <h5 id="pancheck" style="color: red;">
                    Pan number is missing
                </h5>
            </div>
            <div class="form-group">
                <div class="radio-holder">
                    <div class="radio-parent">
                <label>Gender</label>
                <div class="radio">
                    <input id="radio-1" name="radio" type="radio" checked>
                    <label for="radio-1" class="radio-label">Male</label>
                  </div>
                  <div class="radio">
                    <input id="radio-2" name="radio" type="radio">
                    <label  for="radio-2" class="radio-label">Female</label>
                  </div>
                  <h5 id="gender" style="color: red;">
                    Select any one
                </h5>
                </div>
                <div class="radio-parent">
                    <label>Marital Status</label>
                    <div class="radio">
                        <input id="radio-3" name="radio-1" type="radio" checked>
                        <label for="radio-3" class="radio-label">Married</label>
                      </div>
                      <div class="radio">
                        <input id="radio-4" name="radio-1" type="radio">
                        <label  for="radio-4" class="radio-label">Un Married</label>
                      </div>
                      <h5 id="marital" style="color: red;">
                        Select any one
                    </h5>
                    </div>
            </div>
            </div>
            <div class="form-group">
                <label for="user">
                    Occupation
                </label>
                <input type="text" name="occupation" id="occupation" class="form-control">
                <h5 id="occupationcheck" style="color: red;">
                    Occupation is missing
                </h5>
            </div>
            <div class="form-group">
                <label for="user">
                    Address
                </label>
                <input type="text" name="address" id="address" class="form-control">
                <h5 id="addresscheck" style="color: red;">
                    Address is missing
                </h5>
            </div>
            <div class="form-group">
                <label for="user">
                    City
                </label>
                <input type="text" name="city" id="city" class="form-control">
                <h5 id="citycheck" style="color: red;">
                    City is missing
                </h5>
            </div>
            <div class="form-group">
                <label for="user">
                    Pin Code
                </label>
                <input type="text" name="pincode" id="pincode" class="form-control">
                <h5 id="pincodecheck" style="color: red;">
                    Pin Code is missing
                </h5>
            </div>
           
            
            <div class="submit form-submit">
                <button class="close close-bn" data-dismiss="modal" aria-label="Close">Close</button>
                <input type="submit" id="kycsubmitbtn" value="Update Details" class="btn btn-primary">
             </div>
        </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection
