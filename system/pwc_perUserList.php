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
            <div class="sc_staffs_status">System C</div>
        </a>
        <a href="product_wt_checker.php">
            <div class="sc_tab_active sc_staffs_status">Product Wt Checker</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">

    <a href="product_wt_checker.php"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 26px;"></i></a>
    <span style="font-size: 26px; margin:0px 20px;">Order Id : User Name</span>

    <div class="view_inList">
        <div class="sc_view_record">
            <div class="sc_view_record_table">
                <table>
                    <tr>
                        <th width="5%">S.N.</th>
                        <th width="20%">Order Id</th>
                        <th width="20%">PWC Id</th>
                        <th width="20%">QTY Id</th>
                        <th width="10%">Min Wt</th>
                        <th width="10%">Weight</th>
                        <th width="10%">Max Wt</th>
                        <th width="5%">Acceptable</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>05_2079-02-01</td>
                        <td>pwc_01</td>
                        <td>pwc_01_01</td>
                        <td>95</td>
                        <td>100</td>
                        <td>105</td>
                        <td><i class="fa-solid fa-circle-check" style="color: green;"></i></td>
                    </tr>
                    <tr>
                    <td>1</td>
                        <td>05_2079-02-01</td>
                        <td>pwc_01</td>
                        <td>pwc_01_02</td>
                        <td>95</td>
                        <td>100</td>
                        <td>105</td>
                        <td><i class="fa-solid fa-circle-check" style="color: green;"></i></td>                        
                    </tr>
                    <tr>
                    <td>1</td>
                        <td>05_2079-02-01</td>
                        <td>pwc_01</td>
                        <td>pwc_01_03</td>
                        <td>95</td>
                        <td>108</td>
                        <td>105</td>
                        <td><i class="fa-solid fa-circle-xmark" style="color: red;"></i></td>                        
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- add record container end -->



<?php include 'systemA_end.php'; ?>