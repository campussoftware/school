<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentId=$_SESSION[SESSIONPATH]['id'];
$acdYear=$_SESSION[SESSIONPATH]['academicyear'];
$leaveRequestList=getAllLeaveRequestDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Student Leave Request</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Student Leave Request</a></li>
            </ul>
        </div>
    </div>

    <div class="'row">
        <div  id="main_contnet_right">
            <div class="row">
                <div class="col-sm-12">
                    <div class="toggle_tabs">
                    <ul class="nav nav-tabs responsive  hidden-xs hidden-sm" id="Std_leave_request">
                        <li class="active"><a data-toggle="tab" href="#Leave_request">Leave Request</a></li>
                        <li><a data-toggle="tab" href="#send_Leave_request">Send Leave Request</a></li>
                    </ul>
                    <div class="tab-content responsive  hidden-xs hidden-sm">
                        <div id="Leave_request" class="tab-pane fade in active">
                            <div class="row table_attendance">
                                <div id="res_default_table">
                                    <table class="col-md-12 table-bordered table-striped table-condensed">
                                        <thead class="orange">
                                            <tr>
                                                <th>Sl No.</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>Leave Date</th>
                                                <th>End Date</th>
                                                <th>No. of Days</th>                                                
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                            
                                            if(count($leaveRequestList)>0){
                                                $i=1;
                                                foreach ($leaveRequestList as $key => $value) {
                                                    $datetime1 = date_create($value['leave_date']);
                                                    $datetime2 = date_create($value['end_date']);
                                                    $interval = date_diff($datetime1, $datetime2);
                                                     $days=$interval->format('%a')+1;
                                                     if($value['leave_date']=="0000-00-00"){
                                                       $leavedate=" - ";
                                                     }else{
                                                        $leavedate=date("d-m-Y", strtotime($value["leave_date"]));            
                                                     }
                                                     if($value['end_date']=="0000-00-00"){
                                                     $endDate=" - ";
                                                     }else{
                                                        $endDate=date("d-m-Y", strtotime($value['end_date']));             
                                                     }
                                                                                                         
                                                    echo '<tr>
                                                        <td data-title="Sl No.">'.$i.'</td>
                                                        <td data-title="Subject">'.$value["subject"].'</td>
                                                        <td data-title="Description">'.$value["description"].'</td>
                                                        <td data-title="Leave Date">'.$leavedate.'</td>
                                                        <td data-title="End Date">'.$endDate.'</td>
                                                        <td data-title="No.of Days">'.$days.'</td>                                                        
                                                        <td data-title="status"><span class="download-btn">'.$value['status'].'</span></td>
                                                    </tr>';
                                                     $i++;
                                                }
                                               
                                            }
                                            ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="send_Leave_request" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                            <form class="form-horizontal" id="input_style" style="margin-top: 10px;">
                                <input type="hidden" id="stu_id" name="stu_id" value="<?php echo $studentId; ?>">
                                <input type="hidden" id="acd_year" name="acd_year" value="<?php echo $acdYear; ?>">
                                <div class="form-group">                  
                                       <label class="col-sm-2 control-label" for="subject">Subject:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="req_subject" name="req_subject" >                                            
                                            <span class="errors" id="error_req_subject" style="display: none;"></span>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Description">Description:</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" rows="5" id="req_message" name="req_message"></textarea>
                                            <span class="errors" id="error_req_message" style="display: none;"></span>
                                        </div>
                                </div>
                                <div class="form-group">                                    
                                        <label class="col-sm-2 control-label" for="Leave Date">Leave Date:</label>                                        
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="req_Leave_date" name="req_Leave_date" >
                                            <span class="errors" id="error_req_Leave_date" style="display: none;"></span>
                                        </div>                                    
                                </div>
                                <div class="form-group">                                    
                                        <label class="col-sm-2 control-label" for="End Date">End Date:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  id="req_end_date" name="req_end_date" >
                                            <span class="errors" id="error_req_end_date" style="display: none;"></span>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-info"  id="btn_leave_request">Submit</button>                                       
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
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>