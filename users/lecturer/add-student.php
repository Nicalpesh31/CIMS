<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}

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
    if($password==$confirmpassword && $count<=0){
    $sql=mysqli_query($con,"INSERT INTO `students_detail`(`firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `birthdate`, `gender`, `year`, `branch`, `semester`, `rollnumber`, `password`,`role`) VALUES ('$firstname','$middlename','$lastname','$email','$phonenumber','$birthdate','$gender','$year','$branch','$semester','$rollnumber','$password','student')");
    mysqli_query($con,"INSERT INTO `user_details`(`email`, `password`, `role`) VALUES ('$email','$password','student')");
    if($sql){
        echo "<script>alert('Student Registered Successfully!!')</script>"; 

    }
    }
    else if($password!=$confirmpassword){
    echo "<script>alert('Password Not Match')</script>";
    }else if($count>0){
        echo "<script>alert('Email Already Registered')</script>";
    }
}
include "nav.php";
?>



<main id="main">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="title-4">Add New Student</h3>
                                </div>
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="first-name" class=" form-control-label">
                                                    First Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="first-name" name="firstname" placeholder="First Name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="middle-name" class=" form-control-label">
                                                    Middle Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="middle-name" name="middlename" placeholder="Middle Name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="last-name" class=" form-control-label">
                                                    Last Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="email" class=" form-control-label">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email" name="email" placeholder="E-Mail" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="phone-number" class=" form-control-label">
                                                    Phone Number
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="phone-number" name="phonenumber" placeholder="Phone Number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="birth-date" class="form-control-label">
                                                    Date Of Birth
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="date" id="birth-date" name="birthdate" placeholder="Date Of Birth" class="form-control date-picker" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label class="form-control-label" for="gender">
                                                    Gender
                                                </label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check-inline form-check">
                                                    <label for="inline-radio1" class="form-check-label p-r-20">
                                                        <input type="radio" id="male" name="gender" value="male" class="form-check-input" required>
                                                        Male
                                                    </label>
                                                    <label for="inline-radio2" class="form-check-label p-r-20">
                                                        <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="branch" class=" form-control-label">
                                                    Branch
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="branch" id="branch" class="form-control" required>
                                                    <option value="">Choose Option</option>
                                                <option value="CSE" >CSE</option>
                                                    <option value="IT" >IT</option>
                                                    <option value="EXTC" >EXTC</option>
                                                    <option value="CIVIL" >CIVIL</option>
                                                    <option value="MECH" >MECH</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="year" class=" form-control-label">
                                                    Year
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="year" id="year" class="form-control" required>
                                                <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="semester" class=" form-control-label">
                                                    Semester
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="semester" id="semester" class="form-control" required>
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
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="roll-number" class=" form-control-label">
                                                    Roll Number
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="roll-number" name="rollnumber" placeholder="Roll Number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="password" class=" form-control-label">
                                                    Password
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="confirm-password" class=" form-control-label">
                                                    Confirm Password
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="confirm-password" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3">
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <button type="submit" class="btn btn-primary  m-r-10" name="submit">
                                                    <i class="fa fa-dot-circle-o mr-1"></i>
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger">
                                                    <i class="fa fa-ban mr-1"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END MAIN CONTENT-->

</main>
<!-- End #main -->
<?php
include "footer.php";
?>