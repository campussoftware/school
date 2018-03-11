<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$getExamSheduleData = getExamSheduleDetails();
$getStudentMarksData = getStudentMarksDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Exam Details</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Exam / Marks</a>/</li>
                <li><a href="javascript:void(0)">All Books</a></li>


            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-md-12">   
                <div class="toggle_tabs">
                    <ul class="nav nav-tabs responsive  hidden-xs hidden-sm" id="Std_leave_request">
                        <li class="active"><a data-toggle="tab" href="#exam-shedule">Exam Schedule</a></li>
                        <li><a data-toggle="tab" href="#exam-marks">Exam Marks</a></li>
                        <li><a data-toggle="tab" href="#progress_report">Progress Report</a></li>
                    </ul>
                    <div class="tab-content responsive  hidden-xs hidden-sm">
                        <div id="exam-shedule" class="tab-pane fade in active">
                            <div class="col-sm-12 col-xs-12">
                                <div id="res_default_table">
                                    <table class="col-md-12 table-bordered table-striped table-condensed">
                                        <thead class="transport_main">
                                            <tr>
                                                <th>SNo</th>
                                                <th>Mode Of Exam</th>
                                                <th>Exam Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>                       
                                        <tbody>                                        
                                            <?php
                                            if (count($getExamSheduleData) > 0) {
                                                $sn_count = 1;
                                                foreach ($getExamSheduleData as $key => $value) {
                                                    $fromdate = date("d/m/Y", strtotime($value['start_date']));
                                                    $todate = date("d/m/Y", strtotime($value['end_date']));
                                                    ;
                                                    echo' <tr>
                                                       <td data-title="SNO">' . $sn_count . '</td>
                                                       <td data-title="Mode Of Exam">' . $value['exam_mode'] . '</td>
                                                       <td data-title="Exam Name">' . $value['name'] . '</td>                                                       
                                                       <td data-title="Start Date">' . $fromdate . '</td>
                                                       <td data-title="End Date">' . $todate . '</td>    
                                                       <td data-title="Action"><a href="JavaScript:Void(0);" id="btn_exam_shedule" class="btn btn-success " onclick=setsheduleId(' . $value[id] . ') >Details</a></td>        
                                                </tr>';
                                                    $sn_count++;
                                                }
                                            }
                                            ?>                         

                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="exam_schedule_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Exam Schedule Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="res_default_table">
                                                    <table class="col-md-12 table-bordered table-striped table-condensed">
                                                        <thead class="transport_main">
                                                            <tr>
                                                                <th>Subject Type</th>
                                                                <th>Subject</th>
                                                                <th>Exam Date</th>
                                                                <th>Start Time</th>
                                                                <th>End Time</th>
                                                                <th>Max Marks</th>                                                        
                                                            </tr>
                                                        </thead>   
                                                        <tbody id="exam_schedule"></tbody>
                                                    </table>
                                                    </div>
                                                </div>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                        <div id="exam-marks" class="tab-pane fade"> 
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                <?php
                                if(count($getStudentMarksData)>0){
                                    foreach ($getStudentMarksData as $examkey => $examvalue) {
                                        echo '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#exammae'.$examvalue['exam_id'].'" aria-expanded="true" aria-controls="collapseOne">
                                                    '.$examvalue['exam_name'].'
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="exammae'.$examvalue['exam_id'].'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                            <div id="res_default_table">
                                              <table class="col-md-12 table-bordered table-striped table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>Max Marks</th>
                                                                <th>Obtained Marks</th>
                                                                <th>Grade Points</th>
                                                                <th>Grade</th>
                                                                <th>Attendance</th>
                                                            </tr>
                                                        </thead>                       
                                                        <tbody>'; ?>
                                                        <?php                                                          
                                                          $marks= $examvalue['marks'];   
                                                          foreach ($marks as $key => $value) {                                                               
                                                          echo'  <tr>
                                                              <td data-title="Subject">' . $value['subject_name'] . '</td>
                                                              <td data-title="Max Marks">' . $value['max_marks'] . '</td>
                                                               <td data-title="Obtained Marks">' . $value['obtained_marks'] . '</td>                                                       
                                                               <td data-title="Grade Points">' . $value['gradepoints'] . '</td>
                                                               <td data-title="Grade">' . $value['grade'] . '</td> 
                                                               <td data-title="Attendance">' . $value['attendence_status'] . '</td>
                                                            </tr>   ';
                                                          } ?>
                                                       <?php 
                                                    echo' </tbody>
                                                    </table>
                                                    </div>
                                           </div>
                                        </div>
                                    </div>                                  
                                </div>';
                                    }
                                }
                                ?>   
                            </div>
                            </div>
                        </div>                    
                    <div id="progress_report" class="tab-pane fade">
                        <form class="form-horizontal">
                            <div class="form-group" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="academicyear" control-label>Academic Year</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="academicyear" id="academicyear" class="form-control">
                                            <option value="0" selected="">Select  Academic Year</option>
                                            <option value="2011">2011-2012</option>
                                            <option value="2012">2012-2013</option>
                                            <option value="2013">2013-2014</option>
                                            <option value="2014">2014-2015</option>
                                            <option value="2015">2015-2016</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="branch"  control-label>Branch</label>
                                    </div>
                                    <div class="col-sm-9"> {Branch} </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="branch"  control-label>Class</label>
                                    </div>
                                    <div class="col-sm-9"> {Class} </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="syllabus" class="col-sm-3 control-label">Syllabus</label>
                                <div class="col-sm-9">
                                    <select name="syllabus" id="syllabus" class="form-control">
                                        <option value="0" selected="">Select </option>
                                        <option value="APSC">APSSC</option>
                                        <option value="CBAT">C-Batch</option>
                                        <option value="CBATC">C Batch  Cumulative</option>
                                        <option value="CBS">CBSE</option>
                                        <option value="ICSE">ICSE</option>
                                        <option value="KST">Karnataka state</option>
                                        <option value="SSCX">SSC X Class</option>
                                        <option value="ST">State</option>
                                        <option value="TSS">TS SSC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Exam Schedule" class="col-sm-3 control-label">Exam Schedule</label>
                                <div class="col-sm-9" id="examination">
                                    <select tabindex="" name="exam_type" id="exam_type" class="form-control">
                                        <option value="0" selected="">Select  Exam</option>
                                        <option value="1494">CBSE FA- I</option>
                                        <option value="1612">CBSE  FA -II</option>
                                        <option value="1692">CBSE SUMMATIVE ASSESSMENT-I</option>
                                        <option value="1766">CBSE FA-III</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <section class="report-warp">
                            <h5>Progress Report Sheet</h5>
                            <div class="row"> <span>
                                    <p>Campus : {Barnch name}</p>
                                </span> <span>
                                    <p class="pull-right">Class/Sec : {7th Class/A}</p>
                                </span> </div>
                            <div class="row"> <span>
                                    <p>Name of the Student  : {student name}</p>
                                </span> <span>
                                    <p class="pull-right">Roll No : {student roleno}</p>
                                </span> </div>
                            <h3 style="text-align:center">CBSE FA- I GRADED ANALYSIS </h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr><th>Subjects</th>
                                        <th>CBSE FA- I(40)<br>
                                            (B)</th>
                                        <th> Total Grade <br>
                                            (0 M)<br>
                                            (((A+B/4)/2)*10)</th>
                                        <th>Remarks</th>
                                    </tr></thead>
                                <tbody>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                    <tr>
                                        <td> I - Language</td>
                                        <td>B1</td>
                                        <td>E2</td>
                                        <td>Need_lot_of_effort</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">&nbsp;</div>
                            <h3 style="text-align:center">Statewide Objective Tests Analysis</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr><th>S.No</th>
                                        <th>Exam</th>
                                        <th>Maths(30)</th>
                                        <th>Phy(15)</th>
                                        <th>Chem(15)</th>
                                        <th>Total(60)</th>
                                        <th>CR</th>
                                        <th>ZR</th>
                                        <th>SR</th>
                                    </tr></thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>CBSE &amp; KRT OT-1 (29th June)</td>
                                        <td>25</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>48</td>
                                        <td>13</td>
                                        <td>165</td>
                                        <td>226</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CBSE &amp; KRT OT-1 (29th June)</td>
                                        <td>25</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>48</td>
                                        <td>13</td>
                                        <td>165</td>
                                        <td>226</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>CBSE &amp; KRT OT-1 (29th June)</td>
                                        <td>25</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>48</td>
                                        <td>13</td>
                                        <td>165</td>
                                        <td>226</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">&nbsp;</div>
                            <div class="row">
                                <section class="col-md-8">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr><th rowspan="5"> Attendance</th>
                                                <th>Month</th>
                                                <th>No. of Working Sessions</th>
                                                <th> No. of Sessions Attended</th>
                                            </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="4"></td>
                                                <td>April </td>
                                                <td> 1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>May </td>
                                                <td>6 </td>
                                                <td>4 </td>
                                            </tr>
                                            <tr>
                                                <td>June </td>
                                                <td>6</td>
                                                <td>6 </td>
                                            </tr>
                                            <tr>
                                                <td>July </td>
                                                <td>36 </td>
                                                <td>34 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                                <section class="col-md-4">
                                    <div class="row" style="text-align:center; border:1px solid rgba(0,0,0,.61); min-height:180px">
                                        <p> Overall Remarks:</p>


                                        <p style="margin-top:100px;">Outstanding Performance</p>
                                    </div>
                                </section>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="row"> <span class="col-md-4">Sign.of the Class Teacher</span> <span class="col-md-4">Sign.of the Principal</span> <span class="col-md-4">Sign.of the Parent</span> </div>
                            <p>NOTE:-    For Further details please visit www.srichaitanyaschool.net</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('bottomfooter.php'); ?>

</div>
</div>
<?php include_once('footer.php'); ?>