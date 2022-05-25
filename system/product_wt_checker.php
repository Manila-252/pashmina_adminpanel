<?php include 'systemA_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="in_systemA.php">
            <div class="sc_staffs_status">In System A</div>
        </a>
        <a href="in_systemB.php">
            <div class="sc_staffs_status">System B</div>
        </a>
        <a href="in_systemC.php">
            <div class="sc_staffs_status">System C</div>
        </a>
        <a href="product_wt_checker.php">
            <div class="sc_tab_active sc_staffs_status">Product Wt Checker</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->

<div class="sc_content_container sc_cc_tab">
    <div class="tab_container">
        <h2>Per Product Weightage : Not verified</h2>
        <h4>( Check if any User have made error during transfer cloth from system B to A )</h4>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="15%">Order Id</th>
                            <th width="20%">User</th>
                            <th width="10%">Made QTY</th>
                            <th width="15%">Status</th>
                            <th width="15%">Date</th>
                            <th width="5%">Verified</th>
                            <th width="15%">Action</th>
                        </tr>                        
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Hari Bahadur</td>
                            <td>10</td>
                            <td style="color: green;">Acceptable</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-xmark" style="color: red;"></i></td>
                            <td>
                                <a href="pwc_perUserList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

        <h2>Per Product Weightage : All</h2>
        <h4>( Check if any User have made error during transfer cloth from system B to A )</h4>
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
                            <th width="20%">User</th>
                            <th width="10%">Made QTY</th>
                            <th width="15%">Status</th>
                            <th width="15%">Date</th>
                            <th width="5%">Verified</th>
                            <th width="15%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Hari Bahadur</td>
                            <td>10</td>
                            <td style="color: green;">Acceptable</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-check" style="color: green;"></i></td>
                            <td>
                                <a href="pwc_perUserList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Hari Bahadur</td>
                            <td>10</td>
                            <td style="color: red;">Not Acceptable</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-check" style="color: green;"></i></td>
                            <td>
                                <a href="pwc_perUserList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Hari Bahadur</td>
                            <td>10</td>
                            <td style="color: green;">Acceptable</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-xmark" style="color: red;"></i></td>
                            <td>
                                <a href="pwc_perUserList.php">
                                    <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- add record container end -->



<?php include 'systemA_end.php'; ?>