<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$getteacherData=getteacherFullDetails();
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Teacher Profile</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard/</a></li>
                <li><a href="javascript:void(0)">Teacher Profile</a></li>
            </ul>
        </div>
    </div>
    <div class="profile toggle_tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#user_profile" aria-controls="user_profile" role="tab" data-toggle="tab">User Pofile</a></li>
            <li role="presentation"><a href="#user_account" aria-controls="user_account" role="tab" data-toggle="tab">Account</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="user_profile">
                <div class="col-lg-2 col-md-3">
                    <?php
                    $teachername = $getteacherData['first_name']." ".$getteacherData['middle_name']." ".$getteacherData['last_name'];
                    $imageData=$getteacherData['image'];
                    $dob=date("d-M-Y" , strtotime($getteacherData['date_of_birth']));
            ?>
                    <div class="tech_img"> <img src="<?php echo $imageData['image'] ?> "class="img-responsive" alt='<?php echo $imageData['title'] ?>'> </div>
                    <div class="tech_data">
                        <h4><?php echo $teachername; ?></h4>
                        <p><span>Teacher Id: <?php echo $getteacherData['staff_id'];?></span></p>
                        <p><?php echo $getteacherData['designation'];?></p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="inner_toggle_tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tech_basic_info" aria-controls="tech_basic_info" role="tab" data-toggle="tab">Basic info</a></li>
                            <li role="presentation"><a href="#tech_location_info" aria-controls="tech_location_info" role="tab" data-toggle="tab">Location Info</a></li>
                            <li role="presentation"><a href="#tech_education" aria-controls="tech_education" role="tab" data-toggle="tab">Education Info</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tech_basic_info">
                                <div class="row">
                                    <div class="st_col_mod">
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-male" aria-hidden="true"></i>Father Name</h4>
                                                <p>John Della</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-birthday-cake" aria-hidden="true"></i>Date Of Birth</h4>
                                                <p><?php echo $dob;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-venus-mars" aria-hidden="true"></i>Gender</h4>
                                                <p>Male</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-building" aria-hidden="true"></i>City</h4>
                                                <p><?php echo $getteacherData['city'];?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-mobile" aria-hidden="true"></i>Mobile No</h4>
                                                <p><?php if($getteacherData['mobile_number']!=""){
                                                echo $getteacherData['mobile_number'];
                                                }else{
                                                 echo $getteacherData['phone_number'];
                                                }
?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tech_info">
                                                <h4><i class="fa fa-envelope" aria-hidden="true"></i>Email</h4>
                                                <p><?php echo $getteacherData['email'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tech_location_info">
                                <div class="row">
                                    <div class="tech_info">
                                        <h4><i class="fa fa-anchor" aria-hidden="true"></i>present Address</h4>
                                        <p><?php echo $getteacherData['address']; ?></p>
                                        <p><?php  echo $getteacherData['city'] ?> <?php echo $getteacherData['state']; ?></p>
                                        <p><?php echo $getteacherData['country']?> - <?php echo $getteacherData['pincode'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tech_education">
                                <div class="row">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SNO</th>
                                                <th>Qualification</th>
                                                <th>Collage</th>
                                                <th>Board/University</th>
                                                <th>GPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $EducationData=$getteacherData['education'];
                                            $i=1;
                                            foreach ($EducationData as $key => $value) {
                                                echo '<tr>
                                                <th>'.$i.'</th>
                                                <td>'.$value['qualification'].'</td>
                                                <td>'.$value['college'].'</td>
                                                <td>'.$value['university'].'</td>
                                                <td>'.$value['gap'].'</td>
                                            </tr>';
                                                $i++;
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
            <div role="tabpanel" class="tab-pane" id="user_account">
                <div class="vert_nav_tabs">
                    <div class="col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#edit_techinfo" aria-controls="edit_techinfo" role="tab" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i>Edit Personal Info</a></li>
                            <li role="presentation"><a href="#tech_update_pic" aria-controls="tech_update_pic" role="tab" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i>Chane Picture</a></li>
                            <li role="presentation"><a href="#edit_tech_password" aria-controls="edit_tech_password" role="tab" data-toggle="tab"><i class="fa fa-lock" aria-hidden="true"></i>Change Password</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="edit_techinfo">
                                <div class="basic_form">
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="edit_tech_name" name="edit_tech_name"  placeholder="Name">
                                            <span class="error" id="error_edit_tech_name" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Id</label>
                                            <input type="email" class="form-control" id="edit_tech_email" name="edit_tech_email" placeholder="Email">
                                            <span class="error" id="error_edit_tech_email" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="email" class="form-control" id="edit_tech_mobile" name="edit_tech_mobile" placeholder="Mobile">
                                            <span class="error" id="error_edit_tech_mobile" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="address">Present Address</label>
                                            <input type="text" class="form-control" id="tech_pst_add" name="tech_pst_add"  placeholder="Present Address">
                                            <span class="error" id="error_tech_pst_add" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="address">Perminent Address</label>
                                            <input type="text" class="form-control" id="tech_prt_add" name="tech_prt_add"  placeholder="Perminent Address">
                                            <span class="error" id="error_tech_prt_add" style="display: none;"></span> </div>
                                        <button type="button" class="btn btn-default btn_submit">Save Information</button>
                                        <button type="button" class="btn btn-default btn_cancel">Cancel</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tech_update_pic">...</div>
                            <div role="tabpanel" class="tab-pane" id="edit_tech_password">
                                <div class="basic_form">
                                    <form>
                                        <div class="form-group">
                                            <label for="firstname">Current Password</label>
                                            <input type="password" class="form-control" id="tech_cur_password" name="tech_cur_password"  placeholder="Current Password">
                                            <span class="error" id="error_tech_cur_password" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="secondname">New Password</label>
                                            <input type="password" class="form-control" id="tech_new_password" name="tech_new_password" placeholder="New Password">
                                            <span class="error" id="error_tech_new_password" style="display: none;"></span> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Retype New Password</label>
                                            <input type="password" class="form-control" id="tech_retype_password" name="tech_retype_password" placeholder="Retype New Password">
                                            <span class="error" id="error_tech_retype_password" style="display: none;"></span> </div>
                                        <button type="button" class="btn btn-default btn_submit">Save Information</button>
                                        <button type="button" class="btn btn-default btn_cancel">Cancel</button>
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
<?php
include_once('footer.php');
?>