
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
include "nav.php"; 
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container-fluid justify-content-center text-center">
            <div class="d-flex justify-content-end">
                <a href="add-question.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>Add Question
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">Questions</h2>
            <table id="students-table-ques" class="display cell-border stripe hover order-column" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Subject</th>
                        
                        <th>Question</th>
                        <th>Option A</th>
                        <th>Option B</th>
                        <th>Option C</th>
                        <th>Option D</th>
                        <th>Correct Answer</th>
                        <th>Marks</th>
                       
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
$sql=mysqli_query($con,"select * from `questions` where `added_by`='$sessionemail'");
$srno=1;
while($row=mysqli_fetch_array($sql)){
    
    
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        
                        <td class="fw-bolder">
                        <?php echo $row['question']; ?>
                        </td>
                        <td><?php echo $row['optiona']; ?></td>
                        <td><?php echo $row['optionb']; ?></td>
                        <td><?php echo $row['optionc']; ?></td>
                        <td><?php echo $row['optiond']; ?></td>
                        <td><?php echo $row['correctanwer']; ?></td>
                        <td><?php echo $row['questionmarks']; ?></td>
                        
                        <td>
                            <a href="deletequestion.php?id=<?php echo $row['id'];?>" class="text-danger" title="Delete Question">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
        <?php } ?>           
                
                </tbody>
            </table>
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
<?php include "footer.php"; ?>