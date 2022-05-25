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
            <div class="sc_tab_active sc_staffs_status">System C</div>
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
        <h2>Yarn Orders</h2>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="15%">Order Id</th>
                            <th width="10%">Type</th>
                            <th width="15%">Required Wt.(kg)</th>
                            <th width="15%">inStore Wt.(kg)</th>
                            <th width="15%">Date</th>
                            <th width="25%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
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
                            <td>Cashmere</td>
                            <td>100</td>
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
                            <td>Cashmere</td>
                            <td>100</td>
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
                            <td>Cashmere</td>
                            <td>100</td>
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

        <h2>Yarn Taken</h2>
        <h4>(Yarn taken by whom?)</h4>
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
                            <th width="10%">Type</th>
                            <th width="10%">Required Wt.(kg)</th>
                            <th width="10%">Taken Wt.(kg)</th>
                            <th width="15%">User</th>
                            <th width="10%">taken Date</th>
                            <th width="25%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
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

        <h2>Sus User</h2>
        <h4>(track when more than required yarn weight is taken)</h4>
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
                            <th width="15%">Yarn Order Id</th>
                            <th width="8%">Required Wt.(kg)</th>
                            <th width="8%">Taken Wt.(kg)</th>
                            <th width="10%">User</th>
                            <th width="10%">taken Date</th>
                            <th width="4%">Verified</th>
                            <th width="25%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>yo05_2079-02-01</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-check" style="color: green;"></i></td>
                            <td>
                                <button class="sc_view_record_editbtn">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>05_2079-02-01</td>
                            <td>yo05_2079-02-01</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Ram Bahadur</td>
                            <td>2079-02-01</td>
                            <td><i class="fa-solid fa-circle-xmark" style="color: red;"></i></td>
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
</div>
</div>
<!-- add record container end -->



<?php include 'systemA_end.php'; ?>