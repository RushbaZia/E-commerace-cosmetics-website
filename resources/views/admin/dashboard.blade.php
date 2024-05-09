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
                  <h6>44</h6>
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
                <h3>3</h3>
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
                <h3>50</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</section>
@endsection