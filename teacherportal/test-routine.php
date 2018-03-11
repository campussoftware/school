<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Schedule Details</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Test Routine</a></li>
            </ul>
        </div>
    </div>
    <div class="row" id="test_shedule">
        <h3>Test Details</h3>
        <div class="add_mtr_model">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addTest"> Add Test Details </button>
            <div class="modal fade" id="addTest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Study Material</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal inline-form">
                                <div class="form-group">
                                    <label for="classname" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="add_sty_class" name="add_sty_class">
                                            <option value ="Class 1">Maths</option>
                                            <option value ="Class 2">Physcis</option>
                                            <option value ="Class 3">Chemistry</option>
                                            <option value ="Class 4">Hindi</option>
                                            <option value ="Class 5">Social</option>
                                        </select>
                                        <span class="error" id="error_add_sty_class" style="display: none;"></span> </div>
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
                                            <option value ="D">D</option>
                                        </select>
                                        <span class="error" id="error_add_sty_section" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Duration</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="add_sty_des" name="add_sty_des"  placeholder="Duration">
                                        <span class="error" id="error_add_sty_des" style="display: none;"></span> </div>
                                </div>
                                <div class="form-group">
                                    <label for="file" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="add_sty_file" name="add_sty_file" placeholder="Eaxm Date">
                                        <span class="error" id="error_add_sty_file" style="display: none;"></span> </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add Test Details</button>
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
                        <th>Subject</th>
                        <th>Teacher</th>
                        <th>Duration</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Maths</td>
                        <td>Ramesh</td>
                        <td>1hr</td>
                        <td>11/06/2017</td>
                        <td>Pending</td>
                        <td>Chapter 2</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Sciecne</td>
                        <td>Karteek</td>
                        <td>30min</td>
                        <td>12/06/2017</td>
                        <td>Pending</td>
                        <td>Chapter 5 Bits</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Social</td>
                        <td>Siva</td>
                        <td>30min</td>
                        <td>13/06/2017</td>
                        <td>Pending</td>
                        <td>Chapter 2</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Physics</td>
                        <td>Priyanka</td>
                        <td>1hr</td>
                        <td>14/06/2017</td>
                        <td>Pending</td>
                        <td>Chapter 2</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Hindi</td>
                        <td>Mahesh</td>
                        <td>1hr</td>
                        <td>15/06/2017</td>
                        <td>Pending</td>
                        <td>Chapter 2</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>