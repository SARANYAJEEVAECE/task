<?php 
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Employee Details</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block wizard-content">
                    <form action="#" method="POST" class="tab-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Personal Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" style="color: #1E88E5">First Name :</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name" style="color: #1E88E5">Last Name :</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" required> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" style="color: #1E88E5">Email Address :</label>
                                        <input type="email" class="form-control" name="email" id="email" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number" style="color: #1E88E5">Phone Number :</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number" required> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city" style="color: #1E88E5">Location:</label>
                                        <input type="date" class="form-control" name="city" id="city" required> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_birth" style="color: #1E88E5">Date of Birth :</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required> </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Job Status</h6>
                        <section>
                            <div class="row">
                              <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name" style="color: #1E88E5" required>Company Name :</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_title" style="color: #1E88E5">Job Title & Task:</label>
                                        <input type="text" class="form-control" name="job_title" id="job_title" required> </div>
                                </div>
                            </div>
                        </section>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info waves-effect" data-dismiss="modal" formaction="../controller/employee_details.php">Save</button>
                            <!-- <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button> -->
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>              
<?php 
include_once 'footer.php';
?>