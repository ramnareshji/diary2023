<?php
   include '_db.php';
   
   $sql = "SELECT * FROM `daydata` ";
   $result = mysqli_query($conn,$sql);

   echo ' <p style="font-size:22px; color: red"> ---This is how Life Moving on...-- </p><br> ';
   echo ' 
   <table class="table" table-layout="fixed"
    width="100% "   style= "border: 1px solid green ">
    <tr style= "border: 1px solid green ">
    <th style= "border: 1px solid green " style= "border: 1px solid green " scope="col">---How was your Mood of Day.---</th>
    <th style= "border: 1px solid green " scope="col">---How i spent  Day.---</th>
    <th style= "border: 1px solid green " scope="col">----Date---</th>
  </tr> 
  </table>';
  
   while($row = mysqli_fetch_assoc($result)){
    $date = $row['timestamp'];
    $daywas = $row['daywas'];
    $dayspent =$row['dayspent'];
    
      echo '
      <table class="table" table-layout="fixed"
      width="100% " style= "border: 1px solid green " >
      <tr >
      <td> '.$daywas.'</td>
      <td> '.$dayspent .'</td>
      <td> '.$date  .' </td>
      </tr> 
      <table>
      ';
   
   } 
   ?>

   