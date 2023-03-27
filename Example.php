<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "<?php echo $_SERVER["PHP_SELF"] ?>" >
        <label for="name">name</label>
        <input type="text" name="name" required>
        <label for="email">email</label>
        <input type="text" name="email" required>
        <input type="submit" value="submit">
    </form> 
</body>
</html>