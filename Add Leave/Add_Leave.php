<?php
    include('../menu/menu.php');
    include('../header/header.php');
    include('../footer/footer.php');
?>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Add Leave
        </h3>

        </div>

        <div class="board">
            
            <form action="#">
            <div class="details">

                <div class="fields">
                    <label>From</label>
                    <input type="date" placeholder="Select Date" required>
                </div>

                <div class="fields">
                    <label>To</label>
                    <input type="date" placeholder="Select Date" required>
                </div>
                
                <div class="fields">
                
                <label>Reason</label>
                <input class="reason" type="text" placeholder="Enter reason for leave" required>
                
            </div>

                <div class="fields">
                
                    <label>Reason</label>
                    <input class="reason" type="text" placeholder="Enter reason for leave" required>
                    
                </div>

                <!--<div class="fields">
                <label>Status</label>
                <select name="status" id="Admin_status" required>
                                <option disabled selected>Select Status</option>
                                <option>Approve</option>
                                <option>Reject</option>
                            </select>
                </div>-->
                
                

                <div class="buttons">
                <button class="backBtn">
                    <span class="btnText">Reset</span>
                </button>

                <button name="save" class="submit">
                    <span class="btnText">Add</span>
                </button>
                </div>

        </div>
            
    </form>

</div>
    
</body>
