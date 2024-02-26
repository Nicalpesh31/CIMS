<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
//submit noticecontent noticetitle semester branch
if(isset($_POST['submit'])){
    $noticecontent=$_POST['noticecontent'];
    $noticetitle=$_POST['noticetitle'];
    $semester=$_POST['semester'];
    $branch=$_POST['branch'];

    mysqli_query($con,"INSERT INTO `notice`(`notice_title`, `notice_content`, `status`, `semester`, `branch`) VALUES ('$noticetitle','$noticecontent','notpublished','$semester','$branch')");
    echo "<script>alert('Notice Added Successfully!! You Need to publish it to send it!!')</script>";
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
                                    <h3 class="title-4">Add Notice</h3>
                                </div>
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                      
                                    
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="branch" class="form-control-label">
                                                    Branch
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="branch" id="branch" class="form-control" required>
                                                    <option value="0">-- Select Branch --</option>
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
                                                <label for="semester" class="form-control-label">
                                                    Semester
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="semester" id="semester" class="form-control" required>
                                                    <option value="0">-- Select Semester --</option>
                                                    <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="3">4th</option>
                                        <option value="3">5th</option>
                                        <option value="3">6th</option>
                                        <option value="3">7th</option>
                                        <option value="3">8th</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group mt-4">
                                            <div class="col col-md-3 text-right">
                                                <label for="notice-title" class=" form-control-label">
                                                    Notice Title
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="notice-title" name="noticetitle" placeholder="Notice Title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group mt-4">
                                            <div class="col col-md-3 text-right">
                                                <label for="notice-content" class="form-control-label">
                                                    Notice Content
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="noticecontent" id="notice-content" rows="9" placeholder="Notice Content..." class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3">
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <button type="submit" class="btn btn-primary m-r-10" name="submit">
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
<?php include "footer.php"; ?>