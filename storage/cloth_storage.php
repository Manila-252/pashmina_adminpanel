<?php include 'storage_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
  <div class="sc_staffs_topbar">

    <a href="cloth_storage.php">
      <div class="sc_tab_active sc_staffs_status">Cloth Storage</div>
    </a>
    <a href="yarn_storage.php">
      <div class="sc_staffs_status">Yarn Storage</div>
    </a>
    <a href="perProduct.php">
      <div class="sc_staffs_status">Per Product Detail</div>
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
    <div class="view_inList">
      <div class="sc_view_record">
        <div class="sc_view_record_table">
          <table>
            <tr>
              <th width="5%">S.N.</th>
              <th width="15%">Type</th>
              <th width="15%">Size</th>
              <th width="10%">inStore QTY</th>
              <th width="10%">Threshold QTY</th>
              <th width="15%">Action</th>
            </tr>
            <tr>
              <td>1</td>

              <td>Cashmere</td>
              <td>awesome</td>
              <td>200</td>
              <td>100</td>
              <td>
                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                <button class="sc_view_record_deletebtn">Delete</button>
              </td>
            </tr>
            <tr>
              <td>1</td>

              <td>Cashmere</td>
              <td>awesome</td>
              <td>200</td>
              <td>100</td>
              <td>
                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                <button class="sc_view_record_deletebtn">Delete</button>
              </td>
            </tr>
            <tr>
              <td>1</td>

              <td>Cashmere</td>
              <td>awesome</td>
              <td>200</td>
              <td>100</td>
              <td>
                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                <button class="sc_view_record_deletebtn">Delete</button>
              </td>
            </tr>
            <tr>
              <td>1</td>

              <td>Cashmere</td>
              <td>awesome</td>
              <td>200</td>
              <td>100</td>
              <td>
                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
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

<div class="sc_form-popup" id="sc_myForm_update">
  <div class="sc_user_info">
    <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm_update')"><i class="fas fa-times"></i></button>
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
                <label for="fname">Size</label>
              </div>
              <div class="col2-75">
                <input type="text" id="address" name="address" placeholder="size..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="phone">inStore QTY</label>
              </div>
              <div class="col2-75">
                <input type="text" id="phone" name="phone" placeholder="piece..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">Threshold QTY</label>
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

<!-- edit pop up ends --------->

<?php include 'storage_end.php'; ?>