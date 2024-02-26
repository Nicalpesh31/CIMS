<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
include "nav.php"; 
?>
    <main id="main">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3 class="title-4">
                                            Edit Practical
                                        </h3>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="branch" class=" form-control-label">
                                                        Branch
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="branch" id="branch" class="form-control" required>
                                                        <option value="0">-- Select Branch --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="semester" class=" form-control-label">
                                                        Semester
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="semester" id="semester" class="form-control" required>
                                                        <option value="0">-- Select Semester --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="subject" class=" form-control-label">
                                                        Subject
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="subject" id="subject" class="form-control" required>
                                                        <option value="0">-- Select Subject --</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group m-t-30">
                                                <div class="col col-md-3 text-right">
                                                    <label for="assignment-number" class=" form-control-label">
                                                        Practical Number
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="assignment-number" name="assignment-number" 
                                                        placeholder="Assignment Number" class="form-control" required>
                                                </div>
                                            </div> -->
                                            <div class="row form-group mt-4">
                                                <div class="col col-md-3 text-right">
                                                    <label for="assignment-questions" class="form-control-label">
                                                        Practical Questions
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="practical-questions1" id="practical-questions1" rows="9" placeholder="Notice Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group m-t-30">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <button type="submit" class="btn btn-primary  m-r-10">
                                                        <i class="fa fa-dot-circle-o mr-1"></i>
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger">
                                                        <i class="fa fa-ban mr-1"></i>
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </main>
    <!-- End #main -->
    <?php include "footer.php"; ?>