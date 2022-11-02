@extends('layouts.app')
@extends('layouts.sidemenu')
@section('content')
    <div class="right-section">
        @include ('partials.messages')
        <h1>KYC Documents</h1>
        <p>Please Complete the below steps</p>
        <div class="welcome">
            <div class="radio-btn-section">
                <form action="#">
                    <label class="radio-inp-label">Select the Category</label>
                    <div class="radio-btn-plot">
                        @if (isset($kyc->kyctype) && $kyc->kyctype == 'lender')
                            <p class="lender-rb1">
                                <input type="radio" id="rd1" name="radio-group" value="lender" checked>
                                <label for="rd1">Lender</label>
                            </p>
                            <p class="borrower-rb1">
                                <input type="radio" id="rd2" name="radio-group" value="borrower" disabled>
                                <label for="rd2">Borrower</label>
                            </p>
                        @elseif(isset($kyc->kyctype) && $kyc->kyctype == 'borrower')
                            <p class="lender-rb2">
                                <input type="radio" id="rd1" name="radio-group" value="lender" disabled>
                                <label for="rd1">Lender</label>
                            </p>
                            <p class="borrower-rb2">
                                <input type="radio" id="rd2" name="radio-group" value="borrower" checked>
                                <label for="rd2">Borrower</label>
                            </p>
                        @else
                            <p class="lender-rb">
                                <input type="radio" id="rd1" name="radio-group" onclick="handleClick(this);"
                                    value="lender">
                                <label for="rd1">Lender</label>
                            </p>
                            <p class="borrower-rb">
                                <input type="radio" id="rd2" name="radio-group" onclick="handleClick(this);"
                                    value="borrower">
                                <label for="rd2">Borrower</label>
                            </p>
                        @endif
                    </div>
                </form>
                @if(!isset($kyc->kyctype))
                <div class="svg-arrow-img">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;"
                        xml:space="preserve">
                        <path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow"
                            d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1"
                            d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2"
                            d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
                    </svg>
                    <span class="select-one-checkbox">Select Any One</span>
                </div>
                @endif
            </div>
            <div class="both-forms">
                @if (isset($kyc->kyctype) && $kyc->kyctype == 'lender')
                <div class="documents-wrap lender-form">
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->MSME_cert) && $kyc->MSME_cert != null) { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>
                        </div>
                        <p>MSME Certificate</p>
                        @if (!isset($kyc->MSME_cert))
                            <div class="pan-input">
                                <form name="msme_form" id="msme_form" method="post" action="{{ url('kyc_file_submit') }}"
                                    enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="MSME_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->MSME_cert) && $kyc->MSME_cert == null)
                            <div class="pan-input">
                                <form name="msme_form" id="msme_form" method="post" action="{{ url('kyc_file_submit') }}"
                                    enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="MSME_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->GST_cert) && $kyc->GST_cert != null) { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>GST Certificate</p>
                        @if (!isset($kyc->GST_cert))
                            <div class="pan-input">
                                <form name="gst_form" id="gst_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="GST_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->GST_cert) && $kyc->GST_cert == null)
                            <div class="pan-input">
                                <form name="gst_form" id="gst_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="GST_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->two_yrs_it_returns) && $kyc->two_yrs_it_returns != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 2 Years IT Returns</p>
                        @if (!isset($kyc->two_yrs_it_returns))
                            <div class="pan-input">
                                <form name="two_yrs_it_returns_form" id="two_yrs_it_returns_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="two_yrs_it_returns">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->two_yrs_it_returns) && $kyc->two_yrs_it_returns == null)
                            <div class="pan-input">
                                <form name="two_yrs_it_returns_form" id="two_yrs_it_returns_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="two_yrs_it_returns">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 1 Year Business Statement</p>
                        @if (!isset($kyc->one_yr_business_statement))
                            <div class="pan-input">
                                <form name="one_yr_business_statement_form" id="one_yr_business_statement_form"
                                    method="post" action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement == null)
                            <div class="pan-input">
                                <form name="one_yr_business_statement_form" id="one_yr_business_statement_form"
                                    method="post" action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>

                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'lender') { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Pan, Address, City Etc.</p>

                        @if (!isset($kyc->pan_number) && !isset($kyc->kyctype))
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        {{-- @elseif(isset($kyc->pan_number) && isset($kyc->kyctype) && $kyc->kyctype == 'lender')
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div> --}}
                        @endif
                    </div>


                </div>
                @elseif(isset($kyc->kyctype) && $kyc->kyctype == 'borrower')
                <div class="documents-wrap borrower-form">
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->income_proof) && $kyc->income_proof != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Income Proof</p>

                        @if (!isset($kyc->income_proof))
                            <div class="pan-input">
                                <form name="income_proof_form" id="income_proof_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="income_proof">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->income_proof) && $kyc->income_proof == null)
                            <div class="pan-input">
                                <form name="income_proof_form" id="income_proof_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="income_proof">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->company_idcard) && $kyc->company_idcard != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>

                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Company ID Card</p>

                        @if (!isset($kyc->company_idcard))
                            <div class="pan-input">
                                <form name="company_id_form" id="company_id_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="company_idcard">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->company_idcard) && $kyc->company_idcard == null)
                            <div class="pan-input">
                                <form name="company_id_form" id="company_id_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="company_idcard">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->three_months_payslip) && $kyc->three_months_payslip != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 3 Months Payslip</p>

                        @if (!isset($kyc->three_months_payslip))
                            <div class="pan-input">
                                <form name="three_months_payship_form" id="three_months_payship_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="three_months_payslip">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->three_months_payslip) && $kyc->three_months_payslip == null)
                            <div class="pan-input">
                                <form name="three_months_payship_form" id="three_months_payship_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="three_months_payslip">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->six_months_sal_statement) && $kyc->six_months_sal_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 6 Months Salary Statement</p>

                        @if (!isset($kyc->six_months_sal_statement))
                            <div class="pan-input">
                                <form name="six_months_sal_statement" id="six_months_sal_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="six_months_sal_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->six_months_sal_statement) && $kyc->six_months_sal_statement == null)
                            <div class="pan-input">
                                <form name="six_months_sal_statement" id="six_months_sal_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="six_months_sal_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 1 Year Business Statement</p>

                        @if (!isset($kyc->one_yr_business_statement))
                            <div class="pan-input">
                                <form name="one_yr_business_statement" id="one_yr_business_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement == null)
                            <div class="pan-input">
                                <form name="one_yr_business_statement" id="one_yr_business_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>

                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'borrower') { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>

                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Pan, Address, City Etc.</p>

                        @if (!isset($kyc->pan_number) && !isset($kyc->kyctype))
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        {{-- @elseif(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'borrower')
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div> --}}
                        @endif
                    </div>


                </div>
                @else
                <div class="documents-wrap lender-form">
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->MSME_cert) && $kyc->MSME_cert != null) { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>
                        </div>
                        <p>MSME Certificate</p>
                        @if (!isset($kyc->MSME_cert))
                            <div class="pan-input">
                                <form name="msme_form" id="msme_form" method="post" action="{{ url('kyc_file_submit') }}"
                                    enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="MSME_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->MSME_cert) && $kyc->MSME_cert == null)
                            <div class="pan-input">
                                <form name="msme_form" id="msme_form" method="post" action="{{ url('kyc_file_submit') }}"
                                    enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="MSME_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->GST_cert) && $kyc->GST_cert != null) { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>GST Certificate</p>
                        @if (!isset($kyc->GST_cert))
                            <div class="pan-input">
                                <form name="gst_form" id="gst_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="GST_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->GST_cert) && $kyc->GST_cert == null)
                            <div class="pan-input">
                                <form name="gst_form" id="gst_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="GST_cert">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->two_yrs_it_returns) && $kyc->two_yrs_it_returns != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 2 Years IT Returns</p>
                        @if (!isset($kyc->two_yrs_it_returns))
                            <div class="pan-input">
                                <form name="two_yrs_it_returns_form" id="two_yrs_it_returns_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="two_yrs_it_returns">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->two_yrs_it_returns) && $kyc->two_yrs_it_returns == null)
                            <div class="pan-input">
                                <form name="two_yrs_it_returns_form" id="two_yrs_it_returns_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="two_yrs_it_returns">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 1 Year Business Statement</p>
                        @if (!isset($kyc->one_yr_business_statement))
                            <div class="pan-input">
                                <form name="one_yr_business_statement_form" id="one_yr_business_statement_form"
                                    method="post" action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement == null)
                            <div class="pan-input">
                                <form name="one_yr_business_statement_form" id="one_yr_business_statement_form"
                                    method="post" action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>

                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'lender') { ?>
                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Pan, Address, City Etc.</p>

                        @if (!isset($kyc->pan_number) && !isset($kyc->kyctype))
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        @elseif(isset($kyc->pan_number) && isset($kyc->kyctype) && $kyc->kyctype == 'lender')
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        @endif
                    </div>


                </div>
               
                <div class="documents-wrap borrower-form">
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->income_proof) && $kyc->income_proof != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Income Proof</p>

                        @if (!isset($kyc->income_proof))
                            <div class="pan-input">
                                <form name="income_proof_form" id="income_proof_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="income_proof">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->income_proof) && $kyc->income_proof == null)
                            <div class="pan-input">
                                <form name="income_proof_form" id="income_proof_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="income_proof">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->company_idcard) && $kyc->company_idcard != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>

                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Company ID Card</p>

                        @if (!isset($kyc->company_idcard))
                            <div class="pan-input">
                                <form name="company_id_form" id="company_id_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="company_idcard">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->company_idcard) && $kyc->company_idcard == null)
                            <div class="pan-input">
                                <form name="company_id_form" id="company_id_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="company_idcard">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->three_months_payslip) && $kyc->three_months_payslip != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 3 Months Payslip</p>

                        @if (!isset($kyc->three_months_payslip))
                            <div class="pan-input">
                                <form name="three_months_payship_form" id="three_months_payship_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="three_months_payslip">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->three_months_payslip) && $kyc->three_months_payslip == null)
                            <div class="pan-input">
                                <form name="three_months_payship_form" id="three_months_payship_form" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="three_months_payslip">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->six_months_sal_statement) && $kyc->six_months_sal_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>

                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 6 Months Salary Statement</p>

                        @if (!isset($kyc->six_months_sal_statement))
                            <div class="pan-input">
                                <form name="six_months_sal_statement" id="six_months_sal_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="six_months_sal_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->six_months_sal_statement) && $kyc->six_months_sal_statement == null)
                            <div class="pan-input">
                                <form name="six_months_sal_statement" id="six_months_sal_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="six_months_sal_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement != null) { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>
                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Last 1 Year Business Statement</p>

                        @if (!isset($kyc->one_yr_business_statement))
                            <div class="pan-input">
                                <form name="one_yr_business_statement" id="one_yr_business_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @elseif(isset($kyc->one_yr_business_statement) && $kyc->one_yr_business_statement == null)
                            <div class="pan-input">
                                <form name="one_yr_business_statement" id="one_yr_business_statement" method="post"
                                    action="{{ url('kyc_file_submit') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="file" id="myfile" name="myfile">
                                    <input type="hidden" name="whichFile" value="one_yr_business_statement">
                                    <input type="submit" class="choose-file" value="Upload" />
                                </form>
                            </div>
                        @endif
                    </div>

                    <div class="cards">
                        <div class="status">
                            <?php  if(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'borrower') { ?>

                            <span class="uploaded"><img class="cards-icon" src="images/select.png" alt="select">
                                Success</span>
                            <?php } else { ?>

                            <span class="waiting"><img class="cards-icon" src="images/warning.png" alt="warning">
                                Pending</span>
                            <?php } ?>

                        </div>
                        <p>Pan, Address, City Etc.</p>

                        @if (!isset($kyc->pan_number) && !isset($kyc->kyctype))
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        @elseif(isset($kyc->pan_number) && isset($kyc->pan_number) && $kyc->kyctype == 'borrower')
                            <div class="pan-input">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong"
                                    class="form-popup btn btn-primary">Add Here</button>
                            </div>
                        @endif
                    </div>


                </div>
                @endif

            </div>

        </div>
    </div>
    </div>
    <!-- modal popup -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
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
                            <input type="hidden" name="kyctype" id="kyctype" class="form-control">
                            <!--<h5 id="pancheck" style="color: red;">-->
                            <!--    Pan number is missing-->
                            <!--</h5>-->
                        </div>
                        <div class="form-group">
                            <div class="radio-holder">
                                <div class="radio-parent">
                                    <label>Gender</label>
                                    <div class="radio">
                                        <input id="radio-1" name="gender" type="radio" checked>
                                        <label for="radio-1" class="radio-label">Male</label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-2" name="gender" type="radio">
                                        <label for="radio-2" class="radio-label">Female</label>
                                    </div>
                                    <!--  <h5 id="gender" style="color: red;">-->
                                    <!--    Select any one-->
                                    <!--</h5>-->
                                </div>
                                <div class="radio-parent">
                                    <label>Marital Status</label>
                                    <div class="radio">
                                        <input id="radio-3" name="married_status" type="radio" checked>
                                        <label for="radio-3" class="radio-label">Married</label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-4" name="married_status" type="radio">
                                        <label for="radio-4" class="radio-label">Un Married</label>
                                    </div>
                                    <!--  <h5 id="marital" style="color: red;">-->
                                    <!--    Select any one-->
                                    <!--</h5>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user">
                                Occupation
                            </label>
                            <input type="text" name="occupation" id="occupation" class="form-control">
                            <!--<h5 id="occupationcheck" style="color: red;">-->
                            <!--    Occupation is missing-->
                            <!--</h5>-->
                        </div>
                        <div class="form-group">
                            <label for="user">
                                Address
                            </label>
                            <input type="text" name="address" id="address" class="form-control">
                            <!--<h5 id="addresscheck" style="color: red;">-->
                            <!--    Address is missing-->
                            <!--</h5>-->
                        </div>
                        <div class="form-group">
                            <label for="user">
                                City
                            </label>
                            <input type="text" name="city" id="city" class="form-control">
                            <!--<h5 id="citycheck" style="color: red;">-->
                            <!--    City is missing-->
                            <!--</h5>-->
                        </div>
                        <div class="form-group">
                            <label for="user">
                                Pin Code
                            </label>
                            <input type="text" name="pincode" id="pincode" class="form-control">
                            <!--<h5 id="pincodecheck" style="color: red;">-->
                            <!--    Pin Code is missing-->
                            <!--</h5>-->
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
