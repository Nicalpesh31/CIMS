
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
include "nav.php"; 
?>

    <main id="main">
        <form class="mt-3 mb-5 pb-5 pt-3 px-5 text-white text-dark">
            <h2 class="h2 display-4 my-5 text-dark text-center fw-bolder">Edit Question Paper</h2>
            <hr>
            <div class="container my-5 py-5 bg-light shadow-lg">
                <h2 class="h2 mb-4 display-6 text-center fw-bolder">Select Subject, Time & Marks</h2>
                <div class="row">
                    <div class="col-md-2">
                        <label for="course" class="form-control-label">Course</label>
                        <select name="course" id="course" class="form-control">
                            <option value="0">-- Course --</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="branch" class="form-control-label">Branch</label>
                        <select name="branch" id="branch" class="form-control">
                            <option value="0">-- Branch --</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="semester" class="form-control-label">Semester</label>
                        <select name="semester" id="semester" class="form-control">
                            <option value="0">-- Semester --</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="subject" class="form-control-label">Subject</label>
                        <select name="subject" id="subject" class="form-control">
                            <option value="0">-- Subject --</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="time" class="form-control-label">Time</label>
                        <input type="text" class="form-control" id="time" name="time">
                    </div>
                    <div class="col-md-2">
                        <label for="select" class="form-control-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks">
                    </div>
                </div>
            </div>
            <hr>
            <div class="container my-5 shadow-lg py-5 bg-light">
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
                                <label for="checkbox1" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">
                                    In Unix, Which system call creates the new process?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">fork</li>
                                    <li class="py-md-1">create</li>
                                    <li class="py-md-1">new</li>
                                    <li class="py-md-1">none of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">
                                    What is the running state of a process?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">when process is scheduled to run after some execution</li>
                                    <li class="py-md-1">when process is unable to run until some task has been completed</li>
                                    <li class="py-md-1">when process is using the CPU</li>
                                    <li class="py-md-1">none of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    A process can be terminated due to __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">when process is scheduled to run after some execution</li>
                                    <li class="py-md-1">when process is unable to run until some task has been completed</li>
                                    <li class="py-md-1">when process is using the CPU</li>
                                    <li class="py-md-1">none of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    The address of the next instruction to be executed by the current process is provided by the __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">CPU registers</li>
                                    <li class="py-md-1">Program counter</li>
                                    <li class="py-md-1">Process stack</li>
                                    <li class="py-md-1">Pipe</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    The number of processes completed per unit time is known as __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">Efficiency</li>
                                    <li class="py-md-1">Output</li>
                                    <li class="py-md-1">Throughput</li>
                                    <li class="py-md-1">Capacity</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    A Process Control Block(PCB) does not contain which of the following?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">Code</li>
                                    <li class="py-md-1">Stack</li>
                                    <li class="py-md-1">Data</li>
                                    <li class="py-md-1">Bootstrap program</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    The state of a process is defined by __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">the activity just executed by the process</li>
                                    <li class="py-md-1">the final activity of the process</li>
                                    <li class="py-md-1">the current activity of the process</li>
                                    <li class="py-md-1">the activity to next be executed by the process</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    What is a Process Control Block?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">A Block in memory</li>
                                    <li class="py-md-1">A secondary storage section</li>
                                    <li class="py-md-1">Data Structure</li>
                                    <li class="py-md-1">Process type variable</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    Process is
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">program in High level language kept on disk</li>
                                    <li class="py-md-1">a program in execution</li>
                                    <li class="py-md-1">a job in secondary memory</li>
                                    <li class="py-md-1">contents of main memory</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    Message passing is ___ compared to shared memory and ___ error prone
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">slow, more</li>
                                    <li class="py-md-1">slow, less</li>
                                    <li class="py-md-1">fast, less</li>
                                    <li class="py-md-1">fast, more</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    What is the objective of multiprogramming?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">Have multiple programs waiting in a queue ready to run</li>
                                    <li class="py-md-1">To minimize CPU utilization</li>
                                    <li class="py-md-1">Have some process running at all times</li>
                                    <li class="py-md-1">None of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    Which of the below statement is false.
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">Init is the first process created using booting</li>
                                    <li class="py-md-1">Init process is a daemon process</li>
                                    <li class="py-md-1">Init process has process identifier as 1</li>
                                    <li class="py-md-1">None of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    A single thread of control allows the process to perform __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">multiple tasks at a time</li>
                                    <li class="py-md-1">only one task at a time</li>
                                    <li class="py-md-1">only two tasks at a time</li>
                                    <li class="py-md-1">all of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    What is the degree of multiprogramming?
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">the number of processes executed per unit time</li>
                                    <li class="py-md-1">the number of processes in the ready queue</li>
                                    <li class="py-md-1">the number of processes in the I/O queue</li>
                                    <li class="py-md-1">the number of processes in memory</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    In operating system, each process has its own __________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">address space and global variables</li>
                                    <li class="py-md-1">open files</li>
                                    <li class="py-md-1">pending alarms, signals and signal handlers</li>
                                    <li class="py-md-1">all of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    If a process fails, most operating system write the error information to a ______
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">new file</li>
                                    <li class="py-md-1">another running process</li>
                                    <li class="py-md-1">log file</li>
                                    <li class="py-md-1">none of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    Operating system is _________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">collection of programs that manages hardware resources</li>
                                    <li class="py-md-1">system service provider to the application programs</li>
                                    <li class="py-md-1">link to interface the hardware and application programs</li>
                                    <li class="py-md-1">all of the mentioned</li>
                                </ol>
                            </div>
                            <hr>
                            <div class="checkbox my-3">
                                <label for="checkbox3" class="form-check-label fw-bold">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="option4" class="form-check-input">
                                    To access the services of operating system, the interface is provided by the ___________
                                </label>
                                <ol class="list" type="A">
                                    <li class="py-md-1">API</li>
                                    <li class="py-md-1">Library</li>
                                    <li class="py-md-1">Assembly Instructions</li>
                                    <li class="py-md-1">System Calls</li>
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
                <div class="container">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Save Question Paper
                    </button>
                </div>
            </div>
        </form>
    </main>
    <!-- End #main -->

    
<?php 
include "footer.php";

?>