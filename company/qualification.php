<?php 


   $con=mysqli_connect("localhost", "root","","project");
  require_once('cheader.php');


  $records=mysqli_query($con, "select* from studentqualification where sid='".$_GET['id']."'");
  ?>
   <<!DOCTYPE html>
   <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
   </head>
   <body>
    <div style="margin-top:80px;">
    <?php
     echo "<table class='table table-striped table-hover table-bordered'>";
        echo "<tr  class='text-capitalize'>";
        echo "<th class='all-section'>". "Sno"  ."</th>";
        echo "<th class='all-section'>". "Degree"  ."</th>";
        echo "<th class='all-section'>". "University/College"  ."</th>";
        
        
        echo "<th class='all-section'>". "Address"  ."</th>";
        echo "<th class='all-section'>". "Year Of Qualification"  ."</th>";
        echo "<th class='all-section'>". "CGPA"  ."</th>";
        echo "</tr>";
         while($r=mysqli_fetch_assoc($records))
         {
            echo "<tr>";
            echo "<td class='all-data'>".$r['id']. "</td>";
            echo "<td class='all-data'>".$r['degree']. "</td>";
            echo "<td class='all-data'>". $r['university']. "</td>";
            
            echo "<td class='all-data'>" .$r['address']."</td>";
            echo "<td class='all-data'>" .$r['year']."</td>";
            echo "<td class='all-data'>" .$r['cgpa']."</td>";
            echo "<br>";
            echo "</tr>";
         }
        echo"</table>";

?>
   </div>
   </body>
   </html>
 