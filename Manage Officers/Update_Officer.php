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
            Update & Delete Officer
        </h3>

        <?php

            include("../dbcon.php");

            if (isset($_GET['id'])) {
                
                $key_child = $_GET['id'];
                
                $ref_table = 'Officers';
                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                if ($getdata>0) {
                    ?>

        <form action="code.php" method="POST">

            <input type="hidden" name="key" value="<?=$key_child;?>">
            <div class="details">

                <div class="fields">
                    <label>Officer ID</label>
                    <input type="number" name="of_id" value="<?=$getdata['Officer ID'];?>" placeholder="Enter Officer ID Number" required>
                </div>

                <div class="fields">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?=$getdata['First Name'];?>" placeholder="Enter your First name" required>
                </div>

                <div class="fields">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?=$getdata['Last Name'];?>" placeholder="Enter your Last name" required>
                </div>


                <div class="fields">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="<?=$getdata['Date of Birth'];?>" placeholder="Enter birth date" required>
                </div>

                <div class="fields">
                    <label>Mobile No.</label>
                    <input type="tel" name="mobile" value="<?=$getdata['Mobile No'];?>" placeholder="Enter Mobile Number" required>
                </div>

                <div class="fields">
                    <label>Email</label>
                    <input type="email" name="email" value="<?=$getdata['Email'];?>" placeholder="Enter your email" required>
                </div>

                <div class="fields">
                    <label>Gender</label>
                    <input type="text" value="<?=$getdata['Gender'];?>" name="gender" placeholder="Enter your Gender" required>
                </div>

                <div class="fields">
                    <label>Address</label>
                    <input type="text" value="<?=$getdata['Address'];?>" name="address" placeholder="Enter your Address" required>
                </div>

                <div class="fields">
                    <label>Password </label>
                    <input type="text" value="<?=$getdata['Password'];?>" name="pass" placeholder="Enter PassWord" required>
                </div>

              <!--  <div class="fields">
                    <label>College</label>
                    <input type="text" name="college" value="<?=$getdata['College'];?>" placeholder="Enter College Name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Name</label>
                    <input type="text" name="gname" value="<?=$getdata['Gaurdian Name'];?>" placeholder="Enter gaurdian's name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Mobile No.</label>
                    <input type="text" name="gMobile" value="<?=$getdata['Gaurdian Mobile no'];?>" placeholder="Enter gaurdian's mobile number" required>
                </div>-->

               <!--  <div class="fields">
                    <label>Status</label>
                    <input type="text" name="status" value="<?=$getdata['Status'];?>" placeholder="Enter Student's Status" required>
                </div> -->
           

            <div class="buttons">
                <button class="back" name="back">
                    <a style="color: #fff; text-decoration: none;" class="btnText" href="Manage Officers.php">Back</a>
                </button>

                <button class="submit" name="update_Data">
                    <span class="btnText">Update</span>
                </button>
            </div>

            </div>

        </form>

        
        <?php
                }else
                {
                    $_SESSION['status'] = "Invalid ID";
                    header('Location: Manage Officers.php');
                    exit();
                }

            }else
            {
                $_SESSION['status'] = "Nothing found";
                header('Location: Manage Officers.php');
                exit();
            }

            

        ?>

    </section>

</body>
