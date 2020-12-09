@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><b>My Profile</b></span>
            <span class="info-box-number">View</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><b>Membership Details</b></span>
            <span class="info-box-number">View</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex">
                <h3 class="card-title">Membership Activity</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span>Involvement Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12.5%
                  </span>
                  <span class="text-muted">Since last week</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="visitors-chart" height="200"></canvas>
              </div>

              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> This Week
                </span>

                <span>
                  <i class="fas fa-square text-gray"></i> Last Week
                </span>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
@endsection

@section('pagejs')
<script src="{{ ('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ ('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ ('AdminLTE/dist/js/adminlte.js') }}"></script>
<script src="{{ ('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
<script src="dist/js/demo.js"></script>
<script src="{{ ('AdminLTE/dist/js/pages/dashboard3.js') }}"></script>
@endsection

