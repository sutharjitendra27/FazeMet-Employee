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
            Reports
        </h3>

        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    
                    <span>Total Officers</span>
                    <?php
                        include('../dbcon.php');
                        $ref_table = "Officers";
                        $totalNum = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo "<h4>".$totalNum."<h4>";
                    ?>
                    
                </div>
            </div>

            <div class="fields">
                    <label>From</label>
                    <input type="date" name="dob" placeholder="Enter birth date" required>
            </div>

            <div class="fields">
                    <label>To</label>
                    <input type="date" name="dob" placeholder="Enter birth date" required>
            </div>

            <div class="val-box">
                <i class="fa fa-street-view"></i>
                <div>
                    
                    <span>On Leave</span>
                    <h3>0</h3>
                </div>
            </div>
        </div>
        <div class="board">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Activities', 'Values'],
          ['Present',     65],
          ['Absent',      20],
          ['On Leave',  40],
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  
    <div id="piechart" style="width: 550px; height: 300px;">
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
                        <!--<td></td>-->
                    </tr>
                </thead>

                <tbody>
                <?php

                    include('../dbcon.php');

                    $reference = $database->getReference('path/to/child/location');

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
                 </tbody>
            </table>   
        </div>
    </section> 
</body>
