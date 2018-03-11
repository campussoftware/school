<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Teacher Dashboard</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Study Materials</a></li>
            </ul>
        </div>
    </div>
    <div class="row" id="study_material">
        <h3>Study Material</h3>
        <div class="add_mtr_model">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal"> Add Study Material </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Study Material</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal inline-form">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="add_sty_title" name="add_sty_title"  placeholder="Enter Title">
                                        <span class="error" id="error_add_sty_title" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="add_sty_des" name="add_sty_des"  placeholder="Description" row="3"></textarea>
                                        <span class="error" id="error_add_sty_des" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="classname" class="col-sm-2 control-label">Class</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="add_sty_class" name="add_sty_class">
                                            <option value ="Class 1">Class 1</option>
                                            <option value ="Class 2">Class 2</option>
                                            <option value ="Class 3">Class 3</option>
                                            <option value ="Class 4">Class 4</option>
                                            <option value ="Class 5">Class 5</option>
                                        </select>
                                        <span class="error" id="error_add_sty_class" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="section" class="col-sm-2 control-label">Section</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="add_sty_section" name="add_sty_section" >
                                            <option value ="A">A</option>
                                            <option value ="B">B</option>
                                            <option value ="C">C</option>
                                            <option value ="D" >D</option>
                                        </select>
                                        <span class="error" id="error_add_sty_section" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="file" class="col-sm-2 control-label">File</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="add_sty_file" name="add_sty_file" >
                                        <span class="error" id="error_add_sty_file" style="display: none;"></span> </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add Study Material</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mtr_list">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>SNO</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Course</th>
                        <th>Teacher</th>
                        <th>Download</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>11/02/2017</td>
                        <td>Material</td>
                        <td>Material English</td>
                        <td>Class 4</td>
                        <td>A</td>
                        <td>English</td>
                        <td>John</td>
                        <td><button type="button" class="btn btn-primary">Download</button></td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>11/02/2017</td>
                        <td>Material</td>
                        <td>Material English</td>
                        <td>Class 3</td>
                        <td>A</td>
                        <td>science</td>
                        <td>John</td>
                        <td><button type="button" class="btn btn-primary">Download</button></td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>11/02/2017</td>
                        <td>Material</td>
                        <td>Material English</td>
                        <td>Class 2</td>
                        <td>A</td>
                        <td>Maths</td>
                        <td>John</td>
                        <td><button type="button" class="btn btn-primary">Download</button></td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>11/02/2017</td>
                        <td>Material</td>
                        <td>Material English</td>
                        <td>Class 4</td>
                        <td>A</td>
                        <td>Social</td>
                        <td>John</td>
                        <td><button type="button" class="btn btn-primary">Download</button></td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>