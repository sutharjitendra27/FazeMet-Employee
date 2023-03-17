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
            Applications
        </h3>

        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>From</td>
                        <td>To</td>
                        <td>Applicant's Name</td>
                        <td>Reason</td>
                        <!-- <td>Leave status</td> -->
                        <!--<td>Admin's Status</td>-->
                    </tr>
                </thead>

            <tbody>
                <?php

                    include('../dbcon.php');

                    $reference = $database->getReference('path/to/child/location');

                    $ref_table = "Application";
                    $fetchdata = $database->getReference($ref_table)->getValue();

                    if ($fetchdata>0) {

                    
                        foreach($fetchdata as $key => $row){
                            ?>

                                <tr>
                                    
                                    <td><?= $row['fromDate'];?></td>
                                    <td><?= $row['toDate'];?></td>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['reason'];?></td>
                                    <!-- <td><?= $row['Status'];?></td> -->
                                    

                                    
                                </tr>

                            <?php
                        }
                    }
                    else{
                        ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                    }

                    ?>
           
            </table>
        </div>
        
    </section>

</body>