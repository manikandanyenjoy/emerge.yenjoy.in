@extends('admin.layouts.app')
@extends('admin.layouts.sidemenu')
@section('content')
    <div class="main-container">
        <div class="main-header">
            <span>User Types</span>
            <div class="header-menu">
                <a id="tab_lender" class="main-header-link is-active" href="JavaScript:void(0)">Lender</a>
                <a id="tab_buyer" class="main-header-link" href="JavaScript:void(0)">Borrower</a>
            </div>
        </div>
        <div class="content-wrapper">

            <div class="tab-section">

                <div id="list_lender" class="show table-plot">
                    <div class="content-wrapper-header">
                        <div class="count-section">
                            <img src="{{ asset('images/admin/user-icon.png') }}" alt="User Icon">
                            <span>{{count($landers)}}</span>
                        </div>
                        <label>Total Lenders</label>
                    </div>
                    <h6>Lender's List</h6>
                    <div class="table-responsive">
                        <table id="lender-table" class="display table-lists" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>phone number</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($landers as $lander)
                                    <a href="{{url('/userDetails')}}"><tr>
                                        <td></td>
                                        <td>{{$lander->id}}</td>
                                        <td><a href="{{url('/userDetails/'.base64_encode($lander->id))}}">{{$lander->name}}</a></td>
                                        <td>{{$lander->phone}}</td>
                                        <td><span>In Progress</span></td>
                                    </tr></a>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">{{ __('No data Found...') }}</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="list_buyer" class="table-plot">
                    <div class="content-wrapper-header">
                        <div class="count-section">
                            <img src="{{ asset('images/admin/user-icon.png') }}" alt="User Icon">
                            <span>{{count($barrowers)}}</span>
                        </div>
                        <label>Total Borrowers</label>
                    </div>
                    <h6>Borrowers List</h6>
                    <div class="table-responsive">
                        <table id="buyer-table" class="display table-lists" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>phone number</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barrowers as $barrower)
                                    <tr>
                                        <td></td>
                                        <td>{{$barrower->id}}</td>
                                        <td>{{$barrower->name}}</td>
                                        <td>{{$barrower->phone}}</td>
                                        <td><span>In Progress</span></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">{{ __('No data Found...') }}</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
    <div class="overlay-app"></div>
    </div>
@endsection
