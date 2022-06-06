<?php include 'storage_start.php'; ?>

<!-- staff details topbar start -->

<div class="sc_staff_nav">
  <div class="sc_staffs_topbar">

    <a href="cloth_storage.php">
      <div class="sc_staffs_status">Cloth Storage</div>
    </a>
    <a href="yarn_storage.php">
      <div class="sc_staffs_status">Yarn Storage</div>
    </a>
    <a href="perProduct.php">
      <div class="sc_staffs_status">Per Product Detail</div>
    </a>
    <a href="add_record.php">
      <div class="sc_tab_active sc_staffs_status">Add Record</div>
    </a>
    <a href="view_record.php">
      <div class="sc_staffs_status">View Record</div>
    </a>

  </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">

    <!-- add Record form session start -->
    <div class="sc_ao_add_Record">
        <form action="">

            <div class="sc_ar_row">
                <div class="sc_ar_col3 sc_ar_subtitle sc_ar_flex">
                    <div class="sc_ar_subcol1">Code</div>
                    <div class="sc_ar_subcol2">
                        <input type="text" name="code" id="code">
                    </div>
                </div>
            </div>

            <div class="sc_ar_row">
                <div class="sc_ar_col3 sc_ar_subtitle sc_ar_flex">
                    <div class="sc_ar_subcol1">Type</div>
                    <div class="sc_ar_subcol2">
                        <select id="type" name="type">
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>                
            </div>

            <div class="sc_ar_row">
                <div class="sc_ar_col3 sc_ar_subtitle sc_ar_flex">
                    <div class="sc_ar_subcol1">Size</div>
                    <div class="sc_ar_subcol2">
                        <select id="type" name="type">
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>

                
            </div>

            <div class="sc_ar_row">
                <div class="sc_ar_col3 sc_ar_subtitle sc_ar_flex">
                    <div class="sc_ar_subcol1">Color</div>
                    <div class="sc_ar_subcol2">
                        <select id="type" name="type">
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>

                
            </div>

    </div>
    <div class="sc_ar_submit">
        <button type="submit">Save</button>
    </div>

    </form>

</div>
<!-- add record container end -->



<?php include 'storage_end.php'; ?>