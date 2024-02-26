<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];
//firstname middlename lastname email phonenumber birthdate gender

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
   

    $updatequery=mysqli_query($con,"UPDATE `hod_details` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phonenumber`='$phonenumber',`birthdate`='$birthdate',`gender`='$gender', `branch`='$branch' WHERE `email`='$sessionemail'");
    echo "<script>alert('Profile Updated Successfuly!!')</script>";

    if($email!=$sessionemail){
        $selectusers=mysqli_query($con,"UPDATE `user_details` SET `email`='$email' WHERE `email`='$sessionemail'");
    }


}

$sql=mysqli_query($con,"select * from `hod_details` where `email`='$sessionemail'");
$arr=mysqli_fetch_array($sql);
$dbfirstname=$arr['firstname'];
$dbmiddlename=$arr['middlename'];
$dblastname=$arr['lastname'];
$dbemail=$arr['email'];
$dbphonenumber=$arr['phonenumber'];
$dbbirthdate=$arr['birthdate'];
$dbgender=$arr['gender'];
$dbbranch=$arr['branch'];


 $arrdate=explode("-",$dbbirthdate);
//print_r($arrdate);
 $dateee=$arrdate[2];
  $month=$arrdate[1];
   $year=$arrdate[0];
    $dbdate=$year."-".$month."-".$dateee;
if($_SESSION['userid']!=$dbemail){
    header("location:../../index.php");
}
//currentpassword  newpassword confirmpassword changepass
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
$sqlupdpass=mysqli_query($con,"UPDATE `hod_details` SET `password`='$newpassword' WHERE `email`='$sessionemail'");
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
                    <div class="col-md-6">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="title-4">Edit Profile</h3>
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
                                                <input type="text" id="first-name" name="firstname" placeholder="First Name" class="form-control" required value="<?php echo $dbfirstname;?>">
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="middle-name" class=" form-control-label">
                                                    Middle Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="middle-name" name="middlename" placeholder="Middle Name" class="form-control" required value="<?php echo $dbmiddlename;?>">
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="last-name" class=" form-control-label">
                                                    Last Name
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="form-control" required value="<?php echo $dblastname;?>">
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
                                                    <option value="">-- Select Branch --</option>
                                                    <option value="CSE" <?php if($dbbranch=="CSE"){echo "selected";}   ?>>CSE</option>
                                                    <option value="IT" <?php if($dbbranch=="IT"){echo "selected";}   ?>>IT</option>
                                                    <option value="EXTC" <?php if($dbbranch=="EXTC"){echo "selected";}   ?>>EXTC</option>
                                                    <option value="CIVIL" <?php if($dbbranch=="CIVIL"){echo "selected";}   ?>>CIVIL</option>
                                                    <option value="MECH" <?php if($dbbranch=="MECH"){echo "selected";}   ?>>MECH</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="email" class=" form-control-label">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email" name="email" placeholder="E-Mail" class="form-control" required value="<?php echo $dbemail;?>">
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="phone-number" class=" form-control-label">
                                                    Phone Number
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="phone-number" name="phonenumber" placeholder="Phone Number" class="form-control" required value="<?php echo $dbphonenumber;?>">
                                            </div>
                                        </div>
                                        <div class="row form-group m-t-30">
                                            <div class="col col-md-3 text-right">
                                                <label for="birth-date" class=" form-control-label">
                                                    Date Of Birth
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="birth-date" name="birthdate" placeholder="Date Of Birth" class="form-control date-picker" autocomplete="off" required value="<?php echo $dbdate;?>">
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
                                                        <input type="radio" id="male" name="gender" value="male" class="form-check-input" required <?php if($dbgender=="male"){ echo "checked"; }?>>
                                                        Male
                                                    </label>
                                                    <label for="inline-radio2" class="form-check-label p-r-20">
                                                        <input type="radio" id="female" name="gender" value="female" class="form-check-input" <?php if($dbgender=="female"){ echo "checked"; }?>>
                                                        Female
                                                    </label>
                                                </div>
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
                    <div class="col-md-6">
                        <div class="col-lg-12">
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