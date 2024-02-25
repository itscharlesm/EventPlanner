<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mendoza Events</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Appointment -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/appointments') }}">
            <i class="far fa-calendar-plus"></i>
            <span>Appointments</span>
        </a>
    </li>

    <!-- Nav Item - Service Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/service-orders') }}">
            <i class="fas fa-book"></i>
            <span>Service Orders</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Clients -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/clients') }}">
            <i class="fas fa-users"></i>
            <span>Clients</span></a>
    </li>

    <!-- Nav Item - Employees -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/employees') }}">
            <i class="far fa-address-card"></i>
            <span>Employees</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Services -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/services') }}">
            <i class="fas fa-folder-plus"></i>
            <span>Services</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item" id="reportsMenu">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-chart-bar"></i>
            <span>Reports</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" id="incomeReportLink" href="{{ url('/income-report') }}">Income
                    Report</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

<!-- Active Nav Item - Sidebar -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current path
        var currentPath = window.location.pathname;

        // Get all the nav links in the sidebar
        var navLinks = document.querySelectorAll('.nav-item a');

        // Loop through the nav links and check if their href matches the current path
        navLinks.forEach(function (navLink) {
            // Get the path part of the href
            var navLinkPath = navLink.pathname;

            // Skip the "Reports" link
            if (navLinkPath.includes('/income-report')) {
                return;
            }

            // Check if the current path is an exact match with the nav link path
            if (currentPath === navLinkPath) {
                // Add the 'active' class to the parent 'nav-item'
                navLink.parentElement.classList.add('active');

                // If the nav link has a parent with a collapse class, add 'active' to the parent collapse item
                var parentCollapse = navLink.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.parentElement.querySelector('.nav-link').classList.add('active');
                }
            }
        });
    });
</script>