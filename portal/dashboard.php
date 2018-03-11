<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Profile</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Profile</a></li>


            </ul>
        </div>
    </div>

    <div class="'row">
        <div  id="main_contnet_right">

            <div class="dashboard_view">
                <div class="col-md-8">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><span> <i class="fa fa-tasks" aria-hidden="true"></i> </span><p>Exam Reports</p></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><span> <i class="fa fa-tasks" aria-hidden="true"></i> </span><p>Exam Timetable</p></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><span> <i class="fa fa-tasks" aria-hidden="true"></i> </span><p>Shedule</p></a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><span> <i class="fa fa-tasks" aria-hidden="true"></i> </span><p>Assigment</p></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">...</div>
                        <div role="tabpanel" class="tab-pane" id="profile">...</div>
                        <div role="tabpanel" class="tab-pane" id="messages">...</div>
                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-aside">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#teacher_view" aria-expanded="true" aria-controls="teacher_view">
                                            Class Teacher
                                        </a>
                                    </h4>
                                </div>
                                <div id="teacher_view" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <img src="img/sample.jpg" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <p><i class="fa fa-phone" aria-hidden="true"></i> 9030745148</p>
                                                <p><i class="fa fa-envelope" aria-hidden="true"></i> kumarharsha44@gmail.com</p>
                                            </div>	
                                        </div>					
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#last_fee_view" aria-expanded="false" aria-controls="last_fee_view">
                                            Last Fee Paid
                                        </a>
                                    </h4>
                                </div>
                                <div id="last_fee_view" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Date: 09-02-2016</p>
                                        <p>Total Amount: 12500</p>


                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#recent_work" aria-expanded="false" aria-controls="recent_work">
                                            Recent Home Works
                                        </a>
                                    </h4>
                                </div>
                                <div id="recent_work" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <table class="table table-striped"> 					  
                                            <tbody> 
                                                <tr> 
                                                    <th>1</th> 
                                                    <td>Todays Computer Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr> 
                                                <tr> 
                                                    <th>2</th> 
                                                    <td>Todays Science Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr>
                                                <tr> 
                                                    <th>3</th> 
                                                    <td>Todays Social Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr>
                                                <tr> 
                                                    <th>4</th> 
                                                    <td>Todays Scinece Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr>
                                                <tr> 
                                                    <th>5</th> 
                                                    <td>Todays Telugu Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr>
                                                <tr> 
                                                    <th>6</th> 
                                                    <td>Todays Maths Class</td> 
                                                    <td><i class="fa fa-search" aria-hidden="true"></i></td> 
                                                </tr>
                                            </tbody> 
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#attendance_view" aria-expanded="false" aria-controls="attendance_view">
                                            Attendance
                                        </a>
                                    </h4>
                                </div>
                                <div id="attendance_view" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="present">Present : 64.65%</p>
                                        <p class="absent">Absent : 35.35%</p>					
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

            <div class="dash-events">
                <div class="col-md-6">
                    <div class="lst_news_head">
                        <h3>Latest News</h3>
                    </div>
                    <div class="lst_news_data">
                        <table class="table table-striped"> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>Title</th> 
                                    <th>Details</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Demo Notices</td> 
                                    <td>Demo Notices</td> 
                                </tr> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Family Day</td> 
                                    <td>Parent meeting IMPORTANT</td> 
                                </tr> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Drawing</td> 
                                    <td>Drawing Compition</td> 
                                </tr>
                                <tr> 
                                    <th>1</th> 
                                    <td>Chess </td> 
                                    <td>Chess Events</td> 
                                </tr>
                                <tr> 
                                    <th>1</th> 
                                    <td>Seminar</td> 
                                    <td>Seminar on Environment</td> 
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event_news_head">
                        <h3>Events Clander</h3>
                    </div>
                    <div class="event_news_data">
                        <table class="table table-striped"> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>Title</th> 
                                    <th>from Date</th>
                                    <th>To Date</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Demo Notices</td> 
                                    <td>09/02/2016</td> 
                                    <td>12/02/2016</td> 
                                </tr> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Family Day</td> 
                                    <td>09/02/2016</td> 
                                    <td>12/02/2016</td>  
                                </tr> 
                                <tr> 
                                    <th>1</th> 
                                    <td>Drawing</td> 
                                    <td>09/02/2016</td> 
                                    <td>12/02/2016</td> 
                                </tr>
                                <tr> 
                                    <th>1</th> 
                                    <td>Chess </td> 
                                    <td>09/02/2016</td> 
                                    <td>12/02/2016</td> 
                                </tr>
                                <tr> 
                                    <th>1</th> 
                                    <td>Seminar</td> 
                                    <td>09/02/2016</td> 
                                    <td>12/02/2016</td>  
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>