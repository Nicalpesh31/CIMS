
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $question_paper_id=$_GET['question_paper_id'];

    $sql1=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
    $row1=mysqli_fetch_array($sql1);
include "nav.php"; 
?>

    <main id="main">
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Exam Time Duration</th>
      <th scope="col">Subject</th>
      <th scope="col">Branch</th>
      <th scope="col">Total Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row1['time']. " minutes"; ?></th>
      <td><?php echo $row1['subject']; ?></td>
      <td><?php echo $row1['branch']; ?></td>
      <td><?php echo $row1['totalmarks']; ?></td>
    </tr>
   
  </tbody>
</table>
        </div>
    </div>
</div>
        <!-- ======= Table Section ======= -->
        
                <div id="content">
                <?php 
            $sql=mysqli_query($con,"select * from `question_paper` where `question_paper_id`='$question_paper_id'");
            $srno=1;
            while($row=mysqli_fetch_array($sql)){
            ?>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-1 ">
                        <span class="text-danger fw-bold">Question <?php echo $srno++; ?>:</span>
                    </div>
                    <div class="col-md-11 text-left">
                        <span class="fw-bolder ">
                        <?php 
                         $question_id=$row['question_id'];
                        $quesdet=mysqli_query($con,"select * from `questions` where `id`='$question_id'");
                        $rowquesdet=mysqli_fetch_array($quesdet);
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rowquesdet['question']."   &nbsp;&nbsp;<span class='text-danger fw-bold'>".$rowquesdet['questionmarks']." MARKS</span>";
                        ?> 
                        </span>
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="row mt-md-2">
                    <div class="col-md-1"></div>
                    <div class="col-md-11 text-left">
                       <ol class="list ml-4 ">
                            <li class="py-md-2"><?php echo $rowquesdet['optiona']; ?></li>
                            <li class="py-md-2"><?php echo $rowquesdet['optionb']; ?></li>
                            <li class="py-md-2"><?php echo $rowquesdet['optionc']; ?></li>
                            <li class="py-md-2"><?php echo $rowquesdet['optiond']; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
      
            <hr>
            <?php } ?>
            </div>    
        <div style="text-align:center;margin-bottom:20px">
      
      <a href="javascript:generatePDF()" class="btn btn-success">Dowload PDF</a></div> 
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
    <script>
function generatePDF() {
    //  $('#ignore').hide();
   // $('#ignoreh1').hide();
   //document.getElementById("ignore").style.display="none";
   //document.getElementById("ignoreh1").style.display="none";

    
 var doc = new jsPDF();
  doc.fromHTML(document.getElementById("content"), 15, 15, 
  {
    'width': 170
  },
  function(a) 
   {
    doc.save("HTML2PDF.pdf");
  });
}
</script>
    <?php 
include "footer.php";

?>