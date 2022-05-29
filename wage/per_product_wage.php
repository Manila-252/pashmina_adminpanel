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
        <a href="product_wage.php"> <button type="button" class="sc_user_backbtn"><i class="fa-solid fa-circle-arrow-left"></i></button></a>
        <div class="sc_user_content">
            <div class="sc_user_description">
                <p>Type: Cashmere </p>
                <p>Size: 110*110</p>
                <div class="sc_user_updatewage">
                    <p>Wage: </p>
                    <input type="text" name="wage" placeholder="Update Wage..">
                </div>
                <button class="sc_user_updatebtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- edit staff end -->

<?php include 'wage_end.php'; ?>