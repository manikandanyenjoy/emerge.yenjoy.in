<div class="dashboard-section">
    <div class="left-section">
        <div class="dashboard-logo">
            <img src="images/emerge-logo.png" alt="Logo">
        </div>
        <div class="dashboard-list">
            <ul>
                <li class="static-label"><label>onboarding</label></li>
                <li><a href="/onboarding">Lender Onboarding</a></li>
                <li class="active"><a href="/home">KYC Documents</a></li>
                <li class="static-label"><label>account</label></li>
                <li><a href="javascript:;">Settings</a></li>
                <li><a href="javascript:;">Bank Account Details</a></li>
                <li><a href="javascript:;">Nominee Details</a></li>
                <li><a href="/logout">Logout</a></li>
                <li class="static-label"><label>Contact</label></li>
                
                <li>{{ Auth::user()->phone }}</li>
                <li>{{ Auth::user()->email }}</li>
            </ul>
        </div>
    </div>