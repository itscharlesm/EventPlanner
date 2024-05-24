<!-- ADD ROLE MODAL -->
<div class="modal fade text-left" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form class="form form-vertical" method="POST" enctype="multipart/form-data" name="add"
                data-parsley-validate>
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
                                    <select class="form-control" name="role" id="role">
                                        <option value="Admin">Admin</option>
                                        <option value="Owner">Owner</option>
                                        <option value="Employee">Employee</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Last Name:</label>
                                    <input type="text" class="form-control" name="lastname" id="lastName">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">First Name:</label>
                                    <input type="text" class="form-control" name="firstname" id="firstName">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Middle Name:</label>
                                    <input type="text" class="form-control" name="middlename" id="middleName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label class="form-label text-dark">Birth Date:</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthDate">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submitRole" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="button" class="btn btn-secondary me-1 mb-1" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
