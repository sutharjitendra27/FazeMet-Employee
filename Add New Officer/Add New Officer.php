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

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Add New Officer
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
                    <label>Officer ID</label>
                    <input type="number" name="of_id" placeholder="Enter Officer's ID Number" required>
                </div>

                <div class="fields">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Enter your First name" required>
                </div>

                <div class="fields">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Enter your Last name" required>
                </div>


                <div class="fields">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" placeholder="Enter birth date" required>
                </div>

                <div class="fields">
                    <label>Mobile No.</label>
                    <input type="tel" name="mobile" placeholder="Enter Mobile Number" required>
                </div>

                <div class="fields">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="fields">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option disabled selected>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="fields">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Enter your Address" required>
                </div>
		      <div class="fields">
                    <label>Password </label>
                    <input type="password" name="pass" placeholder="Enter Password" required>
                </div>

              <!--<div class="fields">
                    <label>Course</label>
                    <input type="text" name="course" placeholder="Enter course details" required>
                </div>

                <div class="fields">
                    <label>College</label>
                    <input type="text" name="college" placeholder="Enter College Name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Name</label>
                    <input type="text" name="gname" placeholder="Enter gaurdian's name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Mobile No.</label>
                    <input type="text" name="gMobile" placeholder="Enter gaurdian's mobile number" required>
                </div>

                <div class="fields">
                    <label>Status</label>
                    <select required>
                        <option disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>-->
                
                

            <div class="buttons">

                <button class="submit" name="save_Data">
                    <span class="btnText">Capture Image</span>
                </button>

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
