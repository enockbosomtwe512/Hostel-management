<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priority Accommodation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .blue-header {
            background-color: #1e40af;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .stats-box {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            border-left: 4px solid #1e40af;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1e40af;
        }
        .stats-label {
            font-size: 1.1rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <!-- Blue Header -->
    <div class="blue-header text-center">
        <div class="container">
            <h1 class="display-4">🏠 Priority Accommodation</h1>
            <p class="lead">Manage your hostel accommodation system</p>
        </div>
    </div>

    <div class="container">
        <!-- Statistics Row -->
        <div class="row">
            <div class="col-md-3">
                <div class="stats-box text-center">
                    <div class="stats-number">{{ $tenants->count() }}</div>
                    <div class="stats-label">TENANTS</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box text-center">
                    <div class="stats-number">{{ $hostels->count() }}</div>
                    <div class="stats-label">HOSTELS</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box text-center">
                    <div class="stats-number">{{ $rooms->count() }}</div>
                    <div class="stats-label">ROOMS</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box text-center">
                    <div class="stats-number">{{ $bookings->count() }}</div>
                    <div class="stats-label">BOOKINGS</div>
                </div>
            </div>
        </div>

        <!-- Detailed Lists -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="stats-box">
                    <h3>Recent Tenants</h3>
                    @foreach($tenants->take(5) as $tenant)
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>{{ $tenant->name }}</span>
                            <span class="text-muted">{{ $tenant->email }}</span>
                        </div>
                    @endforeach
                    @if($tenants->count() > 5)
                        <div class="text-center mt-2">
                            <small class="text-muted">+{{ $tenants->count() - 5 }} more tenants</small>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="stats-box">
                    <h3>Available Hostels</h3>
                    @foreach($hostels->take(5) as $hostel)
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>{{ $hostel->name }}</span>
                            <span class="text-muted">{{ $hostel->location }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
