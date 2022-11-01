@extends('layouts.app')
@extends('layouts.sidemenu')
@section('content')
<div class="right-section">
    <h1>KYC Documents</h1>
    <p>Please Complete the 3 steps below</p>
    <div class="welcome">
        <div class="documents-wrap">
            <div class="cards">
                <div class="status">
                    <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning"> Pending</span>
                    <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select"> Success</span>
                </div>
                <p>Pan, Address, Gender Etc.</p>
                <div class="pan-input">
                    <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="form-popup btn btn-primary">Add Here</button>
                </div>
            </div>
            <div class="cards">
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
      <form>
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
                <input id="radio-1" name="radio" value="Male" type="radio" checked>
                <label for="radio-1" class="radio-label">Male</label>
              </div>
              <div class="radio">
                <input id="radio-2" name="radio" value="Female" type="radio">
                <label  for="radio-2" class="radio-label">Female</label>
              </div>
              <h5 id="gender" style="color: red;">
                Select any one
            </h5>
            </div>
            <div class="radio-parent">
                <label>Marital Status</label>
                <div class="radio">
                    <input id="radio-3" name="radio-1" value="Married" type="radio" checked>
                    <label for="radio-3" class="radio-label">Married</label>
                  </div>
                  <div class="radio">
                    <input id="radio-4" name="radio-1" value="UnMarried" type="radio">
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
            <input type="submit" id="submitbtn" value="Update Details" class="btn btn-primary">
         </div>
    </form>
    </div>
    
  </div>
</div>
</div>
@endsection
