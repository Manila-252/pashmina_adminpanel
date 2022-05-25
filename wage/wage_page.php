<?php include 'wage_start.php'; ?>

<div class="sc_content_container">
    <div class="sc_wages_content">
        <p class="sc_cost">Per Weaving Cost :
            <span class="sc_cost_span"> <input type="number" id="wages_cost" name="Quantity" placeholder="Enter cost" readonly>
            </span>
            <i class="fas fa-pencil-alt wage_edit" id="edit_wage_btn" onclick="edit_wage('wages_cost', 'edit_wage_btn', 'save_wage_btn')"></i>
            <i class="fas fa-save wage_save" id="save_wage_btn"></i>
        </p>

        <div class="sc_search">
            <form action="#">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

        </div>
    </div>


    <div class="sc_wages_sort">
        <form action="#">
            <label for="employee">Sort By:</label>
            <select id="employee" name="employee">
                <option value="name">Name</option>
                <option value="wage">Wage</option>
                <option value="No. of weaving">No. of Weaving</option>
            </select>
        </form>
    </div>

    <!-- wages calculation -->
    <div class="sc_wages_table">

        <table>
            <tr>
                <th width="5%">S.N.</th>
                <th width="40%">Name</th>
                <th width="15%">Weaved</th>
                <th width="15%">Wage (Rs.)</th>
                <th width="25%">Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Griffin</td>
                <td>100</td>
                <td>1000</td>
                <td><a href="#"><button class="sc_detailbtn" onclick="openform('sc_myForm')">Details</button> </a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Griffin</td>
                <td>100</td>
                <td>1000</td>
                <td><a href="#"><button class="sc_detailbtn" onclick="openform('sc_myForm')">Details</button> </a></td>
            </tr>

        </table>
        <!-- for pop up page -->
        <div class="sc_form-popup" id="sc_myForm">
            <div class="sc_user_info">
                <button type="button" class="sc_user_closebtn" onclick="closeform('sc_myForm')"><i class="fas fa-times"></i></button>
                <div class="sc_user_content">
                    <div class="sc_user_description">
                        <p>Name: Ram </p>
                        <p>Id: 12</p>
                        <p>Total Wage: 5000</p>
                        <p>No. of Weavings: 22</p>
                    </div>
                    <table class="sc_user_table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>No. of Weaving</th>
                                <th>On Date</th>
                                <th>Rate</th>
                                <th>Sum</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Griffin</td>
                                <td>100</td>
                                <td>1000</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Griffin</td>
                                <td>100</td>
                                <td>1000</td>
                                <td>500</td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th id="Total" colspan="4">Total</th>
                                <td>2000</td>
                            </tr>
                        </tfoot>

                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'wage_end.php'; ?>