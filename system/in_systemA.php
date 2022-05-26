<?php include 'systemA_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="in_systemA.php">
            <div class="sc_tab_active sc_staffs_status">In System A</div>
        </a>
        <a href="in_systemB.php">
            <div class="sc_staffs_status">System B</div>
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
        <h2>Ongoing Work</h2>
        <hr>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="10%">Barcode</th>
                            <th width="15%">Record From</th>
                            <th width="10%">Size</th>
                            <th width="10%">Type</th>
                            <th width="10%">Order QTY</th>
                            <th width="10%">inStore QTY</th>
                            <th width="10%">Rem. QTY</th>
                            <th width="20%">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>200</td>
                            <td>100</td>
                            <td>
                                <!-- <button class="sc_view_record_editbtn">Update</button> -->
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                                <!-- <button class="sc_view_record_editbtn" onclick="openAnotherPage('receive_tab', 'edit_tab')">Update</button> -->
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>200</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>200</td>
                            <td>100</td>
                            <td>
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
                                <button class="sc_view_record_deletebtn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>200</td>
                            <td>100</td>
                            <td>
                                <!-- <button class="sc_view_record_editbtn">Update</button> -->
                                <button class="sc_view_record_editbtn" onclick="openform('sc_myForm_update')">Update</button>
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

        <h2>Completed Work</h2>
        <h4>(Cloth send to production level by whom?)</h4>
        <hr>
        <br>
        <?php include '../date.php'; ?>
        <div class="view_inList">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="15%">Barcode</th>
                            <th width="15%">Record From</th>
                            <th width="10%">Size</th>
                            <th width="10%">Type</th>
                            <th width="10%">QTY</th>
                            <th width="20%">User</th>
                            <th width="15%">Date</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
                            <td>2079-02-01</td>
                        </tr>
                        <tr>
                        <td>1</td>
                            <td>001001001</td>
                            <td>2079-02-01_01</td>
                            <td>awesome</td>
                            <td>Cashmere</td>
                            <td>100</td>
                            <td>Hari Bahadur</td>
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


<!-- for update popup code ------------->
<div class="sc_form-popup" id="sc_myForm_update">
  <div class="sc_user_info_update_systemA">
    <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm_update')"><i class="fas fa-times"></i></button>
    <div class="sc_user_content">
      <div class="sc_user_description">
        <div class="sc_edit_form">
          <form action="#">
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="name">Barcode</label>
              </div>
              <div class="col2-75">
                <input type="text" id="name" name="name" placeholder="barcode..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="fname">Record From</label>
              </div>
              <div class="col2-75">
                <input type="text" id="address" name="address" placeholder="size..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="phone">Size</label>
              </div>
              <div class="col2-75">
                <input type="text" id="phone" name="phone" placeholder="size of material..">
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
                <label for="mobile">Order QTY</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="order quantity..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">inStore QTY</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="inStore quantity..">
              </div>
            </div>
            <div class="sc_col2_row">
              <div class="col2-25">
                <label for="mobile">Rem. QTY</label>
              </div>
              <div class="col2-75">
                <input type="text" id="mobile" name="mobile" placeholder="Remaining quanitity..">
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

<!-- update pop up ends --------->



<?php include 'systemA_end.php'; ?>