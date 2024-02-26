<html lang="en">

<head>
    @include('components.head')
    <title>Admin Dashboard</title>
    @php
    $activePage = 'service-order'; // set the active page dynamically based on your route or controller logic
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
                            <h2 class="m-0 font-weight-bold text-primary">Clients</h6>
                                <button class="btn btn-success ml-auto">Register a Customer</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered responsive" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ID</th>
                                            <th style="text-align: center">Last Name</th>
                                            <th style="text-align: center">First Name</th>
                                            <th style="text-align: center">Mobile Number</th>
                                            <th style="text-align: center">Email</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mendoza</td>
                                            <td>Kylle Adyzza</td>
                                            <td>09205433548</td>
                                            <td>k.mendoza.522854@umindanao.edu.ph</td>
                                            <td style="text-align: center">
                                                <!-- View button with primary style -->
                                                <button class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                    data-placement="top" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>

                                                <!-- Edit button with warning style -->
                                                <button class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                    data-placement="top" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <!-- Delete button with danger style -->
                                                <button class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                    data-placement="top" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
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