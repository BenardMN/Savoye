@extends('dash_layout')
@section('maincnt')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dash">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      
      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
            
          <!-- Days Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Days <span>| remaining</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-calendar-date"></i>
                  </div>
                  <div class="ps-3">
                    <h6>45</h6>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Days Card -->

          <!-- Complete leave days Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Leave Days <span>| Used</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-calendar-check-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>4</h6>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End complete leave days Card -->
        </div>
      </div><!-- End Left side columns -->
    </div>
  </section>
</main><!-- End #main -->
@stop
   