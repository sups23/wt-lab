<?php
$name = "";
$age = "";
$address = "";

if (isset($_GET["btnsubmit"])) {
    $name = $_GET["txtname"];
    $age = $_GET["txtage"];

    if ($name == "") {
        echo ("Please enter name");
    } elseif (!is_numeric($age)) {
        echo ("Please enter numeric age.");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation in PHP</title>
</head>

<body>
    <form action="formvalidation.php">
        Name <input type="text" name="txtname" value="<?php echo $name ?? ''; ?>">
        Age <input type="text" name="txtage" value="<?php echo $age ?? ''; ?>">
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>

</html>