<!-- ADD EMPLOYEE MODAL -->
<div class="modal fade text-left" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form class="form form-vertical" method="POST" action="{{ route('employee.store') }}"
                enctype="multipart/form-data" name="add" data-parsley-validate>
                @csrf
                <div class="modal-header bg-primary d-flex align-items-center justify-content-between">
                    <h5 class="modal-title text-white">New Employee</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Role:</label>
                                    <select class="form-control" name="roleID" id="roleID">
                                        <option value=""></option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Last Name:</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">First Name:</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Middle Name:</label>
                                    <input type="text" class="form-control" placeholder="(Optional)" name="middleName"
                                        id="middleName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Birth Date:</label>
                                    <input type="date" class="form-control" name="birthDate" id="birthDate"
                                        onchange="calculateAge()">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Age</label>
                                    <input type="number" class="form-control" name="age" id="age" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Address:</label>
                                    <input type="text" class="form-control" name="address" id="address">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Mobile Number:</label>
                                    <input type="text" placeholder="9xxxxxxxxx" class="form-control"
                                        name="mobile_number" id="mobile_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitRole" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="button" class="btn btn-secondary me-1 mb-1" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ( $employees as $employee )
<!-- VIEW EMPLOYEE MODAL -->
<div class="modal fade text-left" id="viewEmployee{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="viewEmployeeModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form class="form form-vertical" method="POST" enctype="multipart/form-data" name="add"
                data-parsley-validate>
                <div class="modal-header bg-primary d-flex align-items-center justify-content-between">
                    <h5 class="modal-title text-white">Employee</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Role:</label>
                                    <input type="text" class="form-control" value="{{ $employee->roleID }}" name="role" id="role" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Last Name:</label>
                                    <input type="text" class="form-control" value="{{ $employee->lastName }}" name="lastName" id="lastName" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">First Name:</label>
                                    <input type="text" class="form-control" value="{{ $employee->firstName }}" name="firstName" id="firstName" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Middle Name:</label>
                                    <input type="text" class="form-control" value="{{ $employee->middleName }}" name="middleName"
                                        id="middleName" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Birth Date:</label>
                                    <input type="date" class="form-control" value="{{ $employee->birthDate }}" name="birthDate" id="birthDate"
                                        onchange="calculateAge()" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Age</label>
                                    <input type="number" class="form-control" value="{{ $employee->age }}" name="age" id="age" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Address:</label>
                                    <input type="text" class="form-control" value="{{ $employee->address }}" name="address" id="address" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Mobile Number:</label>
                                    <input type="text" class="form-control"
                                        value="{{ $employee->mobile_number }}" name="mobile_number" id="mobile_number" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Email:</label>
                                    <input type="email" class="form-control" value="{{ $employee->email }}" name="email" id="email" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-1 mb-1" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('birthDate').addEventListener('change', calculateAge);
    });

    function calculateAge() {
        const birthDate = document.getElementById('birthDate').value;
        const ageField = document.getElementById('age');

        if (birthDate) {
            const today = new Date();
            const birthDateObj = new Date(birthDate);
            let age = today.getFullYear() - birthDateObj.getFullYear();
            const monthDifference = today.getMonth() - birthDateObj.getMonth();

            // Adjust age if the birth month hasn't occurred yet this year, or if the birthday hasn't occurred yet this month
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDateObj.getDate())) {
                age--;
            }

            ageField.value = age;
        } else {
            ageField.value = '';
        }
    }
</script>