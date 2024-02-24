    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('import/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('import/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('import/assets/js/cm-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('import/assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('import/assets/js/charts/area-chart.js') }}"></script>
    <script src="{{ asset('import/assets/js/charts/bar-chart.js') }}"></script>
    <script src="{{ asset('import/assets/js/charts/pie-chart.js') }}"></script>

    <!-- Include this script at the end of your HTML body -->
    <script>
        $(document).ready(function () {
            // Get the current URL path and remove the leading slash
            var path = window.location.pathname.substring(1);

            // Add 'active' class to the 'Reports' menu if on the 'Income Report' page
            if (path === 'income-report') {
                $('#reportsMenu').addClass('active');
                $('#collapsePages').addClass('show');
                $('#incomeReportLink').addClass('active');
            }
        });
    </script>


    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>