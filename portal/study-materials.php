<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Study material</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Study material</a></li>


            </ul>
        </div>
    </div>

    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-sm-12">

                <div class="table_attendance" style="margin-top: 40px;">
                    <a href="" class="education">Study material</a>

                </div>
            </div>



            <div class="col-sm-12">

                <div class="row table_attendance">


                    <div id="std_attendance_table">
                        <table class="col-md-12 table-bordered table-striped table-condensed">
                            <thead class="orange">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Class</th>
                                    <th>Course</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Date">12/02/2017</td>
                                    <td data-title="Title">Material test 1</td>
                                    <td data-title="Description">Test</td>
                                    <td data-title="Class">Class one</td>
                                    <td data-title="Course">English</td>
                                    <td data-title="Action"><span class="designation"> Download</span></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Date">12/02/2017</td>
                                    <td data-title="Title">Material test 1</td>
                                    <td data-title="Description">Test</td>
                                    <td data-title="Class">Class one</td>
                                    <td data-title="Course">English</td>
                                    <td data-title="Action"><span class="designation"> Download</span></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>

                                    <td data-title="Date">12/02/2017</td>
                                    <td data-title="Title">Material test 1</td>

                                    <td data-title="Description">Test</td>
                                    <td data-title="Class">Class one</td>
                                    <td data-title="Course">Mathematics</td>
                                    <td data-title="Action"><span class="designation"> Download</span></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>

                                    <td data-title="Date">12/02/2017</td>
                                    <td data-title="Title">Material test 1</td>

                                    <td data-title="Description">Test</td>
                                    <td data-title="Class">Class one</td>
                                    <td data-title="Course">Social</td>
                                    <td data-title="Action"><span class="designation"> Download</span></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <div class="col-sm-12">
                <div class="pull-left">
                    <div class="transport_headng">
                        Showing 1 to 4 of 4 Entries
                    </div>
                </div>
                <div class="pull-right">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>

                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>