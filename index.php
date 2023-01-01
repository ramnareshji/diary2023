<?php

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] = "POST") {
    include '_db.php';
  $daywas = $_POST['daywas'];
  $dayspent = $_POST['dayspent'];
  $daywas = str_replace("<", "&lt;", $daywas);
  $daywas = str_replace(">", "&gt;", $daywas); 

  $dayspent = str_replace("<", "&lt;", $dayspent);
  $dayspent = str_replace(">", "&gt;", $dayspent); 
  $sql = "INSERT INTO `daydata` ( `daywas`, `dayspent`, `timestamp`) VALUES ( '$daywas', '$dayspent', current_timestamp())";
  $result = mysqli_query($conn,$sql);
  header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="/diary2023/index.php" style="border:1px solid rgb(223, 211, 211)" method ="post"> 
     <div class="mb-3">
        <label for="text" class="daywas"> How was your Day?</label><br>
        <input type="text" class="daywas" id="daywas"rows="3" name="daywas">
      </div>
      <div class="mb-3">
        <label for="dayspent" class="dayspent">How You spent your day today?</label><br>
        <input type class="dayspent" id="dayspent" name="dayspent" rows="3"><br>
      </div>
      <div>
        <button type="submit" value = "submit" name="submit" >submit</button>
      </div>

     </form>
    <div>  <?php include 'receive.php' ?></div>
   

   
</body>
</html>