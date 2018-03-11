<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$studentFullDetails = getStudentFullDetails();
$issuedBooks=getissuedBookDetails();
?>
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Library Management</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard</a>/</li>
                <li><a href="javascript:void(0)">Library Management</a>/</li>
                <li><a href="javascript:void(0)">Issued Books</a></li>


            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="default-list">
                    <h3>Issued Books</h3>
                </div>
            </div>
            <div class="row"   id="input_style" style="margin-top: 67px;">
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control mpost_req" id="req_book_id" name="req_book_id" placeholder="Book id">
                        <span class="error" id="error_req_book_id"></span> </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <input type="text" class="form-control mpost_req" id="req_Title" name="req_Title" placeholder="Title">
                        <span class="error" id="error_req_Title" style="display: none;"></span> </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control mpost_req" id="req_autor" name="req_autor" placeholder="Author">
                        <span class="error" id="error_req_autor" style="display: none;"></span> </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option>Issued</option>
                            <option>Sanskrit</option>
                            <option>Mathematics</option>
                            <option>Science</option>
                            <option>Social</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control mpost_req" id="req_from_date" name="req_from_date" placeholder="Issue fron date">
                        <span class="error" id="error_req_from_date" style="display: none;"></span> </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control mpost_req" id="req_To_date" name="req_To_date" placeholder="Issue To date">
                        <span class="error" id="error_req_To_date" style="display: none;"></span> </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <a href="#" class="btn btn-info" role="button" id="button_bt">search</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div id="res_default_table">
                    <div id="std_books_table">                        
                        <table class="col-md-12 table-bordered table-striped table-condensed">
                            <thead class="orange">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Book Title</th>
                                    <th>Book Id</th>
                                    <th>Author</th>
                                    <th>Issue Date</th>
                                    <th>Return Date</th>
                                    <th>Fine</th>                                    
                                    <th>Is Returned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                                
                                if(count($issuedBooks)>0){
                                    $sn_count = 1;
                                    foreach ($issuedBooks as $key => $value) {
                                        if($value['is_received']==0){
                                            $received_Status="No";
                                        }else{
                                            $received_Status="Yes";
                                        }
                                        if($value['received_date']="0000-00-00"){
                                            $received_date="Not Returned";
                                        }else{
                                            $received_date=date("d-m-Y", strtotime($value['received_date']));
                                        }
                                        echo ' <tr>
                                                    <td data-title="Sl No">'.$sn_count.'</td>
                                                    <td data-title="Book Title">'.$value['book_title'].'</td>
                                                    <td data-title="Fee Id">'.$value['book_code'].'</td>
                                                    <td data-title="Author">'.$value['Publisher_name'].'</td>
                                                    <td data-title="Issue Date">'.date("d-m-Y", strtotime($value['issued_date'])).'</td>
                                                    <td data-title="Return Date">'.$received_date.'</td>
                                                    <td data-title="Fine">Rs '.$value['fine'].'</td>
                                                    <td data-title="Is Returned">'.$received_Status.'</td>                                                    
                                                </tr>';
                                        $sn_count++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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