@extends('backend.admin.layouts.app',["page_slug" => "home"])
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    <div class="row">
       
        {{-- Main Content Area --}}
        <div class="col-md-9 p-4">
            <h2 class="font-dark ">Welcome, {{ Auth::user()->name }}!</h2>

            <div class="row mt-4">
                {{-- User Information Card --}}
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Your Information</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong>Joined:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Recent Activity Card --}}
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Placed an order for Product A on {{ now()->subDays(1)->format('M d, Y') }}</li>
                                <li>Updated profile information on {{ now()->subDays(3)->format('M d, Y') }}</li>
                                <li>Logged in from a new device on {{ now()->subDays(4)->format('M d, Y') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Settings and Actions Section --}}
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3>Settings & Actions</h3>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-primary">Change Password</a>
                        <a href="#" class="btn btn-secondary">Log Out</a>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection

@push('css')
    <style>
        .nav-link {
            font-size: 1.2rem;
        }
        .nav-link.active {
            background-color: #007bff;
            color: white;
        }
        .card-header {
            background-color: #f8f9fa;
        }
    </style>
@endpush

