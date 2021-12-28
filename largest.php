<!DOCTYPE html>
<?php
$a = 0;
$b = 0;
$c = 0;
if (isset($_POST["btncheck"])) {
    $a = $_POST["txt1"];
    $b = $_POST["txt2"];
    if ($a > $b) {
        $c = $a;
    } else {
        $c = $b;
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>

<body>
    <form action="largest.php" method="post">
        Value1<input type="text" name="txt1" value="<?php echo $a ?? ''; ?>"><br>
        Value2<input type="text" name="txt2" value="<?php echo $b ?? ''; ?>"><br>
        <input type="submit" value="Check" name="btncheck"><br>
        Result <input type="text" name="txtresult" value="<?php echo $c ?? ''; ?>">
    </form>
</body>

</html>