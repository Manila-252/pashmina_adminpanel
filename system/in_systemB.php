<?php include 'systemA_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="in_systemA.php">
            <div class="sc_staffs_status">In System A</div>
        </a>
        <a href="in_systemB.php">
            <div class="sc_tab_active sc_staffs_status">System B</div>
        </a>
        <a href="in_systemC.php">
            <div class="sc_staffs_status">System C</div>
        </a>
        <a href="product_wt_checker.php">
            <div class="sc_staffs_status">Product Wt Checker</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">

    <div class="tab_container">
        <h2>Orders</h2>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="20%">Order Id</th>
                            <th width="10%">Size</th>
                            <th width="10%">Type</th>
                            <th width="10%">Order QTY</th>
                            <th width="10%">Order Date</th>
                            <th width="15%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr><tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr><tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr><tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <br>
        <br>
        <br>

        <h2>Weaving</h2>
        <h4>(Who is weaving?)</h4>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="15%">Order Id</th>
                            <th width="10%">Size</th>
                            <th width="10%">Type</th>
                            <th width="10%">Order QTY</th>
                            <th width="10%">Rem. QTY</th>
                            <th width="15%">User</th>
                            <th width="10%">Yarn Used</th>
                            <th width="15%">Accepted Date</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Not</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <h2>Completed Weaving</h2>
        <h4>(Weaved Cloth send to system A by whom?)</h4>
        <hr>
        <br>
        <?php include '../date.php'; ?>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="15%">Order Id</th>
                            <th width="10%">Size</th>
                            <th width="10%">Type</th>
                            <th width="10%">Order QTY</th>
                            <th width="10%">Done QTY</th>
                            <th width="15%">User</th>
                            <th width="10%">Yarn Used</th>
                            <th width="15%">Date</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Not</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>Acceptable</td>
                            <td>2079-02-01</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- add record container end -->



<?php include 'systemA_end.php'; ?>