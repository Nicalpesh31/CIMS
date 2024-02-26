
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
    $sqls=mysqli_query($con,"select * from `lecturer_details` where `email`='$sessionemail'");
$arrs=mysqli_fetch_array($sqls);
if(isset($_POST['generate-ques-ppr'])){
//generate-ques-ppr branch semester subject time totalmarks totalquestions
//added_by question_paper_id
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$time=$_POST['time'];
$totalmarks=$_POST['totalmarks'];
$totalquestions=$_POST['totalquestions'];
$pprname=$_POST['pprname'];
//generate randon question according to marks and branch semester and subject 

$sql=mysqli_query($con,"select * from `questions` where `branch`='$branch' and `semester`='$semester' and `subject`='$subject' and `added_by`='$sessionemail' ORDER BY RAND() LIMIT $totalquestions");
$countques=mysqli_num_rows($sql);
$addmarkstoarr=0;
$question_paper_id=uniqid();
while($row=mysqli_fetch_array($sql))
{
 $quesid=$row['id'];
  $sqlquesid=mysqli_query($con,"select * from `questions` where `id`='$quesid'");
 $rowquesid=mysqli_fetch_array($sqlquesid);
 $markstotal=$rowquesid['questionmarks'];
 $addmarkstoarr+= $markstotal;
 //insert into question_paper table


 
  if($addmarkstoarr>$totalmarks){
    mysqli_query($con,"DELETE FROM `question_paper` WHERE `question_paper_id`='$question_paper_id'");
    echo "<script>alert('Total Marks Addition Not match Please Try Again!!')</script>";  
 
    break;
 }else if($addmarkstoarr<=$totalmarks){
    mysqli_query($con,"INSERT INTO `question_paper`(`branch`, `semester`, `subject`, `time`, `totalmarks`, `totalquestions`, `added_by`, `question_paper_id`,`question_id`,`pprname`) VALUES ('$branch','$semester','$subject','$time','$totalmarks','$totalquestions','$sessionemail','$question_paper_id','$quesid','$pprname')");

     if($addmarkstoarr==$totalmarks){
      
        echo "<script>alert('Question Paper Generated Succesfully!!')</script>";
        break;
        }else{

        }
    
    
 }

}

//echo $addmarkstoarr;
}
include "nav.php"; 
?>

    <main id="main">
        <form class="mt-3 mb-5 pb-5 pt-3 px-5 text-white text-dark" method="post" action="">
            <h2 class="h2 display-4 my-5 text-dark text-center fw-bolder">Create A Question Paper</h2>
            <hr>
            <div class="container my-5 py-5 bg-light shadow-lg">
                <h2 class="h2 mb-4 display-6 text-center fw-bolder">Select Subject, Time & Marks</h2>
                <div class="row">
                  
                    <div class="col-md-2">
                        <label for="branch" class="form-control-label">Branch</label>
                        <input type="text" name="branch" id="branch" readonly class="form-control" value="<?php echo $arrs['branch'];?>">
                    </div>
                    <div class="col-md-2">
                        <label for="pprname" class="form-control-label">Exam Name</label>
                        <input type="text" name="pprname" id="pprname"  class="form-control" value="<?php echo $arrs['pprname'];?>">
                    </div>
                    <div class="col-md-2">
                        <label for="semester" class="form-control-label">Semester</label>
                        <select name="semester" id="semester" class="form-control">
                        <option value="0">-- Select Semester --</option>
                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="subject" class="form-control-label">Subject</label>
                        <select name="subject" id="subject" class="form-control">
                        <option value="0">-- Select Subject --</option>
                        <?php 
                                                    $dbbranch=$arrs['branch'];
                                                    $sqlsubj=mysqli_query($con,"select * from `subject` where `branch`='$dbbranch'");
                                                    while($arrsubj=mysqli_fetch_array($sqlsubj)){
                                                    ?>
                                                   <option value="<?php echo $arrsubj['subject'];?>"><?php echo $arrsubj['subject'];?></option>
                                                   <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="time" class="form-control-label">Time Duration</label>
                        <input type="text" placeholder="In minuites" class="form-control" id="time" name="time">
                    </div>
                    <div class="col-md-2">
                        <label for="select" class="form-control-label">Total Marks</label>
                        <input type="number" class="form-control" id="marks" name="totalmarks">
                    </div>
                    <div class="col-md-2">
                        <label for="totalquestions" class="form-control-label">Total Ques</label>
                        <input type="number" class="form-control" id="totalquestions" name="totalquestions">
                    </div>
                    
                    </form>
                </div><br>
                <div class="row">
                <div class="col-md-4">
                                                    </div>
                    <div class="col-md-4">
                   
                        <input type="submit" value="Generate Question Paper" class="form-control btn btn-success" id="generate-ques-ppr" name="generate-ques-ppr">
                    </div>
                    <div class="col-md-4">
                                                    </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- <div class="container my-5 shadow-lg py-5 bg-light">
                <h2 class="h2 display-5 fw-bolder">
                    Questions
                </h2>
                <hr>
                <div class="row form-group">
                    <div class="col col-md-12">
                        <div class="form-check">
                            <div class="checkbox my-3">
                                <label for="checkbox1" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">
                                    The systems which allow only one process execution at a time, are called __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-1">uniprogramming systems</li>
                                    <li class="py-1">uniprocessing systems</li>
                                    <li class="py-1">unitasking systems</li>
                                    <li class="py-1">none of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    Which of the following is false?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">Process: Contains code+data+heap+stack+process state</li>
                                    <li class="py-md-1">Program: One program can be used to create many processes</li>
                                    <li class="py-md-1">Process: Process is not a unique isolated entity</li>
                                    <li class="py-md-1">Program: Code + Static and Global data</li>
                                </ol>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
               
            </div> -->
       
    </main>
    <!-- End #main -->

    <?php 
include "footer.php";

?>