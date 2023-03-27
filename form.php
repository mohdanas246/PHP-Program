<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Simple Form</title>
</head>

<body>


   <h2> Persoal Details </h2>


   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

      <lable for="sol"> Solution: </lable>
      <select name="None" id="None">
         <option value="rohan">Rohan</option>
         <option value="mohan">Mohan</option>
         <option value="sohan">Sohan</option>
      </select>

      <br><br>

      <lable for="fname"> First Name: </lable>
      <input type="text" name="fname"> <br> <br>

      <label for="lname"> Last Name: </lable>
         <input type="text" name="lname">
         <br><br>

         <lable for="gender"> Gender: </lable>

         <input type="radio" name="gender" value="female">
         <lable for="fmale"> Female </lable>


         <input type="radio" name="gender" value="male">
         <lable for="male"> Male </lable>
         <br><br>

         <lable for="email"> Email-Id: </lable>
         <input type="text" name="email">
         <br><br>

         <label for="DOB"> Date Of Birth: </lable>
            <input type="date" name="DOB">
            <br><br>

            <lable for="Add"> Address: </lable>
            <textarea name="Add" rows="5" cols="40"> </textarea>
            <br><br>

            <input type="submit" name="submit" value="Submit">
            <br><br>
   </form>
   <?php echo $_GET["None"]; ?> <br>
   <?php echo $_GET["fname"]; ?><br>
   <?php echo $_GET["lname"]; ?> <br>
   <?php echo $_GET["gender"]; ?> <br>
   <?php echo $_GET["email"]; ?> <br>
   <?php echo $_GET["DOB"];   ?> <br>
   <?php echo $_GET["Add"]; ?>

   <!-- <?php
   echo "<pre>";

   print_r($_GET);

   echo "</pre>";
   ?> -->

</body>

</html>