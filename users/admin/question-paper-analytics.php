<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    } 
    $sessionemail=$_SESSION['userid'];
    $sqlbr=mysqli_query($con,"select * from `hod_details` where `email`='$sessionemail'");
    $sqlrow=mysqli_fetch_array($sqlbr);
     $branch=$sqlrow['branch'];
include "nav.php"; 
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container-fluid justify-content-center text-center">
            <h2 class="h2 display-4 mb-3">Question Papers</h2>
            <table id="question-papers-table" class="display cell-border stripe hover order-column" style=" width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Subject</th>
                        <th>Question Paper Number</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>View Result</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql=mysqli_query($con,"select * from `question_paper` group by `question_paper_id`");
                    $srno=1;
                    while($row=mysqli_fetch_array($sql)){
                         $qid=$row['question_paper_id'];
                        $sqlnm=mysqli_query($con,"select * from `question_paper_ans` where `question_paper_id`='$qid'");
                        $rowstudnm=mysqli_fetch_array($sqlnm);
                        //print_r($rowstudnm);
                          $studemail=$rowstudnm['studemail'];

                        $sqlnm1=mysqli_query($con,"select * from `students_detail` where `email`='$studemail'");
                        $rowstudnm1=mysqli_fetch_array($sqlnm1);
                        $firstname=$rowstudnm1['firstname'];
                        $middlename=$rowstudnm1['middlename'];
                        $lastname=$rowstudnm1['lastname'];
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $firstname." ".$middlename." ".$lastname; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['question_paper_id']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td>
                            <a href="view-question-paper.php?question_paper_id=<?php echo $row['question_paper_id']; ?>&&studemail=<?php echo $studemail; ?>" class="text-info" title="Edit">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php 
}
?>
                </tbody>
            </table>
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
    <?php include "footer.php"; ?>