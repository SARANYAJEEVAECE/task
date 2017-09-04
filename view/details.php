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
                <div class="card-body wizard-content">
                    <h4 class="card-title">Details</h4>
                    <form action="#">
                        <!-- <h6>Personal Info</h6> -->
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1" style="color: #1E88E5">Name :</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" style="color: #1E88E5">Email Address :</label>
                                        <input type="email" class="form-control" name="email" id="email" required> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="phoneNumber1" style="color: #1E88E5">Phone Number :</label>
                                        <input type="tel" class="form-control" name="phone_number" id="phone_number" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location1" style="color: #1E88E5">Select City :</label>
                                        <select class="custom-select form-control" name="city" id="city" required>
                                            <option value="">Select City</option>
                                            <option value="Amsterdam">India</option>
                                            <option value="Berlin">USA</option>
                                            <option value="Frankfurt">Dubai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

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
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>