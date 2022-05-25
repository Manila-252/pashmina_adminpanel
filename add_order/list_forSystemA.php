<?php include 'add_order_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="upload_order.php">
            <div class="sc_staffs_status">Upload Order</div>
        </a>
        <a href="recent_per_order.php">
            <div class="sc_tab_active sc_staffs_status">Recent Per Order</div>
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

<a href="recent_per_order.php"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 26px;"></i></a>
<span style="font-size: 26px; margin:0px 20px;">Record from: 2079-02-01_02</span>
<button class="sc_view_record_editbtn" style="float: right; width: 20%;">Deploy to System A</button>

<div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="20%">Barcode</th>
                            <th width="10%">QTY</th>
                            <th width="20%">Size</th>                            
                            <th width="20%">Type</th>
                            <th width="25%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>100</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>100</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>100</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>100</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

</div>
<!-- add record container end -->



<?php include 'add_order_end.php'; ?>