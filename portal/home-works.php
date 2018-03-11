<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Student Assignement</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Student Assignement</a></li>


            </ul>
        </div>
    </div>

    <div class="'row">
        <div  id="main_contnet_right">

            <div class="col-sm-12">

                <div class="table_attendance" style="margin-top: 40px;">
                    <a href="" class="education">Task Details</a>

                </div>
            </div>



            <div class="col-sm-12">

                <div class="row table_attendance">


                    <div id="std_attendance_table">
                        <table class="col-md-12 table-bordered table-striped table-condensed">
                            <thead class="orange">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Task</th>
                                    <th>Description</th>
                                    <th>Teacher Name</th>
                                    <th>Class Name</th>
                                    <th>Section Name</th>
                                    <th>Assign Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Task">Sports Day</td>
                                    <td data-title="Description">Highest</td>
                                    <td data-title="Teacher Name">Karteek Jammala</td>
                                    <td data-title="Class Name">Class one</td>
                                    <td data-title="Section Name">A Section</td>
                                    <td data-title="Assign Date">12/02/2017</td>
                                    <td data-title="End Date">12/02/2017</td>
                                    <td data-title="Status">Pending</td>
                                    <td data-title="Remark">Some Problem</td>
                                    <td data-title="Action"><span class="download-btn"><a href=""> Download </a></span></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Task">Sports Day</td>
                                    <td data-title="Description">Highest</td>
                                    <td data-title="Teacher Name">Karteek Jammala</td>
                                    <td data-title="Class Name">Class one</td>
                                    <td data-title="Section Name">A Section</td>
                                    <td data-title="Assign Date">12/02/2017</td>
                                    <td data-title="End Date">12/02/2017</td>
                                    <td data-title="Status">Pending</td>
                                    <td data-title="Remark">Some Problem</td>
                                    <td data-title="Action"></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Task">Sports Day</td>
                                    <td data-title="Description">Highest</td>
                                    <td data-title="Teacher Name">Karteek Jammala</td>
                                    <td data-title="Class Name">Class one</td>
                                    <td data-title="Section Name">A Section</td>
                                    <td data-title="Assign Date">12/02/2017</td>
                                    <td data-title="End Date">12/02/2017</td>
                                    <td data-title="Status">Completed</td>
                                    <td data-title="Remark">Some Problem</td>
                                    <td data-title="Action"><span class="download-btn"><a href=""> Download </a></span></td>
                                </tr>
                                <tr>
                                    <td data-title="Sl No.">1</td>
                                    <td data-title="Task">Sports Day</td>
                                    <td data-title="Description">Highest</td>
                                    <td data-title="Teacher Name">Karteek Jammala</td>
                                    <td data-title="Class Name">Class one</td>
                                    <td data-title="Section Name">A Section</td>
                                    <td data-title="Assign Date">12/02/2017</td>
                                    <td data-title="End Date">12/02/2017</td>
                                    <td data-title="Status">Completed</td>
                                    <td data-title="Remark">Some Problem</td>
                                    <td data-title="Action"></td>
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