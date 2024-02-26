<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];
$sqls=mysqli_query($con,"select * from `lecturer_details` where `email`='$sessionemail'");
$arrs=mysqli_fetch_array($sqls);

if(isset($_POST['submit'])){
//myfile submit subject semester branch
$subject=$_POST['subject'];
$semester=$_POST['semester'];
$branch=$_POST['branch'];
$target_dir = "Notes/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
//$target_file
mysqli_query($con,"INSERT INTO `notes`(`branch`, `subject`, `semester`,`file_url`,`status`,`added_by`) VALUES ('$branch','$subject','$semester','$target_file','unpublished','$sessionemail')");
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
                                    <h3 class="title-4">
                                        Add Notes
                                    </h3>
                                </div>
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                       
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="branch" class=" form-control-label">
                                                    Branch
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="branch" id="branch" readonly required class="form-control" value="<?php echo $arrs['branch'];?>">
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
                                                <label for="subject" class=" form-control-label">
                                                    Subject
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="subject" id="subject" class="form-control" required>
                                                    <option value="0">-- Select Subject --</option>
                                                    <?php 
                                                    $dbbranch=$arrs['branch'];
                                                    $sqlsubj=mysqli_query($con,"select * from `subject` where `branch`='$dbbranch'");
                                                    while($arrsubj=mysqli_fetch_array($sqlsubj)){
                                                    ?>
                                                    <option value="<?php echo $arrsubj['subject'];?>"><?php echo $arrsubj['subject'];?></option>
                                                   <?php } ?>
                                                </select>
                                                <a href="addsubject.php">Add Subject</a>
                                            </div>
                                        </div>
                                        <div class="row form-group mt-4">
                                            <div class="col col-md-3 text-right">
                                                <label for="notes-content" class="form-control-label">
                                                    Notes Content
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" class="form-control" name="myfile">
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
    </div>
    <!-- END MAIN CONTENT-->

</main>
<!-- End #main -->

<?php
include "footer.php";

?>