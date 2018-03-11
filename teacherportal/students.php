<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Student Dashboard</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <div class="row student_list">
        <div class="st_list_title">
            <h5><span>Student List</span></h5>
        </div>
        <div class="col-md-12 stu_search">

            <form class="basic_form">
                <div class="form-group col-md-3 no-padding">
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
        <div class="stu_filter">
            <div class="col-md-6">
                <form class="form-inline inline-form">
                    <label for="show">show</label>
                    <div class="form-group">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>Entries
                </form>
            </div>
            <div class="col-md-6">
                <form class="form-inline pull-right inline-form">
                    <label for="Search">Search</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12 stu_filter_list">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Student Name</th>
                        <th>Roll No</th>
                        <th>Student Email</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><img src="images/icon.jpg" class="img-circle"></th>
                        <td>Siva Kumar</td>
                        <td>ST0042</td>
                        <td>kumarharsha44@gmail.com</td>
                        <td>Class 4</td>
                        <td>A</td>
                        <td><li><i class="fa fa-bar-chart" aria-hidden="true"></i>View Result</li>
                <li data-toggle="modal" data-target="#parent_view"><i class="fa fa-user" aria-hidden="true"></i>View Parent</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i>View Attendence</li>
                </td>
                </tr>
                <tr>
                    <th><img src="images/icon.jpg" class="img-circle"></th>
                    <td>Jamalla Karteek Kumar</td>
                    <td>ST0043</td>
                    <td>jamallakarteek@gmail.com</td>
                    <td>Class 10</td>
                    <td>A</td>
                    <td><li><i class="fa fa-bar-chart" aria-hidden="true"></i>View Result</li>
                <li data-toggle="modal" data-target="#parent_view"><i class="fa fa-user" aria-hidden="true"></i>View Parent</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i>View Attendence</li>
                </td>
                </tr>
                <tr>
                    <th><img src="images/icon.jpg" class="img-circle"></th>
                    <td>Siva Kumar</td>
                    <td>ST0042</td>
                    <td>kumarharsha44@gmail.com</td>
                    <td>Class 4</td>
                    <td>A</td>
                    <td><li><i class="fa fa-bar-chart" aria-hidden="true"></i>View Result </li>
                <li data-toggle="modal" data-target="#parent_view"><i class="fa fa-user" aria-hidden="true"></i>View Parent</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i>View Attendence</li>
                </td>
                </tr>
                <tr>
                    <th><img src="images/icon.jpg" class="img-circle"></th>
                    <td>Siva Kumar Reddy</td>
                    <td>ST0042</td>
                    <td>kumarharsha44@gmail.com</td>
                    <td>Class 4</td>
                    <td>A</td>
                    <td><li><i class="fa fa-bar-chart" aria-hidden="true"></i>View Result</li>
                <li data-toggle="modal" data-target="#parent_view"><i class="fa fa-user" aria-hidden="true"></i>View Parent</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i>View Attendence</li>
                </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row stu_list_nav">
            <div class="col-md-3">
                <p>Showing 1 to 10 of 90 entries</p>
            </div>
            <div class="col-md-9">
                <ul class="pagination pull-right">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?php
include_once('footer.php');
?>