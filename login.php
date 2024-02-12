<?php
  include "db.php";

    if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=mysqli_query($con,"select * from `user_details` where `email`='$email'");
    $row=mysqli_fetch_array($sql);
    $dbpassword=$row['password'];
    $userid=$row['email'];
    $count=mysqli_num_rows($sql);
    $role=$row['role'];

    if($count<=0){
        echo "<script>alert('Student Not Registered!!')</script>"; 
    }else if($dbpassword!=$password){
        echo "<script>alert('Wrong Email or Password!!')</script>"; 
    }else{
        //login
        if($role=="student"){
            $_SESSION['userid']=$userid;
            header("location:users/student/dashboard.php");
            }else if($role=="admin"){
                $_SESSION['userid']=$userid;
                header("location:users/admin/dashboard.php");
            }
            else if($role=="HOD"){
                $_SESSION['userid']=$userid;
                header("location:users/hod/dashboard.php");
            }else if($role=="lecturer"){
                $_SESSION['userid']=$userid;
                header("location:users/lecturer/dashboard.php");
            }
    }
}
?>

<?php  include "nav.php";  ?>
	<main id="main">
        <!-- ======= Login Form Section ======= -->
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action="">
                        <span class="login100-form-title p-b-26">
                            Log In
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="This is not a valid email">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" name="submit" class="login100-form-btn">
                                    Login
                                </button>
                            </div>
                        </div>
                        <div class="text-center pt-5">
                            <span class="txt1">
                                Don't have an account?
                            </span>
                            <a class="txt2" href="register.php">
                                Sign Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <!-- End Login Form Section -->
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

    <!-- ======= Colorlib 'login-form' JS ======= -->
    <script src="colorlib-assets/login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="colorlib-assets/login-form/vendor/animsition/js/animsition.min.js"></script>
	<!-- <script src="colorlib-assets/login-form/vendor/bootstrap/js/popper.js"></script>
	<script src="colorlib-assets/login-form/vendor/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="colorlib-assets/login-form/vendor/select2/select2.min.js"></script>
	<script src="colorlib-assets/login-form/vendor/daterangepicker/moment.min.js"></script>
	<script src="colorlib-assets/login-form/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="colorlib-assets/login-form/vendor/countdowntime/countdowntime.js"></script>
	<script src="colorlib-assets/login-form/js/main.js"></script>
    <!-- ======= Colorlib 'login-form' JS ======= -->

</body>
</html>