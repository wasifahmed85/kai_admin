@extends('backend.admin.layouts.app', ["page_slug" => "home"])

@section('title', 'Home')
@push('css')
    <style>
        .nav-link {
            font-size: 1.2rem;
        }
        .nav-link.active {
            background-color: #007bff;
            color: rgb(3, 211, 248);
        }
        .card-header {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
        }
        
        .btn {
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            transform: scale(1.05);
        }
    </style>
@endpush
@section('content')
<div class="container-fluid px-4 py-8">
    <div class="row">
        {{-- Main Content Area --}}
        <div class="col-md-9 p-4 mt-5">
            <div class="text-center mt-3">
                <h2 class="text-4xl font-extrabold text-indigo-600 mb-4">Welcome, {{ Auth::user()->name }}!</h2>
                <p class="text-lg text-gray-500 mb-8">Here's an overview of your account and activities. Let's explore!</p>
            </div>

            <div class="row mt-4">
                {{-- User Information Card --}}
                <div class="col-md-6 mb-4">
                    <div class="card shadow-2xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl duration-300">
                        <div class="card-header bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-xl p-4">
                            <h4>Your Information</h4>
                        </div>
                        <div class="card-body bg-white p-6">
                            <p><strong class="text-gray-700">Name:</strong> {{ Auth::user()->name }}</p>
                            <p><strong class="text-gray-700">Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong class="text-gray-700">Joined:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Recent Activity Card --}}
                <div class="col-md-6 mb-4">
                    <div class="card shadow-2xl rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl duration-300">
                        <div class="card-header bg-gradient-to-r from-green-400 to-green-600 text-white text-xl p-4">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body bg-white p-6">
                            <ul class="space-y-4 text-gray-700">
                                <li class="flex items-center">📦 Placed an order for Product A on {{ now()->subDays(1)->format('M d, Y') }}</li>
                                <li class="flex items-center">✏️ Updated profile information on {{ now()->subDays(3)->format('M d, Y') }}</li>
                                <li class="flex items-center">📱 Logged in from a new device on {{ now()->subDays(4)->format('M d, Y') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Settings and Actions Section --}}
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Settings & Actions</h3>
                    <div class="flex justify-between">
                        <a href="#" class="btn btn-outline py-2 px-4 border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white rounded-full transition duration-300">
                            Change Password
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection


