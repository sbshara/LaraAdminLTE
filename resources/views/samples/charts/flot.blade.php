@extends('LaraAdminLTE.app')

@section('breadcrumbs')
    @include('LaraAdminLTE.breadcrumbs')
@endsection

@section('otherJS')
<!-- FLOT CHARTS -->
<script src="{{ asset('vendor/LaraAdminLTE/bower_components/Flot/jquery.flot.js') }}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ asset('vendor/LaraAdminLTE/bower_components/Flot/jquery.flot.resize.js') }}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ asset('vendor/LaraAdminLTE/bower_components/Flot/jquery.flot.pie.js') }}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{ asset('vendor/LaraAdminLTE/bower_components/Flot/jquery.flot.categories.js') }}"></script>

<!-- Flotjs.js Customized js file for this page -->
<script src="{{ asset('vendor/LaraAdminLTE/js/flotjs.js') }}"></script>
@endsection


@section('contents')
<!-- Main content -->
<div class="row">
  <div class="col-xs-12">
    <!-- interactive chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">
          Interactive Area Chart
        </h3>
        <div class="box-tools pull-right">
          Real time
          <div class="btn-group" id="realtime" data-toggle="btn-toggle">
            <button type="button" class="btn btn-default btn-xs active" data-toggle="on">
              On
            </button>
            <button type="button" class="btn btn-default btn-xs" data-toggle="off">
              Off
            </button>
          </div>
        </div>
      </div>
      <div class="box-body">
        <div id="interactive" style="height: 300px;">
        </div>
      </div>
      <!-- /.box-body-->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-md-6">
    <!-- Line chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">Line Chart</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div id="line-chart" style="height: 300px;"></div>
      </div>
      <!-- /.box-body-->
    </div>
    <!-- /.box -->
    <!-- Area chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">Full Width Area Chart</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div id="area-chart" style="height: 338px;" class="full-width-chart">
        </div>
      </div>
      <!-- /.box-body-->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-6">
    <!-- Bar chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">Bar Chart</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div id="bar-chart" style="height: 300px;">
        </div>
      </div>
      <!-- /.box-body-->
    </div>
    <!-- /.box -->
    <!-- Donut chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>
        <h3 class="box-title">Donut Chart</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div id="donut-chart" style="height: 300px;">
        </div>
      </div>
      <!-- /.box-body-->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
@endsection


