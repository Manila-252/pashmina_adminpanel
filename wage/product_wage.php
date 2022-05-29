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


<div class="sc_content_container sc_cc_tab">
    <!-- wages calculation -->
    <div class="sc_wages_table">

        <table>
            <tr>
                <th width="5%">S.N.</th>
                <th width="40%">Type</th>
                <th width="15%">Size</th>
                <th width="15%">Wage (Rs.)</th>
                <th width="25%">Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Griffin</td>
                <td>100</td>
                <td>1000</td>
                <td><a href="per_product_wage.php"><button class="sc_editbtn">Edit</button> </a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Griffin</td>
                <td>100</td>
                <td>1000</td>
                <td><a href="per_product_wage.php"><button class="sc_editbtn" >Edit</button> </a></td>
            </tr>

        </table>


    </div>
    <!-- for edit page --start-->

</div>

<?php include 'wage_end.php'; ?>