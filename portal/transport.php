<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
$studentTransport = getStudentTransportData();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Transport Information</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Transport Information</a></li>

            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="default-list">
                    <h3>Transport Details</h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div id="res_default_table">
                    <table class="col-md-12 table-bordered table-striped table-condensed no-padding">
                        <thead>
                            <tr>
                                <th>Route Name</th>
                                <th>Route No</th>
                                <th>Pickup Location</th>
                                <th>Valid Date</th>
                                <th>Transport Amount</th>
                                <th>Pickup Schedule</th>
                            </tr>
                        </thead>                       
                        <tbody class="transport_child">
                           <?php
                           if(count($studentTransport)>0){
                               foreach($studentTransport as $key=>$value){
                                   $fromdate=date("d/m/Y", strtotime($value['from_date']));
                                   $todate=date("d/m/Y", strtotime($value['to_date']));;
                                   echo' <tr>
                                            <td data-title="Route Name">'.$value['route_name'].'</td>
                                            <td data-title="Route No">'.$value['route_no'].'</td>
                                            <td data-title="Pickup Location">'.$value['pickup_location'].'</td>
                                            <td data-title="Valid Date">'.$fromdate .' - '.$todate.'</td>
                                            <td data-title="Transport Amount">Rs '.$value['amount'].'</td>
                                            <td data-title="Pickup Schedule">'.$value['schedule_time'].'</td>    
                                    </tr>';
                               }
                           }
                           ?>                         
                           
                        </tbody>
                    </table>
                </div>
            </div>  
            <div class="col-sm-12">
                <div class="bottom-list-nav">
                    Showing 4 to 4 of 4 Entries
                </div>
            </div> 
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>