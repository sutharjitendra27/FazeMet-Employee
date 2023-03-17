<?php


//$database;

   // include('../dbcon.php');
    include('../menu/menu.php');
    include('../header/header.php');
    include('../footer/footer.php');

   // $reference = $database->getReference('Students');
    //echo $reference->getValue();

    //header("refresh: 3");
?>

<body>

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
            Dashboard
        </h3>

        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    
                    <span>Total Officers </span>
                    <?php
                        include('../dbcon.php');
                        $ref_table = "Officers";
                        $totalNum = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo "<h4>".$totalNum."<h4>";
                    ?>
                    
                </div>
            </div>
            
        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Time</td>
                        <td>Date</td>
                     	 <td>Status</td> 
			 <!--<td>Subject</td>
                        <td>Class</td>-->
                        <!--<td></td>-->
                    </tr>
                </thead>

                <tbody>

                <?php

                    include('../dbcon.php');


                    $ref_table = "Activity";
                    $fetchdata = $database->getReference($ref_table)->getValue();

                    if ($fetchdata>0) {

                    
                        foreach($fetchdata as $key => $row){
                            ?>

                                <tr>
                                    
                                    <td><?= $row['Name'];?></td>
                                    <td><?= $row['Time'];?></td>
                                    <td><?= $row['Date'];?></td>
                                    <td><?= $row['status'];?></td>
				      <!--<td><?= $row['Subject'];?></td>
                                    <td><?= $row['Class'];?></td>-->

                                    
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
                    <!--<tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>JITU</h5>

                            </div>
                        </td>

                        <td class="time"> 
                            <h5>12:50 PM</h5>
                        </td>

                        <td class="date"> 
                            <h5>26/08/2022</h5>
                        </td>

                        <td class="class">
                            <p>Room 301</p>
                        </td>

                    </tr>

                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Harsh Agrawal</h5>

                            </div>
                        </td>

                        <td class="time"> 
                            <h5>01:10 PM</h5>
                        </td>

                        <td class="status">
                            <p>In</p>
                        </td>

                       
                    </tr>

                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Dhruvi Parekh</h5>
                            </div>
                        </td>

                        <td class="time"> 
                            <h5>01:25 PM</h5>
                        </td>

                        <td class="status">
                            <p>In</p>
                        </td>

                    
                    </tr>
                </tbody>-->
            </table>
        </div>
        
    </section>

    
</body>
