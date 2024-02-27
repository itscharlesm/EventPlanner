<html lang="en">

<head>
    @include('components.head')
    <title>Admin Dashboard</title>
    @php
    $activePage = 'setting'; // set the active page dynamically based on your route or controller logic
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
                <div class="row">
                    <!-- Service Card (larger) -->
                    <div class="col-lg-9 mb-4" style="position:relative; left:20px; top:0px;">
                        <div class="card shadow mx-4">
                            <!-- Content for Service Card -->
                            <div class="card-header py-3 d-flex align-items-center">
                                <nav aria-label="breadcrumb" class="mr-auto">
                                    <h3 class="font-weight-bold text-primary" style="margin: 0 15px 0px 10px;">Employees
                                    </h3>
                                    <ol class="breadcrumb m-0" style="background-color: transparent; padding: 0 10px;">
                                        <li class="breadcrumb-item" style="font-size: 14;"><a
                                                href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active" style="font-size: 14;" aria-current="page">
                                            Employees</li>
                                    </ol>
                                </nav>
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus"></i> New Employee
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- Service Card Content -->
                                <div class="table-responsive">
                                    <table class="table table-bordered responsive" id="dataTable" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">No.</th>
                                                <th style="text-align: center">Last Name</th>
                                                <th style="text-align: center">First Name</th>
                                                <th style="text-align: center">Mobile Number</th>
                                                <th style="text-align: center">Email</th>
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center">1</td>
                                                <td style="text-align: center">Mendoza</td>
                                                <td style="text-align: center">Charleslexcel</td>
                                                <td style="text-align: center">09062913082</td>
                                                <td style="text-align: center">itscharlesm@gmail.com</td>
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
                    </div>
                    <!-- Categories Card (smaller) -->
                    <div class="col-lg-3 mb-4" style="position:relative; right:20px; top:0px;">
                        <div class="card shadow mx-4">
                            <div class="card-content">
                                <!-- Content for Categories Card -->
                                <div class="card-header py-3 d-flex align-items-center">
                                    <nav aria-label="breadcrumb" class="d-flex align-items-center">
                                        <h5 class="font-weight-bold text-primary" style="margin: 0 15px 0px 10px;">
                                            Employees</h5>
                                    </nav>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">No.</th>
                                                <th style="text-align: center">Category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center">1</td>
                                                <td style="text-align: center"><a type="button">Category Name</a></td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.admin.footer')
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    @include('layouts.admin.logout')
    @include('components.plugins')
    @include('components.table')

</body>

</html>