<?php include 'wage_start.php'; ?>

<div class="sc_staff_nav">
    <div class="sc_staffs_topbar">

        <a href="product_wage.php">
            <div class="sc_tab_active sc_staffs_status">product Wage</div>
        </a>
        <a href="add_product_wage.php">
            <div class="sc_staffs_status">Add Product Wage</div>
        </a>
        <a href="per_user_wage.php">
            <div class="sc_staffs_status">Per User Wage</div>
        </a>

    </div>
</div>

<!-- edit staff start -->
<div class="sc_content_container sc_cc_tab" id="receive_tab">
    <div class="sc_staff_details_container">
        <a href="product_wage.php"> <i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 26px;"></i></a>
        <div class="sc_user_content">
            <div class="sc_user_description">
                <div class="sc_user_wage_row">
                    <div class="sc_user_wage_left">
                        <p>Type:</p>
                    </div>
                    <div class="sc_user_wage_right">
                        <p>Cashmere</p>
                    </div>
                </div>
                <div class="sc_user_wage_row">
                    <div class="sc_user_wage_left">
                        <p>Size:</p>
                    </div>
                    <div class="sc_user_wage_right">
                        <p>110*110</p>
                    </div>
                </div>
                <div class="sc_user_wage_row">
                    <div class="sc_user_wage_left">
                        <p>Wage:</p>
                    </div>
                    <div class="sc_user_wage_right">
                        <input type="text" name="update_wage" id="wage">
                    </div>
                </div>
                <button class="sc_user_wage_updatebtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- edit staff end -->

<?php include 'wage_end.php'; ?>