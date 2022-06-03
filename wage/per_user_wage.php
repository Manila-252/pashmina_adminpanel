<?php include 'wage_start.php'; ?>
<div class="sc_staff_nav">
  <div class="sc_staffs_topbar">

    <a href="product_wage.php">
      <div class="sc_staffs_status">product Wage</div>
    </a>
    <a href="add_product_wage.php">
      <div class="sc_staffs_status">Add Product Wage</div>
    </a>
    <a href="per_user_wage.php">
      <div class="sc_tab_active sc_staffs_status">Per User Wage</div>
    </a>

  </div>
</div>

<!------------------------- for per user wage default page-------------------------- ---->

<div class="per_user_page_row1">
  <div class="sidebyside_display_user">
    <div class="for_label"><label for="year">View by</label></div>
    <div class="for_dropdown">
        <select id="year" name="year">
          <option value="2022">Name</option>
          <option value="2021">Payment</option>
          <option value="2020">..</option>
              
        </select>
    </div>  
  </div>

  <div class="for_search_button">
    <button>Search</button>
  </div>
</div>
<div class="rpo_uploaded_pdfList_user">
            <div class="sc_view_record">
                <div class="sc_view_record_table">
                    <table>
                        <tr>
                            <th width="5%">S.N.</th>
                            <th width="45%">Name</th>
                            <th width="20%">Remaining Payment</th>
                            <th width="30%">Action</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Hari Bahadur</td>
                            <td>2000</td>
                            <td>
                                <a href="per_user_wage2.php">
                                  <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Ram Bahadur</td>
                            <td>5000</td>
                            <td>
                               <a href="per_user_wage2.php">
                                  <button class="sc_view_record_editbtn">View</button>
                                </a>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            
        </div>


<?php include 'wage_end.php'; ?>