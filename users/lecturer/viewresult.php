<?php
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
include "nav.php";
$sqlstud=mysqli_query($con,"select * from `lecturer_details` where `email`='$sessionemail'");
$arrsqlstud=mysqli_fetch_array($sqlstud);
$branch=$arrsqlstud['branch'];
//$semester=$arrsqlstud['semester'];
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container-fluid justify-content-center text-center">
            <h2 class="h2 display-4 mb-3">Results</h2>
            <table id="question-papers-table" class="display cell-border stripe hover order-column" style=" width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                       
                        <th>Subject</th>
                        <th>Question Paper ID</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        
                        <th>View Result</th>
                        <th>Email</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php 
    $sql=mysqli_query($con,"select * from `question_paper` where `branch`='$branch' and `added_by`='$sessionemail' group by `question_paper_id`");
    $srno=1;
    while($row=mysqli_fetch_array($sql)){
        $question_paper_id=$row['question_paper_id'];
                    ?>
                    <tr>
                        
                        <td><?php echo $srno++; ?></td>
                       
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['question_paper_id']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td>
                          <?php 
                           $sqlgvv=mysqli_query($con,"SELECT * FROM `question_paper_ans` WHERE `question_paper_id`='$question_paper_id'");
                           $rowgivenexamv=mysqli_fetch_array($sqlgvv);
                             $countgvv=mysqli_num_rows($sqlgvv);
                           if($countgvv>0){
                          ?>
                        <a href="result.php?question_paper_id=<?php echo $question_paper_id; ?>" class="text-primary" title="View assignment">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        <?php } ?>
                        </td>
                        <td><?php echo $rowgivenexamv['studemail']; ?></td>
                    </tr>
                    <?php } ?> 
                </tbody>
            </table>
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->


    <?php include "footer.php"; ?>