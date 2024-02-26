
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
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
                                        <h3 class="title-4">Edit Student</h3>
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
                                                    <input type="text" id="first-name" name="first-name" placeholder="First Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="middle-name" class=" form-control-label">
                                                        Middle Name
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="middle-name" name="middle-name" placeholder="Middle Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="last-name" class=" form-control-label">
                                                        Last Name
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="last-name" name="last-name" placeholder="Last Name" class="form-control" required>
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
                                                    <input type="number" id="phone-number" name="phone-number" placeholder="Phone Number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="birth-date" class=" form-control-label">
                                                        Date Of Birth
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="birth-date" name="birth-date" placeholder="Date Of Birth" class="form-control date-picker" autocomplete="off" required>
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
                                                            <input type="radio" id="male" name="gender"
                                                                value="male" class="form-check-input" required>
                                                            Male
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label p-r-20">
                                                            <input type="radio" id="female" name="gender"
                                                                value="female" class="form-check-input">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="college" class=" form-control-label">
                                                        College
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="college" id="college" class="form-control" required>
                                                        <option value="0">-- Select College --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="course" class=" form-control-label">
                                                        Course
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="course" id="course" class="form-control" required>
                                                        <option value="0">-- Select Course --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
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
                                                        <option value="0">-- Select Branch --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
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
                                                        <option value="0">-- Select Semester --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
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
                                                    <input type="number" id="roll-number" name="roll-number" placeholder="Roll Number" class="form-control" required>
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
                                                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <button type="submit" class="btn btn-primary  m-r-10">
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
        </div>
        <!-- END MAIN CONTENT-->

    </main>
    <!-- End #main -->
<?php include "footer.php"; ?>