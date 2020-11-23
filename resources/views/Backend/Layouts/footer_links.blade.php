<script src="{{env('PUBLIC_PATH')}}/js/app.js" type="text/javascript"></script>  
  
  <script src="{{env('PUBLIC_PATH')}}/backend/js/core/bootstrap.min.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/chartjs.min.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/bootstrap-notify.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/backend/js/black-dashboard.min.js?v=1.0.0"></script>
  <script src="{{env('PUBLIC_PATH')}}/backend/js/demo.js"></script>

  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();
    });
  </script>
