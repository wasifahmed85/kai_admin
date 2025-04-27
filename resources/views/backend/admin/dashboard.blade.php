@extends('backend.admin.layouts.app',["page_slug" => "dashboard"])
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid p-4">
        <!-- Added Header Section to Match Screenshot -->
        <div class="row mb-4">
            <div class="col-12">
                <h1>User's</h1>
            </div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="row py-4">
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0 rounded-3 text-white bg-gradient-primary">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Users</h5>
                        <p class="card-text fs-3">1,024</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0 rounded-3 text-white bg-gradient-success">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Orders</h5>
                        <p class="card-text fs-3">893</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0 rounded-3 text-white bg-gradient-warning">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Revenue</h5>
                        <p class="card-text fs-3">$8,530</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0 rounded-3 text-white bg-gradient-danger">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Issues</h5>
                        <p class="card-text fs-3">5</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Recent Orders</h5>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-sync"></i> Refresh
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>Product A</td>
                                    <td>Jelen Doe</td>
                                    <td>2025-04-25</td>
                                    <td>$750MB</td>
                                </tr>
                                <tr>
                                    <td>#12346</td>
                                    <td>Product B</td>
                                    <td>Jane Smith</td>
                                    <td>2025-04-24</td>
                                    <td>$500B</td>
                                </tr>
                                <tr>
                                    <td>#12347</td>
                                    <td>Product C</td>
                                    <td>Sam Green</td>
                                    <td>2025-04-23</td>
                                    <td>$250B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Added Footer Section to Match Screenshot -->
        <footer class="mt-5 pt-3 text-muted border-top">
            <div class="d-flex justify-content-between">
                <div>
                    <strong>ThemsKita</strong> Help <strong>Licenses</strong>
                </div>
                <div>
                    2024, made with ▼ by ThemsKita
                </div>
            </div>
        </footer>
    </div>
@endsection