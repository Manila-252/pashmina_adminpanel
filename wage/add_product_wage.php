<?php include 'wage_start.php'; ?>
<div class="sc_staff_nav">
  <div class="sc_staffs_topbar">

    <a href="product_wage.php">
      <div class="sc_staffs_status">product Wage</div>
    </a>
    <a href="add_product_wage.php">
      <div class="sc_tab_active sc_staffs_status">Add Product Wage</div>
    </a>
    <a href="per_user_wage.php">
      <div class="sc_staffs_status">Per User Wage</div>
    </a>

  </div>
</div>

<div class="sc_content_container sc_cc_tab">
  <div class="add_product_wage">
    <form class="sc_yarn_form_wage" action="">
        <div class="sidebyside_display">
          <div class="for_label"><label for="year">Type</label></div>
          <div class="for_dropdown">
            <select id="year" name="year">
              <option value="2022">Pashmina</option>
              <option value="2021">Cashmere</option>
              <option value="2020">..</option>
            
            </select>
          </div>  
        </div>
        
        <div class="sidebyside_display">
          <div class="for_label"><label for="year">Size</label></div>
          <div class="for_dropdown">
            <select id="year" name="year">
              <option value="2022">220*220</option>
              <option value="2021">220*220</option>
              <option value="2020">220*220</option>
              <option value="2019">...</option>
            </select>
          </div>  
        </div>

        <div class="sidebyside_display">
          <div class="for_label"><label for="year">Wage</label></div>
          <div class="for_dropdown">
            <select id="year" name="year">
              <option value="2022">20000</option>
              <option value="2021">30000</option>
              <option value="2020">40000</option>
              <option value="2019">...</option>
            </select>
          </div>  
        </div>
      <br>
      
      
    </form>
    <div class="for_save_button">
      <button>Save</button>
    </div>
  
    
</div>
</div>
<?php include 'wage_end.php'; ?>