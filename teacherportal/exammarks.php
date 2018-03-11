<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Exam Marks</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard/</a></li>
                <li><a href="javascript:void(0)">Exam Marks</a></li>
            </ul>
        </div>
    </div>
    <div class="profile toggle_tabs">
        <ul class="nav nav-tabs responsive  hidden-xs hidden-sm" role="tablist">
            <li role="presentation" class="active"><a href="#exam_marks" aria-controls="user_profile" role="tab" data-toggle="tab">Exam Marks</a></li>
            <li role="presentation"><a href="#send_leave_request" aria-controls="add_marks" role="tab" data-toggle="tab">Add Exam Marks</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content responsive  hidden-xs hidden-sm">
            <div role="tabpanel" class="tab-pane active custom-table" id="exam_marks">
                <div class="col-md-12">
            <form class="basic_form">
                <div class="form-group col-md-2 no-padding">
                    <label for="exampleInputName2">Academic Year</label>
                    <select class="form-control">
                        <option>2017</option>
                        <option>2016</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="exampleInputName2">Select Class</label>
                    <select class="form-control">
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        <option>Class 4</option>
                        <option>Class 5</option>
                    </select>
                </div>
                <div class="form-group col-md-2 ">
                    <label for="exampleInputEmail2">Select Class Section</label>
                    <select class="form-control">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                    </select>
                </div>
                <div class="form-group col-md-2 ">
                    <label for="exampleInputEmail2">Select Subject</label>
                    <select class="form-control">
                        <option>Maths</option>
                        <option>Physics</option>
                        <option>Chemistry</option>
                        <option>Telugu</option>
                        <option>Social</option>
                    </select>
                </div>
                <div class="form-group col-md-2 no-padding">
                    <label for="exampleInputName2">Admission No</label>
                    <select class="form-control">
                        <option>ST0032</option>
                        <option>ST0034</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default btn-go col-md-1">GO</button>
            </form>
        </div>
               <div class="row tech_list">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Admission No</th>
                            <th>Student Name</th>
                            <th>Exam Name</th>
                            <th>Subject</th>
                            <th>Total marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>telugu</td>
                            <td>20</td>
                            <td>16</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                       <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>Maths</td>
                            <td>20</td>
                            <td>16</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>Science</td>
                            <td>20</td>
                            <td>13</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>Socail</td>
                            <td>20</td>
                            <td>14</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>Hindi</td>
                            <td>20</td>
                            <td>19</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>English</td>
                            <td>20</td>
                            <td>18</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>ST0034</td>
                            <td>jamalla Karteek</td>
                            <td>Assigment 1</td>
                            <td>Chemistry</td>
                            <td>20</td>
                            <td>20</td>
                            <td>70</td>
                            <td>B</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="send_leave_request">
                <div class="basic_form">
                    <form>
                        <div class="form-group">
                            <label for="name">Select Branch</label>
                           <select class="form-control">
                               <option>Select Branch</option>
                                <option>IndU Play School, Himayat Nagar</option>
                                <option>IndU Play School, Ameerpet Nagar</option>
                           </select>
                            <span class="error" id="error_leave_title" style="display: none;"></span> </div>
                        <div class="form-group">
                            <label for="description">Class</label>
                            <select class="form-control">
                                <option>Select Class</option>
                                 <option>Class 1</option>
                                 <option>Class 2</option>
                                 <option>Class 3</option>
                                 <option>Class 4</option>
                                 <option>Class 5</option>
                                </select>
                            <span class="error" id="error_leave_des" style="display: none;"></span> </div>
                        <div class="form-group">
                            <label for="from_date">Section</label>
                            <select class="form-control">
                                <option>Select Section</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                        </select>
                            <span class="error" id="error_from_date" style="display: none;"></span> </div>
                         <div class="form-group">
                            <label for="from_date">Subject</label>
                            <select class="form-control">
                                <option>Select Subject</option>
                                <option>Maths</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Telugu</option>
                                <option>Social</option>
                            </select>
                            <span class="error" id="error_from_date" style="display: none;"></span> </div>
                         <div class="form-group">
                            <label for="from_date">Admission No</label>
                            <select class="form-control">
                                <option>Select Admission No</option>
                                <option>ST0034</option>
                                <option>ST0035</option>
                                <option>ST0036</option>
                                <option>ST0037</option>
                           </select>
                            <span class="error" id="error_from_date" style="display: none;"></span> </div>

                        <div class="form-group">
                            <label for="address">Max Marks</label>
                            <input type="text" class="form-control" id="to_date" name="to_date" placeholder="Max Marks">
                            <span class="error" id="error_to_date" style="display: none;"></span> </div>
                       <div class="form-group">
                            <label for="address">Marks Obtained</label>
                            <input type="text" class="form-control" id="to_date" name="to_date" placeholder="Marks Obtained">
                            <span class="error" id="error_to_date" style="display: none;"></span> </div>
                        <button type="button" class="btn btn-default btn_submit pull-right">Submit</button>
                    </form>
              </div>

            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>