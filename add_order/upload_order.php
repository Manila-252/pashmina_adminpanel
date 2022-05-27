<?php include 'add_order_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="upload_order.php">
            <div class="sc_tab_active sc_staffs_status">Upload Order</div>
        </a>
        <a href="recent_per_order.php">
            <div class="sc_staffs_status">Recent Per Order</div>
        </a>        
        <a href="size.php">
            <div class="sc_staffs_status">Size</div>
        </a>
        <a href="material.php">
            <div class="sc_staffs_status">Materials</div>
        </a>
        <a href="add_record.php">
            <div class="sc_staffs_status">Add Record</div>
        </a>
        <a href="view_record.php">
            <div class="sc_staffs_status">View Record</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">
    <div class="tab_container">
        <div class="uo_upload_pdf" style="text-align: center; padding: 30px 0px; border: 2px solid #2a435b;">
            <form action="/action_page.php">
                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="myfile"><br><br>
                <input type="submit" class="sc_view_record_submitbtn">
            </form>
        </div>
        <div class="uo_uploaded_pdfList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="65%">File Name</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>
                                <button class="sc_view_record_editbtn">Convert</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>
                                <button class="sc_view_record_editbtn">Convert</button>
                                <span>
                                    <button class="sc_view_record_deletebtn">Delete</button>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>
                                <button class="sc_view_record_editbtn">Convert</button>
                                <span>
                                    <button class="sc_view_record_deletebtn">Delete</button>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>
                                <button class="sc_view_record_editbtn">Convert</button>
                                <span>
                                    <button class="sc_view_record_deletebtn">Delete</button>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add record container end -->



<?php include 'add_order_end.php'; ?>