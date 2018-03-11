<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
$studentAttendence = getStudentAttendenceDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Student Attendance</div>
        <div class="col-sm-6" id="page_links">
        <ul class="pull-right">
        <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
        <li><a href="javascript:void(0)">Dashboard</a>/</li>
        <li><a href="javascript:void(0)">Student Attendance</a></li>

        </ul>
        </div>
        </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-sm-6"  id="attens_label">
                <div class="col-sm-6 no-padding">
                    <div class="form-group">
                        <label for="year">Academic Year:</label>
                        <select class="form-control" id="sel1">
                            <option>2017</option>
                            <option>2016</option>                            
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 subject">
                    <div class="form-group">
                        <label for="month">Month:</label>
                        <select class="form-control" id="sel1">
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            <option>April</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2 subject">
                    <div class="form-group">
                        <a href="#" class="btn btn-info" role="button"   id="button_bt">Search</a>      
                    </div>
                </div>
            </div>   
            <div class="col-sm-6">
                <div class="per_atdnce">                    
                    <p class="present">Present : 64.65%</p>
                    <p class="absent">Absent : 35.35%</p>	
                </div>
            </div>
            <!--show attendance list-->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="default-list">
                    <h3>Notification Details</h3>
                </div>
            </div>
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="row table_attendance">
                    <div id="res_default_table">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-padding ">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="orange">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Admission No</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Attendance Frequency</th>
                                    <th>Status</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                               
                                if (count($studentAttendence) > 0) {                                      
                                    $i = 1;
                                    foreach ($studentAttendence as $actkey => $actvalue) {
                                        if(count($actvalue)>0){ 
                                            foreach ($actvalue as $key => $value) {
                                                if($value[atd_status]=="Present"){
                                                    $btn_class="btn btn-success";
                                                }else{
                                                    $btn_class="btn btn-danger";
                                                }
                                                $act_date=date("d-m-Y", strtotime($value[atd_date]));
                                                echo ' <tr>
                                                    <td data-title="Sl No.">'.$i.'</td>
                                                    <td data-title="Admission No">'.$value[admission_no].'</td>
                                                    <td data-title="Name">'.$value[student_name].'</td>
                                                    <td data-title="Date">'.$act_date.'</td>
                                                    <td data-title="Attendance Frequency">'.$value[atd_frequency].'</td>
                                                    <td data-title="Status"><button type="button" class="'.$btn_class.'">'.$value[atd_status].'</td> 
                                                </tr>';
                                                 $i++;
                                            }
                                    }
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Notification Details</h4>
                            </div>
                            <div class="modal-body">
                                <div id="notification_details">
                                
                                </div>
                            </div>                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>