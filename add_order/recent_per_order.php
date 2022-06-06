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
        <a href="add_order.php">
            <div class="sc_staffs_status">Add Order</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">
    <?php include '../date.php'; ?>
    <div class="tab_container">
        <h3>Record from: 2079-02-01_02</h3>
        <div class="rpo_uploaded_pdfList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="45%">File Name</th>
                            <th width="20%">Date</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                                <a href="list_forSystemA.php"><button class="sc_view_record_editbtn" style="width: 60%;">Make ready for System A</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                                <a href="list_forSystemA.php"><button class="sc_view_record_editbtn" style="width: 60%;">Make ready for System A</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                                <a href="list_forSystemA.php"><button class="sc_view_record_editbtn" style="width: 60%;">Make ready for System A</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                                <a href="list_forSystemA.php"><button class="sc_view_record_editbtn" style="width: 60%;">Make ready for System A</button></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="sendToA" style="padding: 20px 0px; text-align: center;">
                <a href="list_forSystemA.php"><button class="sc_view_record_editbtn" style="width: 60%;">Make ready for System A</button></a>
            </div>
        </div>
        <hr>

        <h3>Record from: 2079-02-01_01</h3>
        <div class="rpo_uploaded_pdfList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="45%">File Name</th>
                            <th width="20%">Date</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>2079-02-01</td>
                            <td>
                                <a href="view_inList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="sendToA" style="padding: 20px 0px; text-align: center;">
                <button style="width: 60%;" disabled>Deployed to System A</button>
            </div>
        </div>
        <hr>

    </div>
</div>
<!-- add record container end -->



<?php include 'add_order_end.php'; ?>