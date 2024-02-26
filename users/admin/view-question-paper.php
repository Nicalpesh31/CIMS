<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_GET['studemail'];//$_SESSION['userid'];
    $question_paper_id=$_GET['question_paper_id'];
    $sql=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
    $rowsql=mysqli_fetch_array($sql);
  
include "nav.php";
?>
    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container justify-content-center">
            <!-- <form> -->
            <div class="container mb-5 text-center">
                <h2 class="h2 display-5">Result</h2>
                <table class="table table-responsive table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                        
                            <th>Branch</th>
                            <th>Semester</th>
                            <th>Subject</th>
                            <th>Total Marks</th>
                            <th>Marks Obtain</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           
                            <td><?php echo $rowsql['branch']; ?></td>
                            <td><?php echo $rowsql['semester']; ?></td>
                            <td><?php echo $rowsql['subject']; ?></td>
                            <td><?php echo $rowsql['totalmarks']; ?></td>
                            <td id="obtainedmarks"></td>
                            <td><?php echo $rowsql['time']." minutes"; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>

            <?php 
$sqlque=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
$srno=1;
$totalmarksobtain=0;
while($rowques=mysqli_fetch_array($sqlque)){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <span class="text-danger fw-bold">Ques<?php echo $srno++; ?>:</span>
                    </div>
                    <div class="col-md-11">
                        <span class="fw-bolder">
                        <?php 
                        $question_id=$rowques['question_id']; 
                        $sqlq=mysqli_query($con,"select * from `questions` where `id`='$question_id'");
                        $rowq=mysqli_fetch_array($sqlq);
                        echo $rowq['question']." <span class='text-danger'>".$rowq['questionmarks']." MARKS</span>";
                        echo "<input type='text' name='quesid-$question_id' hidden value='$question_id' >";

                         $sqlans=mysqli_query($con,"SELECT * FROM `question_paper_ans` WHERE `question_paper_id`='$question_paper_id' and `studemail`='$sessionemail' and `question_id`='$question_id'");
                         $rowans=mysqli_fetch_array($sqlans);
                        
                         $selcteda="";
                         $selctedb="";
                         $selctedc="";
                         $selctedd="";
                         if($rowans['question_ans']=="a"){
                            $selcteda="checked";
                         }else if($rowans['question_ans']=="b"){
                            $selctedb="checked";
                         }else if($rowans['question_ans']=="c"){
                            $selctedc="checked";
                        }else if($rowans['question_ans']=="d"){
                            $selctedd="checked";
                        }
                        ?>
                        </span>
                    </div>
                </div>
                <div class="row mt-md-2">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="form-check">
                            <div class="radio my-2">
                                <label for="radio1" class="form-check-label ">
                                    <input <?php echo $selcteda; ?> disabled type="radio" id="radio1" name="ans-<?php echo $question_id;?>" value="a" class="form-check-input">
                                    <?php  echo $rowq['optiona']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio2" class="form-check-label ">
                                    <input <?php echo $selctedb; ?> disabled  type="radio" id="radio2" name="ans-<?php echo $question_id;?>" value="b" class="form-check-input">
                                    <?php  echo $rowq['optionb']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio3" class="form-check-label ">
                                    <input <?php echo $selctedc; ?> disabled type="radio" id="radio3" name="ans-<?php echo $question_id;?>" value="c" class="form-check-input">
                                    <?php echo $rowq['optionc']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio3" class="form-check-label ">
                                    <input <?php echo $selctedd; ?> disabled type="radio" id="radio3" name="ans-<?php echo $question_id;?>" value="d" class="form-check-input">
                                    <?php  echo $rowq['optiond']; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right fw-bolder" style="text-align:right">
            <?php 
            echo  "Your Ans is: ". $rowans['question_ans']." "; 
            if($rowans['question_ans']!=$rowq['correctanwer']){
                    echo "<span class='text-danger'>Wrong Answer</span>";
            }else{
$totalmarksobtain+=$rowq['questionmarks'];
                echo "<span class='text-success'>Right Answer</span>";
            }
            ?>
            </div>
            <hr>
            <?php } ?>
            
     

            <!-- </form> -->
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
<script>
    document.getElementById("obtainedmarks").innerHTML=<?php echo $totalmarksobtain; ?>;
</script>
    <?php 
include "footer.php";

?>