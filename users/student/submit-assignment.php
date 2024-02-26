<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
    $getsub=$_GET['subject'];
    $studdet=mysqli_query($con,"select * from `students_detail` where `email`='$sessionemail'");
    $rowstud=mysqli_fetch_array($studdet);
    $branch=$rowstud['branch'];                    
    $semester=$rowstud['semester'];
    if(isset($_POST['submit'])){
//submit practical-answers subject semester branch
$practicalanswers=$_POST['practical-answers'];
$subject=$_POST['subject'];
$semester=$_POST['semester'];
$branch=$_POST['branch'];
$quesid=$_GET['quesid'];
mysqli_query($con,"INSERT INTO `assignment_ans`(`assignment_ans`, `subject`, `semester`, `branch`, `stud_email`,`quesid`) VALUES ('$practicalanswers','$subject','$semester','$branch','$sessionemail','$quesid')");
echo "<script>alert('data inserted Successfully!!');</script>";
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
                                            Submit Assignment
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
                                                   <input type="text" name="branch" id="branch" readonly required value="<?php echo $branch; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="semester" class=" form-control-label">
                                                        Semester
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" name="semester" id="semester" readonly required value="<?php echo $semester; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="subject" class=" form-control-label">
                                                        Subject
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                
                                                <input type="text" name="subject" id="subject" readonly required value="<?php echo $getsub; ?>" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group mt-4">
                                                <div class="col col-md-3 text-right">
                                                    <label for="practical-answers" class="form-control-label">
                                                        Assignment Answers
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="practical-answers" id="practical-answers" rows="9" placeholder="Notice Content..." class="form-control"></textarea>
                                                </div>
                                            </div><br>
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
<?php include "footer.php"; ?>