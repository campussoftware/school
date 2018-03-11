<?php
include_once('mainheader.php');
include_once('sidemenu.php');
include_once('header.php');
?>
<!-- start from body part -->
<div class="warper">
    <!-- page navigation -->
    <div class="row" id="page_header_block">
        <div class="col-sm-6" id="page_title">Leave Request</div>
        <div class="col-sm-6" id="page_links">
            <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i>Home</a>/</li>
                <li><a href="javascript:void(0)">Dashboard/</a></li>
                <li><a href="javascript:void(0)">Leave Request</a></li>
            </ul>
        </div>
    </div>
    <div class="profile toggle_tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#leave_request" aria-controls="user_profile" role="tab" data-toggle="tab">Leave Request</a></li>
            <li role="presentation"><a href="#send_leave_request" aria-controls="user_account" role="tab" data-toggle="tab">Send Leave Request</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active custom-table" id="leave_request">
                <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>SNO</th>
                        <th>Tile</th>
                        <th>Description</th>
                        <th>By</th>
                        <th>From</th>
                        <th>TO</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Need Leave For Tomorrow</td>
                        <td>Need Leave For Tomorrow </td>
                        <td>Siva Kumar</td>
                        <td>03/05/2016</td>
                        <td>03/05/2016</td>
                        <td><button type="button" class="btn btn-primary">Approved</button></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Need Leave For a Week</td>
                        <td>Need Leave For a Week </td>
                        <td>Siva Kumar</td>
                        <td>05/08/2016</td>
                        <td>10/08/2016</td>
                        <td><button type="button" class="btn btn-primary">Approved</button></td>
                    </tr>

                </tbody>
            </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="send_leave_request">
                <div class="basic_form">
                    <form>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="leave_title" name="leave_title" placeholder="Title">
                            <span class="error" id="error_leave_title" style="display: none;"></span> </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea row="8" class="form-control" id="leave_des" name="leave_des" placeholder="Description"></textarea>
                            <span class="error" id="error_leave_des" style="display: none;"></span> </div>
                        <div class="form-group">
                            <label for="from_date">From Date</label>
                            <input type="email" class="form-control" id="from_date" name="from_date" placeholder="From Date">
                            <span class="error" id="error_from_date" style="display: none;"></span> </div>
                        <div class="form-group">
                            <label for="address">To Date</label>
                            <input type="text" class="form-control" id="to_date" name="to_date" placeholder="To Date">
                            <span class="error" id="error_to_date" style="display: none;"></span> </div>
                        <button type="button" class="btn btn-default btn_submit pull-right">Submit</button>
                    </form>
              </div>

            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>