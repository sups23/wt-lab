<?php
$id = "";
$fn = "";
$address = "";
$email = "";
$gender = "";
$ph = "";
$dob = "";

if (isset($_GET["btnInsert"])) {
        $id = $_GET["txtID"];;
        $fn = $_GET["txtFullName"];
        $address = $_GET["txtAddress"];

        $conn = mysqli_connect("localhost", "sups", "password", "misc");
        if (!$conn) {
                die("Error Occur while connection databse");
                return;
        }
        $query = "INSERT INTO tblstudent (ID, FullName, Addr) VALUES ('$id', '$fn', '$address')";


        if (mysqli_query($conn, $query)) {
                echo ("Data saved");
        } else {
                echo ("Data save failed");
        }
}


?>

<html>

<head>
        <title>Insert Record</title>
        <style>
                #ID {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #FN {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #ADD {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #EM {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #GD {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #PH {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }

                #DOB {
                        border: 2px solid gray;
                        border-radius: 10px;
                        margin-left: 30px;
                }
        </style>
</head>

<body>
        <form action="insertdb.php" method="get">
                ID <input type="text" id="ID" name="txtID" value="<?php echo $id; ?>"><br>
                Full Name <input type="text" id="FN" name="txtFullName" value="<?php echo $fn ?? ''; ?>"><br>
                Address <input type="text" id="ADD" name="txtAddress" value="<?php echo $address ?? ''; ?>"><br>

                <input type="submit" name="btnInsert" value="Insert"><br>

        </form>
</body>

</html>