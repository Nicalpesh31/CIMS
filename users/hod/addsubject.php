<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];
$sqls=mysqli_query($con,"select * from `hod_details` where `email`='$sessionemail'");
$arrs=mysqli_fetch_array($sqls);

if(isset($_POST['submit'])){
   // branch semester subject
   $branch=$_POST['branch'];
   $semester=$_POST['semester'];
   $subject=$_POST['subject'];//asignto
   $asignto=$_POST['asignto'];//
   mysqli_query($con,"INSERT INTO `subject`(`branch`, `semester`, `subject`,`lect_id`) VALUES ('$branch','$semester','$subject','$asignto')");
   echo "<script>alert('Record Added Successfully!!');</script>";
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
                                        Add Subject
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
                                                    Subject Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                            <input type="text" name="subject" id="subject" required class="form-control" >
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="subject" class=" form-control-label">
                                                   Asign To
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                            <select name="asignto" id="" class=" form-control">
                                                <?php
                                                $seellect=mysqli_query($con,"select * from `lecturer_details`");
                                                    while($rowlect=mysqli_fetch_array($seellect)){
                                                ?>
                                                <option value="<?php echo $rowlect['email']; ?>"><?php echo $rowlect['email']; ?></option>
                                                <?php } ?>
                                            </select>
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