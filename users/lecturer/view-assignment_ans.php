<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
include "nav.php"; 


?>

<main id="main">
    <section class="container justify-content-center">
        <div class="container text-center">
            <h2 class="h2 display-4 mb-3">View Assignment Ans</h2>         
        </div>
        <div class="container mt-5 card">
                <table id="students-table-practical" class="display cell-border stripe hover order-column" style="width: 100%">
                <thead>
                  
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>View Ans</th>
                        
                        <th>Activity</th>
                    </tr>
      
                </thead>
                <tbody>
                <?php 
                   $sql=mysqli_query($con,"SELECT * FROM `assignment_ans`");
                   $srno=1;
                   while($row=mysqli_fetch_array($sql)){
    $quesid=$row['quesid'];
    $stud_email=$row['stud_email'];
    $subject=$row['subject'];
    $branch=$row['branch'];
    $semester=$row['semester'];

    $selques=mysqli_query($con,"select * from `practical` where `id`='$quesid'");
    $arrques=mysqli_fetch_array($selques);
    $added_by=$arrques['added_by'];
    if($added_by==$sessionemail){
        $studdet=mysqli_query($con,"select * from `students_detail` where `email`='$stud_email'");
    $arrstuddet=mysqli_fetch_array($studdet);
                   ?>
             <tr>
                 <td><?php echo $srno++; ?></td>
                 <td><?php echo $arrstuddet['firstname']; echo " ".$arrstuddet['middlename']; echo " ".$arrstuddet['lastname'];?></td>
                 <td><?php echo  $subject; ?></td>
                 <td><?php echo  $branch; ?></td>
                 <td><?php echo  $semester; ?></td>
                 <td>
                 <a href="view-assignment_ans_stud.php?id=<?php echo $row['id']; ?>" class="text-primary" title="View">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                 </td>
            
                 <td>
                     <a href="acceptassignment.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Accept</a>
                 </td>
                
              
             </tr>
             <?php }} ?>               
               
                   
                </tbody>
            </table>
        </div>
    </section>
    <!-- ======= Table Section ======= -->

</main>
<!-- End #main -->
<?php include "footer.php"; ?>