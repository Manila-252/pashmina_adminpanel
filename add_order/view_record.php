<?php include 'add_order_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="upload_order.php">
            <div class="sc_staffs_status">Upload Order</div>
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
            <div class="sc_tab_active sc_staffs_status">View Record</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">
    <div class="sc_ao_view_Record">
        <div class="sc_viewrecord_row">
            <div class="sc_viewrecord_col50">
                <form action="#">
                    <input type="text" placeholder="Enter Code.." name="search" id="sc_enter_code">
                    <button type="submit" class="sc_search_btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="sc_viewrecord_col50">
                <button class="sc_viewall_btn">View All</button>
            </div>
        </div>
        <div class="sc_view_record">
            <div class="sc_view_record_table">
                <table>
                    <tr>
                        <th width="5%">S.N.</th>
                        <th width="20%">Code</th>
                        <th width="20%">Type</th>
                        <th width="20%">Size</th>
                        <th width="10%">Color</th>
                        <th width="25%">Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>abc</td>
                        <td>38</td>
                        <td>pink</td>
                        <td>
                            <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')"><i class="fas fa-edit"></i> Edit</button>
                            <button class="sc_view_record_deletebtn"><i class="far fa-trash-alt"></i>
                                Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>abc</td>
                        <td>38</td>
                        <td>red</td>
                        <td>
                            <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')"><i class="fas fa-edit"></i> Edit</button>
                            <button class="sc_view_record_deletebtn"><i class="far fa-trash-alt"></i>
                                Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>abc</td>
                        <td>38</td>
                        <td>blue</td>
                        <td>
                            <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')"><i class="fas fa-edit"></i> Edit</button>
                            <button class="sc_view_record_deletebtn"><i class="far fa-trash-alt"></i>
                                Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>abc</td>
                        <td>38</td>
                        <td>green</td>
                        <td>
                            <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')"><i class="fas fa-edit"></i> Edit</button>
                            <button class="sc_view_record_deletebtn"><i class="far fa-trash-alt"></i>
                                Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- add record container end -->

<!-- view record edit update popup -->
<div class="sc_form-popup" id="sc_myForm_update">
  <div class="sc_user_info">
    <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm_update')"><i class="fas fa-times"></i></button>
    <div class="sc_user_content">
      <div class="sc_user_description">
        <div class="sc_edit_form">
          <form action="#">
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="name">Code</label>
              </div>
              <div class="col2-75">
                <input type="text" id="name" name="name" placeholder="Code no..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">Type</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="type..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">Size</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="size..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">Color</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="color..">
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
<!--  view record edit popup ends -->


<?php include 'add_order_end.php'; ?>