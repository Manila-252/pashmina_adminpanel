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
            <div class="sc_tab_active sc_staffs_status">Materials</div>
        </a>
        <a href="add_order.php">
            <div class="sc_staffs_status">Add Order</div>
        </a>
    </div>
</div>

<!-- staff details topbar end -->

<!-- add record container start -->
<div class="sc_content_container sc_cc_tab">

    <div class="sc_container2">
        <div class="sc_div_row">
            <div class="sc_div_col">

                <div class="sc_perDiv sc_perDiv_img_hover">
                    <img src="../Images/tree.jpg" alt="" onclick="openform('sc_meditForm')" />
                    <div class="sc_centered" onclick="openform('sc_meditForm')">Pashmina</div>
                </div>

            </div>

            <div class="sc_div_col">

                <div class="sc_perDiv sc_perDiv_img_hover">
                    <img src="../Images/tree.jpg" alt="" onclick="openform('sc_meditForm')" />
                    <div class="sc_centered" onclick="openform('sc_meditForm')">Muffler</div>
                </div>

            </div>

            <div class="sc_div_col">

                <div class="sc_perDiv sc_perDiv_img_hover">
                    <img src="../Images/tree.jpg" alt="" onclick="openform('sc_meditForm')" />
                    <div class="sc_centered" onclick="openform('sc_meditForm')">Cashmire</div>
                </div>

            </div>

            <div class="sc_div_col">

                <div class="sc_perDiv sc_perDiv_img_hover">
                    <img src="../Images/tree.jpg" alt="" onclick="openform('sc_meditForm')" />
                    <div class="sc_centered" onclick="openform('sc_meditForm')">abc</div>
                </div>

            </div>

            <div class="sc_div_col">

                <div class="sc_perDiv sc_perDiv_img_hover">
                    <img src="../Images/tree.jpg" alt="" onclick="openform('sc_maddForm')" />
                    <div class="sc_centered">
                        <i class="fas fa-plus-circle" onclick="openform('sc_maddForm')"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- add material popup start -->
    <div class="sc_form-popup" id="sc_maddForm">
        <div class="sc_size_add_container">
            <div class="sc_size_closebtn">
                <button type="button" class="sc_user_closebtn" onclick="closeform('sc_maddForm')"><i class="fas fa-times"></i></button>
            </div>
            <div class="sc_size_popup_content">
                <form action="#">
                    <div class="sc_az_row1">
                        <div class="sc_sz_col-25">
                            <label for="sname"><b>Material Name</b></label>
                        </div>
                        <div class="sc_sz_col-75">
                            <input type="text" id="sname" name="sirstname" placeholder="Your size name..">
                        </div>
                    </div>
                    <div class="sc_upload_image">

                        <div class="sc_sz_row2">
                            <div class="sc_sz_col-25">
                                <label for="img"><b>SELECT IMAGE</b></label>
                            </div>
                            <div class="sc_sz_col75">
                                <input type="file" id="img" name="img" accept="image/*" onchange="loadFile(event, 'moutput')">
                                <div class="sc_display_img">
                                    <img src="Images/tree.jpg" alt="Select
                                            image" id="moutput">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sc_sz_savebtn">
                        <button type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- add material popup end -->


    <!-- edit material popup start -->
    <div class="sc_form-popup" id="sc_meditForm">
        <div class="sc_sz_edit_container">
            <div class="sc_size_closebtn">
                <button type="button" class="sc_user_closebtn" onclick="closeform('sc_meditForm')"><i class="fas fa-times"></i></button>
            </div>
            <div class="sc_sz_editrow">
                <div class="sc_sz_edit_col1">
                    <div class="sc_sz_edit_img">
                        <img src="Images/tree.jpg" alt="Select image" id="mupload" class="image">
                        <div class="overlay">
                            <label for="mimge" class="icon">
                                <i class="fas fa-edit"></i>
                            </label>
                            <input type="file" id="mimge" name="img" accept="image/*" onchange="loadFile(event, 'mupload')">
                        </div>
                    </div>
                </div>
                <div class="sc_sz_edit_col2">
                    <div class="sc_sz_edit_input">
                        <label for="msnname" class="sc_sz_edit_label"><b>
                                Material Name</b></label>
                        <input type="text" id="msnname" name="sname" placeholder="Size name.." readonly>
                        <button type="submit" class="sc_sz_editbutton" id="mename_btn" onclick="edit_input('msnname', 'mename_btn')">
                            <i class="fas fa-pencil-alt"></i>
                        </button>

                        <label for="lname" class="sc_sz_edit_label"><b>Quantity</b></label>
                        <input type="number" id="mqty" name="Quantity" placeholder="Enter quantity" readonly>
                        <button type="submit" class="sc_sz_editbutton" id="meqty_btn" onclick="edit_input('mqty', 'meqty_btn')">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="sc_sz_savebtn">
                <button type="submit">Save</button>
            </div>
        </div>
    </div>
    <!-- edit material popup end -->

</div>
<!-- add record container end -->



<?php include 'add_order_end.php'; ?>