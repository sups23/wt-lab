<?php

class Rectangle
{
    public $l = 0;
    public $b = 0;

    function __construct($l, $b)
    {
        $this->l = $l;
        $this->b = $b;
    }

    function calculate()
    {
        return ($this->l * $this->b);
    }
}

if (isset($_GET["txtbtn"])) {
    $l = $_GET["txtl"];
    $b = $_GET["txtb"];

    $obj = new Rectangle($l, $b);
    $r = $obj->calculate();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class And OBject 1</title>
</head>

<body>
    <form action="classobjz.php" method="get">
        Length<input type="text" name="txtl" value="<?php echo $l ?? ''; ?>"><br>
        Breadth<input type="text" name="txtb" value="<?php echo $b ?? ''; ?>"><br>
        <input type="submit" value="Area" name="txtbtn"><br>
        Result<input type="text" name="txtresult" value="<?php echo $r ?? ''; ?>">
    </form>
</body>

</html>