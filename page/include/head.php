
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPRS SYSTEM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.css">
    
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/simplemde/simplemde.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/codemirror/theme/monokai.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body>
    

<!-- jQuery -->
<script src="../../assets/bootstrap/template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../assets/bootstrap/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/bootstrap/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/bootstrap/template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../assets/bootstrap/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/bootstrap/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/bootstrap/template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/bootstrap/template/plugins/moment/moment.min.js"></script>
<script src="../../assets/bootstrap/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../assets/bootstrap/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../assets/bootstrap/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/bootstrap/template/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/bootstrap/template/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/bootstrap/template/dist/js/pages/dashboard.js"></script>
 <!-- Summernote -->
 <script src="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../assets/bootstrap/template/plugins/codemirror/codemirror.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/css/css.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

     <!-- DataTables  & Plugins -->
     <script src="../../assets/bootstrap/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/jszip/jszip.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>