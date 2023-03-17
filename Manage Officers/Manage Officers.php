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

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Enter Officer ID">
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
            Manage Officers
        </h3>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>sr no.</td>
                        <td>Officer ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Mobile No.</td>
                        <!-- <td>Department </td> -->
                        <td>status</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    <?php

                        include('../dbcon.php');

                        $reference = $database->getReference('path/to/child/location');

                        $ref_table = "Officers";
                        $fetchdata = $database->getReference($ref_table)->getValue();

                        if ($fetchdata>0) {

                            $i=1;
                            foreach($fetchdata as $key => $row){
                                ?>

                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $row['Officer ID'];?></td>
                                        <td><?= $row['First Name'];?></td>
                                        <td><?= $row['Last Name'];?></td>
                                        <td><?= $row['Mobile No'];?></td>
                                        
                                        <!-- <td><?= $row['Course'];?></td>
                                        <td><?= $row['Status'];?></td>
 -->
                                        <td class="Edit"><a href="Update_Officer.php?id=<?=$key;?>">Edit</a></td>
                                    </tr>

                                <?php
                            }
                        }
                        else{
                            ?>
                                <tr>
                                    <td colspan="7">No Record Found</td>
                                </tr>
                            <?php
                        }

                    ?>

                <!--    <tr>
                        <td class="people">
                            <div class="fname">
                                <h5>Jitendra</h5>

                            </div>
                        </td>

                        <td class="lname"> 
                            <h5>Suthar</h5>
                        </td>

                        <td class="mobile">
                            <p>8290820828</p>
                        </td>

                        <td class="course">
                            <p>MCA</p>
                        </td>

                        <td class="clg">
                            <p>GLS University, Ahmedabad</p>
                        </td>

                        <td class="status">
                            <p>Acitve</p>
                        </td>

                        <td class="Edit"><a href="#">Edit</a></td>
                    </tr>
                </tbody>-->
            </table>
        </div>
<!--
        <form action="#">

            <div class="details">

                <div class="fields">
                    <label>First Name</label>
                    <input type="text" placeholder="Enter your First name" required>
                </div>

                <div class="fields">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter your Last name" required>
                </div>


                <div class="fields">
                    <label>Date of Birth</label>
                    <input type="date" placeholder="Enter birth date" required>
                </div>

                <div class="fields">
                    <label>Mobile No.</label>
                    <input type="tel" placeholder="Enter Mobile Number" required>
                </div>

                <div class="fields">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="fields">
                    <label>Gender</label>
                    <select required>
                        <option disabled selected>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="fields">
                    <label>Address</label>
                    <input type="text" placeholder="Enter your Address" required>
                </div>

                <div class="fields">
                    <label>Course</label>
                    <input type="text" placeholder="Enter course details" required>
                </div>

                <div class="fields">
                    <label>College</label>
                    <input type="email" placeholder="Enter College Name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Name</label>
                    <input type="text" placeholder="Enter gaurdian's name" required>
                </div>

                <div class="fields">
                    <label>Gaurdian's Mobile No.</label>
                    <input type="text" placeholder="Enter gaurdian's mobile number" required>
                </div>

                <div class="fields">
                    <label>Status</label>
                    <select required>
                        <option disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
                
                
                

            <div class="buttons">
                <button class="backBtn">
                    <span class="btnText">Reset</span>
                </button>

                <button class="submit">
                    <span class="btnText">Update</span>
                </button>
            </div>

            </div>

        </form>

-->

    </section>

</body>

