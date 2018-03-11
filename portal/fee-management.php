<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails=getStudentFullDetails();
$studentFeedeatils = getStudentFeeDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Fee Management</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Fee Management</a></li>

            </ul>
        </div>
    </div>  
    <!--teacher info-->
    <div class="'row">
        <div id="main_contnet_right">
        <!-- <div class="col-sm-12"  id="attens_label">
            <div class="col-sm-3 no-padding">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>Select Academic Year</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2016</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3 no-padding">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>Select Payment Type</option>
                        <option>Tuition</option>
                        <option>Library</option>
                        <option>Transport</option>
                        <option>Mess</option>
                        <option>Hostel</option>
                    </select>
                </div>
            </div>
        </div>-->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="default-list">
                    <h3>Fee Details</h3>
                </div>
            </div>
        <div class="col-sm-12">
            <div id="res_default_table">
                <table class="col-md-12 table-bordered table-striped table-condensed no-padding">
                    <thead>
                        <tr>
                            <th>Fee Type</th>
                            <th>Bill Type</th>
                            <th>Student Name</th>
                            <th>Rol No.</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Payment Status</th>
                            <th>Amount</th>
                            <th>Concession</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php                        
                         if(count($studentFeedeatils)>0){
                             foreach ($studentFeedeatils as $key => $value) {
                                 if($value['balance']=="0.00"){
                                     $status="Fully Paid";
                                     $btn="btn btn-success";
                                 }else{
                                     $status="Pending";
                                     $btn="btn btn-danger";
                                 }
                             echo '<tr>
                            <td data-title="Fee Type">'.$value['feetype'].'</td>
                            <td data-title="Bill Type">'.$value['feefrequency'].'</td>     
                            <td data-title="Student Name">'.$value['studentName'].'</td>
                            <td data-title="Rol No.">'.$value['studentRollNo'].'</td>
                            <td data-title="Class">'.$studentFullDetails['classname'].'</td>
                            <td data-title="Section">'.$studentFullDetails['section'].'</td>
                            <td data-title="Payment Status"><a href="" class="'.$btn.'">'.$status.'</a></td>
                            <td data-title="Amount">'.$value['amount'].'</td>
                            <td data-title="Amount">'.$value['concession'].'</td>
                            <td data-title="Amount">'.$value['paid_amount'].'</td>
                            <td data-title="Due Amount">'.$value['balance'].'</td>
                            <td data-title="Year">'.$value['academicyear_id'].'</td>
                            <td data-title="Action"><a href="" class="view_btnn">View</a></td>

                        </tr>';
                         }
                         }
                         
                     ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12">            
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