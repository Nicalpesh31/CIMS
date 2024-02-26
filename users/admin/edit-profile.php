<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];
if(isset($_POST['changepass'])){
     $currentpassword=$_POST['currentpassword'];
    $newpassword=$_POST['newpassword'];
    $confirmpassword=$_POST['confirmpassword'];
    $xyz=mysqli_query($con,"select * from `user_details` where `email`='$sessionemail'");
    $xyzarr=mysqli_fetch_array($xyz);
    $xyzpassword=$xyzarr['password'];
    //update password
    if($newpassword!=$confirmpassword){
    echo "<script>alert('Paaword Not Match!!')</script>";
    }else if($xyzpassword==$currentpassword){
 
    mysqli_query($con,"UPDATE `user_details` SET `password`='$newpassword' WHERE `email`='$sessionemail'");
    echo "<script>alert('Paaword Updated Successfuly!!')</script>";
    
    }
    }

include "nav.php";
?>

<main id="main">

    <!-- MAIN CONTENT-->
    <div class="main-content mb-5">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-2">
                        <div class="col-lg-2">
</div>
</div>
                    <div class="col-md-10">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="title-4">Change Password</h3>
                                </div>
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="form-group mb-4">
                                            <label for="current-password" class=" form-control-label">Current Password</label>
                                            <input type="password" id="current-password" name="currentpassword" placeholder="Enter Current Password" class="form-control">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="new-password" class=" form-control-label">New Password</label>
                                            <input type="password" id="new-password" name="newpassword" placeholder="Enter New Password" class="form-control">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="confirm-password" class=" form-control-label">Confirm Password</label>
                                            <input type="password" id="confirm-password" name="confirmpassword" placeholder="Confirm New Password" class="form-control">
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col-12 col-md-9">
                                                <button type="submit" class="btn btn-primary  m-r-10" name="changepass">
                                                    <i class="fa fa-dot-circle-o mr-1"></i>
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger" >
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