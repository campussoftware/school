<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
$listofBooks=getAllLibraryBookDetails();
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
                <li><a href="javascript:void(0)">All Books</a></li>
            </ul>
        </div>
    </div>
    <!--teacher info-->
    <div class="'row">
        <div  id="main_contnet_right">
            <div class="col-sm-12"  id="attens_label">
                <h4 class="books_list_headng">All Books Informations are here</h4>
              <!--  <div class="books_border">
                    <div class="col-sm-12" style="overflow: hidden;">
                        <div class="pull-left no-padding">
                            <div class="form-group">
                                <div class="col-sm-10" id="books_records">
                                    <select class="form-control" id="sel1">
                                        <option></option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2016</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label>Records</label>
                                </div>
                            </div>
                        </div> 
                        <div class="pull-right no-padding">
                            <div class="form-group">
                                <label>Search</label>
                                <input type="text" class="books_search" name="">
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div id="res_default_table">
                        <div id="std_books_table">
                            <table class="col-md-12 table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>Adding Date</th>
                                        <th>Cover Photos</th>
                                        <th>Book Title</th>
                                        <th>Book ID No.</th>                                                                            
                                        <th>Author</th>
                                        <th>Editions</th>
                                        <th>Pages</th>
                                        <th>Availability</th>    
                                    </tr>
                                </thead>
                                <tbody>   
                                    <?php                                    
                                    if(count($listofBooks)>0){
                                        foreach ($listofBooks as $key => $value) {
                                            echo '<tr>
                                                    <td data-title="Adding Date">'.date("d/m/Y", strtotime($value['issued_date'])).'</td>
                                                    <td data-title="over Photos"><img src="images/book.jpg" class="img-responsive"></td>
                                                    <td data-title="Book Title">'.$value['book_title'].'</td>
                                                    <td data-title="Book ID No">'.$value['book_code'].'</td>                                                    
                                                    <td data-title="Author">'.$value['Publisher_name'].'</td>
                                                    <td data-title="Editions">'.$value['edition'].'</td>
                                                    <td data-title="Pages">'.$value['total_pages'].'</td>
                                                    <td data-title="Availability"><span class="books_list_headng">'.$value['status'].' </span></td>  
                                                </tr>';
                                        }
                                    }
                                    ?>
                                    
                                   

                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="pull-left">
                            <div class="transport_headng">
                                Showing 1 to 1 of 1 Entries
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
            </div>
        </div>
        <?php include_once('bottomfooter.php'); ?>

    </div>
</div>
<?php include_once('footer.php'); ?>