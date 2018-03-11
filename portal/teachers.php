<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
$teacherList=getTeacherListDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Class Teacher Information</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Teacher Information</a></li>

            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-sm-12">
                <div class="cls-tcr">
                    <p class="cls-tcr-inf">Class Teacher Information</p>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">73% Complete (success)</span>
                        </div>
                    </div>
                </div>
                <?php               
                    if(count($teacherList)>0){
                        foreach ($teacherList as $key => $value) {
                            if($value[designation] =="Class Teacher"){
                                $name=$value[first_name].' '.$value[middle_name].' '.$value[last_name];
                                $imagepath=$value[image];                                
                                echo '<div class="class_tchr_info">
                                    <div class="col-sm-2 col-xs-4 teacher-img">
                                        <img src="'.$imagepath['image'].'" alt="'.$imagepath['title'].'" class="img-responsive">
                                    </div>
                                    <div class="col-sm-10 col-xs-8 teacher_details">
                                        <p class="teacher_name">'.$name.'</p>
                                        <p class="subject">'.$value['subject_name'].'</p>
                                        <p class="mail">'.$value['email'].'</p>
                                        <p class="phone">'.$value['mobile_number'].'</p>
                                    </div>
                                </div>';
                            }
                        }
                        }
                ?>

            </div>
            <div class="col-sm-12">
                <div class="teacher_list">
                    <p class="cls-tcr-inf">Teacher Information</p>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">73% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 table_attendance">
                <div id="res_default_table">
                    <table class="col-md-12 table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Teacher photo</th>
                                <th>Teacher Name</th>
                                <th>Subject</th>
                                <th>E-mail id</th>
                                <th>Phone No.</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                              <?php
                            if(count($teacherList)>0){
                                foreach ($teacherList as $key => $value) {                                   
                                    $name=$value[first_name].' '.$value[middle_name].' '.$value[last_name];
                                    $imagepath=$value[image];  
                                    echo'<tr>
                                <td data-title="Teacher photo" class="teacer_image"><img src="'.$imagepath['image'].'" alt="'.$imagepath['title'].'" class="img-responsive"></td>
                                <td data-title="Teacher Name">'.$name.'</td>
                                <td data-title="Subject">'.$value['subject_name'].'</td>
                                <td data-title="E-mail id">'.$value['email'].'</td>
                                <td data-title="Phone No.">'.$value['mobile_number'].'</td>
                                <td data-title="Status"><span class="designation">'.$value[designation].'</span></td>
                                <td data-title="Action"><span  class="tech_details green"><a  href="teacher-details.php?tr='.$value[staffId].'">Details</a></span></td>
                            </tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>