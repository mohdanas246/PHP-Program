<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>


    <?php

    echo "<pre>";

    print_r($_SERVER);

    echo "</pre>";

    $nameErr = "";
    $emailErr = "";
    $commentErr = "";
    $name = $_POST['name'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        if (empty($name)) {
            $nameErr = "Name is Required";
        }
        if (empty($email)) {
            $emailErr = "Emil is requird";
        }
        if (empty($comment)) {
            $commentErr = "Comment is not required";
        }
    }

    ?>

    <p> <span class="error"> * Required Field </span> </p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <lable for="name"> Name </lable>

        <input type="text" name="name">

        <span class="error">* <?php echo $nameErr ?> </span> <br> <br>

        <lable for="email"> Email_Id </lable>
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr ?> </span> <br> <br>

        <lable for="gender"> Gender </lable>

        <input type="radio" name="gender" value="male">
        <lable for="male"> Male </lable>

        <input type="radio" name="gender" value="female">
        <lable for="female"> Female </lable>
        <br><br>

        <lable for="comment"> Comment </lable>
        <textarea name="comment" cols="30" rows="5"></textarea>
        <span class="error">* <?php echo $commentErr ?> </span> <br> <br>

        <br><br>

        <input type="submit" name="submit" value="submit">
        <br><br>
        </from>

        <?php echo $_POST["name"]; ?><br>
        <?php echo $_POST["email"]; ?> <br>
        <?php echo $_POST["gender"]; ?><br>
        <?php echo $_POST["comment"]; ?>



</body>

</html>