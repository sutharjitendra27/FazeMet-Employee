<?php

    session_start();

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

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Enter Student ID">
                </div>

                <div class="buttons">
                    <button class="searchBtn">
                        <span class="btnText">Search</span>
                    </button>
                </div>

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Add Activity
        </h3>

        <?php
            if (isset($_SESSION['status'])) {
                echo "<h4>".$_SESSION['status']."<h4>";
                unset($_SESSION['status']);
            }
        ?>

        <form action="code.php" method="POST">

            <div class="details">

                <div class="fields">
                    <label>Student ID</label>
                    <input type="number" name="st_Id" placeholder="Enter Student's ID Number" required>
                </div>

                <div class="fields">
                    <label>Student's Name</label>
                    <input type="text" name="Name" placeholder="Enter your First name" required>
                </div>


                <div class="fields">
                    <label>Date</label>
                    <input type="date" name="Date" placeholder="Enter date" required>
                </div>

                <div class="fields">
                    <label>Time</label>
                    <input type="time" name="Time" placeholder="Enter time" required>
                </div>


                <div class="fields">
                    <label>Status</label>
                    <select name="status" required>
                        <option disabled selected>Select Status</option>
                        <option>In</option>
                        <option>Out</option>
                        <option>On Leave</option>
                    </select>
                </div>

                <div class="fields">
                    <label>Subject</label>
                    <input type="text" name="Subject" placeholder="Enter Subject" required>
                </div>

                <div class="fields">
                    <label>Class</label>
                    <input type="text" name="Class" placeholder="Enter Class" required>
                </div>

            
                <!--<div class="fields">
                    <label>Status</label>
                    <select required>
                        <option disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>-->
                
                

            <div class="buttons">
                <button class="backBtn" name="reset" onclick="window.location.reload();">
                    <span class="btnText">Reset</span>
                </button>

                <button class="submit" name="save_Data">
                    <span class="btnText">Submit</span>
                </button>
            </div>

            </div>

        </form>

    </section>

</body>
