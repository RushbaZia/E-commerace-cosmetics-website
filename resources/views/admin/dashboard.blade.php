@extends('admin.common.layout')

@section('content')

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
    @if (Auth::user()->hasRole('Admin|Manager'))
    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Categories</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <!-- <i class="bi bi-cart"></i> -->
                  <i class="fa-solid fa-list"></i>
                </div>
                <div class="ps-3">
                  <h6>{{count($categories)}}</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Products</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-cubes"></i>
                </div>
                <div class="ps-3">
                  <h6>{{count($products)}}</h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-md-4">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Posts</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <div class="ps-3">
                  <h6>{{count($posts)}}</h6>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Customers Card -->
      </div>
    </div>
    <!-- End Left side columns -->
    <div class="col-lg-9">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Earnings Overview</h5>
          <!-- Line Chart -->
          <canvas id="lineChart" style="max-height: 400px;"></canvas>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new Chart(document.querySelector('#lineChart'), {
                type: 'line',
                data: {
                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                  datasets: [{
                    label: 'Line Chart',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            });
          </script>
          <!-- End Line CHart -->

        </div>
      </div>
    </div>
    <div class="col-lg-3">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Managers</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <!-- <i class="bi bi-cart"></i> -->
                <i class="fa-solid fa-user-graduate"></i>
              </div>
              <div class="ps-3">
                <h3>1</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Users</h2>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <!-- <i class="bi bi-cart"></i> -->
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="ps-3">
                <h3>1</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @elseif(Auth::user()->hasRole('User'))
    <div class="col-lg-12">
      <div class="row">
        <!-- Card 1-->
        <div class="col-xxl-3 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Completed</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-circle-check text-success"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $statusCounts['completed'] }}</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Card 1-->

        <!-- Card 2 -->
        <div class="col-xxl-3 col-md-3">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">In Process</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-arrows-spin text-secondary"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $statusCounts['inprocess'] }}</h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Card 2 -->

        <!-- Card 3 -->
        <div class="col-xxl-3 col-md-3">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Pending</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-hourglass-half"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $statusCounts['pending'] }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card 3-->
        <!-- Card 4 -->
        <div class="col-xxl-3 col-md-3">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Declined</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-circle-xmark text-danger"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $statusCounts['declined'] }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card 4 -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Order ID</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @forelse($orders as $order)
            <tr>
              <td>{{ $order->id }}</td>
              <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d') }}</td>
              <td>${{ number_format($order->total, 2) }}</td>
              <td>{{ ucfirst($order->status ?? 'pending') }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="4">No orders found.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="col-lg-1"></div>
      @if($nextDelivery)
      <div class="col-lg-5 mt-3 p-5 border">
        <h5><b>Upcoming Delivery</b></h5>
        <p>OrderID# {{ $nextDelivery->id }} is expected by {{ \Carbon\Carbon::parse($nextDelivery->created_at)->addDays(10)->format('d F, Y') }}</p>
      </div>
      @endif
    </div>
    @endif
</section>
@endsection