<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentNotification = getNotificationDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Notification Management</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Student Notifications</a></li>
            </ul>
        </div>
    </div>

    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="default-list">
                    <h3>Notification Details</h3>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="row table_attendance">
                    <div id="res_default_table">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-padding ">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="orange">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Notification Id</th>
                                    <th>Notification Type</th>
                                    <th>Notification</th>
                                    <th>Description</th>
                                    <th style="width: 100px;">Date</th>
                                    <th style="width: 100px;">End Date</th>                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (count($studentNotification) > 0) {
                                    $i = 1;
                                    foreach ($studentNotification as $key => $value) {
                                        if ($value[start_date] == "0000-00-00") {
                                            $fromdate = " - ";
                                        } else {
                                            $fromdate = date("d-m-Y", strtotime($value["start_date"]));
                                        }
                                        if ($value[end_date] == "0000-00-00") {
                                            $enddate = " - ";
                                        } else {
                                            $enddate = date("d-m-Y", strtotime($value["end_date"]));
                                        }

                                        echo ' <tr>
                                    <td data-title="Sl No.">' . $i . '</td>
                                    <td data-title="Notification Id">' . $value['notification_code'] . '</td>
                                    <td data-title="Notification Type">' . $value['name'] . '</td>
                                    <td data-title="Notification">' . $value['title'] . '</td>
                                    <td data-title="Description">' . $value['description'] . '</td>
                                    <td data-title="Date">' . $fromdate . '</td>  
                                    <td data-title="End Date">' . $enddate . '</td>      
                                    <td data-title="Action"><a href="JavaScript:Void(0);" class="btn btn-success " onclick=setnotificationId(' . $value[id] . ') >View</a></td> 
                                </tr>';
                                        $i++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Notification Details</h4>
                            </div>
                            <div class="modal-body">
                                <div id="notification_details">
                                
                                </div>
                            </div>                                   
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
            <div class="col-sm-12">
                <div class="pull-left">
                    <div class="bottom-list-nav">
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