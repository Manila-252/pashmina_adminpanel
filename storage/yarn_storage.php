<?php include 'storage_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">


        <a href="cloth_storage.php">
            <div class="sc_staffs_status">Cloth Storage</div>
        </a>
        <a href="yarn_storage.php">
            <div class="sc_tab_active sc_staffs_status">Yarn Storage</div>
        </a>
        <a href="perProduct.php">
            <div class="sc_staffs_status">Per Product Detail</div>
        </a>

    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">
    <div class="tab_container">
        <h2>In Store</h2>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="25%">Type</th>
                            <th width="20%">Weight(kg)</th>
                            <th width="20%">Threshold Wt.(kg)</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_instore')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_instore')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_instore')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_instore')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_instore')">Update</button>
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

        <h2>Yarn For Order</h2>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="20%">Yarn Storage Id</th>
                            <th width="15%">Type</th>
                            <th width="15%">Ordered Weight(kg)</th>
                            <th width="15%">Ordered Date</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>y05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_fororder')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>y05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_fororder')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>y05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_fororder')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>y05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_fororder')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>y05_2079-02-01</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>2079-02-01</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update_fororder')">Update</button>
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



<div class="sc_form-popup" id="sc_myForm_update_instore">
    <div class="sc_user_info_instore">
        <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm_update_instore')"><i class="fas fa-times"></i></button>
        <div class="sc_user_content">
            <div class="sc_user_description">
                <div class="sc_edit_form">
                    <form action="#">
                        <div class="sc_col2_row">
                            <div class="col2-25">
                                <label for="name">Type</label>
                            </div>
                            <div class="col2-75">
                                <input type="text" id="name" name="name" placeholder="type..">
                            </div>
                        </div>
                        <div class="sc_col2_row">
                            <div class="col2-25">
                                <label for="fname">Weight(kg)</label>
                            </div>
                            <div class="col2-75">
                                <input type="text" id="address" name="address" placeholder="size..">
                            </div>
                        </div>
                        <div class="sc_col2_row">
                            <div class="col2-25">
                                <label for="phone">Threshold Wt.(kg)</label>
                            </div>
                            <div class="col2-75">
                                <input type="text" id="phone" name="phone" placeholder="piece..">
                            </div>
                        </div>
                        <div class="sc_col2_row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit pop up ends --------->
<div class="sc_form-popup" id="sc_myForm_update_fororder">
<div class="sc_user_info_fororder">
    <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm_update_fororder')"><i class="fas fa-times"></i></button>
    <div class="sc_user_content">
        <div class="sc_user_description">
            <div class="sc_edit_form">
                <form action="#">
                    <div class="sc_col2_row">
                        <div class="col2-25">
                            <label for="name">Yarn Storage id</label>
                        </div>
                        <div class="col2-75">
                            <input type="text" id="name" name="name" placeholder="type..">
                        </div>
                    </div>
                    <div class="sc_col2_row">
                        <div class="col2-25">
                            <label for="fname">Type</label>
                        </div>
                        <div class="col2-75">
                            <input type="text" id="address" name="address" placeholder="size..">
                        </div>
                    </div>
                    <div class="sc_col2_row">
                        <div class="col2-25">
                            <label for="phone">Ordered Wt.(kg)</label>
                        </div>
                        <div class="col2-75">
                            <input type="text" id="phone" name="phone" placeholder="piece..">
                        </div>
                    </div>
                    <div class="sc_col2_row">
                        <div class="col2-25">
                            <label for="mobile">Ordered Date</label>
                        </div>
                        <div class="col2-75">
                            <input type="text" id="mobile" name="mobile" placeholder="Your wages..">
                        </div>
                    </div>
                    <div class="sc_col2_row">
                        <input type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


<?php include 'storage_end.php'; ?>