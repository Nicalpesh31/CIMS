
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sesuser=$_SESSION['userid'];
    $sqlbr=mysqli_query($con,"select * from `lecturer_details` where `email`='$sesuser'");
    $rowbr=mysqli_fetch_array($sqlbr);
     $dbbbranch=$rowbr['branch'];
include "nav.php"; 
?>
    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container-fluid justify-content-center text-center">
            <div class="d-flex justify-content-end">
                <a href="add-student.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>Add Student
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">Student Analytics</h2>
            <table id="students-table" class="display cell-border stripe hover compact order-column">
                <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Student</th>
                        <th rowspan="2">Roll Number</th>
  
                        <th rowspan="2">Branch</th>
                        <th rowspan="2">Semester</th>
                        <th colspan="3">Assignments</th>
                        <th colspan="3">Practicals</th>
                       
                       
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>Completed</th>
                        <th>Remaining</th>
                        <th>Total</th>
                        <th>Completed</th>
                        <th>Remaining</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql=mysqli_query($con,"select * from `students_detail` where `role`='student' and `branch`='$dbbbranch'");
                    $srno=1;
                    while($arr=mysqli_fetch_array($sql)){
                        $branch=$arr['branch'];
                        $semester=$arr['semester'];
                        $email=$arr['email'];
                    
                    
                    $sqlpractical=mysqli_query($con,"select * from `practical` where `branch`='$branch' and `semester`='$semester' and `status`='published'");
                    $counttotalpractical=mysqli_num_rows($sqlpractical);

                    $sqlpractical1=mysqli_query($con,"SELECT * FROM `practical_ans` WHERE `stud_email`='$email' and `accept`='1'");
                    $counttotalsolvedpractical=mysqli_num_rows($sqlpractical1);


                    $sqlpractical2=mysqli_query($con,"select * from `assignment` where `branch`='$branch' and `semester`='$semester' and `status`='published'");
                    $counttotalpractical2=mysqli_num_rows($sqlpractical2);

                    $sqlpractical12=mysqli_query($con,"SELECT * FROM `assignment_ans` WHERE `stud_email`='$email' and `accept`='1'");
                    $counttotalsolvedpractical2=mysqli_num_rows($sqlpractical12);
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $arr['firstname']; echo " ".$arr['middlename']; echo " ".$arr['lastname'];?></td>
                        <td><?php echo $arr['rollnumber'];?></td>
                       
                        <td><?php echo $arr['branch'];?></td>
                        <td><?php echo $arr['semester'];?></td>
                        <td class="text-primary"><?php echo $counttotalpractical2; ?></td>
                        <td class="text-success"><?php echo $counttotalsolvedpractical2; ?></td>
                        <td class="text-danger"><?php echo $counttotalpractical2-$counttotalsolvedpractical2; ?></td>
                        <td class="text-primary"><?php echo $counttotalpractical; ?></td>
                        <td class="text-success"><?php echo $counttotalsolvedpractical; ?></td>
                        <td class="text-danger"><?php echo $counttotalpractical-$counttotalsolvedpractical; ?></td>
                     
                     
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
<?php include "footer.php"; ?>