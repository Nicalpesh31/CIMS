<?php include "nav.php"; 

if(isset($_POST['submit'])){
    include "db.php";
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $semester=$_POST['semester'];
    $rollnumber=$_POST['rollnumber'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $selectstud=mysqli_query($con,"select * from `students_detail` where `email`='$email'");
    $count=mysqli_num_rows($selectstud);
    
    if($password!=$confirmpassword){
    echo "<script>alert('Password Not Match')</script>";
    }else if($count>0){
        echo "<script>alert('Email Already Registered')</script>";
    }else if(
        $firstname==""|| $middlename=="" || $lastname=="" || $email=="" || $phonenumber=="" || $birthdate=="" || $gender=="" || $year=="" || $branch=="" || $semester=="" || $rollnumber=="" || $password=="" || $confirmpassword==""){
            echo "<script>alert('All Fields are required!!')</script>";  
    }else if($password==$confirmpassword && $count<=0){
            $sql=mysqli_query($con,"INSERT INTO `students_detail`(`firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `birthdate`, `gender`, `year`, `branch`, `semester`, `rollnumber`, `password`,`role`) VALUES ('$firstname','$middlename','$lastname','$email','$phonenumber','$birthdate','$gender','$year','$branch','$semester','$rollnumber','$password','student')");
            mysqli_query($con,"INSERT INTO `user_details`(`email`, `password`, `role`) VALUES ('$email','$password','student')");
            if($sql){
                echo "<script>alert('Student Registered Successfully!!')</script>"; 
        
            }
            }
    
}
?>
<main id="main">
    <!-- ======= Register Section ======= -->
    <div class="page-wrapper p-t-130 p-b-100">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="h2 display-5 text-center mb-5">
                        Student Registration
                    </h2>
                    <form method="POST" action="">
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="firstname">First Name</label>
                                <input class="input--style-4" type="text" name="firstname" id="firstname">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="middlename">Middle Name</label>
                                <input class="input--style-4" type="text" name="middlename" id="middlename">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="lastname">Last Name</label>
                                <input class="input--style-4" type="text" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="email">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="phonenumber">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phonenumber" id="phonenumber">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="birthdate">Date Of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" id="birthdate" name="birthdate">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="gender">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                                <input type="radio" checked="checked" name="gender" value="male">
                                                <span class="checkmark"></span>
                                            </label>
                                        <label class="radio-container">Female
                                                <input type="radio" name="gender" value="female">
                                                <span class="checkmark"></span>
                                            </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-1 mb-4">
                            <label class="label" for="year">Year</label>
                            <div class="input-group-icon">
                                <select name="year" id="year" class="form-control input--style-4">
                                        <option disabled="disabled" selected="selected" value="">
                                            -- Choose option --
                                        </option>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                    </select>
                            </div>
                        </div>
                        
                        <div class="form-group mt-1 mb-4">
                            <label class="label" for="branch">Branch</label>
                            <div class="input-group-icon">
                                <select name="branch" id="branch" class="form-control input--style-4">
                                <option value="">-- Select Branch --</option>
                                                    <option value="CSE" >CSE</option>
                                                    <option value="IT" >IT</option>
                                                    <option value="EXTC" >EXTC</option>
                                                    <option value="CIVIL" >CIVIL</option>
                                                    <option value="MECH" >MECH</option>
                                    </select>
                            </div>
                        </div>
                       
                        <div class="form-group mt-1 mb-4">
                            <label class="label" for="semester">Semester</label>
                            <div class="input-group-icon">
                                <select name="semester" id="semester" class="form-control input--style-4">
                                        <option disabled="disabled" selected="selected">
                                            -- Choose option --
                                        </option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                    </select>
                            </div>
                        </div> 
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="rollnumber">Roll Number</label>
                                <input class="input--style-4" type="number" name="rollnumber" id="rollnumber">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="password">Password</label>
                                <input class="input--style-4" type="password" name="password" id="password">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label" for="confirmpassword">Confirm Password</label>
                                <input class="input--style-4" type="password" name="confirmpassword" id="confirmpassword">
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Section -->
</main>
<!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<!-- ======= Colorlib 'register-form' JS ======= -->
<script src="colorlib-assets/register-form/vendor/jquery/jquery.min.js"></script>
<script src="colorlib-assets/register-form/vendor/select2/select2.min.js"></script>
<script src="colorlib-assets/register-form/vendor/datepicker/moment.min.js"></script>
<script src="colorlib-assets/register-form/vendor/datepicker/daterangepicker.js"></script>
<script src="colorlib-assets/register-form/js/global.js"></script>
<!-- ======= Colorlib 'register-form' JS ======= -->
</body>

</html>