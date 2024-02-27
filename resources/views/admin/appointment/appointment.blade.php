<html lang="en">

<head>
    @include('components.head')
    <title>Admin Dashboard</title>
    @php
    $activePage = 'appointment'; // set the active page dynamically based on your route or controller logic
    @endphp
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.admin.sidebar', ['activePage' => $activePage])
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.admin.topbar')
                <!-- Card -->
                <div class="card shadow mb-4 mx-4">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <nav aria-label="breadcrumb" class="mr-auto">
                                <h3 class="font-weight-bold text-primary" style="margin: 0 15px 10px 10px;">Appointments
                                </h3>
                                <ol class="breadcrumb m-0" style="background-color: transparent; padding: 0 10px;">
                                    <li class="breadcrumb-item" style="font-size: 14;"><a
                                            href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" style="font-size: 14;" aria-current="page">
                                        Appointments</li>
                                </ol>
                            </nav>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus"></i> Book Appointment
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered responsive" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">No.</th>
                                            <th style="text-align: center">Appointment Number</th>
                                            <th style="text-align: center">Customer Name</th>
                                            <th style="text-align: center">Mobile Number</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">Time</th>
                                            <th style="text-align: center">Status</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left">1</td>
                                            <td style="text-align: left">512662326</td>
                                            <td style="text-align: left">Mendoza, Kylle Adyzza I.</td>
                                            <td style="text-align: left">09205433548</td>
                                            <td style="text-align: left">02/26/2024</td>
                                            <td style="text-align: left">2:00 PM</td>
                                            <td style="text-align: left">Scheduled</td>
                                            <td style="text-align: center">
                                                <a href="#" class="fas fa-eye"></a>
                                                <a href="#" class="fas fa-edit"></a>
                                                <a href="#" class="fas fa-trash"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Content Wrapper -->
            @include('layouts.admin.footer')
        </div>
        <!-- End of Page Wrapper -->
        @include('layouts.admin.logout')
        @include('components.plugins')
        @include('components.table')
</body>

</html>