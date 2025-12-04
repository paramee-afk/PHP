<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP GET</title>
</head>
<body>
    <h1>การใช้ PHP $_GET</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['fname']) && isset($_GET['lname'])) {
        $name = $_GET['fname'];
        $lname = $_GET['lname'];

        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name . " " . $lname;
        }
    }
}
?>
</body>
</html>
:thumbsup:
คลิกเพื่อตอบสนอง
:weary:
คลิกเพื่อตอบสนอง
:eyes:
คลิกเพื่อตอบสนอง
เพิ่มรีแอคชั่น
ตอบกลับ
ส่งต่อ
เพิ่มเติม
[21:44]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:44
--------------------------
:thumbsup:
คลิกเพื่อตอบสนอง
:weary:
คลิกเพื่อตอบสนอง
:eyes:
คลิกเพื่อตอบสนอง
เพิ่มรีแอคชั่น
ตอบกลับ
ส่งต่อ
เพิ่มเติม
[21:44]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:44
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php globals</title>
</head>
<body>
    <h1>การใช้ $GLOBALS</h1>
    <?php
    $x = 75;
    $y = 25;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;
    ?>

    <?php
    echo $_SERVER ['PHP_SELF'];
    echo "<br>";
     echo $_SERVER ['SERVER_NAME'];
     echo "<br>";
     echo $_SERVER ['HTTP_HOST'];
     echo "<br>";
     echo $_SERVER ['HTTP_USER_AGENT'];
     echo "<br>";
     echo $_SERVER ['SCRIPT_NAME'];
     ?>
</body>
</html>
:thumbsup:
คลิกเพื่อตอบสนอง
:weary:
คลิกเพื่อตอบสนอง
:eyes:
คลิกเพื่อตอบสนอง
เพิ่มรีแอคชั่น
ตอบกลับ
ส่งต่อ
เพิ่มเติม
[21:44]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:44
-----------------
[21:44]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:44
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP POST</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname" required>
        Last Name: <input type="text" name="lname" required>
        <input type="submit" value="ยืนยัน">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['fname']);
        $lastname = htmlspecialchars($_POST['lname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo "Name: " . $name . "<br>";
            echo "Last Name: " . $lastname;
        }
    }
    ?>
</body>
</html>
