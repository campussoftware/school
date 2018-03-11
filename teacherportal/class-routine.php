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
                <li><a href="javascript:void(0)">Class Routine</a></li>
            </ul>
        </div>
    </div>
     <div class="row" id="class_shedule">
        <h5>Study Material</h5>
    <div class="col-md-12 class_search">
            <form class="basic_form">
                <div class="form-group col-md-3 no-padding">
                    <label for="exampleInputName2">Academic Year</label>
                    <select class="form-control">
                        <option>2016</option>
                        <option>2017</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputName2">Select Class</label>
                    <select class="form-control">
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        <option>Class 4</option>
                        <option>Class 5</option>
                    </select>
                </div>
                <div class="form-group col-md-3 ">
                    <label for="exampleInputEmail2">Select Class Section</label>
                    <select class="form-control">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default btn-go col-md-1">GO</button>
            </form>
        </div>
        <div class="class_shedule_list">
            <table class="table table-bordered table-responsive">
                <tbody>
                    <tr>
                        <th>Monday</th>
                        <th><ul><li>Maths (09:00am - 10:00am)</li> <li>Science (02:00pm - 03:00pm)</li></ul></th>
                    </tr>
                    <tr>
                        <th>Tuesday</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Wednesday</th>
                        <th><ul><li>Maths (09:00am - 10:00am)</li> <li>Science (02:00pm - 03:00pm)</li></ul></th>
                    </tr>
                    <tr>
                        <th>Thursday</th>
                        <th><ul><li>Maths (09:00am - 10:00am)</li> </ul></th>
                    </tr>
                    <tr>
                        <th>Friday</th>
                        <th><ul><li>Maths (09:00am - 10:00am)</li> <li>Science (02:00pm - 03:00pm)</li></ul></th>
                    </tr>
                    <tr>
                        <th>Saturday</th>
                        <th><ul><li>Science (02:00pm - 03:00pm)</li></ul></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>