<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Subject Details</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard /</a></li>
                <li><a href="javascript:void(0)">Attendance</a></li>
            </ul>
        </div>
    </div>
    <div class="row sub_tech_list">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <form class="form-inline inline-form">
                    <div class="form-group">
                        <label class="sr-only" for="year">Select Academic year</label>
                        <select class="form-control">
                            <option>Select Academic year</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <form class="form-inline inline-form">
                    <div class="form-group">
                        <label class="sr-only" for="class name">class name</label>
                        <select class="form-control">
                            <option>Select ClassName</option>
                            <option value="classX">class X</option>
                            <option value="classIX">class IX</option>
                            <option value="classVIII">class VIII</option>
                            <option value="ClassVII">Class VII</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <form class="form-inline inline-form">
                    <div class="form-group">
                        <label class="sr-only" for="sectionname">Section Name</label>
                        <select class="form-control">
                            <option>Select Academic year</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="row tech_list">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Teacher Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>jamalla Karteek</td>
                            <td>telugu</td>
                            <td>jamallakarteek@gmail.com</td>
                            <td>9030745148</td>
                            <td>Head Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>Siva Kumar</td>
                            <td>telugu</td>
                            <td>kumarharsha44@gmail.com</td>
                            <td>9030745148</td>
                            <td>Class Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>Siva Kumar</td>
                            <td>telugu</td>
                            <td>kumarharsha44@gmail.com</td>
                            <td>9030745148</td>
                            <td>Class Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>Siva Kumar</td>
                            <td>telugu</td>
                            <td>kumarharsha44@gmail.com</td>
                            <td>9030745148</td>
                            <td>Class Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>Siva Kumar</td>
                            <td>telugu</td>
                            <td>kumarharsha44@gmail.com</td>
                            <td>9030745148</td>
                            <td>Class Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <th><img src="images/icon.jpg" class="img-circle"></th>
                            <td>Siva Kumar</td>
                            <td>telugu</td>
                            <td>kumarharsha44@gmail.com</td>
                            <td>9030745148</td>
                            <td>Class Teacher</td>
                            <td><button type="button" class="btn btn-primary">Details</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>