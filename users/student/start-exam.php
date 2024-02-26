<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
    $question_paper_id=$_GET['question_paper_id'];
    $sql=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
    $rowsql=mysqli_fetch_array($sql);
    if(isset($_POST['submit'])){
       //submit ans- quesid- 
       $sql4=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
       while($rowsqll=mysqli_fetch_array($sql4)){
         //  echo $question_idx."<br>";
        $question_idx=$rowsqll['question_id'];
        $qid=$_POST['quesid-'.$question_idx];
        $ansx=$_POST['ans-'.$question_idx];
        //insert into table question_paper_ans
        //useremail question_paper_id question_id question_ans
    mysqli_query($con,"INSERT INTO `question_paper_ans`(`studemail`, `question_paper_id`, `question_id`, `question_ans`) VALUES ('$sessionemail','$question_paper_id','$qid','$ansx')");
    
       }
       echo "<script>alert('Paper Submited Successfully!!');</script>";
       header("location:result.php?question_paper_id=$question_paper_id");
    }
include "nav.php";
?>
<style>
   body{
       padding:0px;
       margin:0px;
   }

</style>
    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container justify-content-center">
            <!-- <form> -->
            <div class="container mb-5 text-center">
                <h2 class="h2 display-5">Questions Paper</h2>
                <table class="table table-responsive table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                        
                            <th>Branch</th>
                            <th>Semester</th>
                            <th>Subject</th>
                            <th>Total Marks</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           
                            <td><?php echo $rowsql['branch']; ?></td>
                            <td><?php echo $rowsql['semester']; ?></td>
                            <td><?php echo $rowsql['subject']; ?></td>
                            <td><?php echo $rowsql['totalmarks']; ?></td>
                            <td><?php echo "<span id='timeinmin'>".$rowsql['time']."</span> minutes"; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="countdown-bar" id="countdownA" style="position:fixed;right:0px;top:150px;">
            <div></div>
            <div></div>
        </div>      
            </div>
            <hr>
<form method="POST" action="">
            <?php 
$sqlque=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
$srno=1;
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
                                    <input type="radio" id="radio1" name="ans-<?php echo $question_id;?>" value="a" class="form-check-input">
                                    <?php  echo $rowq['optiona']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="ans-<?php echo $question_id;?>" value="b" class="form-check-input">
                                    <?php  echo $rowq['optionb']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="ans-<?php echo $question_id;?>" value="c" class="form-check-input">
                                    <?php echo $rowq['optionc']; ?>
                                </label>
                            </div>
                            <div class="radio my-2">
                                <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="ans-<?php echo $question_id;?>" value="d" class="form-check-input">
                                    <?php  echo $rowq['optiond']; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php } ?>
            
            <div class="container">
                <button class="btn btn-primary btn-lg" name="submit" type="submit" id="submit-test">
                    Submit Test
                </button>
            </div>
</form>
            <!-- </form> -->
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
    
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>

    <link href="stylesheet.css" rel="stylesheet">
    <script src="script.js" type="text/javascript"></script>  
    <script type="text/javascript">
            $(document).ready(function () {
                var timeinmin=document.getElementById("timeinmin").innerHTML;
                //timeinmin=60;
                var hours = Math.floor(timeinmin / 60);          
                var minutes = timeinmin % 60;
               
                (hours+":"+minutes);
                var cd=countdown('countdownA', 0, hours, 0, minutes);
                
            });

            //setinterval
            //expired
            setInterval(function() {
                var expired=document.getElementById("expired").innerHTML;
                if(expired=="Timer expired!"){
                    //alert("stop");
                    $("#submit-test").click();
                }
            }, 1000);
        </script>
    <?php 
include "footer.php";

?>