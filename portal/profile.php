<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails=getStudentFullDetails();
$studentId=$_SESSION[SESSIONPATH]['id'];
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6 " id="page_title">Profile</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Profile</a></li>

            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-md-12">
                <div class="profile toggle_tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#user_profile" aria-controls="user_profile" role="tab" data-toggle="tab">User Pofile</a></li>
                        <li role="presentation"><a href="#user_account" aria-controls="user_account" role="tab" data-toggle="tab">Account</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="user_profile">                          
                            <div class="col-lg-2 col-md-3 col-xs-12">                                
                                <div class="st_img col-md-12 col-xs-5">
                                    <?php
                                    $imageData=$studentFullDetails['image'];
                                    echo '<img src="'.$imageData['image'].'" alt"'.$imageData['title'].'" class="img-responsive">';
                                    ?>                                    
                                </div>
                                <div class="st_data col-md-12 col-xs-7">
                                    <h4><?php echo $studentFullDetails['name'];?></h4>
                                    <p>student Id: <?php echo $studentFullDetails['admission_no'];?></p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-xs-12">
                                <div class="inner_toggle_tabs">
                                    <ul class="nav nav-tabs responsive  hidden-xs hidden-sm" role="tablist">
                                        <li role="presentation" class="active"><a href="#basic_info" aria-controls="basic_info" role="tab" data-toggle="tab">Basic info</a></li>
                                        <li role="presentation"><a href="#gurd_info" aria-controls="gurd_info" role="tab" data-toggle="tab">Gurdian Info</a></li>
                                        <li role="presentation"><a href="#acd_info" aria-controls="acd_info" role="tab" data-toggle="tab">Academic Info</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content responsive hidden-xs hidden-sm">
                                        <div role="tabpanel" class="tab-pane active" id="basic_info">
                                            <div class="row">
                                                <div class="stu_info">
                                                    <h4><i class="fa fa-user" aria-hidden="true"></i>Name</h4>
                                                    <p><?php echo $studentFullDetails['name'];?></p>
                                                </div>
                                                <div class="stu_info">
                                                    <h4><i class="fa fa-male" aria-hidden="true"></i>Father Name</h4>
                                                    <p><?php echo $studentFullDetails['father_name'];?></p>
                                                </div>
                                                <div class="stu_info">
                                                    <h4><i class="fa fa-female" aria-hidden="true"></i>Mother Name</h4>
                                                    <p><?php echo $studentFullDetails['mother_name'];?></p>
                                                </div>
                                                <div class="row st_col_mod">
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-envelope" aria-hidden="true"></i>Email</h4>
                                                            <p><?php echo $studentFullDetails['email'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-mobile" aria-hidden="true"></i>Phone</h4>
                                                            <p><?php echo $studentFullDetails['primary_phno'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="gurd_info">
                                            <div class="row">
                                                <div class="row st_col_mod">
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-user" aria-hidden="true"></i>Name</h4>
                                                            <p><?php echo $studentFullDetails['father_name'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-link" aria-hidden="true"></i>Relation</h4>
                                                            <p>father</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stu_info">
                                                    <h4><i class="fa fa-anchor" aria-hidden="true"></i>present Address</h4>
                                                    <p><?php echo $studentFullDetails['present_address'];?></p>
                                                    <p><?php echo $studentFullDetails['city'];?>, <?php echo $studentFullDetails['state'];?></p>
                                                    <p><?php echo $studentFullDetails['country'];?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="acd_info">
                                            <div class="row">
                                                <div class="row st_col_mod">
                                                    <div class="col-md-4">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-clock-o" aria-hidden="true"></i>Session</h4>
                                                            <p><?php echo $studentFullDetails['academicyear'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-bars" aria-hidden="true"></i>Class</h4>
                                                            <p><?php echo $studentFullDetails['classname'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-columns" aria-hidden="true"></i>Section</h4>
                                                            <p><?php echo $studentFullDetails['section'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row st_col_mod">
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-book" aria-hidden="true"></i>Course</h4>
                                                            <p>Bengali,english,Maths</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="stu_info">
                                                            <h4><i class="fa fa-pencil" aria-hidden="true"></i>Roll</h4>
                                                            <p><?php echo $studentFullDetails['roll_no'];?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="user_account">
                            <div class="vert_nav_tabs">
                                <div class="col-md-3">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#edit_info" aria-controls="edit_info" role="tab" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i>Edit Personal Info</a></li>
                                        <li role="presentation"><a href="#edit_gard_info" aria-controls="edit_gard_info" role="tab" data-toggle="tab"><i class="fa fa-address-card-o" aria-hidden="true"></i>Gardian Info</a></li>
                                        <li role="presentation"><a href="#update_pic" aria-controls="update_pic" role="tab" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i>Chane Picture</a></li>
                                        <li role="presentation"><a href="#edit_password" aria-controls="edit_password" role="tab" data-toggle="tab"><i class="fa fa-lock" aria-hidden="true"></i>Change Password</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="edit_info">
                                            <div class="basic_form">
                                                <form id="FormStudentEditProfile">
                                                    <input type="hidden" id="stu_id" name="stu_id" value="<?php echo $studentId; ?>">
                                                    <div class="form-group">
                                                        <label for="firstname">First Name</label>
                                                        <input type="text" class="form-control" id="edit_first_name" name="edit_first_name" value="<?php echo $studentFullDetails['first_name']?>" placeholder="First Name">
                                                        <span class="errors" id="error_edit_first_name" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="secondname">Last Name</label>
                                                        <input type="text" class="form-control" id="edit_last_name" name="edit_last_name" value="<?php echo $studentFullDetails['last_name']?>" placeholder="Last Name">
                                                        <span class="errors" id="error_edit_last_name" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" id="edit_email" name="edit_email" value="<?php echo $studentFullDetails['email']?>" placeholder="Email">
                                                        <span class="errors" id="error_edit_email" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mobile">Phone</label>
                                                        <input type="text" class="form-control" id="edit_mobile" name="edit_mobile"  value="<?php echo $studentFullDetails['primary_phno']?>" placeholder="Phone No">
                                                        <span class="errors" id="error_edit_mobile" style="display: none;"></span>
                                                    </div>
                                                    <button type="button" class="btn btn-default btn_submit" id="btn_stu_profile">Save Information</button>
                                                    <!-- <button type="button" class="btn btn-default btn_cancel">Cancel</button> -->
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="edit_gard_info">
                                            <div class="basic_form">
                                                <form id="FormEditParentInfo">
                                                    <input type="hidden" id="stu_id" name="stu_id" value="<?php echo $studentId; ?>">
                                                    <div class="form-group">
                                                        <label for="name">Father Name</label>
                                                        <input type="text" class="form-control" id="father_name" name="father_name"  placeholder="Father Name" value="<?php echo $studentFullDetails['father_name'];?>">
                                                        <span class="errors" id="error_father_name" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="realtion">Mother Name</label>
                                                        <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Mother Name" value="<?php echo $studentFullDetails['mother_name'];?>">
                                                        <span class="errors" id="error_mother_name" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Present Address</label>
                                                        <textarea class="form-control" rows="3" id="pre_addess" name="pre_addess" placeholder="Present Address"></textarea>
                                                        <span class="errors" id="error_pre_addess" style="display: none;"></span>
                                                    </div>
                                                    <button type="button" class="btn btn-default btn_submit" id="btn_parent_update">Save Information</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="update_pic">...</div>
                                        <div role="tabpanel" class="tab-pane" id="edit_password">
                                            <div class="basic_form">
                                                <form id="FormpasswordUpdate">
                                                    <input type="hidden" id="stu_id" name="stu_id" value="<?php echo $studentId; ?>">
                                                    <div class="form-group">
                                                        <label for="firstname">Current Password</label>
                                                        <input type="password" class="form-control" id="stu_cur_password" name="stu_cur_password"  placeholder="Current Password">
                                                        <span class="errors" id="error_stu_cur_password" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="secondname">New Password</label>
                                                        <input type="password" class="form-control" id="stu_new_password" name="stu_new_password" placeholder="New Password">
                                                        <span class="errors" id="error_stu_new_password" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Retype New Password</label>
                                                        <input type="password" class="form-control" id="stu_retype_password" name="stu_retype_password" placeholder="Retype New Password">
                                                        <span class="errors" id="error_stu_retype_password" style="display: none;"></span>
                                                    </div>
                                                    <button type="button" class="btn btn-default btn_submit" id="btn_stu_update_password">Save Information</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php include_once('bottomfooter.php');?>

    </div>
</div>
<?php include_once('footer.php');?>