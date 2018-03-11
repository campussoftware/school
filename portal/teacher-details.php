<?php
$teacherId = $_GET['tr'];
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
$teacherList=getTeacherListDetails();
$teacherInfo=getTeacherInfoDetails($teacherId);
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Teacher Information</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Teacher Information</a>/</li>
                <li><a href="javascript:void(0)">Details</a></li>
            </ul>
        </div>
    </div>
    <div class="'row">
        <div  id="main_contnet_right">            
            <div class="row">
                <div class="class_tchr_info">
                    <div class="col-sm-2 teacher-img">
                        <?php
                            $imageData=$teacherInfo['image'];
                            echo '<img src="'.$imageData["image"].'" alt="'.$imageData["title"].'" class="img-responsive">';
                        ?>
                                          
                    </div>
                    <div class="col-sm-10 teacher_details">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label"><h3> <?php echo $teacherInfo["first_name"] ." ". $teacherInfo["middle_name"]." ". $teacherInfo["last_name"] ;?></h3></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Position</label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span><?php echo $teacherInfo["designation"]?> </span>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">E-mail </label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span><?php echo $teacherInfo["email"]?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Mobile No. </label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span><?php echo $teacherInfo["mobile_number"]?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Sex </label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span>Male</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date of Birth </label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span><?php echo $teacherInfo["date_of_birth"]?></span>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Present Address </label>
                                        <div class="col-sm-8 col-md-6 col-lg-6">
                                            <span>:</span> <span><?php echo $teacherInfo["address"]?></span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-sm-4">
                                <h4><b>Teacher's Designation</b></h4>
                                <div class="designation_tchr">
                                    <p class="des_1"><a href=""><?php echo $teacherInfo["designation"]?> </a></p> <br>                                    
                                </div>
                            </div>
                        </div>
                        <div class="row table_attendance" style="margin-top: 40px;">
                            <a href="" class="education">Educational Qualifications</a>
                        </div>
                        <div class="row table_attendance">
                                <div id="res_default_table">
                                <table class="col-md-12 table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Degree/Deploma</th>
                                            <th>School/College/University</th>
                                            <th>University</th>
                                            <th>Gap</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $educationDetails=$teacherInfo[education];
                                            if(count($educationDetails)>0){
                                                foreach ($educationDetails as $key => $value) {
                                                    echo'<tr>
                                                        <td data-title="Degree/Deploma">'.$value['qualification'].'</td>
                                                        <td data-title="School">'.$value['college'].'</td>
                                                        <td data-title="Result">'.$value['university'].'</td>
                                                        <td data-title="Passing Year">'.$value['gap'].'</td>
                                                     </tr>';
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
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