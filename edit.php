<?php
require_once('connection.php');


require_once('header.php');
require_once('navbar.php');
?>
<form method="post">
    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-header">
                <h4 class="card-title text-center text-primary text-uppercase">User Form</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputName">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="inputAddress">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="inputEmail">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputPhone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="inputPhone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputRole" class="form-label">Role</label>
                        <select class="form-select" aria-label="Default select example" name="inputRole" required>
                            <!-- <option selected>Role</option> -->
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputDate" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="inputBirthDate" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary w-100">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
require_once('footer.php');
?>